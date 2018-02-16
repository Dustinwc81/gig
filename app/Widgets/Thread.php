<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Thread extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Thread::count();
        $string = 'Threads';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-beer',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager.dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'View All Forum Threads',
                'link' => route('voyager.threads.index'),
            ],
            'image' => 'images/paul-gilmore-325220.jpg',
        ]));
    }
}
