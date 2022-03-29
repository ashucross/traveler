<div>

    <!-- Button trigger modal -->
    <button wire:click.prevent="addNewHotel" type="button" class="btn btn-info float-right mr-5 mt-5 mb-3 py-2" data-toggle="modal" data-target="#hotelForm">
        Add Hotel
    </button>

    <!-- Modal -->
    <div class="modal fade" id="hotelForm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form wire:submit.prevent="storeHotel" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hotels And Resorts</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">




                        <input type="text" class="form-control" wire:model.defer="hotel" name="hotel" id="hotel" placeholder="Hotel Name">
                        @error('hotel') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="text" class="form-control" wire:model.defer="location" name="location" id="location" placeholder="Location">
                        @error('location') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="text" class="form-control" wire:model.defer="discription" name="discription" id="discription" placeholder="Enter Discription">
                        @error('discription') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="number" class="form-control" wire:model.defer="price" name="price" id="price" placeholder="Price Per Day">
                        @error('price') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="number" class="form-control" wire:model.defer="contact" name="contact" id="contact" placeholder="Contact Number (Optional)">
                        @error('contact') <span class="text-red-500">{{ $message }}</span>@enderror



                        <input type="file" accept="image/png, image/gif, image/jpeg" wire:model.defer="image" class="form-control my-4" name="image" id="image">
                        @error('image') <span class="text-red-500">{{ $message }}</span>@enderror



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
        <h2 class="text-center mb-5">Hotel Table</h2>
        @if (session()->has('message'))
        <h5 class="text-danger text-center">{{ session('message') }}</h5>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Count</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Discription</th>

                    <th>Rates</th>
                    <th>Image</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($hotels))
                @foreach($hotels as $hotel)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>{{ $hotel->hotel}}</td>
                    <td>{{ $hotel->location}}</td>
                    <td>{{ $hotel->discription}}</td>

                    <td>{{ $hotel->rates}}</td>

                    <td><img src="{{ asset('storage/'.$hotel->image) }}" class="pack_img" /></td>
                    <td>
                        <button wire:click="editHotel({{ $hotel->id }})" class="btn-info" data-toggle="modal" data-target="#hotelForm">Edit</button>
                        <button wire:click="deleteHotel({{ $hotel->id }})" class="btn-danger">delete</button>
                    </td>

                </tr>
                @endforeach

                @else
                <tr>
                    <td colspan="8" class="text-center">No Data Found</td>
                </tr>
                @endif


            </tbody>
        </table>
    </div>


</div>