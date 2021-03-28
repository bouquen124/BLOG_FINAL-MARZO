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
                            <h2>Nuestros Productos</h2>
                        </div>
                    </div>
                </div>

                <!-- CLASS START
                ============================================= -->
                <div class="classes-page">


                        
                    <div class="container">




























                        
                        
                    @foreach ($productos as $producto)
                        <div class="classes-wrapper wow fadeInUp">
                            <a href="{{ route('producto.show', $producto->id) }}">

                                    <div class="class-item" style="background-color: #7fb881;">  
                            
                                    
                                    <div class="class-img">
                                         
                                        @if ($producto->FotoProducto)
                                            <img src="{{ $producto->FotoProducto->url }}"  style="width:635px;height:370px;">
                                        @else
                                            <img src="img/post.jpg" alt="" style="width:635px;height:370px;"/>
                                        @endif
                                        
                                        <div class="overlay dark"></div>
                                    </div>
                                    
                                    <div class="class-details">
                                        <div class="class-desc">
                                            <h2>{{ $producto->nombre }}</h2>
                                            <p class="class-category">{{ $producto->categoria->nombre }}</p>
                                            <p >{{ $producto->descripcion }}</p>
                                            <p class="class-date">{{ $producto->estado->nombre }}</p>
                                        </div>
                                        
                                        <div class="class-type">
                                            
                                            <div class="class-price" style="float: left; width: 100%;">
                                                <h3>${{ $producto->costo }}<span>mx</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        {{-- <div class="classes-wrapper wow fadeInUp">
                            <a href="single-classes.html">

                                    <div class="class-item" style="background-color: #f9ac59 e57978;;"> 
                            
                                    
                                    <div class="class-img">
                                        <img src="img/classes/classes1-large.jpg" alt="" />
                                        <div class="overlay dark"></div>
                                        <span><i class="fa fa-plus"></i></span>
                                    </div>
                                    
                                    <div class="class-details">
                                        <div class="class-desc">
                                            <h2>{{ $servicio->nombre }}</h2>
                                            <p class="class-category">{{ $servicio->categoria->nombre }}</p>
                                            <p >{{ $servicio->descripcion }}</p>
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


                        <div class="classes-wrapper wow fadeInUp">
                            <a href="single-classes.html">

                                    <div class="class-item" style="background-color:  #e57978;">">  
                            
                                    
                                    <div class="class-img">
                                        <img src="img/classes/classes1-large.jpg" alt="" />
                                        <div class="overlay dark"></div>
                                        <span><i class="fa fa-plus"></i></span>
                                    </div>
                                    
                                    <div class="class-details">
                                        <div class="class-desc">
                                            <h2>{{ $servicio->nombre }}</h2>
                                            <p class="class-category">{{ $servicio->categoria->nombre }}</p>
                                            <p >{{ $servicio->descripcion }}</p>
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

                        
                        <div class="classes-wrapper wow fadeInUp">
                            <a href="single-classes.html">

                                    <div class="class-item" style="background-color:  #7fb881;">">  
                            
                                    
                                    <div class="class-img">
                                        <img src="img/classes/classes1-large.jpg" alt="" />
                                        <div class="overlay dark"></div>
                                        <span><i class="fa fa-plus"></i></span>
                                    </div>
                                    
                                    <div class="class-details">
                                        <div class="class-desc">
                                            <h2>{{ $servicio->nombre }}</h2>
                                            <p class="class-category">{{ $servicio->categoria->nombre }}</p>
                                            <p >{{ $servicio->descripcion }}</p>
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
                        </div> --}}
                        
                        @endforeach
                        {{ $productos->render() }}
                    </div>
                </div>
                <!-- CLASSES END -->

                <!-- OUR CLASSES SCRIPT START -->
                <script type="text/javascript">
                    jQuery(window).load(function(){
                        var classDetailsHeight = jQuery('.class-item img').height();
                        jQuery(".class-details").css("height", classDetailsHeight);
                    });
                </script>
                <!-- OUR CLASSES SCRIPT END -->

            </section>
            <!-- CONTENT END -->

    </div>

                
    
@endsection