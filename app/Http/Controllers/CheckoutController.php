<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gerardojbaez\Money\Money;
use App\Http\Requests\CheckoutRequest;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.checkOut');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        $contents = Cart::content()->map(function ($item) {
            return $item->model->slug.', '.$item->qty;
        })->values()->toJson();

        try
        {
            $charge = Stripe::charges()->create([
                'amount' => Cart::total() / 100,
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    //change to Order ID after we start using DB
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),

                ],
            ]);

            //insert into orders table
            $order = Order::create([
                'user_id' => auth()->user() ? auth()->user()->id : null,
                'billing_email' => request('email'),
                'billing_name' => request('name'),
                'billing_address' => request('address'),
                'billing_city' => request('city'),
                'billing_state' => request('state'),
                'billing_zipcode' => request('zipcode'),
                'billing_phone' => request('phone'),
                'billing_name_on_card' => request('name_on_card'),
                'billing_subtotal' => $this->getNumbers()->get('newSubtotal'),
                'billing_tax' => $this->getNumbers()->get('newTax'),
                'billing_total' => $this->getNumbers()->get('newTotal'),
                'error' => null,
            ]);

            //insert into order_product table
            foreach (Cart::content() as $item)
            {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item->model->id,
                    'quantity' => $item->qty,
                ]);
            }


          // SUCCESSFUL
            //Cart::store('ID');
          Cart::instance('default')->destroy();

            return redirect()->route('confirmation.index')->with('success_message', 'Thank you!  Your payment has been accepted!');
        } catch (CardErrorException $e) {
            return back()->withErrors('Error!' . $e->getMessage());
        }
    }

    private function getNumbers()
    {
        $tax = config('cart.tax') / 100;
        $newSubtotal = (Cart::subtotal());
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1 + $tax);

        return collect([
            'tax' => $tax,
            'newSubtotal' => $newSubtotal,
            'newTax' => $newTax,
            'newTotal' => $newTotal,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
