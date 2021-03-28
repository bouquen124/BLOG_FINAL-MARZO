@extends('ux.root')

@section('content')

    <!-- CONTENT START
                        ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Editar Servicio</h1>
                </div>
            </div>
            <!-- CONTACT CONTENT START
                            ============================================= -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">




                    </div>

                    {!! Form::open(['route' => 'servicio.store']) !!}
                    <!-- Estado Id Field -->
                    {!! Form::select('estado_id', $estados, null, ['class' => 'form-control']) !!}

                    <br>

                    <!-- Estado Id Field -->
                    {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}

                    <!-- User Id Field -->

                    <br>
                    <input type="text"  name="nombre" id="nombre" placeholder=" Nombre" />

                    <input type="text"  name="costo" id="costo" placeholder="Costo" />

                    <textarea  name="descripcion" id="descripcion" cols="45" rows="7" placeholder="Descripcion"></textarea>


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
