@extends('ux.root')


@section('content')


     <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">

                        <div class="heading-block wow fadeIn">
                            <br>
                            <h2>{{ $aliado->nombre }}</h2>
                            @if(!auth()->guest() && (auth()->user()->rol_id==1 || auth()->user()->rol_id==2))
                            <a href="  {{ route('aliado.edit',['id'=>$aliado->id, 'idd'=>$aliado->id, 'type'=>'Aliado', 'back'=>Request::path() ]) }} " >
                                <h4 class="tagline">
                                    Editar

                                </h4>
                            </a>
                         @endif   
                        </div>

                        <div class="row">
                            
                            
                            <div class="features">

                                <div class="feature-item custom-food col-md-4 wow fadeInUp">
                                        
                                    @if ($aliado->FotoAliado)
                                        <img src="{{ $aliado->FotoAliado->url }}"  style="width:240px;height:240px;border-radius:130px;border:7px solid #F2AF5A;">
                                    @else
                                        <img src="{{asset('img/user-icon.png')}}" style="width:240px;height:240px;border-radius:130px;border:7px solid #F2AF5A;">
                                    @endif

                                </div>

                                <div class="feature-desc">
                        
                                        <h4>Direcion: {{ $aliado->direccion }} </h4>    
                                        <h4>Correo: {{ $aliado->correo }} </h4>    
                                        <h4>Telefono:{{ $aliado->telefono }} </h4>   
                                        <h4>Facebook: {{ $aliado->facebook }} <br> <br> Twitter: {{ $aliado->twitter }} <br> <br> Instagram: {{ $aliado->instagram }}</h4> 
                                            
                                        <p>{{ $aliado->descripcion }} </p>
                                        <div style="float: left; width: 100%;"> 
                                            @if(!auth()->guest() && (auth()->user()->rol_id==1 || auth()->user()->rol_id==2))
                                            
                                            {!! Form::open(['route' => ['aliado.destroy', $aliado->id], 'method' => 'delete']) !!}
                                            {!! Form::button('Eliminar', ['type' => 'submit', 'onclick' => "return confirm('Seguro que quiere borrar este Aliado?')"]) !!}
                                            {!! Form::close() !!}  
                                            @endif
                                        </div>            
                                        
                                </div>
                                

                            </div>
                              
                            

                        </div>
                    </div>
                </div>
                <!-- FEATURES SECTION END -->
    
@endsection