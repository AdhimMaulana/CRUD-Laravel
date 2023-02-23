@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tabel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-black text-white">{{ __('Dashboard') }}</div>

                <div class="card-body bg-dark text-white">
                    @if (session('status'))
                    <div class="alert alert-success bg-dark" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Kamu Berhasil Login!') }}
                </div>
                <div class="card-body bg-dark">
                <center><a href="/barang" class="btn btn-success mb-3">Tabel Data</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

