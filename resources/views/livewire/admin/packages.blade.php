<div>

    <!-- Button trigger modal -->
    <button wire:click.prevent="addNewPack" type="button" class="btn btn-info float-right mr-5 mt-5 mb-3 py-2" data-toggle="modal" data-target="#desForm">
        Destinations
    </button>

    <!-- Modal -->
    <div class="modal fade" id="packForm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">


            <form wire:submit.prevent="storePackage" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Packages</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <select wire:model.defer="category" class="form-control" id="category" name="category">

                            <option style="display:none;">Please Select Destination</option>
                            @foreach($destinations as $destination)
                            <option value="{{ $destination -> id }}">{{ $destination -> destination}}</option>

                            @endforeach

                        </select>


                        <input type="text" class="form-control" wire:model.defer="packagename" name="packagename" id="packagename" placeholder="Package Name">
                        @error('packagename') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="text" class="form-control" wire:model.defer="duration" name="duration" id="duration" placeholder="Enter Duration">
                        @error('duration') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="number" class="form-control" wire:model.defer="rates" name="rates" id="rates" placeholder="Enter Rate">
                        @error('rates') <span class="text-red-500">{{ $message }}</span>@enderror

                        <textarea wire:model.defer="itenary" id="itenary" name="itenary" rows="4" cols="50" class="form-control my-4" placeholder="Enter Itenary">

</textarea>
                        @error('itenary') <span class="text-red-500">{{ $message }}</span>@enderror


                        <input type="file" accept="image/png, image/gif, image/jpeg" wire:model.defer="file" class="form-control my-4" name="image" id="image">
                        @error('file') <span class="text-red-500">{{ $message }}</span>@enderror



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
        <h2 class="text-center mb-5">Destination Table</h2>
        @if (session()->has('message'))
        <h5 class="text-danger text-center">{{ session('message') }}</h5>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Count</th>
                    <th>Destination</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($destinations as $destination)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>{{ $destination->name}}</td>
                    <td>
                        <button wire:click="editDestination({{ $destination->id }})" class="btn-info" data-toggle="modal" data-target="#desForm">Edit</button>
                        <button wire:click="deleteDestination({{ $destination->id }})" class="btn-danger">delete</button>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</div>