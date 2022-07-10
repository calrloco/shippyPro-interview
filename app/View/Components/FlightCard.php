<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FlightCard extends Component
{
    public $flight;
    /**
     * @var mixed|string
     */
    public mixed $message;
    public bool $hidden;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($flight,$hidden = false,$message = 'Best deal:')
    {
        $this->hidden = $hidden;
        $this->flight = $flight;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flight-card');
    }
}
