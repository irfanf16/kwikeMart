@extends('admin.layout.master')
@section('content')

    <style>
        label {
            font-weight: bold;
        }

        .btn-primary {
            color: black;
        }
    </style>

    <div class="page-content">
        <div class="main-wrapper">

            <!--form layout-->

            <div class="row">
                <div class="col">
                    <h5 class="card-title">Settings</h5>
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Logo:</label>
                                    <input class="form-control shadow-sm" type="file" id="formFile">
                                </div>

                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Favicon:</label>
                                    <input class="form-control shadow-sm" type="file" id="formFile">
                                </div>
                            </div>

                            <!--<div class="row mt-5">-->
                            <!--    <div class="col-md-6 col-lg-6">-->
                            <!--        <label for="formFile" class="form-label">Firebase Api Key:</label>-->
                            <!--        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">-->
                            <!--    </div>-->
                            <!--    <div class="col-md-6 col-lg-6">-->
                            <!--        <label for="formFile" class="form-label">Firebase Server Key:</label>-->
                            <!--        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="row mt-5">-->
                            <!--    <div class="col-md-6 col-lg-6">-->
                            <!--        <label for="formFile" class="form-label">Firebase Databse Url:</label>-->
                            <!--        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">-->
                            <!--    </div>-->
                            <!--    <div class="col-md-6 col-lg-6">-->
                            <!--        <label for="formFile" class="form-label">Google Api Key:</label>-->
                            <!--        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Google Store Link:</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Apple Store Link:</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                            </div>
                            <!--<div class="row mt-5">-->
                            <!--    <div class="col-md-6 col-lg-6">-->
                            <!--        <label for="formFile" class="form-label">Order Prefix:</label>-->
                            <!--        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">-->
                            <!--    </div>-->
                            <!--    <div class="col-md-6 col-lg-6">-->
                            <!--        <label for="formFile" class="form-label">Set Radius:</label>-->
                            <!--        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">-->
                            <!--    </div>-->
                            <!--</div>-->

                            <hr class="mt-5">

                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Facebook Link:</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Twitter Link:</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Youtube Link:</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Instagram Link:</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-12">
                                    <div style="float: right;">
                                        <button class="btn btn-primary shadow" type="submit">Update</button>
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
