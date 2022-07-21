@extends('components.app')

@section('additional_css')
    <style>
        ul.pagination {
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
    </style>
@endsection

@section('content')

    <div class="container pt-5 mt-5" id="home">

        <div class="row my-5">

            <div class="col-12 text-center">
                <h1 class="font-bold display-4">Customers</h1>

                <p class="mt-3 px-lg-5 mx-lg-3 mx-xl-5 text-center">Here you will be able to see all of the customers
                    that have completed an application
                </p>

                <div>
                    <a class="btn btn-outline-green" href="/customers/create">Create New Customer Profile</a>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-12 text-center">

                <p class="text-muted font-italic m-2">Total Customers: {{ $customers->total() }}</p>

                {{ $customers->links() }}

            </div>
        </div>

        @if($customers->count() > 0)

            <div class="row row-cols-1 row-cols-md-2">

                @foreach($customers as $customer)

                    <div class="col mb-4">

                        <div class="card h-100">
                            <!--Card image-->
                            <div class="view overlay">
                                <img class="card-img-top" src="{{ url('/images/empty_face.png') }}"
                                     alt="Card image cap">
                                <a href="{{ action([\App\Http\Controllers\CustomerController::class, 'edit'], $customer) }}">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body">

                                <!--Title-->
                                <h4 class="card-title d-flex align-items-center justify-content-between">{{ $customer->name }}
                                    <a
                                        href="{{ action([\App\Http\Controllers\CustomerController::class, 'edit'], $customer) }}"
                                        class="btn-floating btn-sm btn-warning"><i
                                            class="fas fa-edit"></i></a></h4>

                                <div class="collapse-content">

                                    <div class="collapse" id="collapseCard{{ $customer->id }}">

                                        <table class="table table-borderless table-sm mb-0">
                                            <tbody>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Email</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1 overflow-ellipsis">{{ $customer->email }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Phone</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $customer->phone }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Institution</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $customer->institution }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Institution ID</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $customer->institution_id }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Institution Address</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $customer->institution_address }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Ethnicity</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $customer->ethnicity }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Age</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $customer->age }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Payment ID's</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $customer->payment_id }}</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                    <hr class="">

                                    <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 deep-purple-text collapsed"
                                       data-toggle="collapse" href="#collapseCard{{ $customer->id }}"
                                       aria-expanded="false"
                                       aria-controls="collapseCard"></a>

                                    @if($customer->applications->isNotEmpty())
                                        @php $total = 0; @endphp

                                        @foreach($customer->applications as $customer_application)
                                            @if($customer_application->completed == 'N')
                                                @php $total++; @endphp
                                            @endif
                                        @endforeach

                                        @if($total > 0)
                                            <p class="mt-1 text-left">This customer
                                                has {{ $total }} incomplete applications.
                                            </p>
                                        @endif
                                    @endif
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- Card -->

                @endforeach

            </div>
        @else

            <div class="row" id="">
                <div class="d-flex justify-content-center align-items-center col-9 mx-auto text-center" id="">
                    <h1>You Do Not Have Any Current Customers</h1>
                </div>
            </div>

        @endif
    </div>
@endsection
