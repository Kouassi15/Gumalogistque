@extends('dashboard.layout.app')

@section('content')

<!-- <div class="main-container"> -->
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Profile</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- editer profil -->
    <!-- <div class="container">  -->
    <div class="pd-20 card-box height-100-p">
        <h5 class="text-primary">
            <span class="icon"><i class="icon-copy fa fa-user-circle" aria-hidden="true"></i></span>
            Edit Profile
        </h5><br>
        <form>
            <div class="form-group">
                <label class="label">Avatar</label>
            </div>
            <div class="form-group">
                <div class="field file">
                    <label class="upload control">
                        <a class="btn btn-primary">
                            Upload
                        </a>
                        <input type="file">
                    </label>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label class="label">Name</label>
                <input type="text" name="name" value="" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="label">E-mail</label>
                <input type="email" name="email" value="" class="form-control" required>
            </div><br>
            <hr><br>
            <h5 class="text-black">
                <span class="icon"><i class="mdi mdi-lock"></i></span>
                Changer de mot passe
            </h5><br>
            <div class="form-group">
                <label class="label">Mot de passe actuel</label>
                <input type="password" name="password_current" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="label">Nouveau mot de passe</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="label">Confirmez le mot de passe</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

                <a class="btn btn-success" href="">Editer</a>

            </div>
        </form>
    </div>
</div>
</div>
<!-- </div> -->
<!-- end editer profil -->

@endsection