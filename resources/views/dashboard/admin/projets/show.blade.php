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
									<li class="breadcrumb-item active" aria-current="page">Details</li>
								</ol>
							</nav>
						</div>
                        <div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="{{ route('dashboard.listeprojects') }}" class="btn btn-primary text-white ">
									Listes
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
		   <div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Details des prjets réalisés</h4>
					</div>
					<div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                       <tr>
                        <th>Titre</th>
                        <td>{{ $projets->titles }}</td>
                        <th>Images</th>
                        <td><img src="{{asset('/'.$projets->images_projects)}}" width="80px" alt="Service Image"></td>
                        </tr>
                        <tr>
                    
                </table>
        </div>
</div>
	
@endsection