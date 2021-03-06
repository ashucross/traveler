<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Texi;
use Livewire\WithFileUploads;


class TexiServices extends Component
{
    use WithFileUploads;
    public $texi_id, $model, $drivername, $texinumber, $drivernumber, $rates, $image;

    public function render()
    {
        $this->texis = Texi::all();
        return view('livewire.admin.texi-services')
            ->layout('layouts.main');
    }
    
    public function addNewTexi()
    {
        $this->dispatchBrowserEvent('show-texiform');
    }

    public function storeTexi()
    {

        $this->validate([

            'model' => 'required|min:3',
            'drivername' => 'required|min:3',
            'texinumber' => 'required|min:3',
            'drivernumber' => '',
            'rates' => 'required|min:3',
            'image' => '',
        ]);
        $Imagename = $this->image->store('texi', 'real_public'); 


        Texi::updateOrCreate(['id' => $this->texi_id], [
            'model' => $this->model,
            'drivername' => $this->drivername,
            'texinumber' => $this->texinumber,
            'drivernumber' => $this->drivernumber,
            'rates' => $this->rates,
            'image' => $Imagename,
            'status'=>$this->status,

        ]);
        session()->flash('message', $this->texi_id ? 'Texi Updated' : 'Texi Created');
        $this->dispatchBrowserEvent('hide-texiform');
    }

    public function editTexi($id)
    {
        $texis = Texi::findOrFail($id);
        $this->texi_id = $id;
        $this->model = $texis->model;
        $this->drivername = $texis->drivername;
        $this->texinumber = $texis->texinumber;
        $this->drivernumber = $texis->drivernumber;
        $this->rates = $texis->rates;
        $this->status = $texis->status;
        $this->image = $texis->image;
    }

    public function deleteTexi($id)
    {
        Texi::find($id)->delete();
        session()->flash('message', 'Texi deleted.');
    }
}
