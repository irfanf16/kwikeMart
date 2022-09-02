@extends('admin.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(isset($stores) && $stores->count() > 0)
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Email</th>
                                            <th>ZIP</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Opening Closing Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($stores as $store)
                                            <tr>
                                                <td>{{ $store->id }}</td>
                                                <td>{{ $store->description }}</td>
                                                <td>{{ $store->name }}</td>
                                                <td>{{ $store->email }}</td>
                                                <td>{{ $store->zip_code }}</td>
                                                <td>{{ $store->address }}</td>
                                                <td>{{ $store->mobile }}</td>
                                                <td>{{ $store->opening_Closing_time }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Email</th>
                                            <th>ZIP</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Opening Closing Time</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
