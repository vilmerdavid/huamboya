@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('documentos'))
@section('content')
<link rel="stylesheet" href="{{asset('library/vakata-jstree-0097fab/dist/themes/default/style.min.css')}}">
<script src="{{asset('library/vakata-jstree-0097fab/dist/jstree.min.js')}}"></script>

<script type="{{asset('library/bootstrap-treeview-master/dist/bootstrap-treeview.min')}}"></script>


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-dark mb-3">
               
                <div class="row">
                  <div class="col-md-9">
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
                <div class="col-md-3">
                  <div class="card-body">
                    
                 
                    <br>
                    <div class="card" style="display: none;" id="accionesDocumento">
                        <a class="btn btn-info" id="linkVerDocumento">ver</a>  
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
     

      

        if($.trim(r[1])!=''){
          $('#accionesDocumento').hide();
        }else{
          $('#accionesDocumento').show();
        }

      }else{
       
        if($.trim(r[1])!=''){
          $('#accionesDocumento').show();
        }else{
          $('#accionesDocumento').hide();
        }
               
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
   
  }




</script>

<script>
 
  $('.m_gobierno').each(function() {
    $(this).find('*').addClass('m-active');
  });
</script>

@if(Session::has('procesoOk'))

  <script type="text/javascript">
    nodoSelecionado="{{Session::get('procesoOk')['idProceso']}}";
    $('#container').jstree('select_node', nodoSelecionado);
  </script>
  
  @endif
@endsection
