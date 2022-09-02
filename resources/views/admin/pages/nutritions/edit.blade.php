@extends('admin.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Edit Nutrition - {{ $nutrition->typical_values }}</h5>
                        <form action="{{ route('nutritions.update',['id'=>$nutrition->id]) }}" method="post">
                            @csrf
                            <div class="row mt-5">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">typical_values</label>
                                    <input name="typical_values" type="text" value="{{ $nutrition->typical_values }}" class="form-control" required>
                                </div>
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Update Nutrition</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
