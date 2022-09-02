@extends('admin.layout.master')
@section('content')

    <style>
        label {
            font-weight: bold;
        }
    </style>

    <div class="page-content">
        <div class="main-wrapper">

            <!--form layout-->

            <div class="row">
                <div class="col">
                    <h5 class="card-title">Drivers</h5>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <h4 class="text-light bg-dark" style="text-align: center; padding: 10px; margin-top: 5px;">Driver Information</h4>
                            </div>
                            <div class="row mt-3 justify-content-around">
                                <div class="col-10 col-md-11 col-lg-11">
                                    <div class="row mt-5">
                                        <div class="col-md-4 col-lg-4">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control shadow-sm" placeholder="Emma" aria-label="">
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control shadow-sm" placeholder="example@xyz" aria-label="">
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <label class="form-label">Password</label>
                                            <input type="text" class="form-control shadow-sm" placeholder="XXXXXXXX" aria-label="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4 col-lg-4">
                                            <label class="form-label">License No*</label>
                                            <input type="text" class="form-control shadow-sm" placeholder="License No*" aria-label="">
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <label class="form-label">Vehicle No*</label>
                                            <input type="text" class="form-control shadow-sm" placeholder="Vehicle No*" aria-label="">
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <label class="form-label">Vehicle Company*</label>
                                            <input type="text" class="form-control shadow-sm" placeholder="Vehicle Company*" aria-label="">
                                        </div>
                                    </div>
        
                                    <div class="row mt-3">
                                        <div class="col-md-6 col-lg-6">
                                            <label  class="form-label">Address</label>
                                            <input type="text" class="form-control shadow-sm" placeholder="1-Tufail Road Cantt" aria-label="">
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control shadow-sm" placeholder="+923024280958" aria-label="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                                <div class="row mt-3 justify-content-around">
                                    <div class="col-md-5 col-lg-5">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label class="form-label">License Front Image</label>
                                            <img src="licence front.jpg" class="img-fluid" width="90">
                                        </div>
                                        <input class="form-control shadow-sm" type="file" id="formFile">
                                    </div>
                                    <div class="col-md-5 col-lg-5">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label class="form-label">License Back Image</label>
                                            <img src="licence back.jpg" class="img-fluid" width="90">
                                        </div>    
                                        <input class="form-control shadow-sm" type="file" id="formFile">
                                    </div>
                                </div>
                      
                         
                            <div class="row mt-3 justify-content-around">
                                <div class="col-md-5 col-lg-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label class="form-label">Vehicle Image</label>
                                        <img src="driver.jpg" class="img-fluid" width="90" style="border-radius:6px;">
                                    </div>    
                                    <input class="form-control shadow-sm" type="file" id="formFile">
                                </div>
                                <div class="col-md-5 col-lg-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label class="form-label">Vehicle Registration Image</label>
                                        <img src="car_front_plate.jpg" class="img-fluid" width="90" style="border-radius:6px;">
                                    </div>
                                    <input class="form-control shadow-sm" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="form-group mt-5">
                                <h4 class="text-light bg-dark" style="text-align: center; padding: 10px; margin-top: 5px;">Driver Bank Information</h4>
                            </div>

                            <div class="row mt-5 justify-content-around">
                                <div class="col-md-5 col-lg-5">
                                    <label  class="form-label">Account No</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                                <div class="col-md-5 col-lg-5">
                                    <label  class="form-label">Bank Name</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                                
                            </div>

                            <div class="row mt-5 justify-content-around">
                                <div class="col-md-5 col-lg-5">
                                    <label class="form-label">Sort Code Name</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                               <div class="col-md-5 col-lg-5">
                                    <label  class="form-label">Account Title / Beneficary Name</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-12">
                                    <div style="float: right;">
                                        <button class="btn btn-primary shadow" type="submit">Add</button>
                                        <button class="btn btn-primary shadow" type="submit">Cancel</button>
                                    </div>

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
