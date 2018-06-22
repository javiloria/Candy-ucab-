@extends('layouts.master')

@section('title', 'Subir excell')

@section('contenido')


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




@include('layouts.seccion-suscripcion')
  @stop
