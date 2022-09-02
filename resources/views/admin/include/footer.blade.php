
<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{!! session('error') !!}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"positionClass": "toast-bottom-full-width"
  }
  		toastr.info("{{ session('info') }}");
  @endif
  
  @if (Session::has('success'))
        toastr.options.positionClass = 'toast-bottom-right';
        toastr.success("{{ Session::get('success') }}");
  @endif
  
  
  @if (Session::has('alert'))
        toastr.options.positionClass = 'toast-bottom-right';
        toastr.alert("{{ Session::get('alert') }}");
  @endif


  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"positionClass": "toast-bottom-right"
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
  
</script>

<!-- Javascript -->
<script src="{{asset('public/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('public/assets/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('public/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('public/assets/js/index.js')}}"></script>


<!--Table/Data Table JS-->
<script src="{{asset('public/assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('public/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('public/assets/js/pages/tables/jquery-datatable.js')}}"></script>


<!--Image Uplaod And View JS -->
<script src="{{asset('public/assets/vendor/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('public/assets/js/pages/forms/dropify.js')}}"></script>

<!--Multi Select JS -->
<script src="{{asset('public/assets/vendor/multi-select/js/jquery.multi-select.js')}}"></script><!-- Multi Select Plugin Js -->
<script src="{{asset('public/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>

<!--Summer Notes JS -->
<script src="{{asset('public/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('public/assets/vendor/summernote/dist/summernote.js')}}"></script>

<script>
    $(function () {
    // Summernote
    $('.textarea').summernote()
  })
  </script>
