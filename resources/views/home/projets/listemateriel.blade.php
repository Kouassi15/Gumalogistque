@extends('layouts.app')
@section('content')
<!-- image -->
<div class="carousel-inner h-50">
                <div class="carousel-item active">
                    <img class="w-100 " src="{{asset('template/assets/img/construction-equipment.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Liste des Matériels</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- end image -->
<div class="container mt-5">
    <h2 class="text-center">Liste des Matériels</h2>
    <div class="table-responsive"> 
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Type d'équipement et caractéristique</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Images</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Bétonnière de 500 litres</td>
                    <td>3</td>
                    <td>
                    <img src="{{asset('template/assets/img/betonniere.jpg')}}" style="width:60px; height:60px" alt="betonnière" class="img-fluid">
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Dumper</td>
                    <td>1</td>
                    <td>
                    <img src="{{asset('template/assets/img/dumper.jpg')}}" style="width:60px; height:60px" alt="dumper" class="img-fluid"></td>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Vibreur autonome</td>
                    <td>3</td>
                    <td>
                    <img src="{{asset('template/assets/img/vibreur.jpg')}}" style="width:60px; height:60px" style="width:150px; height:150px" alt="vibreur" class="img-fluid">
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">4</th>
                    <td>Grue à tour 75 tonnes</td>
                    <td>3</td>
                    <td>
                    <img src="{{asset('template/assets/img/grue.png')}}" style="width:60px; height:60px" alt="grue" class="img-fluid">
                    </td>
                </tr>

                <tr>
                    <th scope="row">5</th>
                    <td>Nacelle élévatrice</td>
                    <td>2</td>
                    <td>
                    <img src="{{asset('template/assets/img/nacelle-elevatrice.jpeg')}}" style="width:60px; height:60px" alt="Nacelle élévatrice" class="img-fluid">
                    </td>
                </tr>

                <tr>
                    <th scope="row">6</th>
                    <td>Lot de coffrages métaliques</td>
                    <td>2</td>
                    <td>
                    <img src="{{asset('template/assets/img/coffrages.jpg')}}" style="width:60px; height:60px" alt="coffrage" class="img-fluid">
                    </td>
                </tr>

                
                <tr>
                    <th scope="row">7</th>
                    <td>Lot d' echafaudages métaliques</td>
                    <td>1</td>
                    <td>
                    <img src="{{asset('template/assets/img/lot-echafaudage.jpg')}}" style="width:60px; height:60px" alt="lot-echafaudage" class="img-fluid">
                    </td>
                </tr>

                <tr>
                    <th scope="row">8</th>
                    <td>Camion benne ≥ 7 m3 pour approvisionnement des materiaux</td>
                    <td>2</td>
                    <td>
                    <img src="{{asset('template/assets/img/camion.jpg')}}" style="width:60px; height:60px" alt="camion" class="img-fluid">
                    </td>
                </tr>

                <tr>
                    <th scope="row">9</th>
                    <td>Véhicule de liaison type pick up 4x4</td>
                    <td>2</td>
                    <td>
                    <img src="{{asset('template/assets/img/pick-up.jpg')}}" style="width:60px; height:60px" alt="vehicule" class="img-fluid">
                    </td>
                </tr>

                <tr>
                    <th scope="row">10</th>
                    <td>Groupe électrogène de puissance ≥10 kVA </td>
                    <td>1</td>
                    <td>
                    <img src="{{asset('template/assets/img/groupe.jpg')}}" style="width:60px; height:60px" alt="groupe-electrogène" class="img-fluid">
                    </td>
                </tr>

                <tr>
                    <th scope="row">11</th>
                    <td>Pelle hydrolique</td>
                    <td>1</td>
                    <td>
                    <img src="{{asset('template/assets/img/pelle.jpg')}}" style="width:60px; height:60px" alt="pelle" class="img-fluid">
                    </td>
                </tr>

                <tr>
                    <th scope="row">12</th>
                    <td>Lot de matérirl topographique (station totale ,tachéomètre , GPS portatif, niveau d'ingenieur ,mire et accessoires)</td>
                    <td>1</td>
                    <td>
                    <img src="{{asset('template/assets/img/topographie.png')}}" style="width:60px; height:60px" class="img-fluid">
                    </td>
                </tr>


                <tr>
                    <th scope="row">13</th>
                    <td>Lot de  petit matériel (bourette, pelle, pioches ,etc...)</td>
                    <td>3</td>
                    <td>
                    <img src="{{asset('template/assets/img/bourette.jpg')}}" style="width:60px; height:60px" alt="bourette" class="img-fluid">
                    </td>
                </tr>


                <tr>
                    <th scope="row">14</th>
                    <td>Cône d'Abrams</td>
                    <td>2</td>
                    <td>
                    <img src="{{asset('template/assets/img/cone-abrams.jpg')}}" style="width:60px; height:60px" alt="cone-abrams" class="img-fluid">
                    </td>
                </tr>

                
                <tr>
                    <th scope="row">15</th>
                    <td>Compacteur à main</td>
                    <td>2</td>
                    <td>
                    <img src="{{asset('template/assets/img/compacteur.jpg')}}" style="width:60px; height:60px" alt="compacteur" class="img-fluid">
                    </td>
                </tr>

                
                <tr>
                    <th scope="row">16</th>
                    <td>Niveleuse</td>
                    <td>2</td>
                    <td>
                    <img src="{{asset('template/assets/img/niveleuse.jpg')}}" style="width:60px; height:60px" alt="niveleuse" class="img-fluid">
                    </td>
                </tr>

                
                <tr>
                    <th scope="row">17</th>
                    <td>Bulldozer</td>
                    <td>1</td>
                    <td>
                    <img src="{{asset('template/assets/img/bulldozer.jpg')}}" style="width:60px; height:60px" alt="bulldozer" class="img-fluid">
                    </td>
                </tr>

                
                <tr>
                    <th scope="row">18</th>
                    <td>Chargeur</td>
                    <td>1</td>
                    <td>
                    <img src="{{asset('template/assets/img/chargeur.jpg')}}" style="width:60px; height:60px" alt="chargeur" class="img-fluid">
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

@endsection