@extends('layouts.app')

@section('content')
	<div class="container">
		{{ $users->links() }}
		<ul>
			@foreach($users as $user)
				<li>{{ $user->name }}</li>
			@endforeach
		</ul>
		{{ $users->links() }}
	</div>
@endsection
