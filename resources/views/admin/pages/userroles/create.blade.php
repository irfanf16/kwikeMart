@extends('admin.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <form action="{{ route('userroles.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label>Users</label>
                                    <select name="user_id" class="form-control">
                                        @isset($users)
                                            @foreach ($users as $user)
                                                <option value="{{$user->id}}">{{$user->id}} {{$user->first_name}} {{$user->last_name}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                    
                                    <label>Roles</label>
                                    <select name="role_id" class="form-control">
                                        @isset($roles)
                                            @foreach ($roles as $role)
                                                <option value="{{$role->id}}">{{$role->id}} {{$role->name}} </option>
                                            @endforeach
                                        @endisset
                                    </select>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection