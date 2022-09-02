@extends('admin.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <a href="{{route('tags.create')}}" class="btn btn-primary" >
                                    Add Tag
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
                        @if(@isset($tags) && $tags->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Name</th>
                                            <th>Icon</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($count = 1)
                                        @foreach($tags as $tag)
                                            <tr>
                                                <td>{{ $count }}</td>
                                                <td>{{$tag->name}}</td>
                                                <td>
                                                    <img src="{{ asset('/storage/app/public/images/'.$tag->icon) }}" class="img-fluid" width="120">
                                                </td>
                                                <td>
                                                    {{$tag->created_at}}
                                                </td>
                                                <td>
                                                    <div style="display: flex;">
                                                        <a href="{{ route('tags.edit',['id'=>$tag->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                        <form action="{{ route('tags.destroy',['id'=>$tag->id]) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
                                            <th>Name</th>
                                            <th>Icon</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
