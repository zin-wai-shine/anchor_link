<?php

namespace App\View\Components\Youtube;

use Illuminate\View\Component;

class Items extends Component
{
    public $link, $level;
    public $type;
    public $favourites;
    public $auth;
    public $items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $level , $type, $favourites, $auth, $items)
    {

        $this->link = $link;
        $this->level = $level;
        $this->type = $type;
        $this->favourites = $favourites;
        $this->auth = $auth;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.youtube.items');
    }
}
