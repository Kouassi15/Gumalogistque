@extends('dashboard.layout.app')

@section('content')

<!-- Default Basic Forms Start -->
<div class="container">
	<div class="pb-20 card-box mb-30 ">
		<div class="card-body justify-content-center d-flex">
			<form method="POST" action="{{ route('dashboard.store') }}" enctype="multipart/form-data">
			      @csrf
				<div class="form-group ">
					<label>Nom</label>
					<input class="form-control" type="text" name="nom" value="{{ old('nom') }}" placeholder="Entrer le nom du materiel">
				</div>
                <div class="form-group ">
					<label>Quantitées</label>
					<input class="form-control" type="text" name="qte" value="{{ old('qte') }}" placeholder="Entrer la quantitée">
				</div>
				<div class="form-group">
					<label>Selectionner l'image</label>
					<input type="file" name="images_materiels" value="{{ old('images_materiels') }}" class="form-control-file form-control height-auto">
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