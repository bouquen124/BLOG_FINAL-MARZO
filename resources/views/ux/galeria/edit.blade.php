@extends('ux.root')

@section('content')

    <!-- CONTENT START
                        ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Editar Imagen</h1>
                </div>
            </div>
            <!-- CONTACT CONTENT START
                            ============================================= -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">




                    </div>

                    {!! Form::model($galeria, ['route' => ['gallery.update', $galeria->id], 'method' => 'patch']) !!}

                    
                        <input type="text" value="{{ $galeria->titulo }}" name="titulo" id="titulo" placeholder=" Titulo" />

                        <textarea  name="descripcion" id="descripcion" cols="45" rows="8" placeholder="Descripcion">{{ $galeria->descripcion }}</textarea>

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
