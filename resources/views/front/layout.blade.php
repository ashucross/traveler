<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!--  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .booking-form.mt-5.mb-5 {
            margin-left: 100px;
        }

        @media only screen and (max-width: 600px) {
            .booking-form.mt-5.mb-5 {
                margin-left: 0px;
            }
        }
    </style>
</head>

<body>
    <div id="app">

        @include('front.header')
        <main class="">
            @yield('content')
        </main>

        @include('front.footer')
    </div>
    <!-- Common Model -->
    <div class="modal fade " id="enquiryForm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-warning">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enquiry Form</h5>
                    <h4 class="text-success" id="succ"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form class='enquiryForm_1'>
                    <div class="modal-body">
                        @csrf


                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">


                        <input type="text" class="form-control" name="address" id="address" placeholder="your Address">


                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        <input type="hidden" class="product_id" name="product_id" value=''>
                        <input type="hidden" class="product_type" name="product_type" value=''>

                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number">


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a class="btn btn-primary try book_button">Get Enquiry</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Common Model -->

    <script>
        $(document).ready(function() {

            $(document).on('click', '.book_button', function(e) {
                e.preventDefault();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    url: "{{ url('/storeEnquiry') }}",
                    method: 'post',
                    data: $('.enquiryForm_1').serialize(),
                    success: function(result) {
                        $('.enquiryForm_1').trigger("reset");;
                        $('#succ').html(result);
                    }
                });
            });

            $('.book_now').click(function(e) {
                e.preventDefault();
                var product_id = $(this).data('id');
                var product_type = $(this).data('type')
                $('.product_id').val(product_id);
                $('.product_type').val(product_type);
            });
        });
    </script>

</body>

</html>