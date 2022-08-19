<?php

namespace App\View\Components\Web;

use Illuminate\View\Component;

class Items extends Component
{
    public $link;
    public $level;
    public $type;
    public $favourites;
    public $auth;
    public $webs;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $level, $type, $favourites, $auth, $webs)
    {
        //
        $this->link = $link;
        $this->level = $level;
        $this->type = $type;
        $this->favourites = $favourites;
        $this->auth = $auth;
        $this->webs = $webs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.items');
    }
}
