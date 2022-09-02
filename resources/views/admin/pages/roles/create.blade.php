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

            <!--form layout-->

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Role</h5>
                            <form action="{{ route('roles.store') }}" method="POST">
                                @csrf
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="name">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection