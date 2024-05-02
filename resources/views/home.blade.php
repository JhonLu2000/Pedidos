@extends('layouts.app')
@section('title', 'Lenico | Dashboard')
@section('body-class', 'product-page')

@section('content')


<div class="header header-filter" style="background-color: skyblue;" ></div>

<div class="main main-raised">
<div class="container">
<div class="row">
    <div class="section ">
       <h2 class="title text-center">Dashboard</h2>

                      

               <ul class="nav nav-pills nav-pills-primary" role="tablist" >
                    <li class="active" >
                         <a href="#dashboard" role="tab" data-toggle="tab" style="background-color: skyblue;">
                           <i class="material-icons">dashboard</i>
                           Carrito de compras
                         </a>
                    </li>

                    <li>
                         <a href="#tasks" role="tab" data-toggle="tab" style="background-color: skyblue;">
                          <i class="material-icons">list</i>
                           Pedidos realizados
                        </a>
                    </li>
               </ul>
               <hr>
               <br>
                    @if (session('notification'))
                    <div  class="alert alert-success text-center">
                        {{ session('notification') }}
                    </div>
                @endif

                
           
            <hr>
             

          
       <p>Tu carrito de compras presenta {{auth()->user()->cart->details->count()}} productos.</p>

        <table class="table">
            <thead>
           <tr>
              <th class="text-center">#</th>
              <th class="text-center">Nombre</th>
              <th>Precio</th>
               <th>Cantidad</th>
               <th>SubTotal</th>
              <th>Opciones</th>
    </tr>
</thead>
<tbody>
   @foreach (auth()->user()->cart->details as $detail)
    <tr>
        <td class="text-center">
           <img src="{{$detail->product->featured_image_url}}" height="50">
        </td>
        <td>
           <a href="{{ url('/products/'.$detail->product->id)}}" target="_blank">{{$detail->product->name}}</a> 
        </td>
       
       
        <td>$ {{$detail->product->price}}</td>
        <td>{{ $detail->quantity}}</td>
        <td> $ {{ $detail->quantity * $detail->product->price}}</td>
        <td class="td-actions">


            <form method="post" action="{{ url('/cart')}}">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <input type="hidden" name="cart_detail_id" value="{{ $detail->id}}">

                 
            <a href="{{ url('/products/'.$detail->product->id)}}" target="_blank" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">
                <i class="fa fa-info"></i>
            </a>

           
           
                
                 <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                <i class="fa fa-times"></i>
            </button>
            </form>
           
        </td>
    </tr>
    @endforeach
</tbody>
</table>
         <div class="text-right">

           <form method="post" action="{{ url('/order') }}">
             {{ csrf_field() }}
              <button class="btn btn-primary btn-round" style="background-color: olivedrab;">
                <i class="material-icons">done</i> Realizar prdido
              </button>

            </form>
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
