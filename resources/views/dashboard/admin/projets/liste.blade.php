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
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Listes</li>
								</ol>
							</nav>
						</div>
                        <div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="{{ route('dashboard.projects') }}" class="btn btn-primary text-white ">
									Ajouter
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
<!-- <div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Liste des projets réalisés</h4>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">N°</th>
                    <th>Titre</th>
                    <th>Images</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projets as $index => $projet)
                    <tr id="projet_{{ $index + 1 }}">
                        <td class="table-plus">{{ $index + 1 }}</td>
                        <td>{{ $projet->titles }}</td>
                        <td><img src="{{ asset('/' . $projet->images_projects) }}" width="80px" alt="Service Image"></td>
                        <td>
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')

                                <div class="dropdown">
                                    <button class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" type="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                        <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure?')"><i class="dw dw-delete-3"></i> Delete</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> -->

<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Liste des projets réalisés</h4>
    </div>
    <div class="pb-20">
	<table class="data-table table stripe hover nowrap">
    <thead>
        <tr>
            <th  class="table-plus datatable-nosort">N°</th>
            <th class="mt-2 p-2">Titre</th>
            <th class="m-2 p-2">Images</th>
            <th class="datatable-nosort mt-2 p-2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projets as $index => $projet)
        <tr>
            <td  class="table-plus">{{$index + 1}}</td>
            <td>{{$projet->titles}}</td>
            <td><img src="{{asset('/'.$projet->images_projects)}}" width="80px" alt="Service Image"></td>
            <td>
                <form method="POST" action="{{ route('dashboard.deleteprojects',$projet->id) }}">
                    @csrf
                    @method('DELETE')
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="{{ route('dashboard.showprojects',$projet->id) }}"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="{{ route('dashboard.editprojects',$projet->id) }}"><i class="dw dw-edit2"></i> Edit</a>
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