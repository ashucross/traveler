<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Hotel;

class Hotels extends Component
{

    use WithFileUploads;
    public $hotel_id, $hotel, $location, $discription, $price, $image, $hotels, $contact,$status;

    public function render()
    {
        $this->hotels = Hotel::all();
        return view('livewire.admin.hotels')
            ->layout('layouts.main');
    }

    public function addNewHotel()
    {
        $this->reset();
        $this->dispatchBrowserEvent('show-hotelform');
    }

    public function storeHotel()
    {

         $this->validate([

            'hotel' => 'required|min:3',
            'location' => 'required|min:3',
            'discription' => 'required|min:20',

            'price' => 'required|min:3',
            'image' => '',
        ]);
 
       /*  $Imagename->storeAs(public_path('images'), $image, 'real_public'); */
        $Imagename = $this->image->store('hotel', 'real_public');

        Hotel::updateOrCreate(['id' => $this->hotel_id], [
            'hotel' => $this->hotel,
            'location' => $this->location,
            'discription' => $this->discription,

            'price' => $this->price,
            'image' => $Imagename,
            'status'  => $this->status,
        ]);
        session()->flash('message', $this->hotel_id ? 'Hotel Updated' : 'Hotel Created');
        $this->dispatchBrowserEvent('hide-hotelform');
    }

    public function editHotel($id)
    {
        $hotels = Hotel::findOrFail($id);
        $this->hotel_id = $id;
        $this->hotel = $hotels->hotel;
        $this->location = $hotels->location;
        $this->discription = $hotels->discription;
        $this->price = $hotels->price;

        $this->status = $hotels->status;
        $this->image = $hotels->image;
    }

    public function deleteHotel($id)
    {
        Hotel::find($id)->delete();
        session()->flash('message', 'Hotel deleted.');
    }
}
