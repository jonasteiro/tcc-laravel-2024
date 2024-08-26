<!doctype html>
<html>
<body>
	<h1>{{ $title }}</h1>

	@foreach ( $ocorrencias as $ocorrencia )
	<div class="row row-cols-1 row-cols-md-2 g-4">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Titulo: {{ $ocorrencia->titulo }} 
					Descricao: {{ $ocorrencia->descricao }}	
					Pessoas-: {{ $ocorrencia->pessoas }}
                    Data: {{ $ocorrencia->data }}
                    Status: {{ $ocorrencia->status }}
				</div>

			</div>

		</div>
	</div>
	@endforeach
</body>
</html>