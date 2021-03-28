@extends('ux.root')

@section('content')

    <!-- CONTENT START
                    ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Editar Cliente</h1>
                </div>
            </div>
            <!-- CONTACT CONTENT START
                        ============================================= -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">



                    
                        </div>

                        {!! Form::model($cliente, ['route' => ['cliente.update', $cliente->id], 'method' => 'patch']) !!}


                        
                        <!-- Estado Id Field -->
                            {!! Form::select('estado_id', $estados, null, ['class' => 'form-control']) !!}

                        <!-- User Id Field -->
                            
                            <br>

                            <!-- Estado Id Field -->

                            <input type="text" value="{{ $cliente->nombre }}" name="nombre" id="nombre" placeholder=" Nombre" />
                        
                            <input type="text" value="{{ $cliente->direcion }}" name="direcion" id="direcion" placeholder="Direcion" />

                            <input type="text" value="{{ $cliente->correo }}" name="correo" id="correo" placeholder="Correo" />
                            
                            <input type="text" value="{{ $cliente->telefono }}" name="telefono" id="telefono" placeholder="Telefono" />
                    
                            <textarea value="{{ $cliente->descripcion }}" name="descripcion" id="descripcion" cols="45" rows="6" placeholder="Descripcion">{{ $cliente->descripcion }}</textarea>
                           

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            <button class="submit button-normal green">Registrar</button>
                        </div>

                        {!! Form::close() !!}



                        @if ($cliente->FotoCliente)

                                <table class="table" style="margin-top:100px">
                                    <tbody>
                                        @foreach ($imagenes as $imagen)
                                            <tr>
                                                <td>
                                                    <img src="{{ $imagen->url }}" alt="" width="300px">
                                                </td>
                                                <td>
    
                                                    {!! Form::open(['route' => ['ilustrable.destroy', $imagen->id], 'method' =>
                                                    'delete']) !!}
                                                    {!! Form::hidden('back', Request::get('back'), ['class' => 'form-control']) !!}
                                    
                                                    {!! Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger',
                                                    'onclick' => "return confirm('Seguro que quiere borrar esta Imagen?')"]) !!}
                                                    {!! Form::close() !!}
    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            
                            @else

                                {!! Form::open(['route' => 'ilustrable.store', 'files'=>true]) !!}

                                    <!-- Ilustrable Id Field -->
                                    {!! Form::hidden('ilustrable_id', Request::get('idd') , ['class' => 'form-control']) !!}
    
                                    <!-- Ilustrable Type Field -->
                                    {!! Form::hidden('ilustrable_type', Request::get('type'), ['class' => 'form-control']) !!}
        
                                    <!-- Ilustrable Type Field -->
                                    {!! Form::hidden('back', Request::get('back'), ['class' => 'form-control']) !!}

                                    <div class="form-group col-sm-6">
                                        {!! Form::label('url', 'Nueva Imagen:') !!}
                                        {!! Form::file('url', null, ['class' => 'form-control']) !!}
                                    </div>
    
                                    <div class="form-group col-sm-12">
                                        <button class="submit button-normal green">Registrar Imagen</button>
                                    </div>
                            
                                {!! Form::close() !!}
    
                            @endif


                    </div>
                </div>
            </div>
            <!-- CONTACT CONTENT END -->
        </div>
    </section>
    <!-- CONTENT END -->

    @endsection

