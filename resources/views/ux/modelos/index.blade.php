@extends('ux.root')

@section('content')

<div id="main-wrapper" class="animsition clearfix">

    <section id="content" class="single-wrapper">


        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h2>Modelos</h2>
                </div>
            </div>
        </div>




        <div class="container">
        
    
            <div class="classes-wrapper wow fadeInUp">

                @foreach ($modelos as $modelo)
                    
              
                
    
    
                    <div class="class-item" style="background-color:#D3B7B7;">  
                
                        <div class="sketchfab-embed-wrapper">
                            <iframe title="Badassgirl" src="{{$modelo->frame}}" width="1140" height="200" frameborder="0" scrolling="no">
                            </iframe>
                         
    
                              
                            </p>
                        </div>
                        <a href="{{ route('modelos_user.show', $modelo->id) }}">
                        <div class="class-details">
                            <div class="class-desc">
                                <h2>{{ $modelo->titulo }}</h2>
                              <h5>{{$modelo->descripcion}}</h5>
    
                           
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            
            </div>
            
        
          
        </div>


    


                        
        
























        
    
       


 




        
    </section>



</div>


    
@endsection