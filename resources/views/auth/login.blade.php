@extends('layouts.app')

@section('content')
      <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
        <div class="row">
              <div class="col-md-6">
                <img src="imgs/imagenzinha.png" class="img-fluid">
              </div>

              <div class="col-md-1"></div>

              <div class="col-md-5">
              <div class="form d-flex align-items-center">
                <div class="content">
                    <form method="POST" action="{{ route('\') }}">
                        @csrf


                        <div class="form-group row">

                                <label for="login-username" class="label-material">{{ __('E-Mail') }}</label>
                                <input id="login-username" type="email" class=" form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        

                        <div class="form-group row">
                            
                                <label for="password" >{{ __('Senha') }}</label>
                                <input id="password" type="password" class=" form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar-me') }}
                                    </label>
                                </div>
                            </div>

                        <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="text-decoration: none" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
