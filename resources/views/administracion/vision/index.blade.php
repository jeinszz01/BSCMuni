
@extends('layouts.app')

@section('titulo1','Vision')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vision de la Municipalidad</div>

                <div class="card-body">
                  <h1>Vision 2018</h1>
                  <table class="table">
                    <thead>
                      <td>
                        Mi vision
                      </td>
                      <td>
                        editar
                      </td>
                      <td>
                        eliminar
                      </td>
                    </thead>
                    <tbody>

                      @foreach($visions as $vision)
                      <tr>
                        <td>
                          {{ $vision->nombre }}
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
