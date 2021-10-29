@extends('layouts.main')

@section('title', 'Enviar Documento')

@section('content')
    <div class="form-group col-md-12 py-5">
        <form action="/document" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="form-group col-md-6">
                    <label for="title">Arquivo:</label>
                    <input type="file" id="document" name="document" class="form-control-file">
                </div>
                <div class="form-group col-md-6">
                    <label for="title">Nome do Documento:</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nome do Documento">
                </div>
                <div class="form-group col-md-6">
                    <label for="title">Tipo de Atividade:</label>
                    <input type="text" class="form-control" id="activities_type" name="activities_type" placeholder="Tipo de Atividade">
                </div>
                <div class="form-group col-md-6">
                    <label for="title">Quantidade de Horas:</label>
                    <input type="number" class="form-control" id="qty_hours" name="qty_hours" placeholder="Quantidade de Horas">
                </div>
                <div class="form-group mt-2 col-md-6">
                    <label for="title">Status:</label>
                    <select name="status" id="status">
                        <option value="Não Homologado">Não homologado</option>
                        <option value="Homologado">Homologado</option>
                    </select>
                </div>
                <button class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection