@extends('layouts.app')
@section('title', 'Imagenes  de productos')
@section('body-class', 'product-page')


@section('content')


<div class="header header-filter" style="background-color: skyblue;" ></div>

<div class="main main-raised">
    
      <div class="container">
              <div class="row">

              <div class="section text-center">
               <h2 class="title">Imagenes de producto "{{$product->name}}"</h2>

              
               <form method="post" action="" enctype="multipart/form-data">

                {{ csrf_field() }}
                            <input type="file" name="photo" required>
                              <button style="background-color:green;" type="submit" class="btn btn-primary btn-round">Subir nueva imagen</button>
                               <a href="{{url('admin/products')}}" class="btn btn-default btn-round">Volver al listado de productos</a>

               </form>
               <hr>

                  <div class="row">
                   @foreach($images as $image)
                  <div class="col-md-4">
                      
                       <div class="panel panel-default">
                       <div class="panel-body">

                      <img src="{{ $image->url }}" width="250">
                      <form method="post" action="">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" name="image_id" value="{{ $image->id}}">
                          <button type="submit" class="btn btn-danger btn-round">Eliminar imagen</button>
                          @if ($image->featured)
                           <button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round" rel="tooltip"
                           title="Imagen destacada actualmente">
                          <i class="material-icons">favorite</i>
                            </button>

                          @else
                          <a  href="{{url('/admin/products/'.$product->id.'/images/select/' .$image->id)}}" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                          <i class="material-icons">favorite</i>
                            </a>
                            @endif
                        
                      </form>
                       
                    </div>
                     </div>
                  </div>
                     @endforeach
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

