@extends('plataforma.layout')

@section('title', 'Panel de administración - Página en blanco')

@section('contenido')
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Crear producto</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">                
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Crear producto</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box"> 
                            <div class="form-group">
                                <span class="btn btn-block btn-warning btn-file">
                                    Cargar imagen
                                    <input type="file" name="p_imagen" >
                                </span>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" >
                                <div class="form-group">
                                    <label class="col-md-12">Código del producto</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Sólo valores numéricos" class="form-control form-control-line" name="p_cod"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nombre del producto</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Rimbombin" class="form-control form-control-line" name="p_name"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Tipo de producto</label>
                                    <div class="col-sm-12">
                                        <select name="p_tipo" class="form-control form-control-line">
                                            <option>Caramelo suave</option>
                                            <option>Caramelo duro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Cantidad</label>
                                    <div class="col-md-12">
                                        <input name="p_cantidad" type="text" placeholder="Cantidad, ejemplo: 50" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Precio</label>
                                    <div class="col-md-12">
                                        <input name="p_precio" type="text" placeholder="Precio, ejemplo: 50.000" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Descripción del producto</label>
                                    <div class="col-md-12">
                                        <textarea name="p_descripcion" rows="5" class="form-control form-control-line"></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-block btn-success">Crear producto</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <
            <!-- /.container-fluid -->
            
            @stop