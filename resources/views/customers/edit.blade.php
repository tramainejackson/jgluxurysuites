@extends('components.app')

@section('content')

    <div class="container pt-5 mt-5" id="home">

        <div class="row py-5">

            <div class="col-12 text-center">
                <a href="/customers" class="btn btn-outline-blue-grey my-3">Back</a>
            </div>

            <div class="col-11 col-xl-8 p-5 lighten-2 grey mx-auto rounded z-depth-1-half">

                <h1 class="text-center">Customer Profile</h1>

                <div class="text-center">
                    <a class="btn btn-outline-green"
                       href="{{ route('applications.create').'?customer='.$customer->id }}">Create New Application For Customer</a>
                </div>

                <form method="POST"
                      action="{{ action([\App\Http\Controllers\CustomerController::class, 'update'], $customer) }}"
                      id="customer-update-form">
                    @csrf
                    @method('PUT')

                    <section>
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control"
                                           value="{{ old('name') ? old('name') : $customer->name }}"/>
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
                                           value="{{ old('email') ? old('email') : $customer->email }}"/>
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
                                    <input type="text" id="phone" name="phone" class="form-control"
                                           placeholder="Enter Phone Number"
                                           value="{{ old('phone') ? old('phone') : $customer->phone }}"/>
                                    <label for="phone" class="">Phone Number</label>
                                </div>

                                @if ($errors->has('phone'))
                                    <p class="red-text">{{ $errors->first('phone') }}</p>
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
                                           value="{{ old('institution') ? old('institution') : $customer->institution }}"/>
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
                                           value="{{ old('institution_id') ? old('institution_id') : $customer->institution_id }}"/>
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
                                           value="{{ old('institution_address') ? old('institution_address') : $customer->institution_address }}"/>
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
                                           value="{{ old('ethnicity') ? old('ethnicity') : $customer->ethnicity }}"/>
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
                                           value="{{ old('age') ? old('age') : $customer->age }}"/>
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
                            <div class="col-12 col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="payment_type" name="payment_type" class="form-control"
                                           placeholder="Enter Payment Types"
                                           value="{{ old('payment_type') ? old('payment_type') : $customer->payment_type }}"/>
                                    <label for="payment_type" class="">Payment Types</label>
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
                                           placeholder="Enter Payment IDs"
                                           value="{{ old('payment_id') ? old('payment_id') : $customer->payment_id }}"/>
                                    <label for="payment_id" class="">Payment IDs</label>
                                </div>

                                @if ($errors->has('payment_id'))
                                    <p class="red-text">{{ $errors->first('payment_id') }}</p>
                                @endif
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                            <div class="text-center">
                                <a class="btn btn-dark"
                                   onclick="document.getElementById('customer-update-form').submit();">Update</a>
                            </div>

                            <div class="text-center">
                                <a class="btn btn-danger"
                                   onclick="document.getElementById('customer-delete-form').submit();">Remove
                                    Customer</a>
                            </div>
                        </div>

                    </section>
                    <!--Section: Customer v.2-->
                </form>
            </div>
        </div>
    </div>
@endsection
