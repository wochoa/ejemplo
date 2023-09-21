@extends('layouts.tema')

@section('content')

<div class="Login">
    <div class="pt-2 pb-4" align="center">
        <!-- <img src="{{asset("img/logooficial.png")}}" width="250" class="img-fluid"> -->
        {{-- <br><br> --}}
        {{-- <center><h1><strong>SISTEMA DE GESTIÓN DIGITAL</strong></h1></center> --}}
    </div>

    <!-- <img src="/img/imglogin.jpg" alt="" width="264px"> -->
    <div class="card" style="background-color: #e7e1e1 !important;">

     <div class="card-body">
        <div class="row">
            <div class="col-sm-6 p-0">
            <img src="/img/imglogin.jpg" alt="" width="230px">
            </div>
            <div class="col-sm-6">
            <small>Realize los trámites digitales</small>
            <hr>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('adm_email') ? ' has-error' : '' }}">
                    <div class="LoginGroup">
                        <span class="glyphicon glyphicon-user"></span>
                        <input 
                            id="adm_email" 
                            type="text" 
                            class="form-control" 
                            name="adm_email"
                            value="{{ old('adm_email') }}" 
                            onkeyup="javascript:this.value=this.value.toUpperCase();"
                            placeholder="Usuario"
                        />
                    </div>

                    @if ($errors->has('adm_email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('adm_email') }}</strong>
                        </span>
                    @endif
                
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="LoginGroup">
                        <span class="glyphicon glyphicon-lock"></span>
                        <input id="password" type="password" class="form-control" name="password" 
                        placeholder="Contraseña">
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                
                </div>
                <div class="LoginActions">
                    
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Recordarme
                        </label>
                    </div>
                    <button  type="submit" class="btn btn-primary LoginButton btn-sm">
                        <i class="fa fa-btn fa-sign-in"></i>Iniciar Sesión
                    </button>
                
                </div>
            </form>
            <hr>
            <a href="/registro/mesa-partes-virtual/1" class="btn btn-sm btn-info btn-block">Acceso a Mesa de partes virtual</a>
            </div>
        </div>
     </div>


        






    </div>

   
</div>
@endsection
