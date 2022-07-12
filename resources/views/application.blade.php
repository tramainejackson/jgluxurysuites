@extends('components.app')

@section('additional_scripts')
@endsection

@section('content')

    <div class="container pt-5 mt-5" id="home">

        <div class="row py-5">

            <div class="col-11 col-xl-8 p-5 lighten-2 grey mx-auto rounded z-depth-1-half">

                <h1 class="text-center">Convo Companion Application Form</h1>

                <form method="POST" action="/applications" id="application-form">
                    @csrf

                    <section>
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') ? old('name') : '' }}" />
                                    <label for="name" class="">Name</label>
                                </div>

                                @if ($errors->has('name'))
                                    <p class="red-text">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') ? old('email') : '' }}" />
                                    <label for="email" class="">Email Address</label>
                                </div>

                                @if ($errors->has('email'))
                                    <p class="red-text">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="institution" name="institution" class="form-control" value="{{ old('institution') ? old('institution') : '' }}" />
                                    <label for="institution" class="">Institution</label>
                                </div>

                                @if ($errors->has('institution'))
                                    <p class="red-text">{{ $errors->first('institution') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="number" id="institution_id" name="institution_id" class="form-control"
                                           min="0" step="1" value="{{ old('institution_id') ? old('institution_id') : '' }}" />
                                    <label for="institution_id" class="">Institution ID</label>
                                </div>

                                @if ($errors->has('institution_id'))
                                    <p class="red-text">{{ $errors->first('institution_id') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="institution_address" name="institution_address"
                                           class="form-control" value="{{ old('institution_address') ? old('institution_address') : '' }}" />
                                    <label for="institution_address" class="">Institution Address</label>
                                </div>

                                @if ($errors->has('institution_address'))
                                    <p class="red-text">{{ $errors->first('institution_address') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="ethnicity" name="ethnicity" class="form-control" value="{{ old('ethnicity') ? old('ethnicity') : '' }}" />
                                    <label for="ethnicity" class="">Ethnicity</label>
                                </div>

                                @if ($errors->has('ethnicity'))
                                    <p class="red-text">{{ $errors->first('ethnicity') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="number" id="age" name="age" class="form-control" min="18" step="1" value="{{ old('age') ? old('age') : '' }}" />
                                    <label for="age" class="">Age</label>
                                </div>

                                @if ($errors->has('age'))
                                    <p class="red-text">{{ $errors->first('age') }}</p>
                                @endif
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

                                @if ($errors->has('call_type'))
                                    <p class="red-text">{{ $errors->first('call_type') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row call_count_select standard_call_count_select" style="display: none;">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <select class="mdb-select md-form" id="standard_call_count"
                                            name="standard_call_count">
                                        <option value="" disabled selected>Choose #Number of Calls</option>
                                        <option value="1">1 Call - $5</option>
                                        <option value="5">5 Calls - $20</option>
                                        <option value="15">15 Calls - $50</option>
                                        <option value="30">30 Calls - $100</option>
                                    </select>
                                    <label for="standard_call_count" class="">Call Count</label>
                                </div>

                                @if ($errors->has('standard_call_count'))
                                    <p class="red-text">{{ $errors->first('standard_call_count') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row call_count_select no_holds_call_count_select" style="display: none;">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <select class="mdb-select md-form" id="no_holds_call_count"
                                            name="no_holds_call_count">
                                        <option value="" disabled selected>Choose #Number of Calls</option>
                                        <option value="1">1 Call - $7.50</option>
                                        <option value="5">5 Calls - $30</option>
                                        <option value="15">15 Calls - $80</option>
                                        <option value="35">30 Calls - $150</option>
                                    </select>
                                    <label for="no_holds_call_count" class="">Call Count</label>
                                </div>

                                @if ($errors->has('no_holds_call_count'))
                                    <p class="red-text">{{ $errors->first('no_holds_call_count') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row call_count_select sound_room_call_count_select" style="display: none;">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <select class="mdb-select md-form" id="sound_room_call_count"
                                            name="sound_room_call_count">
                                        <option value="" disabled selected>Choose #Number of Calls</option>
                                        <option value="1">1 Call - $2.50</option>
                                        <option value="10">10 Calls - $20</option>
                                        <option value="30">30 Calls - $50</option>
                                    </select>
                                    <label for="sound_room_call_count" class="">Call Count</label>
                                </div>

                                @if ($errors->has('sound_room_call_count'))
                                    <p class="red-text">{{ $errors->first('sound_room_call_count') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <div class="text-center text-md-left">
                            <a class="btn btn-dark"
                               onclick="document.getElementById('application-form').submit();">Send</a>
                        </div>

                    </section>
                    <!--Section: Contact v.2-->
                </form>
            </div>
        </div>
    </div>
@endsection
