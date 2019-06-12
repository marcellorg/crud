@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Agenda
                        <a class="btn btn-primary btn-sm float-right" href="{{route('agendas.create')}}" role="button">Novo Contato</a>
                    </div>

                    <div class="card-body">
                        @if (session('sucess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('sucess') }}

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Tel. Fixo</th>
                                <th scope="col">Tel. Celular</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($agendas as $agenda)
                                <tr>
                                    <td>{{$agenda->nome}}</td>
                                    <td>{{$agenda->tel_fixo}}</td>
                                    <td>{{$agenda->tel_celular}}</td>
                                    <td>{{$agenda->tel_email}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-primary btn-sm" href="{{route('agendas.edit', $agenda->id)}}" role="button"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm" href="#" role="button"><i class="fas fa-trash-alt"></i></a>
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
