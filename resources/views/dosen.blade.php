@extends('layout.master')
@section('tittle','Category')

@section('content')
<div class="container text-center mt-3 p-4 bg-info">
    <h1>Dosen</h1>
    <div class="row">
        <div class="col-sm-12 col-md-8 m-auto">
            <ol class="list-group">
                @forelse ($dosens as $dosen)
                    <li class="list-group-item">{{ $dosen }}</li>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>


@endsection
