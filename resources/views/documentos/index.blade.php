@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('library/vakata-jstree-0097fab/dist/themes/default/style.min.css')}}">
<script src="{{asset('library/vakata-jstree-0097fab/dist/jstree.min.js')}}"></script>

<script type="{{asset('library/bootstrap-treeview-master/dist/bootstrap-treeview.min')}}"></script>

  @if(Session::has('procesoOk'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>Cool!</strong> {{Session::get('procesoOk')['msjProceso']}}
  </div>

  <script type="text/javascript">
    nodoSelecionado="{{Session::get('procesoOk')['idProceso']}}";
    $('#container').jstree('select_node', nodoSelecionado);
  </script>

  @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-dark mb-3">
                <div class="card-header bg-transparent border-dark">
                    Administración de documentos
                    
                </div>  
                <div class="row">
                  <div class="col-md-6">
                  <div class="card-body">
                    <input type="text" id="plugins4_q" name="" placeholder="Buscar documentos.." class="form-control form-control-sm">
                    <div id="container">

                      <ul>
                        <li id="0">Inicio</li>
                        @foreach($categorias as $pro)
                          @if($pro->hijos->count()>0)
                            <li id="{{$pro->id}}">{{$pro->nombre}}
                                @include('documentos.hijos',['procesos'=>$pro->hijos])
                                
                                <ul>
                                  @foreach ($pro->documentos as $doc)
    
                                  @if (Storage::exists($doc->url))
                                    <li data-jstree='{"icon":"fa fa-file"}'>
                                      <a href="{{ Storage::url($doc->url) }}" data-url="{{ route('eliminarDocumento',$doc->id) }}" onclick="informaconHojas(this);"  class="hojaVidaLink">
                                        {{ $doc->nombre }}
                                      </a>
                                    </li>  
                                  @endif
                                   
                                  @endforeach
                                    
                                </ul>
                              
                            </li>
                          @else
                          <li id="{{$pro->id}}">{{$pro->nombre}}

                            
                            <ul>
                              @foreach ($pro->documentos as $doc)

                              @if (Storage::exists($doc->url))
                                <li data-jstree='{"icon":"fa fa-file"}'>
                                  <a href="{{ Storage::url($doc->url) }}" data-url="{{ route('eliminarDocumento',$doc->id) }}" onclick="informaconHojas(this);"  class="hojaVidaLink">
                                    {{ $doc->nombre }}
                                  </a>
                                </li>  
                              @endif
                               
                              @endforeach
                                
                            </ul>
                          

                          </li>

                          @endif
                          
                        @endforeach

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    
                    <div class="card">
                        <h3 class="card-header success-color white-text">Crear categoría</h3>
                        <div class="card-body">
                           <form action="{{route('guardarDocumentoAdmin')}}" method="post">
                              @csrf
                              <input type="hidden" id="id" name="id" class="form-control" value="0">
                              <!-- Material input password -->
                              <div class="form-group">
                                <label for="nombre">Nombre de categoría</label>  
                                <input type="text" id="nombre" name="nombre" class="form-control" required="">
                              </div>
                              <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                          </form>
                        </div>
                    </div>
                    <br>
                    <div class="card" style="display: none;" id="accionesDocumento">
                      <h3 class="card-header success-color white-text">Acciones documento</h3>
                      <div class="card-body">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a class="btn btn-info" id="linkVerDocumento">ver</a>
                          <button type="button" class="btn btn-danger" id="linkEliminarDocumento" data-url="" onclick="eliminar(this);">Eliminar</button>
                          
                        </div>
                      </div>
                  </div>

                    
                    <br>
                    <!-- acciones -->
                    <div class="card" style="display: none;" id="acciones">
                        <h3 class="card-header danger-color white-text">Documentos</h3>
                        <div class="card-body">
                          <form action="{{ route('guardarDocumento') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="exampleFormControlFile1">Selecionar documento</label>
                              <input type="hidden" name="categoria_id" id="categoria_id">
                              <input type="file" class="form-control-file" name="archivo" id="exampleFormControlFile1">
                            </div>
                            <button type="submit" class="btn btn-success btn-sm">Guardar</button>

                          </form>
                         
                            
                        </div>
                    </div>
                    <br>

                    
                    <div class="card" style="display: none;" id="panelEditar">
                        <h3 class="card-header primary-color white-text">Editar categoría</h3>
                        <div class="card-body">
                           <form action="{{route('actualizarDocumentoAdmin')}}" method="post">
                              @csrf
                              <input type="hidden" name="idproceso" value="" id="idproceso" required="">
                              <div class="form-group">
                                  <label for="nombreProceso">Nombre de categoría</label>
                                  <input type="text" value="" id="nombreProceso" name="nombreProceso" required="" class="form-control form-control-sm" autofocus="">
                              </div>
                            
                             <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                             <button type="button" id="eliminarProceso" class="btn btn-danger btn-sm" data-url="" onclick="eliminar(this)"><i class="fa fa-trash"></i> Eliminar</button>
                           </form>
                        </div>
                    </div>



                  </div>
                </div>
                </div>


            </div>
        </div>


    </div>
  



<script>
  
 

  


    $('#container')
    
    .on('changed.jstree', function (e, data) {
      var i, j, r = [];
      for(i = 0, j = data.selected.length; i < j; i++) {
        
        r.push(data.instance.get_node(data.selected[i]).id,data.instance.get_node(data.selected[i]).text);
        // t.push(data.instance.get_node(data.selected[i]).text);
      }
    
      $('#id').val($.trim(r[0]));
      
      id=parseInt($.trim(r[0]));
      if (id>0) {
        $('#acciones').show();
        $('#mihojavida').attr('href', '{{url("h_vida")}}/'+id);
        $('#mihojaman').attr('href', '{{url("h_ficha")}}/'+id);
        $('#eliminarProceso').attr('data-url', '{{url("categoria-eliminar")}}/'+id);

        // editar
        $('#panelEditar').show();
        $('#nombreProceso').val($.trim(r[1]));
        $('#idproceso').val($.trim(r[0]));
        $('#categoria_id').val($.trim(r[0]));

        if($.trim(r[1])!=''){
          $('#accionesDocumento').hide();
        }else{
          $('#accionesDocumento').show();
        }

      }else{
        $('#acciones').hide();
        $('#panelEditar').hide();
        if($.trim(r[1])!=''){
          $('#accionesDocumento').show();
        }else{
          $('#accionesDocumento').hide();
        }
        console.log($.trim(r[1]))
        
      }

    })
    
    .jstree({
      "plugins" : [ "search" ]
    });



    // buscador
  var to = false;
  $('#plugins4_q').keyup(function () {
    if(to) { clearTimeout(to); }
    to = setTimeout(function () {
      var v = $('#plugins4_q').val();
      $('#container').jstree(true).search(v);
    }, 250);
  });


  function informaconHojas(argument) {
    var url=$(argument).attr('href');
    $('#linkVerDocumento').attr('href',url);
    $('#linkEliminarDocumento').attr('data-url',$(argument).data('url'));
  }
</script>


@if(Session::has('procesoOk'))

  <script type="text/javascript">
    nodoSelecionado="{{Session::get('procesoOk')['idProceso']}}";
    $('#container').jstree('select_node', nodoSelecionado);
  </script>
  
  @endif
@endsection
