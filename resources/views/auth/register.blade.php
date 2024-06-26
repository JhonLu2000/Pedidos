@extends('layouts.app')
@section('body-class', 'signup-page')

@section('content')


<div class="header header-filter" style="background-image: url('img/natural.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="header header-primary text-center">
                            <h4>Registro</h4>
                            <!--<div class="social-line">
                                <a href="#pablo" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div> -->
                        </div>
                        <p class="text-divider">Completa tus datos</p>
                        <div class="content">

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <input type="text" class="form-control" placeholder="Nombre"  name="name" value="{{ old('name') }}" required autofocus>
                            </div>  
                        

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                
                                <input id="email" type="email" placeholder="Correo" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                               
                                <input id="password" type="password" placeholder="Contraseña" class="form-control" name="password" required/>
                            </div>


                             <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                               
                                <input type="password" placeholder="Confirmar contraseña" class="form-control" name="password_confirmation" required/>
                            </div>

                          <!--   If you want to add a checkbox to this form, uncomment this code-->

                            <!--<div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Recordar sesión
                                </label>
                            </div>   -->
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg">Confirmar registro</a>
                        </div>


                       <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>  -->


                    </form>
                </div>
            </div>
        </div>
    </div>

 <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="http://www.creative-tim.com">
                            ¿Necesitas ayuda con un proyecto?
                        </a>
                    </li>
                    <li>
                        <a href="http://presentation.creative-tim.com">
                           Asesoría personalizada
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                           Blog
                        </a>
                    </li>
                    <li>
                        <a href="http://www.creative-tim.com/license">
                            Tutoriales sobre desarollo web y movil
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy; 2024, developed <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com" target="_blank">JLsoft</a>
            </div>
        </div>
    </footer>

</div>
@endsection






