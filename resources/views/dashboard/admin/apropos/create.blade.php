@extends('dashboard.layout.app')

@section('content')

<!-- Default Basic Forms Start -->
<div class="container">
	<div class="pb-20 card-box mb-30 ">
		<div class="card-body ">
			<form method="POST" action="{{ route('apropos.store') }}" enctype="multipart/form-data">
			      @csrf
				  <h2 class="text-primary">Ajouter une donnée</h2><br>
				<div class="form-group ">
					<label>Title1</label>
					<input class="form-control" type="text" name="title_1" value="{{ old('title_1') }}" placeholder="Entrer le titre1">
				</div>
                <div class="form-group ">
					<label>Title2</label>
					<input class="form-control" type="text" name="title_2" value="{{ old('title_3') }}" placeholder="Entrer le titre2">
				</div>
                <div class="form-group ">
					<label>Title3</label>
					<input class="form-control" type="text" name="title_3" value="{{ old('title_3') }}" placeholder="Entrer le titre3">
				</div>
				<div class="form-group">
					<label>Selectionner l'image1</label>
					<input type="file" name="images_1" value="{{ old('images_1') }}" class="form-control-file form-control height-auto">
				</div>
                <div class="form-group">
					<label>Selectionner l'image2</label>
					<input type="file" name="images_2" value="{{ old('images_2') }}" class="form-control-file form-control height-auto">
				</div>
                <div class="form-group">
					<label>Selectionner l'image3</label>
					<input type="file" name="images_3" value="{{ old('images_3') }}" class="form-control-file form-control height-auto">
				</div>
                <div class="form-group ">
					<label>Description</label>
					<textarea class="form-control"  name="description"></textarea>
				</div>
                <div class="form-group ">
					<label>Activites</label>
					<input class="form-control" type="text" name="activites" value="{{ old('activites') }}" placeholder="Entrer le nom de l'activité">
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