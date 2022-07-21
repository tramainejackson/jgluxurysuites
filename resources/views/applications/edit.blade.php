@extends('components.app')

@section('content')

    <div class="container pt-5 mt-5" id="home">

        <div class="row py-5">

            <div class="col-12 text-center">
                <a href="/applications" class="btn btn-outline-blue-grey my-3">Back</a>
            </div>

            <div class="col-11 col-xl-8 p-5 lighten-2 grey mx-auto rounded z-depth-1-half">

                <h1 class="text-center">Convo Companion Application Form</h1>

                @if($application->customer)
                    <div class="text-center">
                        <a class="btn btn-outline-mdb-color"
                           href="{{ action([\App\Http\Controllers\CustomerController::class, 'edit'], $application->customer) }}">See
                            Customer Profile</a>
                    </div>
                @endif

                <form method="POST"
                      action="{{ action([\App\Http\Controllers\ApplicationController::class, 'update'], $application) }}"
                      id="application-update-form">
                    @csrf
                    @method('PUT')

                    <section>
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control"
                                           value="{{ old('name') ? old('name') : $application->name }}"/>
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
                                    <input type="email" id="email" name="email" class="form-control"
                                           value="{{ old('email') ? old('email') : $application->email }}"/>
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
                                    <input type="text" id="institution" name="institution" class="form-control"
                                           value="{{ old('institution') ? old('institution') : $application->institution }}"/>
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
                                           min="0" step="1"
                                           value="{{ old('institution_id') ? old('institution_id') : $application->institution_id }}"/>
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
                                           class="form-control"
                                           value="{{ old('institution_address') ? old('institution_address') : $application->institution_address }}"/>
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
                                    <input type="text" id="ethnicity" name="ethnicity" class="form-control"
                                           value="{{ old('ethnicity') ? old('ethnicity') : $application->ethnicity }}"/>
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
                                    <input type="number" id="age" name="age" class="form-control" min="18" step="1"
                                           value="{{ old('age') ? old('age') : $application->age }}"/>
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
                                    <input type="text" id="call_type" name="call_type" class="form-control"
                                           value="{{ old('call_type') ? old('call_type') : $application->call_type }}"/>
                                    <label for="call_type" class="">Call type</label>
                                </div>

                                @if ($errors->has('call_type'))
                                    <p class="red-text">{{ $errors->first('call_type') }}</p>
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
                                    <input type="number" id="call_count" name="call_count" class="form-control" min="1"
                                           step="1"
                                           value="{{ old('call_count') ? old('call_count') : $application->call_count }}"/>
                                    <label for="call_count" class="">Call Count</label>
                                </div>

                                @if ($errors->has('call_count'))
                                    <p class="red-text">{{ $errors->first('call_count') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12 col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="payment_type" name="payment_type" class="form-control"
                                           placeholder="Enter Payment Type"
                                           value="{{ old('payment_type') ? old('payment_type') : $application->payment_type }}"/>
                                    <label for="payment_type" class="">Payment Type</label>
                                </div>

                                @if ($errors->has('payment_type'))
                                    <p class="red-text">{{ $errors->first('payment_type') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-12 col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="payment_id" name="payment_id" class="form-control"
                                           placeholder="Enter Payment ID"
                                           value="{{ old('payment_id') ? old('payment_id') : $application->payment_id }}"/>
                                    <label for="payment_id" class="">Payment ID</label>
                                </div>

                                @if ($errors->has('payment_id'))
                                    <p class="red-text">{{ $errors->first('payment_id') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text md-addon" id="material-addon1">$</span>
                                    </div>

                                    <input name="amount_due" id="amount_due" type="number" class="form-control"
                                           value="{{ $application->amount_due }}"
                                           placeholder="Amount Due"
                                           step="0.01">

                                    <label for="amount_due">Amount Due</label>
                                </div>

                                @if ($errors->has('amount_due'))
                                    <p class="red-text">{{ $errors->first('amount_due') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="form-group col-12 text-center">
                                <label class="d-block form-control-label" for="paid">Paid In Full?</label>

                                <div class="btn-group">
                                    <button type="button"
                                            class="btn btn-rounded{{ $application->paid == 'Y' ? ' active btn-success' : ' btn-blue-grey' }}"
                                            style="line-height:1.5">
                                        <input type="checkbox" name="paid" value="Y"
                                               {{ $application->paid == 'Y' ? 'checked' : '' }} hidden/>Yes
                                    </button>
                                    <button type="button"
                                            class="btn btn-rounded{{ $application->paid == 'N' ? ' active btn-danger' : ' btn-blue-grey' }}"
                                            style="line-height:1.5">
                                        <input type="checkbox" name="paid" value="N"
                                               {{ $application->paid == 'N' ? 'checked' : '' }} hidden/>No
                                    </button>
                                </div>

                                @if ($errors->has('paid'))
                                    <p class="red-text">{{ $errors->first('paid') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="form-group col-12 text-center">
                                <label class="d-block form-control-label" for="completed">Application Complete?</label>

                                <div class="btn-group">
                                    <button type="button"
                                            class="btn btn-rounded{{ $application->completed == 'Y' ? ' active btn-success' : ' btn-blue-grey' }}"
                                            style="line-height:1.5">
                                        <input type="checkbox" name="completed" value="Y"
                                               {{ $application->completed == 'Y' ? 'checked' : '' }} hidden/>Yes
                                    </button>
                                    <button type="button"
                                            class="btn btn-rounded{{ $application->completed == 'N' ? ' active btn-danger' : ' btn-blue-grey' }}"
                                            style="line-height:1.5">
                                        <input type="checkbox" name="completed" value="N"
                                               {{ $application->completed == 'N' ? 'checked' : '' }} hidden/>No
                                    </button>
                                </div>

                                @if ($errors->has('completed'))
                                    <p class="red-text">{{ $errors->first('completed') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <hr/>

                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                            <div class="text-center">
                                <a class="btn btn-dark"
                                   onclick="document.getElementById('application-update-form').submit();">Update</a>
                            </div>

                            <div class="text-center">
                                <a class="btn btn-danger"
                                   onclick="document.getElementById('application-delete-form').submit();">Remove
                                    Application</a>
                            </div>
                        </div>

                    </section>
                    <!--Section: Customer v.2-->
                </form>
            </div>
        </div>
    </div>
@endsection
