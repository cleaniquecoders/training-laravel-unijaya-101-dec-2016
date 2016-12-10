@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New User</div>
                <div class="panel-body">
            {!!
                Former::horizontal_open()->method('POST')->route('users.store')->open()
            !!}
                <div class="col-md-6 col-md-offset-3">

                @include('components.forms.input',['name' => 'name', 'type' => 'text'])

                @include('components.forms.input',['name' => 'email', 'type' => 'email'])

                @include('components.forms.input',['name' => 'password', 'type' => 'password'])

                @include('components.forms.input',['name' => 'password_confirmation', 'type' => 'password'])

                <hr>

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                        <a href="{{ route('users.index') }}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            {!! Former::close() !!}

            </div>
            </div>
        </div>
    </div>
</div>
@endsection
