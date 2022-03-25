<div>

    <!-- Button trigger modal -->
    <button wire:click.prevent="addNewCat" type="button" class="btn btn-info float-right mr-5 mt-5 mb-3 py-2" data-toggle="modal" data-target="#catForm">
        New Category
    </button>

    <!-- Modal -->
    <div class="modal fade" id="catForm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form wire:submit.prevent="storeCategory">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Destination</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <select wire:model.defer="Destination_id" class="form-control my-3" id="Destination_id" name="Destination_id">

                            <option style="display:none;">Please Select Destination</option>
                            @if(!empty($destinations))

                            @foreach($destinations as $destination)
                            <option value="{{$destination->id}}">{{$destination->name}}</option>

                            <option>
                                @endforeach

                                @else
                                <?= 'table is empty' ?>
                                @endif
                            </option>



                        </select>


                        <input type="text" class="form-control my-3" wire:model.defer="name" name="name" id="name" placeholder="Category">
                        @error('name') <span class="text-red-500">{{ $message }}</span>@enderror



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary try">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <div class="container-fluid">

    </div>

    <div class="container">
        <h2 class="text-center mb-5">Category Table</h2>
        @if (session()->has('message'))
        <h5 class="text-danger text-center">{{ session('message') }}</h5>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Count</th>
                    <th>Destination_id</th>
                    <th>Category</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($categories))

                @foreach ($categories as $category)
                <tr>

                    <td>{{$category->id}}</td>
                    <td>{{$category->Destination_id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <button wire:click="editCategory({{ $category->id }})" class="btn-info" data-toggle="modal" data-target="#catForm">Edit</button>
                        <button wire:click="deleteCategory({{ $category->id }})" class="btn-danger">delete</button>
                    </td>



                </tr>
                @endforeach


                @else
                <td span-4>No Data Found</td>
                @endif

            </tbody>
        </table>
    </div>


</div>