@extends('ux.root')


@section('content')



     <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">

                        <div class="heading-block wow fadeIn">
                            <br>
                            <h2>{{ $user->name }}</h2>

                            <a href="  {{ route('user.edit', ['id' => $user->id, 'idd' => $user->id, 'type' => 'User', 'back' => Request::path()]) }} ">
                                <h4 class="tagline">
                                    Editar
    
                                </h4>
                            </a>
              
                        </div>

                        <div class="row">
                            
                            
                            <div class="features">


                              

                                

                                <div class="feature-desc">




                                    <div class="feature-item custom-food col-md-4 wow fadeInUp">
                                        
                                        @if ($user->FotoUser)
                                            <img src="{{ $user->FotoUser->url }}"  style="width:240px;height:240px;border-radius:130px;border:7px solid #B2E6EC;">
                                        @else
                                            <img src="{{asset('img/user-icon.png')}}" style="width:240px;height:240px;border-radius:130px;border:7px solid #B2E6EC;">
                                        @endif
    
                                    </div>





                        
                                        <h4>Email: {{ $user->email }} </h4>    
                                        <h4>password: {{ $user->password }} </h4>    
                                      
                                        <div style="float: left; width: 100%;"> 
                                       {{--      @if(!auth()->guest() && (auth()->user()->rol_id==1 || auth()->user()->rol_id==2))
                                            
                                            {!! Form::open(['route' => ['aliado.destroy', $aliado->id], 'method' => 'delete']) !!}
                                            {!! Form::button('Eliminar', ['type' => 'submit', 'onclick' => "return confirm('Seguro que quiere borrar este Aliado?')"]) !!}
                                            {!! Form::close() !!}  
                                            @endif
                                        </div>  --}}           
                                        
                                </div>
                                

                            </div>
                              
                            

                        </div>
                    </div>
                </div>
                <!-- FEATURES SECTION END --
@endsection