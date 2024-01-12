@extends('dashboard.layout.app')

@section('content')

<!-- Default Basic Forms Start -->
<div class="container">
	<div class="pb-20 card-box mb-30 ">
		<div class="card-body ">
			<form method="POST" action="{{ route('equipe.update',$equipe->id) }}" enctype="multipart/form-data">
			      @csrf
                  @method('PUT')
				  <h2 class="text-primary">Editer un membre</h2><br>
                  <div class="form-group ">
					<label>Nom & Prenom</label>
					<input class="form-control" type="text"  name="nom_membre" value="{{ $equipes->nom_membre }}" placeholder="Entrer le nom ">
				</div>
                <div class="form-group ">
					<label>Postes</label>
					<input class="form-control" type="text" name="poste_membre" value="{{ $equipes->poste_membre) }}" placeholder="Entrer le poste du membre">
				</div>
                <div class="form-group ">
					<label>Diplôme</label>
					<input class="form-control" type="text" name="diplome_membre" value="{{$equipes->diplome_membre }}" placeholder="Entrer le diplome">
				</div>
				<div class="form-group ">
					<label>Title1</label>
					<input class="form-control" type="text" name="title1" value="{{ $equipes->title1 }}" placeholder="Entrer le titre1">
				</div>
                <div class="form-group ">
					<label>Title2</label>
					<input class="form-control" type="text" name="title2" value="{{ $equipes->title3 }}" placeholder="Entrer le titre2">
				</div>
                <div class="form-group ">
					<label>Title3</label>
					<input class="form-control" type="text" name="title3" value="{{ $equipes->title3 }}" placeholder="Entrer le titre3">
				</div>
				<div class="form-group">
					<label>Selectionner l'image1</label>
					<input type="file" name="images1" class="form-control-file form-control height-auto">
                    <img src="{{asset('/'.$equipes->images1)}}" width="80px" alt="equipe Image">
				</div>
                <div class="form-group">
					<label>Selectionner l'image2</label>
					<input type="file" name="images2" class="form-control-file form-control height-auto">
                    <img src="{{asset('/'.$equipes->images2)}}" width="80px" alt="equipe Image">
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