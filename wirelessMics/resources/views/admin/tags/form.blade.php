<div class="form-group">
	<label for="title">Title</label>
	    <input type="text" class="form-control" name="title" id="title">
</div>


                    <label for="email" class="col-md-2 col-form-label text-md-right"> Tag Name</label>
                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $tag->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         {{-- <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="name" value="{{ $tag->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}



<div class="form-group">
	<label for="des">Description</label>
	<textarea name="description" id="des" cols="20" rows="5" id='des' class="form-control"></textarea>
 </div>



    {{-- <div class="field">
        Email: <input type="text" name="email" {{ (Input::old('email')) ? 'value="'. e(Input::old('email')) .'"' : '' }}/>

        @if($errors->has('email'))
            {{ $errors->first('email') }}
        @endif
    </div>

    <div class="field">
        Username: <input type="text" name="username" {{ (Input::old('username')) ? 'value="'. e(Input::old('username')) .'"' : '' }}/>

        @if($errors->has('username'))
            {{ $errors->first('username') }}
        @endif
    </div>

    <div class="field">
        Password: <input type="password" name="password" />

        @if($errors->has('password'))
            {{ $errors->first('password') }}
        @endif
    </div>

    <div class="field">
        Password Again: <input type="password" name="password_again" />

        @if($errors->has('password_again'))
            {{ $errors->first('password_again') }}
        @endif
    </div>


    {{ Form::token() }}


    <input type="submit" value="Create Account"/>
</form> --}}
