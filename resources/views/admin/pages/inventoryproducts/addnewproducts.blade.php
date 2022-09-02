@extends('admin.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Add New Product</h5>
                        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-5">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Title</label>
                                    <input name="title" type="text" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Price</label>
                                    <input name="price" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-12 col-lg-12 col-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" row="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-4 col-lg-4 col-12">
                                    <label class="form-label">Image</label>
                                    <input name="image" type="file" class="form-control dropify" required>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Discount</label>
                                    <input name="discount" type="text" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Discount Price</label>
                                    <input name="discount_price" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Unit</label>
                                    <input name="unit" type="text" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Weight</label>
                                    <input name="weight" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Minimum Order</label>
                                    <input name="min_order" type="number" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Ingredients</label>
                                    <input name="ingredients" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Allergen Information</label>
                                    <input name="allergen_information" type="text" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Manufacturer</label>
                                    <input name="manufacturer" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Country Of Origin</label>
                                    <input name="country_of_origin" type="text" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Items Per Unit</label>
                                    <input name="items_per_unit" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Storage Conditions</label>
                                    <input name="storage_conditions" type="text" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Expiration Date</label>
                                    <input name="expiration_date" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Disclaimer</label>
                                    <input name="disclaimer" type="text" class="form-control" required>
                                </div>
                                <div class="mb-2 col-md-6 col-lg-6 col-12">
                                    <label class="form-label">Status</label>
                                    <select name="active" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Disable</option>
                                    </select>
                                </div>
                            </div>
                            
                                <div class="mb-2">
                                    <label class="form-label">Is Product for 18+</label>
                                    <select name="is_18_plus" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            @if(isset($parent_categories) && $parent_categories->count() > 0)
                                <div class="mb-2">
                                    <label class="form-label">Category</label>
                                    <select id="main_category" class="form-control" required>
                                        <option value="">None</option>
                                        @foreach($parent_categories as $parent_category)
                                        <option value="{{ $parent_category->id }}">{{ $parent_category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="mb-2">
                                    <label class="form-label">Sub Category</label>
                                    <select id="sub_category" class="form-control" required>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Sub Sub Category</label>
                                    <select id="sub_sub_category" class="form-control" name="category_id" required>
                                    </select>
                                </div>
                                <p id="working" style="display:none;">Working...</p>
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            @else
                                <div class="alert alert-danger">Category not created,  Cannot be submitted without categories</div>
                            @endif
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
    // main to sub ------------------------- start
        document.getElementById("main_category").addEventListener("change", displayMain);
        var working = document.getElementById("working");
        
        function displayMain() {
            var parent_id = document.getElementById('main_category').value;
            loadSub(parent_id);
        }
        function loadSub(parent_id) {
          const xhttp = new XMLHttpRequest();
          var options;
          working.style.display = "block";
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                for(x=0; x<data.length; x++){
                    options += "<option value='"+data[x].id+"'>";
                    options += data[x].name;
                    options += "</option>";
                }
                document.getElementById('sub_category').innerHTML = "<option value=''>None</option>";
                document.getElementById('sub_category').innerHTML += options;
                working.style.display = "none";
            }
          };
          xhttp.open("GET", "{{route('category.get')}}?id="+parent_id);
          xhttp.send();
        }
    // main to sub ------------------------- end
    // sub to sub sub ------------------------- start
        document.getElementById("sub_category").addEventListener("change", displaySub);
        
        function displaySub() {
            var parent_id = document.getElementById('sub_category').value;
            loadSubSub(parent_id);
        }
        function loadSubSub(parent_id) {
          const xhttp = new XMLHttpRequest();
          var options;
          working.style.display = "block";
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                for(x=0; x<data.length; x++){
                    options += "<option value='"+data[x].id+"'>";
                    options += data[x].name;
                    options += "</option>";
                }
                document.getElementById('sub_sub_category').innerHTML = "<option value=''>None</option>";
                document.getElementById('sub_sub_category').innerHTML += options;
                working.style.display = "none";
            }
          };
          xhttp.open("GET", "{{route('category.get')}}?id="+parent_id);
          xhttp.send();
        }
    // sub to sub sub ------------------------- end
    </script>
@endsection
