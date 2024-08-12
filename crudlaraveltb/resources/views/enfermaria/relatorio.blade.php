<!doctype html>
<html>
<body>
	<h1>{{ $title }}</h1>

	@foreach ( $enfermarias as $enfermaria )
	<div class="row row-cols-1 row-cols-md-2 g-4">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Nome: {{ $enfermaria->Nome }} 
					Data: {{ $enfermaria->Data }}	
					Status: {{ $enfermaria->Status }}
				</div>

			</div>

		</div>
	</div>
	@endforeach
</body>
</html>