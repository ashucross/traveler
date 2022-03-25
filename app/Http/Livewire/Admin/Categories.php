<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Destination;
use App\Models\Category;

class Categories extends Component
{
    public $destinations, $Destination_id, $name, $category_id, $category;
    public function render()
    {
        $this->destinations = Destination::all();
        $this->categories = Category::all();

        return view('livewire.admin.categories')
            ->layout('layouts.main');
    }

    public function addNewCat()
    {
        $this->dispatchBrowserEvent('show-catform');
    }

    public function storeCategory()
    {

        $this->validate([
            'Destination_id' => 'required',
            'name' => 'required|min:3',

        ]);


        Category::updateOrCreate(['id' => $this->category_id], [
            'Destination_id' => $this->Destination_id,
            'name' => $this->name,

        ]);
        session()->flash('message', $this->category_id ? 'Category Updated' : 'Category Created');
        $this->dispatchBrowserEvent('hide-catform');
    }

    public function editCategory($id)
    {

        $Categories = Category::findOrFail($id);
        $this->category_id = $id;
        $this->name = $Categories->name;
        $this->Destination_id = $Categories->Destination_id;
    }

    public function deleteCategory($id)
    {
        Category::find($id)->delete();
        session()->flash('message', 'Category Deleted.');
    }
}
