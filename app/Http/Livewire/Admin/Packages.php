<?php

namespace App\Http\Livewire\Admin;


use Livewire\Component;
use App\Models\Destination;
use App\Models\Category;
use App\Models\Package;
use Livewire\WithFileUploads;


class Packages extends Component
{
    use WithFileUploads;
    public $category_id, $destination_id, $package_id, $packagename, $duration, $days, $itenary, $rates, $file;
    public function render()
    {
        $this->packages = Package::all();

        $this->categories = Category::all();
        $this->destinations = Destination::all();

        return view('livewire.admin.packages')
            ->layout('layouts.main');
    }

    public function addNewPack()
    {
        $this->dispatchBrowserEvent('show-packform');
    }

    public function storePackage()
    {

        $this->validate([
            'destination_id' => 'required',
            'category_id' => 'required',
            'packagename' => 'required|min:3',
            'duration' => 'required',
            'days' => 'required',
            'itenary' => 'required',
            'rates' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $Filename = $this->file->store('files', 'public');



        Package::updateOrCreate(['id' => $this->package_id], [
            'destination_id' => $this->destination_id,
            'category_id' => $this->destination_id,
            'packagename' => $this->packagename,
            'duration' => $this->duration,
            'days' => $this->days,
            'itenary' => $this->itenary,
            'rates' => $this->rates,
            'image_id' => $Filename,

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
        $this->days = $packages->days;
        $this->itenary = $packages->itenary;
        $this->rates = $packages->rates;
        $this->image_id = $packages->image_id;
    }

    public function deletePackage($id)
    {
        Package::find($id)->delete();
        session()->flash('message', 'Package deleted.');
    }
}
