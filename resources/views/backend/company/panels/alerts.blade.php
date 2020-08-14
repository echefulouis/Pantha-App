
@if(count($errors) > 0)
 @foreach ($errors->all() as $error)
    <script type="text/javascript">
      $(function(){
		Swal.fire({
		  position: 'top-end',
		  icon: 'error',
		  text: "{{$error}}",
		  showConfirmButton: false,
  		  timer: 2500,
		});
    });
    </script>
@endforeach
@endif

@if(session('success'))
<script type="text/javascript">
      $(function(){
		Swal.fire({
		title: 'Good Job!',
		icon: 'success',
		text: "{{session('success')}}",
		footer: "<a href=''>Pantha Company</a>",
		});
   });
</script>  
@endif

@if(session('error'))
<script type="text/javascript">
      $(function(){
		Swal.fire({
		  position: 'top-end',
		  icon: 'error',
		  text: "{{session('error')}}",
		  showConfirmButton: false,
  		  timer: 2500,
		});
   });
</script>
@endif

@if(session('warning'))
<script type="text/javascript">
      $(function(){
      	Swal.fire({
		  title: "Notice",
		  text: "{{session('warning')}}",
		  icon: "warning",
		  showConfirmButton: false,
  		  timer: 2500,
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
