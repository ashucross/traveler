<div>

    <!-- Button trigger modal -->
    <button wire:click.prevent="addNewPack" type="button" class="btn btn-info float-right mr-5 mt-5 mb-3 py-2" data-toggle="modal" data-target="#packForm">
        Packages
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


                        <select wire:model.defer="destination_id" class="form-control my-3" id="destination_id" name="destination_id">

                            <option style="display:none;">Please Select Destination</option>
                            @if (!empty($destinations))
                            @foreach($destinations as $destination)
                            <option value="{{ $destination -> id }}">{{ $destination -> name}}</option>

                            @endforeach

                            @else
                            <option value="null">No Data Found</option>


                            @endif
                        </select>
                        @error('destination_id') <span class="text-red-500">{{ $message }}</span>@enderror

                        <select wire:model.defer="category_id" class="form-control my-3" id="category_id" name="category_id">

                            <option style="display:none;">Please Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category -> id }}">{{ $category -> name}}</option>

                            @endforeach

                        </select>
                        @error('category_id') <span class="text-red-500">{{ $message }}</span>@enderror


                        <input type="text" class="form-control my-3" wire:model.defer="packagename" name="packagename" id="packagename" placeholder="Package Name">
                        @error('packagename') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="text" class="form-control my-3" wire:model.defer="duration" name="duration" id="duration" placeholder="Enter Duration">
                        @error('duration') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="number" class="form-control my-3" wire:model.defer="rates" name="rates" id="rates" placeholder="Enter Rate">
                        @error('rates') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="number" class="form-control my-3" wire:model.defer="days" name="days" id="days" placeholder="Enter Day">
                        @error('days') <span class="text-red-500">{{ $message }}</span>@enderror

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
                    <th>Category</th>
                    <th>Package</th>
                    <th>Duration</th>
                    <th>Days</th>
                    <th>Itenary</th>
                    <th>Rates</th>
                    <th>Image</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($packages))

                @foreach($packages as $package)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>{{ $package->destination_id}}</td>
                    <td>{{ $package->name}}</td>
                    <td>{{ $package->packagename}}</td>
                    <td>{{ $package->duration}}</td>
                    <td>{{ $package->days}}</td>
                    <td>{{ $package->itenary}}</td>
                    <td>{{ $package->rates}}</td>
                    <td><img src="{{ asset('storage/'.$package->image_id) }}" class="pack_img" /></td>
                    <td>
                        <button wire:click="editPackage({{ $package->id }})" class="btn-info" data-toggle="modal" data-target="#packForm">Edit</button>
                        <button wire:click="deletePackage({{ $package->id }})" class="btn-danger">delete</button>
                    </td>

                </tr>
                @endforeach

                @else
                <tr>
                    <td></td>
                </tr>
                @endif

            </tbody>
        </table>
    </div>


</div>