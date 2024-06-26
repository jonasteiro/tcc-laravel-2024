@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Alterar produto</h1>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <form method="post" action="{{ route('produtos.update', $produto->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input value="{{ $produto->nome }}" 
                        type="text" 
                        class="form-control" 
                        name="nome"
                        placeholder="Nome" required>

                    @if ($errors->has('nome'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input value="{{ $produto->marca }}"
                        type="text" 
                        class="form-control" 
                        name="marca" 
                        placeholder="Marca" required>
                    @if ($errors->has('marca'))
                        <span class="text-danger text-left">{{ $errors->first('marca') }}</span>
                    @endif
                </div>
                
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input value="{{ $produto->modelo }}"
                        type="text" 
                        class="form-control" 
                        name="modelo" 
                        placeholder="Modelo" required>
                    @if ($errors->has('modelo'))
                        <span class="text-danger text-left">{{ $errors->first('modelo') }}</span>
                    @endif
                </div>
                
                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input value="{{ $produto->quantidade }}"
                        type="text"
                        class="form-control"
                        name="quantidade"
                        placeholder="Quantidade" required>
                    @if ($errors->has('quantidade'))
                        <span class="text-danger text-left">{{ $errors->first('quantidade') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input value="{{ $produto->preco }}"
                        type="text"
                        class="form-control" 
                        name="preco" 
                        placeholder="Preço" required>
                    @if ($errors->has('preco'))
                        <span class="text-danger text-left">{{ $errors->first('preco') }}</span>
                    @endif
                </div>
                
                

                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('produtos.index') }}" class="btn btn-danger">Cancelar</a>
            </form>
        </div>

    </div>
@endsection
