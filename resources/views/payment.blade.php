@extends('components.app')

@section('additional_scripts')
@endsection

@section('content')

    <div class="container pt-5 mt-5" id="home">

        <div class="row py-5">

            <div class="col-12 mx-auto">

                <h1 class="text-center">Payment Options</h1>

                <p class="text-center red-text">Please do not send any payments before completing an
                    application</p>
            </div>

            <div class="col-12 col-xl-8 mt-5 d-flex align-items-center justify-content-around">
                <div class="p-1">
                    <img src="/images/cashapp_qr.png" class="img-fluid" />
                </div>
                <div class="p-1">
                    <img src="/images/cashapp_qr.png" class="img-fluid" />
                </div>
                <div class="p-1">
                    <img src="/images/cashapp_qr.png" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
@endsection
