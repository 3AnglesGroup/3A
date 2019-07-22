@extends('layouts.web') @section('content')
<div class="container-fluid content">
    <div class="row title">
        <div class="col-12">
            <h1>Nuestro trabajo</h1>
        </div>
    </div>
    <div class="row justify-content-center items">
        <div class="col-lg-10 col-xl-8">
            <div class="row">
                <div class="col-md-4 p-2">
                    <a href="#" class="box">
                        <span class="info">
                            <h2>Market 2 Fit</h2>
                            <p>DISEÑO DE EMPAQUE</p>
                        </span>
                        <span class="image">
                            <img src="img/fun2fit.png" />
                        </span>
                    </a>
                </div>
                <div class="col-md-8 p-2">
                    <a href="#" class="box horizontal">
                        <span class="info">
                            <h2>Laboratorios Oftálmicos</h2>
                            <p>DESARROLLO MARCA Y PIEZAS IMPRESAS</p>
                        </span>
                        <span class="image">
                            <img src="img/labsoftalmicos.png" />
                        </span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12 p-2">
                            <a href="#" class="box horizontal">
                                <span class="info">
                                    <h2>Grupo Medic</h2>
                                    <p>
                                        Desarrollo de marca, desarrollo web y
                                        piezas impresas
                                    </p>
                                </span>
                                <span class="image">
                                    <img src="img/grupo-medic.png" />
                                </span>
                            </a>
                        </div>
                        <div class="col-md-6 p-2">
                            <a href="#" class="box">
                                <span class="info">
                                    <h2>Lambda</h2>
                                    <p>Desarrollo de marca y piezas impresas</p>
                                </span>
                                <span class="image">
                                    <img src="img/lambda.png" />
                                </span>
                            </a>
                        </div>
                        <div class="col-md-6 p-2">
                            <a href="#" class="box">
                                <span class="info">
                                    <h2>Club Stanza</h2>
                                    <p>DISENO Y DESARROLLO WEB</p>
                                </span>
                                <span class="image">
                                    <img src="img/clubstanza.png" />
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <a href="#" class="box">
                        <span class="info">
                            <h2>Market 2 Fit</h2>
                            <p>DESARROLLO MARCA Y PIEZAS IMPRESAS</p>
                        </span>
                        <span class="image">
                            <img src="img/market2fit2.png" />
                        </span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-2">
                    <a href="#" class="box">
                        <span class="info">
                            <h2>Zelectto</h2>
                            <p>DESARROLLO MARCA Y PIEZAS IMPRESAS</p>
                        </span>
                        <span class="image">
                            <img src="img/zelectto.png" />
                        </span>
                    </a>
                </div>
                <div class="col-md-6 p-2">
                    <a href="#" class="box">
                        <span class="info">
                            <h2>Zelectto</h2>
                            <p>DESARROLLO MARCA Y PIEZAS IMPRESAS</p>
                        </span>
                        <span class="image">
                            <img src="img/zelectto.png" />
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop @push('styles')
<link rel="stylesheet" href="css/trabajo.css" />
@endpush
