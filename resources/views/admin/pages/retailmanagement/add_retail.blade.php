@extends('admin/welcome')
@section('content')

    <style>
        label {
            font-weight: bold;
        }

        /*.btn-primary {*/
        /*    color: black;*/
        /*}*/
    </style>

    <div class="page-content">
        <div class="main-wrapper">

            <!--form layout-->

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Retailer</h5>
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Default file input example</label>
                                    <input class="form-control shadow-sm" type="file" id="formFile">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Default file input example</label>
                                    <input class="form-control shadow-sm" type="file" id="formFile">
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Store Name *</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Slogan *</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 col-lg-12">
                                    <label for="formFile" class="form-label">Description *</label>
                                    <textarea type="" class="form-control shadow-sm" placeholder="" aria-label="First name" style="height: 155px;"></textarea>
                                </div>

                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Services</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="First name">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Phone *</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6 col-ld-6">
                                    <label for="formFile" class="form-label">Store Type</label>
                                    <select class="form-select form-control shadow-sm" id="autoSizingSelect">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 col-lg-12">
                                    <label for="formFile" class="form-label">Address *</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12">
                                    <div class="form-group col-md-12">
                                        <div class="row mt-5">
                                            <div class="col-md-6 col-lg-6">
                                                <label for="formFile" class="form-label">Minimum Order *</label>
                                                <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <label for="formFile" class="form-label">AVG Delivery Time *</label>
                                                <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-4 col-lg-4">
                                                <label for="formFile" class="form-label">User Name *</label>
                                                <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <label for="formFile" class="form-label">Email *</label>
                                                <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <label for="formFile" class="form-label">Password *</label>
                                                <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                            </div>
                                        </div>
                                        <div class="form-group mt-5">
                                            <h4 class="text-light bg-dark" style="text-align: center; padding: 10px; margin-top: 5px;">Bank Account Details</h4>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-4 col-lg-6">
                                                <label for="formFile" class="form-label">Minimum Order *</label>
                                                <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                            </div>
                                            <div class="col-md-4 col-lg-6">
                                                <label for="formFile" class="form-label">AVG Delivery Time *</label>
                                                <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-4 col-lg-4">
                                                <label for="formFile" class="form-label">User Name *</label>
                                                <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <label for="formFile" class="form-label">Email *</label>
                                                <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <label for="formFile" class="form-label">Password *</label>
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
        </div>
    </div>    

@endsection
