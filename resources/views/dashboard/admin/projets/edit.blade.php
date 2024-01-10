@extends('dashboard.layout.app')

@section('content')

<!-- Default Basic Forms Start -->
<div class="container">
	<div class="pb-20 card-box mb-30 ">
		<div class="card-body justify-content-center d-flex">
			<form method="POST" action="{{ route('dashboard.updateprojects',$projets->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  
				<div class="form-group ">
					<label>Titre</label>
					<input class="form-control" type="text" name="titles" value="{{ $projets->titles }}" placeholder="Entrer le titre">
				</div>
				<div class="form-group">
					<label>Selectionner l'image</label>
					<input type="file" name="images_projects" class="form-control-file form-control height-auto">
                    <img src="{{asset('/'.$projets->images_projects)}}" width="80px" alt="Projet Image">
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