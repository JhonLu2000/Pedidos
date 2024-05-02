@extends('layouts.app')
@section('title', 'Bienvenido a Lenico')

@section('body-class', 'product-page')


@section('content')

<link href="../css/bootstrap.min.css" rel="stylesheet" />
<link href="{{ asset('../css/material-kit.css') }}" rel="stylesheet"/>



<!--<div class="header header-filter" style="background-image: url('../img/natural.jpg');">
</div>-->

<div class="header header-filter" style="background-color: green;" ></div>



<div class="main main-raised">
<div class="container">


   <div class="section ">
       <h2 class="title text-center">Registrar nuevo producto</h2>

       @if ($errors->any())
       <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
           

       </div>
        @endif


     <form method="post" action="{{url('/admin/products')}}">
        
        {{ csrf_field() }}


     <div class="row">

               <div class="col-sm-6">
                   <div class="form-group label-floating">
                       <label class="control-label">Nombre del producto</label>
                       <input type="text" class="form-control" name="name" value="{{old('name')}}">
                   </div>
              </div>
              
               <div class="col-sm-6">
                    <div class="form-group label-floating">
                        <label class="control-label">Precio del producto</label>
                        <input type="number" step="0.01" class="form-control" name="price"  value="{{old('price')}}" >
                    </div>
               </div>

              
      </div>


                  <div class="form-group label-floating">
                     <label class="control-label">Descripción corta</label>
                     <input type="text" class="form-control" name="description" value="{{old('description')}}">
                  </div>
             

                
        <textarea class="form-control" placeholder="Descripción extensa del producto" rows="5" name="long_description"> {{old('long_description')}}</textarea>

        <button class="btn btn-primary">Registrar producto</button>
        <a href="{{url('admin/products')}}" class="btn btn-default">Cancelar</a>
    </form>

           
        </div>


    </div>


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

@endsection






<!--   Core JS Files   -->
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/material.min.js')}}"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('js/nouislider.min.js')}}" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="{{asset('js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{asset('js/material-kit.js')}}" type="text/javascript"></script>
