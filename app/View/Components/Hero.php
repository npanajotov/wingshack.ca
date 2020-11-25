<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    public $type;
    public $image;
    public $text;

    /**
     * Create a new component instance.
     *
     * @param $type
     * @param $image
     * @param null $text
     */
    public function __construct($type = null, $image = null, $text = null)
    {
        $this->type = $type;
        $this->image = $image;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.hero');
    }
}
