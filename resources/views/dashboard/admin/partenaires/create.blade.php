@extends('dashboard.layout.app')

@section('content')

<!-- Default Basic Forms Start -->
<div class="container">
	<div class="pb-20 card-box mb-30 ">
		<div class="card-body justify-content-center d-flex">
			<form method="POST" action="{{ route('partenaire.store') }}" enctype="multipart/form-data">
			      @csrf
				  <h2 class="text-primary">Ajouter un Partenaire</h2><br>
				<div class="form-group ">
					<label>Nom</label>
					<input class="form-control" type="text" name="nom" value="{{ old('nom') }}" placeholder="Entrer le titre">
				</div>
				<div class="form-group">
					<label>Selectionner l'image</label>
					<input type="file" name="images" value="{{ old('images') }}" class="form-control-file form-control height-auto">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Envoyer</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- horizontal Basic Forms End -->
@endsection