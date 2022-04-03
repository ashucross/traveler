<div>

    <!-- Button trigger modal -->
    <button wire:click.prevent="addNew" type="button" class="btn btn-info float-right mr-5 mt-5 mb-3 py-2" data-toggle="modal" data-target="#desForm">
        Destinations
    </button>

    <!-- Modal -->
    <div class="modal fade" id="desForm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form wire:submit.prevent="storeDestination">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Destination</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">




                        <input type="text" class="form-control" wire:model.defer="name" name="name" id="name" placeholder="Destination">
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
        <h2 class="text-center mb-5">Destination Table</h2>
        @if (session()->has('message'))
        <h5 class="text-danger text-center">{{ session('message') }}</h5>
        @endif

        <table class="table table-striped table-responsive">
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
                        <button wire:click="editDestination({{ $destination->id }})" class="btn-info btn_opt" data-toggle="modal" data-target="#desForm">Edit</button>
                        <button wire:click="deleteDestination({{ $destination->id }})" class="btn-danger btn_opt">delete</button>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</div>