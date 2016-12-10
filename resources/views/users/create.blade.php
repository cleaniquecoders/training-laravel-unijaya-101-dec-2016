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

                {!! Former::text('name')->label('Name') !!}
                @include('components.forms.error',['name' => 'name'])

                {!! Former::text('email')->type('email')->value(old('email')) !!}
                @include('components.forms.error',['name' => 'email'])

                {!! Former::text('password')->type('password')->value(old('password')) !!}
                @include('components.forms.error',['name' => 'password'])

                {!! Former::text('password_confirmation')->label('Confirm Passsword')->type('password') !!}
                @include('components.forms.error',['name' => 'password_confirmation'])

                <button type="submit" class="btn btn-success">Create</button>
                <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>

            {!! Former::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
