@extends('components.app')

@section('content')

    <div class="container pt-5 mt-5" id="contact">

        <div class="row py-5 ml-md-4">

            {{-- Mobile Display --}}
            <div class="col-12 d-md-none">
                <div class="container">
                    <div class="row mx-auto pt-4">
                        <div class="col-12 col-lg-10">
                            <h1 class="display-4">About Us</h1>

                            <br/>

                            <h2 class="h2-responsive">Keeping People Connected</h2>

                            <br/>

                            <p class="">Hearing someone's voice can be the highlight of a prisoner's day.
                                <br/>
                                <br/>
                                I can testify to this because I was a prisoner for more than a decade. I've seen first
                                hand the affect that hearing someones voice can have on a man that may not have talked
                                to someone in days, weeks, and sometimes even months. The joy of talking to a relative
                                or friend while incarcerated sometimes can't even be put into words. But not every one
                                gets the chance to talk to someone outside of the prison.
                                <br/>
                                <br/>
                                Some inmates get abandoned by loved ones and will not have anyone to speak outside of
                                the walls they are confined in. I'm personally taking it into my hands to do what I can
                                to help men and women in these situations.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Desktop Display --}}
            <div class="col-12 col-md-6 px-0 lighten-2 grey my-5 d-none d-md-block" style="z-index: 10">
                <div class="container">
                    <div class="row mx-auto pt-4">
                        <div class="col-12">
                            <h1 class="display-4">About Us</h1>

                            <br/>

                            <h2 class="h2-responsive">Keeping People Connected</h2>

                            <br/>

                            <p class="">Hearing someone's voice can be the highlight of a prisoner's day.
                                <br/>
                                <br/>
                                I can testify to this because I was a prisoner for more than a decade. I've seen first
                                hand the affect that hearing someones voice can have on a man that may not have talked
                                to someone in days, weeks, and sometimes even months. The joy of talking to a relative
                                or friend while incarcerated sometimes can't even be put into words. But not every one
                                gets the chance to talk to someone outside of the prison.
                                <br/>
                                <br/>
                                Some inmates get abandoned by loves ones and will not have anyone to speak outside of
                                the walls they are confined in. I'm personally taking it into my hands to do what I can
                                to help men and women in these situations.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mobile Display --}}
            <div class="col-10 col-md-6 px-0 mx-auto d-md-none">
                <div class="view">
                    <img class="img-fluid" src="{{ url('/images/woman-2.jpg') }}" alt="woman-on-phone-2">
                    <div class="mask flex-center rgba-grey-light"></div>
                </div>
            </div>

            {{-- Desktop Display --}}
            <div class="col-10 col-md-6 px-0 ml-md-n5 mx-auto d-none d-md-block view" style="background: url('/images/woman-2.jpg') no-repeat center; background-size: cover;">
                <div class="mask rgba-grey-light align-items-center"></div>
            </div>
        </div>
    </div>
@endsection
