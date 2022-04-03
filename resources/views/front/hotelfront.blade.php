@extends('front.layout')
@section('content')


<div class="container-fluid" style="background: beige;display:flow-root;">
    <h1 class="text-center mt-5 mb-5">Hotels And Resorts</h1>
    <div class="row">

        @foreach ($hotels as $hotel )


        <div class="col-md-6 my-4">
            <div class="texi_wrap">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img class="tex_img mx-2 mt-4" src="{{ asset('storage/'.$hotel->image) }}" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h5 class="texi_model mt-4"><strong>Name :- </strong>{{$hotel->hotel}}</h5>
                        <h5 class="texi_model"><strong>Discription :- </strong>{{Str::limit($hotel->discription, 150, $end='...')}}</h5>
                        <h5 class="texi_model"><strong>Location :- </strong>{{Str::limit($hotel->location, 30, $end='...')}}</h5>
                        <h5 class="texi_model"><strong>Price :- </strong> {{$hotel->price}}/Hour</h5>
                        <p class="texi_model"><strong>Contact :- </strong> {{$hotel->contact ?? ''}}</p>
                        <button type="button"  name="hotel" data-id='{{$hotel->id}}' data-type='hotel' class="book_now btn-primary mr-5 py-1 mb-2 px-2 rounded btn_texi" data-toggle="modal" data-target="#enquiryForm">
                            Enquiry Now
                        </button>

                    </div>
                </div>

                <p class="text-center mb-5">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </p>
            </div>
        </div>

        @endforeach





    </div>
</div>
@endsection