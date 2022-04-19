<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $title;
    public $name;
    public $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $name, string $class)
    {
        $this->title = $title;
        $this->name = $name;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
