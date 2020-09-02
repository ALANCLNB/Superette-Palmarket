@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
        
            

                
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
{{-- ****************************************************** --}}
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                            <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">{{ __('Register') }}</h1>
                                </div>
                                <form class="user">


                                    


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" 
                                    id="name" placeholder="{{ __('Name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="apellido" id="apellido" placeholder="Apellidos" value="{{ old('apellidos') }}">
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" placeholder="{{ __('E-Mail Address') }}" name="email" 
                                    value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" id="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" 
                                     placeholder="{{ __('Password') }}" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password-confirm"  placeholder="{{ __('Confirm Password') }}" name="password_confirmation" 
                                    required autocomplete="new-password">

                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Register') }}
                                </button>

                                <hr>

                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>

                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>



                                </form>


                                <hr>
                            
                                <div class="text-center">
                                <a class="small" href="/login">Ya tengo una cuenta</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                
                </div>  
    </div>
</div>









{{-- **************************************************************************************** --}}



@endsection
