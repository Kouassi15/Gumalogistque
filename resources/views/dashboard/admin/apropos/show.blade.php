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
                        <a href="{{ route('apropos.create') }}" class="btn btn-primary text-white ">
                            Ajouter
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Simple Datatable start -->
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Liste des données</h4>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th >Title1</th>
                            <th >Title2</th>
                            <th >Title3</th>
                            <th >Images1</th>
                            <th >Images2</th>
                            <th >Images3</th>
                            <th >Description</th>
                            <th >Activites</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$apropos->title_1}}</td>
                            <td>{{$apropos->title_2}}</td>
                            <td>{{$apropos->title_3}}</td>
                            <td><img src="{{asset('/'.$apropos->images_1)}}" width="80px" alt="A propos Image">
                            <td><img src="{{asset('/'.$apropos->images_2)}}" width="80px" alt="A propos Image">
                            <td><img src="{{asset('/'.$apropos->images_3)}}" width="80px" alt="A propos Image">
                            <td>{{$apropos->description}}</td>
                            <td>{{$apropos->activites}}</td>
                            </td>
                            
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        @endsection