<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Resources\QuotesResource;

class Quotes extends Component
{

    public $Quotes;
    public $source;
    public $inspire;
    public $NewQuote = '';
    public $NewSource = '';
    public $randomNumber;


    public function mount() {

        $this->randomNumber = rand(1,270);
        $this->Quotes = QuotesResource::Inspire();
        $this->inspire = array_column($this->Quotes, 'quote');
        $this->source = array_column($this->Quotes, 'source');
        $this->NewQuote = $this->inspire[$this->randomNumber];
        $this->NewSource = $this->source[$this->randomNumber];
        
    }
    public function hydrate() {
        $this->reset('randomNumber');
        $this->randomNumber = rand(1,270);
        $this->Quotes = QuotesResource::Inspire();
        $this->inspire = array_column($this->Quotes, 'quote');
        $this->source = array_column($this->Quotes, 'source');
        $this->NewQuote = $this->inspire[$this->randomNumber];
        $this->NewSource = $this->source[$this->randomNumber];


    }

    public function poll()
    {
        $this->randomNumber = rand(1,270);
        $this->refresh(); // Refresh quote
    }

    public function updated()
    {

        $this->poll(); // Trigger polling after each update
       
      
    }

    public function render()
    {
        return view('livewire.quotes',[
            'quotes' => $this->NewQuote,
            'sources' => $this->NewSource,

        ]);
    }
}
