@extends('layouts.app')

@section('scripts')
	<script type="text/javascript">
		alert('yahooo');
	</script>
@endsection

@section('styles')
	<style type="text/css">
		* {
			color: red;
		}
	</style>
@endsection

@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				about us from blade template
			</div>
		</div>
	</div>
@endsection
