<?php

namespace App\Http\Livewire;

use App\Models\Airport;
use App\Models\Flight;
use Livewire\Component;

class SearchFlight extends Component
{
    public $airports;
    public $from;
    public $to;
    public $stopOvers;
    public $flights;
    private $maxStopOvers = 2;



    /**
     * @var array|mixed
     */
    public mixed $flight;


    public function mount()
    {
        $this->airports = Airport::get();
        $this->flights = Flight::get();
        $this->from = $this->airports->first()->code;
        $this->to = $this->airports->last()->code;
        $this->stopOvers = 2;
        $this->findCheaperFlight();
    }

    public function swap()
    {
        $from = $this->from;
        $this->from = $this->to;
        $this->to = $from;
        $this->findCheaperFlight();
    }

    public function decrementStopOvers(){
        if($this->stopOvers > 0){
            $this->stopOvers--;
        }
        $this->findCheaperFlight();
    }

    public function incrementStopOvers(){
        if($this->stopOvers < $this->maxStopOvers){
            $this->stopOvers++;
        }
        $this->findCheaperFlight();
    }

    public function findCheaperFlight(): void
    {


        /* Creating an array of all the airports and setting the price of the source airport to 0 and the price of all the
        other airports to the maximum integer value. */
        $options = [];

        $this->airports->each(function ($airport) use (&$options){
            $options[$airport->code] = [
                'price' => $airport->code === $this->from ? 0 : PHP_INT_MAX,
                'connections' => 0,
            ];
        });


        /* Finding the cheapest flight from the source to the destination. */
        for ($i = 0; $i < ($this->stopOvers + 1); $i++) {

            $optionsCopy = $options;

            $this->flights->each(function ($flight) use (&$optionsCopy,$options,$i){
                $source = $flight->code_departure;
                $destination = $flight->code_arrival;
                $price = $flight->price;

                /* Checking if the price of the flight is less than the price of the destination. If it is, it sets the
                price of the destination to the price of the flight. */
                if ($options[$source]['price'] + $price < $optionsCopy[$destination]['price']) {
                    $optionsCopy[$destination]['price'] = $options[$source]['price'] + $price;
                    $optionsCopy[$destination]['connections'] = $i;
                }
            });
            $options = $optionsCopy;
        }
        /* Checking if the price is not the maximum integer value, if it is not, it returns the price, if it is, it returns
        null. */
        $this->flight = $options[$this->to]['price'] !== PHP_INT_MAX ?  $options[$this->to] : null;
    }

    public function updated(){
        $this->findCheaperFlight();
    }


    public function render()
    {
        return view('livewire.search-flight');
    }
}
