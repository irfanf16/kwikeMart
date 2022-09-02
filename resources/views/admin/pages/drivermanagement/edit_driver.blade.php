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
            <a class="btn btn-success mb-2" href="{{ route('driver.index') }}">Back</a>
            <!--form layout-->

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            @if(Session::has('message'))
                            <p class="alert alert-{{ Session::get('alert') }}">{{ Session::get('message') }}</p>
                            @endif
                            <h5 class="card-title">Update Driver Info</h5>
                            <!--<div class="row">-->
                            <!--    <div class="col-md-6 col-lg-6">-->
                            <!--        <label for="formFile" class="form-label">Default file input example</label>-->
                            <!--        <input class="form-control shadow-sm" type="file" id="formFile">-->
                            <!--    </div>-->
                            <!--    <div class="col-md-6 col-lg-6">-->
                            <!--        <img class="" src="assets/images/user_img.jpg" style="width: 200px; height: 200px;">-->
                            <!--    </div>-->
                            <!--</div>-->
                            <form action="{{route('driver.update',['id'=>$driver->id])}}" method="post">
                                @csrf
                            <div class="form-group mt-5">
                                <h4 class="text-light bg-dark" style="text-align: center; padding: 10px; margin-top: 5px;">Driver Information</h4>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">First Name</label>
                                    <input name="first_name" type="text" value="{{ $driver->first_name ?? "" }}" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Last Name</label>
                                    <input name="last_name" type="text" value="{{ $driver->last_name ?? "" }}" class="form-control shadow-sm" placeholder="" aria-label="" >
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Email</label>
                                    <input name="email" type="text" value="{{ $driver->email ?? "" }}" class="form-control shadow-sm" placeholder="demo@gmail.com" aria-label="" >
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Phone</label>
                                    <input name="phone" type="text" value="{{ $driver->phone ?? "" }}" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12">
                                    <div style="float: right;">
                                        <button class="btn btn-primary shadow" type="submit">Update</button>
                                    </div>

                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
