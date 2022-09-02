@extends('admin.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <a href="{{route('nutritions.create')}}" class="btn btn-primary" >
                                    Add Nutrition
                                </a>
                                <a href="{{route('nutritions.index')}}" class="btn btn-primary" >
                                    All Nutritions
                                </a>
                            </div>
                        </div>
                        <div class="row mt-5">
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="float-lg-end">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            @if(isset($nutritions) && $nutritions->count() > 0)
                            @php($count = 1)
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>typical_values</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($nutritions as $nutrition)
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ $nutrition->typical_values }}</td>
                                            <td>
                                                <div style="display: flex;">
                                                    <form action="{{ route('nutritions.hard.delete',['id'=>$nutrition->id]) }}" method="post">
                                                        @csrf
                                                        <button class="btn btn-danger" type="submit">Permanent Delete</button>
                                                    </form>
                                                    <form action="{{ route('nutritions.restore',['id'=>$nutrition->id]) }}" method="post">
                                                        @csrf
                                                        <button class="btn btn-success" type="submit">Restore</button>
                                                    </form>
                                                </div>
                                            </td>
                                    </tr>
                                    @php($count++)
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>typical_values</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            @else
                            {{__('No Nutrition Found')}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            Are you sure to Delete?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-primary">Yes</button>
            </div>
        </div>
        </div>
    </div>
@endsection
