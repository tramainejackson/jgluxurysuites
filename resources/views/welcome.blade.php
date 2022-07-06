@extends('components.app')

@section('content')

    <div class="container">

        <div class="row my-5">

            <div class="col-12 px-0 text-center">
                <h1 class="font-bold display-4">Convo Companions</h1>

                <p class="text-justify mt-3">At Convo Companions, we’re passionate about connecting incarcerated individuals
                    with companionship from the outside. We provide a high quality service to all of our clients and as
                    we grow, our commitment to your needs remains the key driving force behind our reason to ensure you
                    a good conversation. Our team of professionals is here to connect you with supportive, objective 
                    nonjudgmental, understanding, and compassionate people, that would love nothing more than to help
                    you relieve stress, tension, deal with trauma, grief, etc by inspiring you with their unique ideas
                    and abilities - get in touch today to learn more.</p>
            </div>
        </div>
    </div>

{{--    <img src="{{ url('/images/cell-phone.jpg') }}" class="img-fluid" alt="Responsive image">--}}

    <div class="view">
        <img src="{{ url('/images/cell-phone.jpg') }}" class="img-fluid" alt="placeholder">
        <div class="mask flex-center waves-effect waves-light rgba-grey-light">
        </div>
    </div>

{{--    <div class="container-fluid grey lighten-3">--}}
{{--        <div class="row">--}}

{{--            <div class="col-12 px-0">--}}

{{--                <!-- Jumbotron -->--}}
{{--                <div class="card card-image" style="background-image: url('/images/cell-phone.jpg');">--}}
{{--                    <div class="text-white text-center rgba-stylish-strong py-5 px-4 rounded-0">--}}
{{--                        <div class="py-5">--}}

{{--                            <!-- Content -->--}}
{{--                            <h2 class="card-title h2 my-4 py-2">JG Luxury Suites</h2>--}}
{{--                            <p class="mb-4 pb-2 px-md-5 mx-md-5">{{ $settings->mission }}</p>--}}
{{--                            <a class="btn peach-gradient"><i class="fas fa-clone left"></i> View project</a>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Jumbotron -->--}}
{{--            </div>--}}

{{--            <div class="col-12 px-0">--}}
{{--                @foreach($properties as $property)--}}

{{--                    <div class="white-text p-5" style="background-color: #4A21F3;">--}}
{{--                        <h1 class="h1 h1-responsive title text-center">{{ $property->title }}</h1>--}}
{{--                        <p class="text-justify mx-5 p-5">{{ $property->description }}</p>--}}
{{--                    </div>--}}

{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
