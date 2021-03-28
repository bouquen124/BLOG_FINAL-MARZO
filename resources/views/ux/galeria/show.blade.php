@extends('ux.root')


@section('content')



    <!-- CONTENT START
                ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>{{ $galeria->titulo }}</h1>

                    @if(!auth()->guest() && (auth()->user()->rol_id==1 || auth()->user()->rol_id==2))
                    <a href="  {{ route('gallery.edit',['id'=>$galeria->id]) }} ">
                        <h5 class="comments">
                            Editar
                        </h5>
                    </a>

                    {!! Form::open(['route' => ['gallery.destroy', $galeria->id], 'method' => 'delete']) !!}
                    {!! Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' =>
                    "return confirm('Seguro que quiere borrar esta Imagen?')"]) !!}
                    {!! Form::close() !!}

                    @endif
                </div>
            </div>
        </div>

        <!-- SINGLE CLASS START
                    ============================================= -->
                    <div class="container" style="background: rgba(0, 0, 0, 0.06); ">
                        <div style="float: left; width: 70%; margin: 20px;">
                                  <img src="{{ $galeria->FotoGaleria->url }}" alt="">
                              
                        </div>
                        <div style="float: left; width: 20%; margin: 20px;">
                            <h4>{{ $galeria->descripcion }}</h4>
                        </div>
                    </div>
            
            <br><br>
       
        <!-- SINGLE CLASS END -->



























    @endsection
