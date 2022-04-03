@extends('front.layout')
@section('content')

<div class="container-fluid">
    <div class="row" style="background: beige;">
        @foreach ($texis as $texi )


        <div class="col-md-6 my-4">
            <div class="texi_wrap">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img class="tex_img mx-2 my-2" src="{{ asset('storage/'.$texi->image) }}" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h5 class="texi_model mt-4"><strong>Model :- </strong>{{$texi->model}}</h5>
                        <h5 class="texi_model"><strong>Driver :- </strong>{{$texi->drivername}}</h5>
                        @if($texi->number == '')
                        <h5></h5>
                        @else
                        <h5 class="texi_model"><strong>Contact :- </strong> {{$texi->drivernumber ?? ''}}</h5>
                        @endif
                        <h5 class="texi_model"><strong>Texi No. :- </strong> {{$texi->texinumber}}</h5>
                        <p class="texi_model"><strong>Price :-</strong> {{$texi->rates}}/Hour</p>
                       
                        <button type="button"  name="texi" data-id='{{$texi->id}}' data-type='texi' class="book_now btn-primary mr-5 py-1 mb-2 px-2 rounded btn_texi" data-toggle="modal" data-target="#enquiryForm">
                            Enquiry Now
                        </button>
                        <!-- Button trigger modal -->

                        

                        <p class="rating_texi">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @endforeach


    </div>
</div>
<div>

</div>
@endsection