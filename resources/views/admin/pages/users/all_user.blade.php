@extends('admin.layout.master')
@section('content')


<style>
    .btnstyle {
        background-color: #414bb2;
        color: white;
    }
    
    .btnstyle:hover{
        background-color: #414bb2;
        color: white;
    }
</style>

    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-5">
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="float-lg-end">
                                </div>
                            </div>
                        </div>
                        <h2 class="card-title">All Users</h2>
                        <div class="table-responsive">
                            @if(isset($users) && $users->count() > 0)
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>
                                            @foreach($user->roles as $role)
                                                {{ $role->name }}
                                                <br>
                                            @endforeach
                                        </td>
                                        <td>
                                            <div style="display: flex;">
                                                <a href="{{route('user.show',['id'=>$user->id])}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                                &nbsp;
                                                <a href="{{route('user.edit',['id'=>$user->id])}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            @else
                            {{__("No Users Found")}}
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <label for="formFile" class="form-label">Add Item Image</label>
                            <input type='file' />
                            <br>
                            <img class="img-fluid" id="myImg" src="#">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <label for="formFile" class="form-label">Select Category</label>
                            <select class="form-select shadow-sm" id="autoSizingSelect">
                                <option selected="">Choose...</option>
                                <option value="1">Baby Products</option>
                                <option value="2">Households</option>
                            </select>
                        </div>


                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12 col-lg-12">
                            <label for="formFile" class="form-label">Select Sub Category</label>
                            <select class="form-select shadow-sm" id="autoSizingSelect">
                                <option selected="">Choose...</option>
                                <option value="1">Lotions</option>
                                <option value="2">Cleaning spray</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12 col-lg-12">
                            <label for="formFile" class="form-label">Add Items</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary shadow" type="button" data-bs-dismiss="modal">Save</button>
                    <button class="btn btn-primary shadow" type="submit">Send For Approval</button>
                </div>
            </div>
        </div>
    </div>
@endsection