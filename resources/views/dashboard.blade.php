@extends('components.app')

@section('content')
    <div class="container">

        <div class="row" id="">

            <div class="col-12 my-5" id="">
                <h2>Welcome Back {{ $admin->name }}</h2>
            </div>
        </div>

        <div class="row" id="">

            <div class="col-12" id="">

                <!-- Card deck -->
                <div class="card-deck flex-column flex-lg-row">

                    <!-- Card -->
                    <div class="card mb-4">

                        <div class="card-body">

                            <h5 class="card-title d-flex align-items-center justify-content-between">Applications <a
                                    href="/consults" class="btn-floating btn-sm btn-warning"><i
                                        class="fas fa-edit"></i></a></h5>
                            <p class="card-text">You Currently Have {{ $open_consults }} Consult Request(s) That Has Not
                                Been Responded To.</p>

                            @if($open_consults !== 0)
                                <p class="card-text"><small
                                        class="text-muted">Requested {{ $consult_created->diffInDays($today) < 1 ? 'Today' : $consult_created->diffInDays($today) . ' days ago' }}</small>
                                </p>
                            @else
                                <p class="card-text"><small class="text-muted">Requested 0 days ago</small></p>
                            @endif
                        </div>
                    </div>

                    <!-- Card -->
                    {{--<div class="card mb-4">--}}

                    {{--<div class="card-body">--}}

                    {{--<h5 class="card-title d-flex align-items-center justify-content-between">Open Tax Returns <a class="btn-floating btn-sm btn-warning"><i class="fas fa-edit"></i></a></h5>--}}
                    {{--<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                    {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}

                    {{--</div>--}}
                    {{--</div>--}}

                    <!-- Card -->
                    <div class="card mb-4">

                        <div class="card-body">

                            <h5 class="card-title d-flex align-items-center justify-content-between">Messages <a
                                    href="/recommendations" class="btn-floating btn-sm btn-warning"><i
                                        class="fas fa-edit"></i></a></h5>
                            <p class="card-text">You currently have {{ $testimonials }} review(s). These are your
                                reviews from the clients that you've serviced so far. You can choose which ones display
                                on your website.</p>

                            @if($testimonials !== 0)
                                <p class="card-text"><small class="text-muted">Testimonial
                                        received {{ $testimonial_created->diffInDays($today) < 1 ? 'Today' : $testimonial_created->diffInDays($today) . ' days ago' }}</small>
                                </p>
                            @else
                                <p class="card-text"><small class="text-muted">Last updated 0 mins ago</small></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="">

            <div class="col-12" id="">

                <!-- Card -->
                <div class="card mb-4">

                    <div class="card-body">

                        <h5 class="card-title d-flex align-items-center justify-content-between">Contacts <a
                                href="/consult_contacts" class="btn-floating btn-sm btn-warning"><i
                                    class="fas fa-edit"></i></a></h5>
                        <p class="card-text">You Currently Have {{ $contact_count->count() }} Contacts.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-5" id="">

            <div class="col-12 mb-5" id="">

                <div class="card" id="">

                    <div class="card-body" id="">

                        <form method="POST" action="/settings" id="settings-form">
                            @csrf

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
    </div>
@endsection
