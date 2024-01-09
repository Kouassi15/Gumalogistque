@extends('dashboard.layout.app')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<!-- <h4>DataTable</h4> -->
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Listes</li>
								</ol>
							</nav>
						</div>
                        <div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="{{ route('materiel.create') }}" class="btn btn-primary text-white ">
									Ajouter
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
		   <div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Liste des materiels</h4>
					</div>
					<div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                       <tr>
                        <th class="table-plus datatable-nosort">N°</th>
                        <th>Noms</th>
                        <th>Quantitées</th>
                        <th>Images</th>
                        <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($materiels as $index => $materiel)
                   <tr>
                      <td class="table-plus">{{$index + 1}}</td>
                      <td>{{$materiel->nom}}</td>
                      <td>{{$materiel->qte}}</td>
                      <td><img src="{{asset('/'.$materiel->images_materiels)}}" width="80px" alt="Service Image"></td>
                     <td>
                       <form method="POST" action="{{ route('materiel.delete',$materiel->id)}}">
                             @csrf
                             @method('DELETE')
                          <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="{{ route('materiel.show',$materiel->id) }}"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="{{ route('materiel.edit',$materiel->id)}}"><i class="dw dw-edit2"></i> Edit</a>
                            <button type="submit" class="dropdown-item"><i class="dw dw-delete-3"></i> Delete</button>
                        </div>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
	
@endsection