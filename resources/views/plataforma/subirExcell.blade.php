@extends('plataforma.layout')

@section('title', 'Panel de administración - Cargar Asistencia')

@section('contenido')

  <!-- ============================================================== -->
  <!-- Page Content -->
  <!-- ============================================================== -->
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row bg-title">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Blank Page</h4> </div>
              <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                  <ol class="breadcrumb">
                      <li><a href="#">Dashboard</a></li>
                      <li class="active">Blank Page</li>
                  </ol>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="white-box">
                    <form method="post" action="{{url('import-excel')}}" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <input type="file" name="excel">
                          <br><br>
                          <input type="submit" value="Enviar" style="padding: 10px 20px;">
                      </form>
              </div>
          </div>
      </div>
      <!-- /.container-fluid -->





  @stop
