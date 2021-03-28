@extends('ux.root')

@section('content')

    <!-- CONTENT START
                        ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Nueva Imagen</h1>
                </div>
            </div>
            <!-- CONTACT CONTENT START
                            ============================================= -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">




                    </div>

                    {!! Form::open(['route' => 'gallery.store', 'files' => true]) !!}
                    
                        <input type="text"  name="titulo" id="titulo" placeholder=" Titulo" />

                        <textarea  name="descripcion" id="descripcion" cols="45" rows="8" placeholder="Descripcion"></textarea>

                        <div class="form-group col-sm-6">
                            {!! Form::label('url', 'Nueva Imagen:') !!}
                            {!! Form::file('url', null, ['class' => 'form-control']) !!}
                        </div>

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
