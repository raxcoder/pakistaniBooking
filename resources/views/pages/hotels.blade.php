@extends('layouts.app')

@section('mainContent')
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-40">
                <h2>Hotels in Pakistani Booking</h2>
            </div>
        </div>
        <div class="row">
            <!-- Hotel Section Start -->
            @for($i=0; $i<6; $i++)
                <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
                    @include('layouts.hotelDesign')
                </div>
            @endfor
            <div class="col-12 page-section__more text-center">
                <button class="btn btn-secondary btn--round btn-load" type="button">Show more<i class="fa fa-spin"></i>
                </button>
            </div>
            <!-- Hotel Section End -->
        </div>
    </div>
</div>
@endsection