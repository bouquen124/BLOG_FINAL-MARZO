@extends('ux.root')

@section('content')




    <!-- CONTENT START
                    ============================================= -->
                    <section id="content" class="single-wrapper">
                        <!-- Page Title -->
                        <div class="grey-background wow fadeIn">
                            <div class="container">
                                <div class="heading-block page-title wow fadeInUp">
                                    <h1>Editar Modelo</h1>
                                </div>
                            </div>
                            <!-- CONTACT CONTENT START
                                        ============================================= -->
                            <div class="contact-section">
                                <div class="container">
                                    <div class="row">
                
                
                
                                    
                                        </div>
                
                                        {!! Form::model($modelo, ['route' => ['modelos_user.update', $modelo->id], 'method' => 'patch']) !!}
                
                
                                        
                                        <!-- Estado Id Field -->
                                      
                
                                        <!-- User Id Field -->
                                            
                                            <br>
                
                                            <!-- Estado Id Field -->
                
                                            
                                        <input type="text" name="titulo" id="titulo" placeholder=" titulo" value="{{$modelo->titulo}}" />
                                    
                                        <input type="text" name="descripcion" id="descripcion" placeholder="descripcion"   value="{{$modelo->descripcion}}" />
            
            
                             
                                           <input type="text" name="frame" id="frame" placeholder="frame"  value="{{$modelo->frame}}">
                                           
                
                                        <!-- Submit Field -->
                                        <div class="form-group col-sm-12">
                                            <button class="submit button-normal green">Registrar</button>
                                        </div>
                
                                        {!! Form::close() !!}

                                    </div>
                                </div>
                            </div>
                            <!-- CONTACT CONTENT END -->
                        </div>
                    </section>
                    <!-- CONTENT END -->
    
@endsection