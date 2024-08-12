@extends('layouts.auth-master')

@section('content')
    <center>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <h1 class="h3 mb-3 w-25 fw-normal mx-auto">Redefinir Senha</h1>

            @include('layouts.partials.messages')

            <div class="form-group form-floating mb-3 w-25 mx-auto">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required>
                <label for="floatingEmail">E-mail</label>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3 mx-auto">
                <button class="btn btn-lg btn-primary w-25 mx-auto" type="submit">Enviar Link de Redefinição</button>
            </div>

            <p><a href="{{ route('login') }}">Voltar ao Login</a></p>
        </form>
    </center>
@endsection

