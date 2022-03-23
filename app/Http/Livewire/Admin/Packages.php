<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Package;

class Packages extends Component
{
    public function render()
    {
        $this->packages = Package::all();
        return view('livewire.admin.packages');
        ->layout('layouts.main');
    }
  
    public function addNewPack(){
        $this->dispatchBrowserEvent('show-packform');
        $this->packForm->reset();
    }

    public function storePackage(){
        
     $this->validate([
            'destination_id' => 'required',
            'packagename' => 'required|min:3',
            'duration' => 'required',
            'itenary' => 'required',
            'rates' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        $Filename= $this->file->store('files', 'public');
      
    

        Package::updateOrCreate(['id' => $this->package_id], [
            'destination_id' => $this->destination_id,
            'packagename' => $this->packagename,
            'duration' => $this->duration,
            'itenary' => $this->itenary,
            'rates' => $this->rates,
            'image_id' => $this->$Filename,
            
        ]);
        session()->flash('message', $this->package_id ? 'Package Updated' : 'Package Created');
        $this->dispatchBrowserEvent('hide-packform');
    }

    public function editPackage($id){
        $packages = Package::findOrFail($id);
        $this->package_id = $id;
        $this->destination_id = $packages->destination_id;
        $this->packagename = $packages->packagename;
        $this->duration = $packages->duration;
        $this->duration = $packages->duration;
        $this->itenary = $packages->itenary;
        $this->rates = $packages->rates;
        $this->image_id = $packages->$Filename;
        
    }

    public function deletePackage($id){
        Package::find($id)->delete();
        session()->flash('message', 'Package deleted.');
    }
}
