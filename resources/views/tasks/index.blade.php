@extends('layouts.app')

@section('content')
	@include('components.list', [
		'route' => 'tasks',
		'resources' => $tasks,
		'headings' => [
			[
				'label' => 'Title',
				'attr' => 'title',
			],
		]
	])
@endsection
