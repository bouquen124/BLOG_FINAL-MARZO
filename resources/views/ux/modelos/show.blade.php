@extends('ux.root')

@section('content')

<div class="classes-page">


                        
    <div class="container">
        
    
        <div class="classes-wrapper wow fadeInUp">
            


                <div class="class-item" style="background-color:#D3B7B7;">  
            
                    <div class="sketchfab-embed-wrapper">
                        <iframe title="Badassgirl" src="{{$modelo->frame}}" width="1140" height="600" frameborder="0" scrolling="no">
                        </iframe>
                     

                          
                        </p>
                    </div>
                
                    <div class="class-details">
                        <div class="class-desc">
                            <h2>{{ $modelo->titulo }}</h2>
                          <h5>{{$modelo->descripcion}}</h5>
                          @if(!auth()->guest() && (auth()->user()->rol_id==1 || auth()->user()->rol_id==2))

                          <a href="  {{ route('modelos_user.edit',$modelo->id) }} " >
                            <h4 class="tagline">
                                Editar

                            </h4>
                        </a>


                        {!! Form::open(['route' => ['modelos_user.destroy', $modelo->id], 'method' => 'delete']) !!}
                        {!! Form::button('Eliminar', ['type' => 'submit', 'onclick' => "return confirm('Seguro que quiere borrar este Modelo?')"]) !!}
                        {!! Form::close() !!} 
                        @endif
                       
                        </div>
                    </div>
                </div>
            
        
        </div>
        
    
      
    </div>
</div>



    
@endsection