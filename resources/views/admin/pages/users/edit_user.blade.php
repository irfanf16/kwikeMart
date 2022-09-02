@extends('admin.layout.master')
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
            <a class="btn btn-success mb-2" href="{{ route('user.index') }}">Back</a>
            <!--form layout-->

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            @if(Session::has('message'))
                            <p class="alert alert-{{ Session::get('alert') }}">{{ Session::get('message') }}</p>
                            @endif
                            <form action="{{route('user.update',['id'=>$user->id])}}" method="post">
                                @csrf
                                <h5 class="card-title">Edit User</h5>
                                <div class="row mt-5">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">First Name</label>
                                        <input name="first_name" type="text" value="{{ $user->first_name ?? "" }}" class="form-control shadow-sm" placeholder="" aria-label="">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">Last Name</label>
                                        <input name="last_name" type="text" value="{{ $user->last_name ?? "" }}" class="form-control shadow-sm" placeholder="" aria-label="">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">Email</label>
                                        <input name="email" type="text" value="{{ $user->email ?? "" }}" class="form-control shadow-sm" placeholder="" aria-label="First name">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">Phone</label>
                                        <input name="phone" type="text" value="{{ $user->phone ?? "" }}" class="form-control shadow-sm" placeholder="" aria-label="">
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
