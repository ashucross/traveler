<div>

    <!-- Button trigger modal -->
    <button wire:click.prevent="addNewTexi" type="button" class="btn btn-info float-right mr-5 mt-5 mb-3 py-2" data-toggle="modal" data-target="#texiForm">
        Add Texi
    </button>

    <!-- Modal -->
    <div class="modal fade" id="texiForm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form wire:submit.prevent="storeEnquiry" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Destination</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">




                        <input type="text" class="form-control" wire:model.defer="model" name="model" id="model" placeholder="Texi Model">
                        @error('model') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="text" class="form-control" wire:model.defer="drivername" name="drivername" id="name" placeholder="Driver Name">
                        @error('drivername') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="text" class="form-control" wire:model.defer="texinumber" name="texinumber" id="texinumber" placeholder="Texi Number">
                        @error('texinumber') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="number" class="form-control" wire:model.defer="drivernumber" name="drivernumber" id="drivernumber" placeholder="Driver Number (Optional)">
                        @error('drivernumber') <span class="text-red-500">{{ $message }}</span>@enderror

                        <input type="number" class="form-control" wire:model.defer="rates" name="rates" id="rates" placeholder="Rates Per Hour">
                        @error('rates') <span class="text-red-500">{{ $message }}</span>@enderror



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
        <h2 class="text-center mb-5">Texi Service Table</h2>
        @if (session()->has('message'))
        <h5 class="text-danger text-center">{{ session('message') }}</h5>
        @endif

        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>Count</th>
                    <th>Model</th>
                    <th>Driver Name</th>
                    <th>Texi Number</th>
                    <th>Driver Number</th>
                    <th>Rates</th>
                    <th>Image</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($texis))
                @foreach($texis as $texi)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>{{ $texi->model}}</td>
                    <td>{{ $texi->drivername}}</td>
                    <td>{{ $texi->texinumber}}</td>
                   
                    <td>{{ $texi->drivernumber}}</td>
                    <td>{{ $texi->rates}}</td>

                    <td style="width:150px;"><img src="{{ asset('storage/'.$texi->image) }}" class="pack_img" /></td>
                    <td>
                        <button wire:click="editTexi({{ $texi->id }})" class="btn-info btn_opt" data-toggle="modal" data-target="#texiForm">Edit</button>
                        <button wire:click="deleteTexi({{ $texi->id }})" class="btn-danger btn_opt">delete</button>
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