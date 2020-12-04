@extends('layouts.app')

@section('cont')
<section id="login">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center p-2 pb-4"><i class="fa fa-dashboard mr-3"></i> Dashboard</h1>
                <div class="panel">
                    <div class="panel-body">
                        <form method="POST" action="{{ route('login') }}">
                            <div class="content ">
                                @csrf

                                <div class="form-group row">
                                    <label for="username" class="col-lg-3 col-form-label text-lg-center">Username</label>
                                
                                    <div class="col-lg-8">
                                        <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autofocus>
                                
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="password" class="col-lg-3 col-form-label text-lg-center">{{ __('Password') }}</label>
    
                                    <div class="col-lg-8">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <div class="col-lg-6 offset-lg-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @if(Session::has('error'))
                                <div class="alert alert-danger text-center">
                                    {{ Session::get('error') }}
                                </div>
                                @endif
                                <div class="form-group row mb-0">
                                    <div class="col-lg-8 offset-lg-3">
                                        <button type="submit" class="btn btn-primary w-100 pull-right">
                                            {{ __('Login') }}
                                        </button>
    
                                    </div>
                                </div>
                            </form>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
