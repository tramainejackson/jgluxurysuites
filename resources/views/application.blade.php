@extends('components.app')

@section('additional_scripts')
@endsection

@section('content')

    <div class="container pt-5 mt-5" id="home">

        <div class="row py-5">

            <div class="col-12 col-xl-8 p-5 lighten-2 grey mx-auto rounded z-depth-1-half">

                <h1 class="text-center">Convo Companion Application Form</h1>

                <a class="" href="" target=""></a>

                <form method="POST" action="/">
                    @csrf

                    <section>
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Name</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Email Address</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="institution" name="institution" class="form-control">
                                    <label for="institution" class="">Institution</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
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
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="number" id="institution_id" name="institution_id" class="form-control" min="0" step="1">
                                    <label for="institution_id" class="">Institution ID</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="institution_Address" name="institution_Address" class="form-control">
                                    <label for="institution_Address" class="">Institution Address</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="ethnicity" name="ethnicity" class="form-control">
                                    <label for="ethnicity" class="">Ethnicity</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="number" id="age" name="age" class="form-control" min="0" step="1">
                                    <label for="age" class="">Age</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <select class="mdb-select md-form" id="call_type" name="call_type">
                                        <option value="" disabled selected>Choose Call Type</option>
                                        <option value="standard">Standard Call</option>
                                        <option value="no_holds">No Holds Bar</option>
                                        <option value="sound_room">Sound Room</option>
                                    </select>
                                    <label for="call_type" class="">Call Type</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row call_count_select standard_call_count_select" style="display: none;">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <select class="mdb-select md-form" id="standard_call_count" name="standard_call_count">
                                        <option value="" disabled selected>Choose #Number of Calls</option>
                                        <option value="1_standard">1 Call - $5</option>
                                        <option value="5_standard">5 Calls - $20</option>
                                        <option value="15_standard">15 Calls - $50</option>
                                        <option value="30_standard">30 Calls - $100</option>
                                    </select>
                                    <label for="standard_call_count" class="">Call Count</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row call_count_select no_holds_call_count_select" style="display: none;">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <select class="mdb-select md-form" id="no_holds_call_count" name="no_holds_call_count">
                                        <option value="" disabled selected>Choose #Number of Calls</option>
                                        <option value="1_no_holds">1 Call - $7.50</option>
                                        <option value="5_no_holds">5 Calls - $30</option>
                                        <option value="15_no_holds">15 Calls - $80</option>
                                        <option value="35_no_holds">30 Calls - $150</option>
                                    </select>
                                    <label for="no_holds_call_count" class="">Call Count</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row call_count_select sound_room_call_count_select" style="display: none;">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <select class="mdb-select md-form" id="sound_room_call_count" name="sound_room_call_count">
                                        <option value="" disabled selected>Choose #Number of Calls</option>
                                        <option value="1_sound_room">1 Call - $2.50</option>
                                        <option value="10_sound_room">10 Calls - $20</option>
                                        <option value="30_sound_room">30 Calls - $50</option>
                                    </select>
                                    <label for="sound_room_call_count" class="">Call Count</label>
                                </div>
                            </div>
                            <!--Grid column-->
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
@endsection
