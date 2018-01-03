@extends('main')

@section('title', '|  Login')

@section('content')


      <div class="row">
           <div class="col-md-6 offset-3 text-white">
               <h1 class="title-2 text-center">Please Login</h1>
               {!! Form::open() !!}
                   {{ Form::label('title', 'Email:', ['class' => 'label']) }}
                   {{ Form::email('email', 'john1234@mail.com', ['class' => 'form-control']) }}
                   {{ Form::label('title', 'Password:', ['class' => 'label top-margin']) }}
                   {{ Form::password('password', ['class' => 'form-control']) }}
                   <br>
                   <div class="checkbox top-margin">
                      <label class="checkbox">
                        <input type="checkbox">
                        Remember Me
                     </label>
                   </div>

                   {{ Form::submit('Login', ['class' => 'btn btn-primary btn btn-block
                      ']) }}
                   <p class="top-margin"><a href="{{ url('password/reset') }}">Forgot Password?</a></p>
                   
                   <br>
                   <br>

               {!! Form::close() !!}
           </div>
       </div>


@endsection
