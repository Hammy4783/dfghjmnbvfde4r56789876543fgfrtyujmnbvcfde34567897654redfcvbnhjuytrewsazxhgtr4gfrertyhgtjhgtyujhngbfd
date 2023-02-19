{{-- @foreach ($errors->all() as $error)
	<div class="alert alert-danger alert-dismissible">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
	    {{ $error }}
	</div>
@endforeach --}}

@if (Session::has('success'))
    <script>
        $(document).ready(function() {
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Success',
                    body: '{!! Session::get('success') !!}'
                })
        });
    </script>
@endif

@if (Session::has('error'))
    <script>
        $(document).ready(function() {
            $(document).Toasts('create', {
                class: 'bg-danger',
                title: 'Error',
                body: '{!! Session::get('error') !!}'
            })
        })
    </script>
@endif
