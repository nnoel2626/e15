Display validation error on your view
@if (count($errors) > 0)
 <div class="alert alert-danger">
   <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
   </ul>
 </div>
@endif


Display all validation error
{{print_r($errors)}}

@if(Session::get('errors'))
   <div class="alert alert-danger alert-dismissable">
      @foreach($errors->all() as $msg)
           <li> {{ $msg }} </li>
      @endforeach
   </div>
@endif
