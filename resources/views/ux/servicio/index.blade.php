@extends('ux.root')

@section('content')


    
    <div id="main-wrapper" class="animsition clearfix">
        <!-- CONTENT START
            ============================================= -->
            <section id="content" class="single-wrapper">
                <!-- Page Title -->
                <div class="grey-background wow fadeIn">
                    <div class="container">
                        <div class="heading-block page-title wow fadeInUp">
                            <h2>Nuestros servicios</h2>
                        </div>
                    </div>
                </div>

                <!-- CLASS START
                ============================================= -->
                <div class="classes-page">


                        
                    <div class="container">
                        
                    @foreach ($servicios as $servicio)
                        <div class="classes-wrapper wow fadeInUp">
                            <a href="{{ route('servicio.show', $servicio->id) }}">

                                <div class="class-item" style="background-color: #e57978;">  
                            
                                    
                                    <div class="class-img">
                                         
                                        @if ($servicio->FotoServicio)
                                            <img src="{{ $servicio->FotoServicio->url }}"  style="width:635px;height:370px;">
                                        @else
                                            <img src="img/post.jpg" alt="" style="width:635px;height:370px;"/>
                                        @endif
                                        
                                        <div class="overlay dark"></div>
                                    </div>
                                    
                                    <div class="class-details">
                                        <div class="class-desc">
                                            <h2>{{ $servicio->nombre }}</h2>
                                            <p class="class-category">{{ $servicio->categoria->nombre }}</p>
                                            <p >{{ $servicio->descripcion }}</p>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            
                                            <p class="class-date">{{ $servicio->estado->nombre }}</p>
                                        </div>
                                        
                                        <div class="class-type">
                                            
                                            <div class="class-price" style="float: left; width: 100%;">
                                                <h3>${{ $servicio->costo }}<span>mx</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        @endforeach
                        {{ $servicios->render() }}
                    </div>
                </div>
                <!-- CLASSES END -->

              

            </section>
            <!-- CONTENT END -->

    </div>

                
    
@endsection