@extends('dashboard.layout.app')

@section('content')

<!-- Default Basic Forms Start -->
<div class="container">
	<div class="pb-20 card-box mb-30 ">
		<div class="card-body justify-content-center d-flex">
			<form method="POST" action="{{ route('partenaire.update',$partenaires->id) }}" enctype="multipart/form-data">
			      @csrf
                  @method('PUT')
				  <h2 class="text-primary">Editer un Partenaire</h2><br>
				<div class="form-group ">
					<label>Nom</label>
					<input class="form-control" type="text" name="nom" value="{{ $partenaires->nom }}" placeholder="Entrer le titre">
				</div>
				<div class="form-group">
					<label>Selectionner l'image</label>
					<input type="file" name="images" class="form-control-file form-control height-auto">
                    <img src="{{asset('/'.$partenaires->images)}}" width="80px" alt="Partenaire Image">
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