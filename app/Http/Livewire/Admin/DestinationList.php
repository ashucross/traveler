<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Destination;

class DestinationList extends Component
{

    public $destinations, $destination_id, $name;
    public function render()
    {
        $this->destinations = Destination::all();
       
        return view('livewire.admin.destination-list')
            ->layout('layouts.main');
    }
    public function addNew()
    {
        $this->dispatchBrowserEvent('show-desform');
        $this->reset('name');
    }

    public function storeDestination()
    {

        $this->validate([
            'name' => 'required|min:3',

        ]);


        Destination::updateOrCreate(['id' => $this->destination_id], [
            'name' => $this->name,

        ]);
        session()->flash('message', $this->destination_id ? 'Destination Updated' : 'Destination Created');
        $this->dispatchBrowserEvent('hide-desform');
    }

    public function editDestination($id)
    {
        $destinations = Destination::findOrFail($id);
        $this->destination_id = $id;
        $this->name = $destinations->name;
    }

    public function deleteDestination($id)
    {
        Destination::find($id)->delete();
        session()->flash('message', 'Destination deleted.');
    }
}
