@extends('admin/welcome')
@section('content')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="card">
                <div class="card-body">
                    <div class="mt-3">
                        <h2>Toggleable Tabs</h2>
                        <br>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home">New</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#menu1">Preparing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#menu2">Assigned</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#menu3">Completed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#menu4">Cancelled</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <h3>No Order Available</h3>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <img src="assets/images/nostore.png">
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <h3>No Order Available</h3>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <img src="assets/images/nostore.png">
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <h3>No Order Available</h3>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <img src="assets/images/nostore.png">
                                    </div>
                                </div>

                            </div>
                            <div id="menu3" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <h3>No Order Available</h3>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <img src="assets/images/nostore.png">
                                    </div>
                                </div>
                            </div>

                            <div id="menu4" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <h3>No Order Available</h3>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <img src="assets/images/nostore.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
