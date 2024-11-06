@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body bg-e">
                        <div class="row p-2">
                            <div class="col-sm-12 text-center">
                                <h4 class="" style="color: rgb(194, 158, 79)"><strong>Selamat Datang di NASARI
                                        Digital</strong></h4>
                            </div>
                        </div>
                        <hr />
                        <div class="p-2">
                            <p><span class="text-danger">Informasi akun : </span></p>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn btn-outline-primary">Nama :
                                    {{ Auth::user()->name }}</button>
                                <button type="button" class="btn btn-outline-primary">Email :
                                    {{ Auth::user()->email }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
