<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadCrumb extends Component
{
    public $route;
    public $addName;
    public $arriveName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $addName, $arriveName)
    {
        //
        $this->route = $route;
        $this->addName = $addName;
        $this->arriveName = $arriveName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bread-crumb');
    }
}
