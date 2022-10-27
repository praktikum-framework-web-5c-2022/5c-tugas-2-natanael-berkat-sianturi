@extends('layout.master')
@section('tittle','Category')

@section('content')
<div class="container text-center mt-3 p-4 bg-danger">
    <h1>Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-12 col-md-8 m-auto">
            <ol class="list-group">
                @forelse ($mahasiswas as $mahasiswa)
                    <li class="list-group-item">{{ $mahasiswa }}</li>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>

@endsection
