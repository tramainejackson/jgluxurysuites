@extends('components.app')

@section('content')
    <div class="container">

        <div class="row" id="">

            <div class="col-12 my-5" id="">
                <h2>Welcome Back {{ $admin->name }}</h2>
            </div>
        </div>

        <div class="row" id="">

            <div class="col-12 col-md-6" id="">

                <!-- Card -->
                <div class="card mb-4">

                    <div class="card-body">

                        <h5 class="card-title d-flex align-items-center justify-content-between">Applications <a
                                href="{{ route('admin_applications') }}" class="btn-floating btn-sm btn-warning"><i
                                    class="fas fa-edit"></i></a></h5>
                        <p class="card-text">You Currently Have {{ $applications->count() }} Application(s).</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6" id="">

                <!-- Card -->
                <div class="card mb-4">

                    <div class="card-body">

                        <h5 class="card-title d-flex align-items-center justify-content-between">Messages <a
                                href="{{ route('messages') }}" class="btn-floating btn-sm btn-warning"><i
                                    class="fas fa-edit"></i></a></h5>
                        <p class="card-text">You currently have {{ $messages->count() }} message(s).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-5" id="">

            <div class="col-12 mb-5" id="">

                <div class="card" id="">

                    <div class="card-body" id="">

                        <form method="POST" action="/settings/{{ $setting->id }}" id="pricing-form">
                            @csrf
                            @method('PUT')

                            <div class="d-flex align-items-center justify-content-between" id="">
                                <h2 class="h2">Rates</h2>

                                <button type="submit" class="btn btn-sm btn-mdb-color" value="update_pricing_btn">Update
                                    Pricing Options
                                </button>
                            </div>

                            <!-- Container -->
                            <div class="d-block d-md-flex">
                                <!-- Column -->
                                <div class="p-3 flex-1">
                                    <h4 class="h4">Standard Calls</h4>

                                    @foreach($standard_calls as $standard_call)
                                        <div class="md-form input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text md-addon" id="material-addon1">$</span>
                                            </div>

                                            <input name="{{ $standard_call->type }}" type="number" class="form-control"
                                                   value="{{ $standard_call->price }}"
                                                   placeholder="Standard Call Rate"
                                                   step="0.01">

                                            <label for="{{ $standard_call->type }}">Standard Call
                                                Count {{ Str::after($standard_call->type, '_') }}</label>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Column -->
                                <div class="p-3 flex-1">
                                    <h4 class="h4">No Holds Calls</h4>

                                    @foreach($no_holds_calls as $no_holds_call)
                                        <div class="md-form input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text md-addon" id="material-addon1">$</span>
                                            </div>

                                            <input name="{{ $no_holds_call->type }}" type="number" class="form-control"
                                                   value="{{ $no_holds_call->price }}"
                                                   placeholder="No Holds Call Rate"
                                                   step="0.01">

                                            <label for="{{ $no_holds_call->type }}">No Holds Call
                                                Count {{ Str::after($no_holds_call->type, '_') }}</label>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Column -->
                                <div class="p-3 flex-1">
                                    <h4 class="h4">Sound Room Calls</h4>

                                    @foreach($sound_room_calls as $sound_room_call)
                                        <div class="md-form input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text md-addon" id="material-addon1">$</span>
                                            </div>

                                            <input name="{{ $sound_room_call->type }}" type="number"
                                                   class="form-control"
                                                   value="{{ $sound_room_call->price }}"
                                                   placeholder="Sound Room Call Rate"
                                                   step="0.01">

                                            <label for="{{ $sound_room_call->type }}">Sound Room Call
                                                Count {{ Str::after($sound_room_call->type, '_') }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-5" id="">

            <div class="col-12 mb-5" id="">

                <div class="card" id="">

                    <div class="card-body" id="">

                        <form method="POST" action="/settings/update/{{ $setting->id }}" id="settings-form">
                            @csrf
                            @method('PUT')

                            <div class="d-flex align-items-center justify-content-between" id="">
                                <h2 class="h2">Settings</h2>

                                <button type="submit" class="btn btn-sm btn-mdb-color" value="update_pricing_btn">Update
                                    Settings Options
                                </button>
                            </div>

                            <!-- Container -->
                            <div class="d-block">

                                <!-- Column -->
                                <div class="p-3">

                                    <div class="md-form">

                                        <textarea name="mission" type="text" class="form-control md-textarea"
                                                  placeholder="Enter Company Mission Statement">{{ $setting->mission }}</textarea>

                                        <label for="mission">Company Mission Statement</label>
                                    </div>

                                    <div class="md-form">

                                        <input name="email" type="email"
                                               class="form-control"
                                               value="{{ $setting->email }}"
                                               placeholder="Enter Email Address">

                                        <label for="email">Email Address</label>
                                    </div>

                                    <div class="md-form">

                                        <input name="phone" type="text"
                                               class="form-control"
                                               value="{{ $setting->phone }}"
                                               placeholder="Phone Number">

                                        <label for="phone">Enter Phone Number</label>
                                    </div>

                                    <div class="md-form">

                                        <input name="address" type="text"
                                               class="form-control"
                                               value="{{ $setting->address }}"
                                               placeholder="Enter Address">

                                        <label for="address">Address</label>
                                    </div>

                                    <div class="md-form">

                                        <input name="city" type="text"
                                               class="form-control"
                                               value="{{ $setting->city }}"
                                               placeholder="Enter City">

                                        <label for="city">City</label>
                                    </div>

                                    <div class="md-form">

                                        <input name="state" type="text"
                                               class="form-control"
                                               value="{{ $setting->state }}"
                                               placeholder="Enter State">

                                        <label for="state">State</label>
                                    </div>

                                    <div class="md-form">

                                        <input name="zip" type="number"
                                               class="form-control"
                                               value="{{ $setting->zip }}"
                                               placeholder="Enter Zip Code">

                                        <label for="zip">Zip</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
