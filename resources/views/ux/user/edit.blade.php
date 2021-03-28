@extends('ux.root')


@section('content')

<section id="content" class="single-wrapper">
    <!-- Page Title -->
    <div class="grey-background wow fadeIn">
        <div class="container">
            <div class="heading-block page-title wow fadeInUp">
                <h1>Editar Usuario</h1>
            </div>
        </div>
        <!-- CONTACT CONTENT START
                        ============================================= -->
        <div class="contact-section">
            <div class="container">
                <div class="row">




                </div>

                {!! Form::model($user,  ['route' => ['user.update', $user->id], 'method' => 'patch'] ) !!}

                <!-- Estado Id Field -->
              

              

                <br>
                <input type="text" hidden value="{{ $user->rol_id }}" name="nombre" id="nombre" placeholder=" Nombre" />


                <input type="text" value="{{ $user->name }}" name="nombre" id="nombre" placeholder=" Nombre" />

                <input type="email" value="{{ $user->email }}" name="email" id="email" placeholder="email" />

                <input type="password" value="{{ $user->password }}" name="password" id="password" placeholder="email" />

             

                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    <button class="submit button-normal green">Registrar</button>
                </div>

                {!! Form::close() !!}


                

                @if ($user->FotoUser)

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