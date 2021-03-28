@extends('ux.root')


@section('content')


<section id="content" class="single-wrapper">


    <div class="grey-background wow fadeIn">


        <div class="container">
            <div class="heading-block page-title wow fadeInUp">
                <h1>Nuevo Modelo</h1>
            </div>
        </div>

    </div>



     <!-- CONTACT CONTENT START
                        ============================================= -->
                        <div class="contact-section">
                            <div class="container">
                                <div class="row">
            
            
            
                                
                                    </div>
            
                                    {!! Form::open(['route' => 'modelos_user.store']) !!}
            
            
                                    
                                    <!-- Estado Id Field -->
                                       
            
                                    <!-- User Id Field -->
                                        
                                        <br>
            
                                        <!-- Estado Id Field -->
            
                                        <input type="text" name="titulo" id="titulo" placeholder=" titulo" />
                                    
                                        <input type="text" name="descripcion" id="descripcion" placeholder="descripcion" />
            
            
                                        <textarea name="frame" id="frame" cols="45" rows="12" placeholder="frame"></textarea>
                                       
            
                                    <!-- Submit Field -->
                                    <div class="form-group col-sm-12">
                                        <button class="submit button-normal green">Registrar</button>
                                    </div>
            
                                    {!! Form::close() !!}
            
            
                                </div>
                            </div>



</section>
    
@endsection