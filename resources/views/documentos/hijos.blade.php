

<ul>
    @foreach($procesos as $pro2)
     @if($pro2->hijos->count()>0)
        <li id="{{$pro2->id}}">{{$pro2->nombre}}
            @include('documentos.hijos',['procesos'=>$pro2->hijos])
            <ul>
              @foreach ($pro2->documentos as $doc)

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
      <li id="{{$pro2->id}}">{{$pro2->nombre}}
  
       
        <ul>
          @foreach ($pro2->documentos as $doc)

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
  