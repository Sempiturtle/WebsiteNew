<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public $hideLinks;

    public function __construct($hideLinks = false)
    {
        $this->hideLinks = $hideLinks;
    }

    public function render(): View|Closure|string
    {
        return view('components.layout');
    }
}
