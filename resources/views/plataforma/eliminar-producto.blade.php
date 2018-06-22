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
                        <h4 class="page-title">Eliminar producto</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Eliminar producto</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        
                            <h3 class="box-title">Eliminar producto</h3> 

                        <div class="col-md-offset-2 col-md-8">
                            <div class="form-group">
                                    <label class="col-md-6">Ingresa el código del producto a eliminar</label>
                                    <div class="col-md-offset-3 col-md-6">
                                        <input type="text" placeholder="Código del producto" class="form-control form-control-line ampliando-bordes"></div>
                                </div>
                            <div class="form-group">
                                    <div class="col-md-offset-3 col-sm-6 separador-eliminar">
                                        <button class="btn btn-block btn-danger">Eliminar producto</button>
                                    </div>
                                </div>
                        </div>

                           
                       

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            
            @stop