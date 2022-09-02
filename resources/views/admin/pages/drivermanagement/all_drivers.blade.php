@extends('admin.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Drivers</h5>
                            <div class="table-responsive">
                                @if(sizeof($drivers) > 0)
                                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($drivers as $driver)
                                                <tr>
                                                    <td>{{ $driver->first_name }} {{ $driver->last_name }}</td>
                                                    <td>{{ $driver->email }}</td>
                                                    <td>{{ $driver->phone }}</td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <a href="{{route('orders_by_drivers',['id'=>$driver->id])}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                                            &nbsp;
                                                            <a href="{{route('edit_driver',['id'=>$driver->id])}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                {{__('No Driver Available')}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Amir Irwin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="card shadow">
                                        <div class="text-center">
                                            <img src="assets/images/user_img.jpg" class="card-img-top" style="width: 150px; height: 150px;" alt="...">
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title mt-1">Amir Irwin</h5>
                                            <p class="card-text"><i class="fas fa-project-diagram"></i> Points:160</p>
                                        </div>
                                        <hr>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Total Orders <span class="float-lg-end">16</span> </li>
                                            <li class="list-group-item">Cancel Orders <span class="float-lg-end">0</span> </li>
                                            <li class="list-group-item">Total Earnings <span class="float-lg-end">£ 269.16</span> </li>
                                            <li class="list-group-item">Last Month Earnings <span class="float-lg-end">£ 9.96</span> </li>
                                        </ul>
                                        <hr>
                                        <div class="card-body text-center">
                                            <span class="badge bg-success">Inactive</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="card shadow">
                                        <div class="card-header">
                                            About Amir Irwin
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="fas fa-envelope"></i> Email <br> demo@gmail.com</li>
                                            <li class="list-group-item"><i class="fas fa-phone"></i> Phone <br> +921234567</li>
                                            <li class="list-group-item"><i class="fas fa-map-pin"></i> Location <br> Thokar Niaz baig</li>
                                            <li class="list-group-item"><i class="fas fa-image"></i> Licence</li>
                                            <div class="text-center">
                                                <img src="assets/images/user_img.jpg" class="card-img-top" style="width: 300px; height: 310px;" alt="...">
                                            </div>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                    <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            alert("Do you really want to delete this country?");
        }
    </script>

@endsection
