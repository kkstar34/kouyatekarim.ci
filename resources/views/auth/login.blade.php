@extends('layouts.auth')

@section('content')

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <form  method="POST" action="{{ route('login') }}" class="card auth_form">
                @csrf
                    <div class="header">
                        <img class="logo" src="{{url('assets/images/developer.svg')}}" alt="">
                        <h5>Connexion</h5>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="text" name="email" value="{{ old('email') }}"  autofocus class="form-control @error('email') is-invalid @enderror" placeholder="email">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        
                     

                        <div class="input-group mb-3">
                            <input type="password" class="form-control" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password">
                            <div class="input-group-append">                                
                                <span class="input-group-text"><a href="#" class="forgot" class="text-dark" title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                            </div>  
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                          
                        </div>

                       

                        <div class="checkbox">
                            <input type="checkbox" name="remember" id="remember" type="checkbox" >
                            <label for="remember">Remember Me</label>
                        </div>
                        <button  type="submit" class="btn btn-primary btn-block waves-effect waves-light">Connexion</button>                        
                        <div class="signin_with mt-3">
                            <p class="mb-0"><a href="{{route('register')}}"> Inscription</a></p>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round facebook"><i class="zmdi zmdi-facebook"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round twitter"><i class="zmdi zmdi-twitter"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round google"><i class="zmdi zmdi-google-plus"></i></button>
                        </div>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif

                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span><a href="/">Kouyate Karim</a></span>
                </div>
              
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{url('assets/images/signin.svg')}}" alt="Sign In"/>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
