
@if(count($errors) > 0)
 @foreach ($errors->all() as $error)
    <script type="text/javascript">

    toastr.error('{{$error}}', 'Error!,' {timeOut: 5000})
    
    </script>
@endforeach
@endif

@if(session('success'))
<script type="text/javascript">
	toastr.success("{{session('success')}}!", 'Success')
</script>  
@endif


@if(session('error'))
<script type="text/javascript">
	toastr.error('{{session('error')}}', 'Error!,' {timeOut: 5000})
</script>
@endif

@if(session('warning'))
<script type="text/javascript">
	toastr.warning("{{session('warning')}}!")
</script>
@endif

@if(session('subscribe-success'))
<script type="text/javascript">
      $(function(){
		Swal.fire({
		title: 'Good Job!',
		icon: 'subscribe-success',
		text: "{{session('subscribe-success')}}",
		footer: "<a href=''>Pantha Company</a>",
		});
   });
</script>  
@endif

@if(session('info'))
<script type="text/javascript">
      $(function(){
      	Swal.fire({
		  title: "Notice",
		  text: "{{session('warning')}}",
		  icon: "info",
		});
   });
</script>
@endif
