@extends('layouts.admin')

@section('content')

<div class="card card-primary">
    <h3 class="card-title">Edit User</h3>

     {{-- <div class="card-header">Edit user {{ $user->name }}</div> --}}
                 <form role="form" action= "{{ route ('admin.users.update', $user) }}" method="POST">
                 {{ csrf_field() }}
                  {{ method_field('PUT') }}


                <div class="card-body">

                    <div class="form-grou col-md-8">

                       <label for="email" >Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $user->email) }}" required autocomplete="email" autofocus/>
                         @include('includes.error-field', ['fieldName' => 'email'])
                        </div>

                    <div class="form-group col-md-8">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old ('name', $user->name) }}" required autofocus/>
                        @include('includes.error-field', ['fieldName' => 'name'])
                     </div>

                    <div class="form-group col-md-8">
                    <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                        <div class="col-md-6">
                            @foreach( $roles as $role)
                                <div class ="form-check">
                                    <input type ="checkbox" name="roles[]" value ="{{ old('role',$role->id) }}"
                                    @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                    <label>{{ $role->name }}</label>
                                </div>
                            @endforeach
                        </div>
                      </div>




                   <div class="card-footer col-md-10">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>

            </div>







{{--
                 <div class="card-body">

                    <form action= "{{ route ('admin.users.update', $user) }}" method="POST">
                     <div class="form-group row">




                         <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                     <div class="form-group row">





                    <button type ="submit" class = "btn btn-primary">Update</button>



                    </form>




                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
