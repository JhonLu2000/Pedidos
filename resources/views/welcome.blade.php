@extends('layouts.app')
@section('title', 'Bienvenido a Lenico')

@section('body-class', 'landing-page')


@section('styles')

<style>
.team .row .col-md-4 {

margin-bottom: 5em;
}
.row{

display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
flex-wrap: wrap;



}
.row > [class*='col-']{

display: flex;
flex-direction: column;


}


</style>


@endsection

@section('content')



<div class="header header-filter" style="background-image: url('img/shampoo1.jpg');">
<div class="container">
<div class="row">
<div class="col-md-6">
<h1 class="title">Lenico comercializadora</h1>
<h4>Batamo T Shampoo nace en el Puerto de Guaymas, Sonora por el Señor León León Santoyo quien en el laboratorio de su farmacia “Súper Farmacia León”, fundada en 1948, creo la formula en el año 2005. La cual puso a la venta disponible para el mercado local.</h4>
<br>
<a href="https://www.youtube.com/shorts/QlYXV-LkfYA" class="btn btn-danger btn-raised btn-lg" style="background-color: olivedrab;">
<i class="fa fa-play"></i> Mirar video
</a>
</div>
</div>
</div>
</div>

<div class="main main-raised">
<div class="container">
<div class="section text-center section-landing">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<h2 class="title">Bienvenido a Lenico</h2>
<h5 class="description">Puedes revisar nuestra relación completa de productos, comparar precios y realizar tus pedidos cuando estes seguro y revisar el seguimiento de tu compra</h5>
</div>
</div>

<div class="features">
<div class="row">
<div class="col-md-4">
    <div class="info">
        <div class="icon icon-primary">
            <i class="material-icons">chat</i>
        </div>
        <h4 class="info-title">Atendemos tus dudas</h4>
        <p>Atendemos rápidamente cualquier consulta que tengas vía chat. No estás sólo, sino que siempre estamos atentós a tus inquietudes.</p>
    </div>
</div>
<div class="col-md-4">
    <div class="info">
        <div class="icon icon-success">
            <i class="material-icons">verified_user</i>
        </div>
        <h4 class="info-title">Pago seguro</h4>
        <p>Todo pedido que realices será confirmado a través de una llamada. Si no confías en los pagos en linea puedes pagar contra entrega el valor acordado.</p>
    </div>
</div>
<div class="col-md-4">
    <div class="info">
        <div class="icon icon-danger">
            <i class="material-icons">fingerprint</i>
        </div>
        <h4 class="info-title">Información privada</h4>
        <p>Los pedidos que realices sólo los conocerás tú a traves de tu panel de usuario. Nadie mas tiene acceso a esta información.</p>
    </div>
</div>
</div>
</div>
</div>

<div class="section text-center">
<h2 class="title">Productos disponibles</h2>

<div class="team">
<div class="row" >
@foreach ($products as $product)
<div class="col-md-4">
    <div class="team-player">
        <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised img-circle">
        <h4 class="title">
            <a href="{{ url('/products/'.$product->id)}}"> {{$product->name}} </a>
            <br>
            <small class="text-muted">{{$product->category->name}}</small>
        </h4>
        <p class="description">{{$product->description}}</p>
        
    </div>
</div>
@endforeach

</div>

<div class="text-center">
{{ $products-> links() }}

</div>

</div>

</div>


<div class="section landing-section">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<h2 class="text-center title">¿Aún no te has registrado?</h2>
<h4 class="text-center description">Registrate ingresando tus datos básicos, y podrás realizar tus pedidos a través de nuestro carrito de compras. Si aún no te decides, de todas formas, con tu cuenta de usuario podrás hacer todas tus consultas sin compromiso.</h4>
<form class="contact-form">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group label-floating">
                <label class="control-label">Nombre</label>
                <input type="email" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group label-floating">
                <label class="control-label">Correo electrónico</label>
                <input type="email" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group label-floating">
        <label class="control-label">Tu mensaje</label>
        <textarea class="form-control" rows="4"></textarea>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center" >
            <button class="btn btn-primary btn-raised" style="background-color: olivedrab;">
                ENVIAR CONSULTA
            </button>
        </div>
    </div>
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






