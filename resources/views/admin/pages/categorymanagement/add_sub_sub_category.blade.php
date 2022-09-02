@extends('admin.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('message'))
                        <p class="alert alert-{{ Session::get('alert') }}">{{ Session::get('message') }}</p>
                        @endif
                        <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
                        <h5>Add Sub Sub Category</h5>
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        @if(isset($all_categories) && $all_categories->count() > 0)
                                            <label class="form-label">Parent Category</label>
                                            <select id="parent_id" class="form-control">
                                                <option value="">None</option>
                                                @foreach($all_categories as $all_category)
                                                <option value="{{ $all_category->id }}" >{{ $all_category->name }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <p id="updating" style="display:none;">Updating...</p>
                                        <label class="form-label">Sub Category</label>
                                        <select id="sub_category" class="form-control" name="parent_id">
                                        </select>
                                    </div>
                                </div>
                                <script>
                                    document.getElementById("parent_id").addEventListener("change", displayDate);
                                    
                                    function displayDate() {
                                        var parent_id = document.getElementById('parent_id').value;
                                        loadDoc(parent_id);
                                    }
                                    function loadDoc(parent_id) {
                                      const xhttp = new XMLHttpRequest();
                                      var options;
                                      var updating = document.getElementById('updating');
                                      updating.style.display = "block";
                                      xhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                            var data = JSON.parse(this.responseText);
                                            for(x=0; x<data.length; x++){
                                                options += "<option value='"+data[x].id+"'>";
                                                options += data[x].name;
                                                options += "</option>";
                                            }
                                            document.getElementById('sub_category').innerHTML = options;
                                            updating.style.display = "none";
                                        }
                                      };
                                      xhttp.open("GET", "{{route('category.get')}}?id="+parent_id);
                                      xhttp.send();
                                    }
                                </script>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label class="form-label">Name</label>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="mb-2">
                                        <label class="form-label">Image</label>
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                </div> --}}
                            </div>
                            
                            
                            <div class="mb-2">
                                <label class="form-label">Background Color</label>
                                <input type="color" name="color">
                            </div>
                            
                            <div class="mb-2">
                                <label class="form-label">Status</label>
                                <select class="form-control" name="status">
                                    <option value='1' >Active</option>
                                    <option value='0' >Disable</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection