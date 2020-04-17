# Origina Form
 {-- <div class="box">
			  <div class="box-header">
				  <h3 class="card-header">Microphones</h3>
			  </div>

			    <div class="box-body">


                      <form action = "{{ route ('admin.mics.update', $microphone->id ) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="name">Microphone Slug</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="slug" placeholder="Microphone URI Slug"
                            name="slug" value="{{old('slug', $microphone->slug) }}" required autocomplete="slug" autofocus/>
                             @if ($errors->has('slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="building">Building</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="building" id="building" placeholder="building"  name="building" value="{{ old('building', $microphone->building)}}" required autocomplete="building" autofocus/>
                             @if ($errors->has('building'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('building') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="room">Room</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="room" placeholder="room"
                             name="room" value="{{ old('room', $microphone->room) }}" required autocomplete="room" autofocus/>
                              @if ($errors->has('room'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('room') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="make">Make</label>
                        <div class="col-md-8">
                            <input type="make" class="form-control" name="make" id="make" placeholder="make"
                             value="{{old('make', $microphone->make) }}" required autocomplete="make" autofocus/>
                              @if ($errors->has('make'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('make') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="model">Model</label>
                        <div class="col-md-8">
                            <input type="model" class="form-control" name="model" id="model" placeholder=" model"
                         value="{{ old('model',$microphone->model) }}" required autocomplete="model" autofocus/>
                          @if ($errors->has('model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                     <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="frequency band">Frequency Band</label>
                        <div class="col-md-8">
                            <input type="band" class="form-control" name="band" id="band" placeholder="frequency band"
                         value="{{ old('band',$microphone->band)}}" required autocomplete="band" autofocus/>
                          @if ($errors->has('band'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('band') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="frequency_range">Frequency Range</label>
                        <div class="col-md-8">
                            <input type="frequency_range" class="form-control" name="frequency_range" id="frequency_range" placeholder="frequency range"
                             value="{{ old('frequency_range', $microphone->frequency_range) }}" required autocomplete="frequency_range" autofocus/>
                              @if ($errors->has('frequency_range'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('frequency_range') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                     <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="make">Serial Number</label>
                        <div class="col-md-8">
                            <input type="serial_number" class="form-control" name="serial_number" id="serial_number" placeholder="serial number"
                         value="{{ old('serial_number', $microphone->serial_number) }}" required autocomplete="serial_number" autofocus/>
                          @if ($errors->has('serial_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('serial_number') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="micType">Microphone type</label>
                        <div class="col-md-8">
                            <input type="type" class="form-control" name="type" id="type" placeholder="microphone type"
                         value="{{ old('type', $microphone->type) }}" required autocomplete="type" autofocus/>
                          @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="group">Group</label>
                        <div class="col-md-8">
                            <input type="group" class="form-control" name="group" id="group" placeholder="group"
                         value="{{ old('group', $microphone->group) }}" required autocomplete="group" autofocus/>
                          @if ($errors->has('group'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('group') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="channel">Channel</label>
                        <div class="col-md-8">
                            <input type="channel" class="form-control" name="channel" id="channel" placeholder="channel"
                         value="{{ old('channel', $microphone->channel) }}" required autocomplete="channel" autofocus/>
                          @if ($errors->has('channel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('channel') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="assigned_frequency">Assigned Frequency</label>
                        <div class="col-md-8">
                            <input type="assigned_frequency" class="form-control" name="assigned_frequency" id="assigned_frequency" placeholder="assigned frequency"
                            value="{{ old('assigned_frequency', $microphone->assigned_frequency) }}" required autocomplete="assigned_frequency" autofocus/>
                             @if ($errors->has('assigned_frequency'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assigned_frequency') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 text-md-right" for="comments">microphone comments</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="4" cols="50" name="comments" id="comments" placeholder="comments" value="{{ old('comments', $microphone->comments) }}" required  autocomplete="comments" autofocus>
                                 @if ($errors->has('comments'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comments') }}</strong>
                                    </span>
                                @endif
                            </textarea>
                        </div>
                    </div>
                    <br>
                      <div class="form-group row">
                    <label for="tags" class="col-md-2 col-form-label text-md-right">Tags</label>
                        <div class="col-md-6">
                            @foreach( $tags as $tag)
                                <div class ="form-check">
                                    <input type ="checkbox" name="tags[]" value ="{{ $tag->id }}"
                                    @if($microphone->tags->pluck('id')->contains($tag->id)) checked @endif>
                                    <label>{{ $tag->name }}</label>
                                </div>
                            @endforeach
                        </div>
                      </div>


                    <div class="form-group form-row mb-0">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-success d-block ml-auto">
                                Edit microphone
                            </button>
                        </div>
                    </div>

                </form>
                </div>
    </div> --}}

<div class="container">
    <div class="row justify-content-center">
         <div class="container">
    <div class="col-12">
        <div class="card textcenter mt-3">
            <div class="card-header bg-header text-black">
                <span class="glyphicon glyphicon-plus"></span>Edit a Microphone
            </div>
            <div class="card-body">
                <form action = "{{ route ('admin.mics.update', $microphone->id ) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="name">Microphone Slug</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="slug" placeholder="Microphone URI Slug"
                            name="slug" value="{{old('slug', $microphone->slug) }}" required autocomplete="slug" autofocus/>
                             @if ($errors->has('slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="building">Building</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="building" id="building" placeholder="building"  name="building" value="{{ old('building', $microphone->building)}}" required autocomplete="building" autofocus/>
                             @if ($errors->has('building'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('building') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="room">Room</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="room" placeholder="room"
                             name="room" value="{{ old('room', $microphone->room) }}" required autocomplete="room" autofocus/>
                              @if ($errors->has('room'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('room') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="make">Make</label>
                        <div class="col-md-8">
                            <input type="make" class="form-control" name="make" id="make" placeholder="make"
                             value="{{old('make', $microphone->make) }}" required autocomplete="make" autofocus/>
                              @if ($errors->has('make'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('make') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="model">Model</label>
                        <div class="col-md-8">
                            <input type="model" class="form-control" name="model" id="model" placeholder=" model" value="{{ old('model',$microphone->model) }}" required autocomplete="model" autofocus/>
                          @if ($errors->has('model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                     <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="frequency band">Frequency Band</label>
                        <div class="col-md-8">
                            <input type="band" class="form-control" name="band" id="band" placeholder="frequency band"
                         value="{{ old('band',$microphone->band)}}" required autocomplete="band" autofocus/>
                          @if ($errors->has('band'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('band') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="frequency_range">Frequency Range</label>
                        <div class="col-md-8">
                            <input type="frequency_range" class="form-control" name="frequency_range" id="frequency_range" placeholder="frequency range"
                             value="{{ old('frequency_range', $microphone->frequency_range) }}" required autocomplete="frequency_range" autofocus/>
                              @if ($errors->has('frequency_range'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('frequency_range') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                     <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="make">Serial Number</label>
                        <div class="col-md-8">
                         <input type="serial_number" class="form-control" name="serial_number" id="serial_number" placeholder="serial number"
                         value="{{ old('serial_number', $microphone->serial_number) }}" required autocomplete="serial_number" autofocus/>
                          @if ($errors->has('serial_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('serial_number') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="micType">Microphone type</label>
                        <div class="col-md-8">
                            <input type="type" class="form-control" name="type" id="type" placeholder="microphone type"
                         value="{{ old('type', $microphone->type) }}" required autocomplete="type" autofocus/>
                          @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="group">Group</label>
                        <div class="col-md-8">
                            <input type="group" class="form-control" name="group" id="group" placeholder="group"
                         value="{{ old('group', $microphone->group) }}" required autocomplete="group" autofocus/>
                          @if ($errors->has('group'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('group') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="channel">Channel</label>
                        <div class="col-md-8">
                            <input type="channel" class="form-control" name="channel" id="channel" placeholder="channel"
                         value="{{ old('channel', $microphone->channel) }}" required autocomplete="channel" autofocus/>
                          @if ($errors->has('channel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('channel') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="assigned_frequency">Assigned Frequency</label>
                        <div class="col-md-8">
                            <input type="assigned_frequency" class="form-control" name="assigned_frequency" id="assigned_frequency" placeholder="assigned frequency"
                            value="{{ old('assigned_frequency', $microphone->assigned_frequency) }}" required autocomplete="assigned_frequency" autofocus/>
                             @if ($errors->has('assigned_frequency'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assigned_frequency') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 text-md-right" for="comments">microphone comments</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="4" cols="50" name="comments" id="comments" placeholder="comments" value="{{ old('comments', $microphone->comments) }}" required  autocomplete="comments" autofocus>
                                 @if ($errors->has('comments'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comments') }}</strong>
                                    </span>
                                @endif
                            </textarea>
                        </div>
                    </div>
                    <br>
                      <div class="form-group row">
                    <label for="tags" class="col-md-2 col-form-label text-md-right">Tags</label>
                        <div class="col-md-6">
                            @foreach( $tags as $tag)
                                <div class ="form-check">
                                    <input type ="checkbox" name="tags[]" value ="{{ $tag->id }}"
                                    @if($microphone->tags->pluck('id')->contains($tag->id)) checked @endif>
                                    <label>{{ $tag->name }}</label>
                                </div>
                            @endforeach
                        </div>
                      </div>


                    <div class="form-group form-row mb-0">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-success d-block ml-auto">
                                Edit microphone
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
    </div>
</div>

#LTE2 Admin Panel
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


              <form role="form">

                <div class="card-body">


                  <div class="form-group">

                <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>



                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Different Height</h3>
              </div>
              <div class="card-body">
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                <br>
                <input class="form-control" type="text" placeholder="Default input">
                <br>
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Different Width</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder=".col-3">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder=".col-4">
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control" placeholder=".col-5">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Addon</h3>
              </div>
              <div class="card-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <h4>With icons</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-dollar-sign"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-ambulance"></i></div>
                  </div>
                </div>

                <h5 class="mt-4 mb-2">With checkbox and radio inputs</h5>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox">
                        </span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><input type="radio"></span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->

                <h5 class="mt-4 mb-2">With buttons</h5>

                <p>Large: <code>.input-group.input-group-lg</code></p>

                <div class="input-group input-group-lg mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                      Action
                    </button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a href="#">Action</a></li>
                      <li class="dropdown-item"><a href="#">Another action</a></li>
                      <li class="dropdown-item"><a href="#">Something else here</a></li>
                      <li class="dropdown-divider"></li>
                      <li class="dropdown-item"><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>Normal</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-danger">Action</button>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>Small <code>.input-group.input-group-sm</code></p>
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                  </span>
                </div>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text Disabled</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Textarea Disabled</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                      </div>
                    </div>
                  </div>

                  <!-- input states -->
                  <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                      success</label>
                    <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                      warning</label>
                    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Input with
                      error</label>
                    <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked>
                          <label class="form-check-label">Checkbox checked</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" disabled>
                          <label class="form-check-label">Checkbox disabled</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Radio</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" checked>
                          <label class="form-check-label">Radio checked</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" disabled>
                          <label class="form-check-label">Radio disabled</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Disabled</label>
                        <select class="form-control" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Select Multiple</label>
                        <select multiple class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Multiple Disabled</label>
                        <select multiple class="form-control" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Custom Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                          <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>
                          <label for="customCheckbox2" class="custom-control-label">Custom Checkbox checked</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled>
                          <label for="customCheckbox3" class="custom-control-label">Custom Checkbox disabled</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                          <label for="customRadio1" class="custom-control-label">Custom Radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked>
                          <label for="customRadio2" class="custom-control-label">Custom Radio checked</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio3" disabled>
                          <label for="customRadio3" class="custom-control-label">Custom Radio disabled</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Custom Select</label>
                        <select class="custom-select">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Custom Select Disabled</label>
                        <select class="custom-select" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Custom Select Multiple</label>
                        <select multiple class="custom-select">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Custom Select Multiple Disabled</label>
                        <select multiple class="custom-select" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                      <label class="custom-control-label" for="customSwitch1">Toggle this custom switch element</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3">
                      <label class="custom-control-label" for="customSwitch3">Toggle this custom switch element with custom colors danger/success</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                      <label class="custom-control-label" for="customSwitch2">Disabled custom switch element</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="customRange1">Custom range</label>
                    <input type="range" class="custom-range" id="customRange1">
                  </div>
                  <div class="form-group">
                    <label for="customRange1">Custom range (custom-range-danger)</label>
                    <input type="range" class="custom-range custom-range-danger" id="customRange1">
                  </div>
                  <div class="form-group">
                    <label for="customRange1">Custom range (custom-range-teal)</label>
                    <input type="range" class="custom-range custom-range-teal" id="customRange1">
                  </div>
                  <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group">
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


    {{-- @extends('layouts.')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $users as $user)
                            <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td> {{ $user->name  }}</td>
                            <td> {{ $user->email  }}</td>
                            <td> {{ implode( ',', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                                <a href="{{ route ('admin.users.edit', $user->id) }}"><button type="button" class="btn btn-primary float-left">Edit</button></a>


                                 @can('delete-users')
                                    {{-- <form action= "{{ route ('admin.users.destroy', $user) }}" method="POST" class="float-left">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-warning">Delete</button>
                                    </form> --}}

                                    {{-- <form id="delete-form" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="button" class="btn btn-danger " data-dismiss="modal">No</button>

                                        <span class="text-right">
                                            <button type="button" class="btn btn-primary btndelete">Yes</button>
                                        </span>
                                    </form
                                 @endcan
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}
