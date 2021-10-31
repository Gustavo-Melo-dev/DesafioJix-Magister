@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="form-group col-md-12 py-5 d-flex justify-content-center align-items-center flex-column">
        <div class="col-md-9">
            <table class="table table-dark table-responsive-lg table-responsive-md table-responsive-xl">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tipo da Atividade</th>
                    <th scope="col">Quantidade de Horas</th>
                    <th scope="col">Status</th>
                    <th scope="col">link</th>
                  </tr>
                </thead>
                @foreach ($documents as $key => $doc)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <th scope="row">{{ $doc->name }}</th>
                            <th scope="row">{{ $doc->activities_type }}</th>
                            <th scope="row">{{ $doc->qty_hours }}</th>
                            <th scope="row">{{ $doc->status }}</th>
                            <th scope="row"><img src="storage/documents/{$doc->name}" alt="{{$doc->name}}"></th>
                        </tr>
                        </tr>
                    </tbody>
                @endforeach 
              </table> 
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center py-5">
            <h2 class="py-2">Horas Homologadas</h2>
            <span class="bg-dark rounded-circle p-4 text-light">{{$sum}}</span>
        </div>
    </div>
@endsection