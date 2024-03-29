@extends('dashboard.layout.app')

@section('content')

<!-- Default Basic Forms Start -->
<div class="container">
	<div class="pb-20 card-box mb-30 ">
		<div class="card-body justify-content-center d-flex">
			<form method="POST" action="{{ route('dashboard.update',$services->id) }}" enctype="multipart/form-data">
                 @method('PUT')
                @csrf
				  <h2 class="text-primary">Editer un service</h2>
				<div class="form-group ">
					<label class="p-2">Titre</label>
					<input class="form-control" type="text" name="title" value="{{ $services->title }}" placeholder="Entrer le titre">
				</div>
				<div class="form-group ">
					<label>Description</label>
					<textarea col="2" row="1" class="form-control" name="description">{{ $services->description }}</textarea>
				</div>
				<div class="form-group">
					<label>Selectionner l'image</label>
					<input type="file" name="images_services" class="form-control-file form-control height-auto">
                    <img src="{{asset('/'.$services->images_services)}}" width="80px" alt="Service Image">
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