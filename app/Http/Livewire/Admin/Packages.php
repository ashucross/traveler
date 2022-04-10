<?php

namespace App\Http\Livewire\Admin;


use Livewire\Component;
use App\Models\Destination;
use App\Models\Category;
use App\Models\Package;
//use GuzzleHttp\Psr7\Request;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;


class Packages extends Component
{
    use WithFileUploads;
    public $category_id, $categories, $destinations, $packages,$status, $destination_id,$image_id, $package_id, $packagename, $duration, $itenary, $rates, $file,$image;
    public function render()
    {
        $packages = Package::with('Destination')->get();
        if(!empty($packages)){
            foreach($packages as $package){
                $package->category = Category::where('id',$package->category_id)->first();
            }
        }
        $this->packages = $packages; 
        $this->categories = Category::all();
        $this->destinations = Destination::all();

        return view('livewire.admin.packages')
            ->layout('layouts.main');
    }

    public function addNewPack()
    {
        $this->reset();
        $this->dispatchBrowserEvent('show-packform');
    }

    public function storePackage(Request $request)
    { 
        
        $this->validate([
            'destination_id' => 'required',
            'category_id' => 'required',
            'packagename' => 'required|min:3',
            'duration' => 'required',
            
            'itenary' => 'required',
            'rates' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $Filename = $this->file->store('files', 'real_public');
   


        Package::updateOrCreate(['id' => $this->package_id], [
            'destination_id' => $this->destination_id,
            'category_id' => $this->category_id,
            'packagename' => $this->packagename,
            'duration' => $this->duration,
          
            'itenary' => $this->itenary,
            'rates' => $this->rates,
            'image_id' => $Filename,
            'status' => $this->status,

        ]);
        session()->flash('message', $this->package_id ? 'Package Updated' : 'Package Created');
        $this->dispatchBrowserEvent('hide-packform');
    }

    public function editPackage($id)
    {
        $packages = Package::findOrFail($id);
        $this->package_id = $id;
        $this->destination_id = $packages->destination_id;
        $this->category_id = $packages->category_id;
        $this->packagename = $packages->packagename;
        $this->duration = $packages->duration;
        $this->itenary = $packages->itenary;
        $this->rates = $packages->rates;
        $this->status = $packages->status;
        $this->image_id = $packages->image_id;
    }

    public function deletePackage($id)
    {
        Package::find($id)->delete();
        session()->flash('message', 'Package deleted.');
    }
}
