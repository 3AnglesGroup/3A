@extends('layouts.web')
@section('content')
<div class="container-fluid content">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-5 title">
                    <h1>Contactanos</h1>
                    <h2>Queremos<br>escucharte!</h2>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6 col-lg-4 align-self-center info">
                    <h3>Tienes algún proyecto o idea?</h3>
                    <h4>NOS ENCANTARÍA AYUDARTE!</h4>
                    <div class="item"><img src="img/cont-icon-1.svg"><span>escribenos@3anglesGroup.com</span></div>
                    <div class="item"><img src="img/cont-icon-2.svg"><span>Calle 98 No. 14-17 Of. 206<br>Bogotá, Colombia</span></div>
                    <div class="item"><img src="img/cont-icon-3.svg"><span>Google Maps</span></div>
                </div>
                <div class="col-md-6 form">
                    <form>
                        <h3>Escríbenos!</h3>
                        <label>
                            <span>Nombre</span>
                            <input type="text" class="form-control">
                        </label>
                        <label>
                            <span>Email</span>
                            <input type="email" class="form-control">
                        </label>
                        <label>
                            <span>Telefono / Celular</span>
                            <input type="text" class="form-control">
                        </label>
                        <label>
                            <span>Mensaje</span>
                            <textarea class="form-control"></textarea>
                        </label>
                        <button class="btn">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
@stop
@push('styles')
<link rel="stylesheet" href="css/contacto.css">
@endpush
