@extends('layout.master')
@section('tittle','Category')

@section('content')
<div class="container text-center mt-3 p-4 bg-success">
    <h1>Mata Kuliah</h1>
    <div class="row">
        <div class="col-sm-12 col-md-8 m-auto">
            <ol class="list-group">
                @forelse ($matakuliahs as $matakuliah)
                    <li class="list-group-item">{{ $matakuliah }}</li>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>

@endsection
