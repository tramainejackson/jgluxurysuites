@extends('components.app')

@section('additional_css')
    <style>
        ul.pagination {
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
    </style>
@endsection

@section('additional_scripts')
    <script type="text/javascript">
        function myFunction(event) {
            @if($applications->total() < 1)
                toastr["warning"]("You do not currently have any completed applications.");
            @else
                location.href = "/settings";
            @endif
        }
    </script>
@endsection

@section('content')

    <div class="container pt-5 mt-5" id="home">

        <div class="row my-5">

            <div class="col-12 text-center">
                <h1 class="font-bold display-4">Customer Applications</h1>

                <p class="text-justify mt-3 px-lg-5 mx-lg-3 mx-xl-5">Here you will be able to see all of the active
                    applications. Click
                    <button class="border-0 p-0 m-0 btn-link blue-text" onclick=myFunction();>here</button>
                    to see all the completed applications.
                </p>
            </div>
        </div>

        <div class="row">

            <div class="col-12 text-center">

                <p class="text-muted font-italic m-2">Total Applications: {{ $applications->total() }}</p>

                {{ $applications->links() }}

            </div>
        </div>

        @if($applications->count() > 0)

            <div class="row row-cols-1 row-cols-md-2">

                @foreach($applications as $application)

                    <div class="col mb-4">

                        <div class="card h-100">
                            <!--Card image-->
                            <div class="view overlay">
                                <img class="card-img-top" src="{{ url('/images/application.jpg') }}"
                                     alt="Card image cap">
                                <a href="{{ action([\App\Http\Controllers\ApplicationController::class, 'edit'], $application) }}">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body">

                                <!--Title-->
                                <h4 class="card-title d-flex align-items-center justify-content-between">{{ $application->name }}
                                    <a
                                        href="{{ action([\App\Http\Controllers\ApplicationController::class, 'edit'], $application) }}"
                                        class="btn-floating btn-sm btn-warning"><i
                                            class="fas fa-edit"></i></a></h4>

                                <div class="collapse-content">

                                    <div class="collapse" id="collapseCard{{ $application->id }}">

                                        <table class="table table-borderless table-sm mb-0">
                                            <tbody>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Email</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1 overflow-ellipsis">{{ $application->email }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Institution</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $application->institution }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Institution ID</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $application->institution_id }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Institution Address</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $application->institution_address }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Ethnicity</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $application->ethnicity }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Age</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $application->age }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-normal align-middle">Call Type</td>
                                                <td class="float-right font-weight-normal">
                                                    <p class="mb-1">{{ $application->call_type }}</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                    <hr class="">

                                    <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 deep-purple-text collapsed"
                                       data-toggle="collapse" href="#collapseCard{{ $application->id }}"
                                       aria-expanded="false"
                                       aria-controls="collapseCard"></a>

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
                    <h1>You Do Not Have Any Current Applications</h1>
                </div>
            </div>

        @endif
    </div>
@endsection
