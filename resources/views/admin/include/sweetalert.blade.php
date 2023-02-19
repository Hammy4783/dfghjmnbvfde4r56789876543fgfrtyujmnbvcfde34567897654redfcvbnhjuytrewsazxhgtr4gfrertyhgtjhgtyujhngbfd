{{--

@foreach ($errors->all() as $error)
	<div class="alert alert-danger alert-dismissible">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
	    {{ $error }}
	</div>
@endforeach --}}
<script>
    var Toast = Swal.mixin({
     toast: true,
     position: 'top-end',
     showConfirmButton: false,
     timer: 3000
   });
</script>
@if (Session::has('success'))
   <script>
       $(document).ready(function() {
           Toast.fire({
               icon: 'success',
               title: '{!! Session::get('success') !!}'
           });
       })
   </script>
@endif

@if (Session::has('error'))
   <script>
       $(document).ready(function() {
           Toast.fire({
               icon: 'error',
               title: '{!! Session::get('error') !!}'
           });
       })
   </script>
@endif

@if (count($errors->cartErrors->all())) > 0)
@foreach ($errors->cartErrors->all() as $error)
   <script>
       $(document).ready(function() {
           Toast.fire({
               icon: 'error',
               title: '{{ $error }}'
           });
       })
</script>
@endforeach
@endif
