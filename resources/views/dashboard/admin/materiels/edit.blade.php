@extends('dashboard.layout.app')

@section('content')

<!-- Default Basic Forms Start -->
<div class="container">
	<div class="pb-20 card-box mb-30 ">
		<div class="card-body justify-content-center d-flex">
			<form method="POST" action="{{ route('materiel.update',$materiels->id) }}" enctype="multipart/form-data">
			      @csrf
                  @method('PUT')
				  <h2 class="text-primary">Editer un Materiel</h2><br>
				<div class="form-group ">
					<label>Nom</label>
					<input class="form-control" type="text" name="nom" value="{{ $materiels->nom }}" placeholder="Entrer le nom du materiel">
				</div>
                <div class="form-group ">
					<label>Quantitées</label>
					<input class="form-control" type="number" name="qte" value="{{ $materiels->qte }}" placeholder="Entrer la quantitée">
				</div>
				<div class="form-group">
					<label>Selectionner l'image</label>
					<input type="file" name="images_materiels" class="form-control-file form-control height-auto">
                    <img src="{{asset('/'.$materiels->images_materiels)}}" width="80px" alt="Service Image">
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