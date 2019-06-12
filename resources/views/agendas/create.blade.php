@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Criar novo contato
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('agendas.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome Completo</label>
                                <input type="text" name="nome" class="form-control {{ $errors->has('nome') ? ' is-invalid' : '' }}" placeholder="Nome Completo"
                                       value="{{ old('nome') }}">
                                @if ($errors->has('nome'))
                                    <div class="invalid-feedback">{{ $errors->first('nome') }}</div>@endif
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
