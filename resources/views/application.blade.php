@extends('components.app')

@section('additional_scripts')
@endsection

@section('content')

    <div class="container pt-5 mt-5" id="home">

        <div class="row py-5">

            <div class="col-12 col-lg-6 px-0 lighten-2 grey">

                <div class="container py-5">
                    <div class="row mx-auto">
                        <div class="col-12 col-lg-8">
                            <h1 class="">Convo Companion Application Form</h1>

                            <form method="POST" action="/">
                                @csrf

                                <section>
                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="name" name="name" class="form-control">
                                                <label for="name" class="">Your name</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->
                                    </div>

                                    <div class="row">
                                        <!--Grid column-->
                                        <div class="col-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="email" name="email" class="form-control">
                                                <label for="email" class="">Your email</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="subject" name="subject" class="form-control">
                                                <label for="subject" class="">Subject</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-12">

                                            <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="2"
                                                      class="form-control md-textarea"></textarea>
                                                <label for="message">Your message</label>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Grid row-->


                                    <div class="text-center text-md-left">
                                        <a class="btn btn-dark"
                                           onclick="document.getElementById('contact-form').submit();">Send</a>
                                    </div>

                                </section>
                                <!--Section: Contact v.2-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
