@extends('components.app')

@section('content')

    <div class="container pt-5 mt-5" id="home">

        <div class="row my-5">

            <div class="col-12 col-lg-9 px-0 text-center mx-auto">
                <h1 class="font-bold display-4">Services</h1>

                <br/>

                <h3 class="h3 font-bold">Check Out Our Service Options</h3>

                <p class="text-justify mt-5 text-center">Hearing someone's voice can be the highlight of a
                    prisoner's day.

                    <br/>
                    <br/>

                    Many inmates have become out of site, out of mind to their family and friends. Offering
                    companionship is a great way to uplift their spirits, relieve stress, help deal with grief, and
                    remind them that while they're gone, they're not forgotten.</p>
            </div>
        </div>

        <div class="row my-5">

            <div class="col-12">
                <!-- Container -->
                <div class="d-block d-md-flex text-center">

                    <!-- Column -->
                    <div class="p-3 w-100">

                        <i class="fas fa-microphone fa-5x py-5"></i>
                        <h1 class="pb-3">Standard Call</h1>
                        <p>This package allows you 15 minutes of general conversation</p>
                        <!-- Button trigger modal-->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#modalStandardCall">See More
                        </button>

                    </div>
                    <!-- Column -->

                    <!-- Column -->
                    <div class="p-3 w-100">

                        <i class="fas fa-phone-volume fa-5x py-5"></i>
                        <h1 class="pb-3">No Holds Bar</h1>
                        <p>This package allows you 15 minutes of explicit conversation</p>
                        <!-- Button trigger modal-->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNoHolds">See
                            More
                        </button>

                    </div>
                    <!-- Column -->

                    <!-- Column -->
                    <div class="p-3 w-100">

                        <i class="fas fa-headphones fa-5x py-5"></i>
                        <h1 class="pb-3">Sound Room</h1>
                        <p>For 10 minutes you got to listen to non-stop explicit audio. We have thousands of selections
                            that will almost guarantee you'll hear something fresh and new every time.</p>
                        <!-- Button trigger modal-->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalSoundRoom">See
                            More
                        </button>

                    </div>
                    <!-- Column -->

                </div>
                <!-- Container -->
            </div>
        </div>

        <div class="row mt-5 pb-5">
            <div class="col-12 col-lg-9 px-0 text-center mx-auto" id="disclaimer">
                <p class="">
                    Disclaimer: We at (Convo Companions) accept no responsibility for the accuracy of any content found
                    within these pages. The appropriate safe guards should be used in communicating with any person(s)
                    that you may meet through the service. By using this service, you agree to not hold us responsible
                    for any costs, liabilities, attorney fees, or damages that you may experience. (Must be 18 years or
                    older for this experience)
                </p>
            </div>
        </div>
    </div>

    <!-- Modal: modalStandardCall -->
    <div class="modal fade" id="modalStandardCall" tabindex="-1" role="dialog" aria-labelledby="modalStandardCall"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Standard Call</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th># of Calls</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1 Call</th>
                            <td>$5</td>
                        </tr>
                        <tr>
                            <th scope="row">5 Calls</th>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <th scope="row">15 Calls</th>
                            <td>$50</td>
                        </tr>
                        <tr>
                            <th scope="row">30 Calls</th>
                            <td>$100</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal: modalStandardCall -->

    <!-- Modal: modalNoHolds -->
    <div class="modal fade" id="modalNoHolds" tabindex="-1" role="dialog" aria-labelledby="modalNoHolds"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">No Holds Bar Call</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th># of Calls</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1 Call</th>
                            <td>$7.50</td>
                        </tr>
                        <tr>
                            <th scope="row">5 Calls</th>
                            <td>$30</td>
                        </tr>
                        <tr>
                            <th scope="row">15 Calls</th>
                            <td>$80</td>
                        </tr>
                        <tr>
                            <th scope="row">35 Calls</th>
                            <td>$150</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal: modalNoHolds -->

    <!-- Modal: modalSoundRoom -->
    <div class="modal fade" id="modalSoundRoom" tabindex="-1" role="dialog" aria-labelledby="modalSoundRoom"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Sound Room</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th># of Calls</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1 Call</th>
                            <td>$2.50</td>
                        </tr>
                        <tr>
                            <th scope="row">10 Calls</th>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <th scope="row">30 Calls</th>
                            <td>$50</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal: modalSoundRoom -->
@endsection
