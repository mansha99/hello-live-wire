<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Inventors extends Component
{
    //properties
    public $inventor;
    public $invention;
    public $list;
    //lifecycle method
    public function mount()
    {
        $this->list = [
            'Aeroplane' => 'Wright brothers',
            'Computer' => 'Charles Babbage',
            'Fountain Pen' => 'LE. Waterman',
            'Microscope' => 'Z. Jansen',
            'Refrigerator' => 'J . Harrison and A. Catlin',
            'Typewriter' => 'C. Sholes'
        ];
        $this->fill([
            'invention'=>'Aeroplane',
            'inventor' => $this->list['Aeroplane']

        ]);
    }
    //updated<PropertyName> gets fired when property changes
    public function updatedInvention()
    {
        $this->inventor = $this->list[$this->invention];
    }

    //connects Component to its view
    public function render()
    {
        return view('livewire.inventors');
    }
}
