@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					{{ __('Dashboard') }}
				</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					{{ __('I am using MD Bootstrap CSS Framework') }}
				</div>
				<div class="card-footer text-center">
					<button class="btn btn-primary">MDB Button</button>
					<button class="btn btn-dark">BTN DARK</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection