@extends('ux.root')

@section('content')

    <!-- CONTENT START
                    ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Editar Post</h1>
                </div>
            </div>
            <!-- CONTACT CONTENT START
                        ============================================= -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">



                    
                        </div>


                        {!! Form::model($post, ['route' => ['blog.update', $post->id], 'method' => 'patch']) !!}


                            <!-- Estado Id Field -->
                            {!! Form::select('estado_id', $estados, null, ['class' => 'form-control']) !!}
                        

                            <!-- User Id Field -->
                            {{-- <select type="select" name="user_id" id="user_id" placeholder="user" ></select> --}}

                            {!! Form::hidden('user_id', auth::user()->id, null, ['class' => 'form-control']) !!}
                        

                            <br>

                            <!-- Contenido Field -->
                            <input type="text" value="{{$post->titulo}}" name="titulo" id="titulo" placeholder="{{$post->titulo}}" />
                            <br>

                            <input type="text" value="{{$post->subtitulo}}" name="subtitulo" id="subtitulo" placeholder="{{$post->subtitulo}}" />
                            <br>

                            <textarea value="{{$post->contenido}}" name="contenido" id="contenido" cols="45" rows="12" placeholder="{{$post->contenido}}">{{$post->contenido}}</textarea>
                           

                            <!-- Submit Field -->
                            <div class="form-group col-sm-12" style="float: left; width: 20%;">
                                <button class="submit button-normal green">Registrar</button>
                            </div>

                        {!! Form::close() !!}

                        
                            <br>
                            <br>
                            <br>
                            <br>

                            
                            @if (count($imagenes) > 3)

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
