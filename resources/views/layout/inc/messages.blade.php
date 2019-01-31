 {{--  each error  --}}
@if(count($errors)>0)
@foreach ($errors->all() as $error )
    <ul class="list-group mt-3" style="list-style-type: none;">
    <li class="alert alert-danger">
        {{$error}}
    <li> 
    </ul>  
@endforeach
    
@endif

{{--  success  --}}
@if(session('success'))
<div class="mt-3 alert alert-success">
    {{session('success')}}

</div>  
@endif

{{--  error  --}}
@if(session('error'))
<div class="mt-3 alert alert-danger">
    {{session('error')}}

</div>
    
@endif

