@extends('components.app')

@section('additional_scripts')
@endsection

@section('content')

    <div class="">

        <div class="container pt-5 mt-5" id="home">

            <div class="row my-5">

                <div class="col-12 px-0 text-center">
                    <h1 class="font-bold display-4">Convo Companions</h1>

                    <p class="text-justify mt-3 px-lg-5 mx-lg-3 mx-xl-5">At Convo Companions, we’re passionate about
                        connecting incarcerated individuals
                        with companionship from the outside. We provide a high quality service to all of our clients and
                        as
                        we grow, our commitment to your needs remains the key driving force behind our reason to ensure
                        you
                        a good conversation. Our team of professionals is here to connect you with supportive,
                        objective 
                        nonjudgmental, understanding, and compassionate people, that would love nothing more than to
                        help
                        you relieve stress, tension, deal with trauma, grief, etc by inspiring you with their unique
                        ideas
                        and abilities - get in touch today to learn more.</p>
                </div>
            </div>
        </div>

        <div class="view jarallax" style="height: 100vh;">
            <img class="jarallax-img" src="{{ url('/images/cell-phone.jpg') }}" alt="woman-on-phone">
            <div class="mask flex-center waves-effect waves-light rgba-grey-light">
            </div>
        </div>

        <div class="container" id="contact">

            <div class="row py-5">

                <div class="col-12 col-lg-6 px-0 lighten-2 grey">
                    <div class="container py-5">
                        <div class="row mx-auto">
                            <div class="col-12 col-lg-8">
                                <h1 class="">Convo Companion Contact</h1>

                                <p class="">We’re happy to hear from you. Contact us today to learn more about our
                                    business
                                    and how you can get started today.</p>

                                <form method="POST" action="/">
                                    @csrf

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 px-0">
                    <div class="view">
                        <img class="img-fluid" src="{{ url('/images/woman.jpg') }}" alt="woman-on-phone-2">
                        <div class="mask flex-center rgba-grey-light"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
