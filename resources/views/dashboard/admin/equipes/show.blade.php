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
                        <a href="{{ route('equipe.index') }}" class="btn btn-primary text-white ">
                            Listes
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Simple Datatable start -->
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Details des membres de l'equipe</h4>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <!-- <th class="table-plus datatable-nosort">N°</th> -->
                            <th >Noms & Prénoms</th>
                            <th >Postes</th>
                            <th >Diplômes</th>
                            <th >Title1</th>
                            <th >Title2</th>
                            <th >Title3</th>
                            <th >Images1</th>
                            <th >Images2</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                           
                            <td>{{$equipes->nom_membre}}</td>
                            <td>{{$equipes->poste_membre}}</td>
                            <td>{{$equipes->diplome_membre}}</td>
                            <td>{{$equipes->title1}}</td>
                            <td>{{$equipes->title2}}</td>
                            <td>{{$equipes->title3}}</td>
                            <td><img src="{{asset('/'.$equipes->images1)}}" width="80px" alt="A propos Image">
                            <td><img src="{{asset('/'.$equipes->images2)}}" width="80px" alt="A propos Image">
                            </td>
                        </tr>
                    <tbody>
                </table>

            </div>
        </div>
        @endsection