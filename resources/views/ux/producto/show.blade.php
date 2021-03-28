@extends('ux.root')


@section('content')



    <!-- CONTENT START
                ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>{{ $producto->nombre }}</h1>

                    @if(!auth()->guest() && (auth()->user()->rol_id==1 || auth()->user()->rol_id==2))

                    <a
                        href="  {{ route('producto.edit', ['id' => $producto->id, 'idd' => $producto->id, 'type' => 'Producto', 'back' => Request::path()]) }} ">
                        <span class="comments">
                            Editar
                        </span>
                    </a>

                    {!! Form::open(['route' => ['producto.destroy', $producto->id], 'method' => 'delete']) !!}
                    {!! Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' =>
                    "return confirm('Seguro que quiere borrar este Producto?')"]) !!}
                    {!! Form::close() !!}
                    @endif

                </div>
            </div>
        </div>

        <!-- SINGLE CLASS START
                    ============================================= -->
        <div class="single-classes clearfix">
            <div class="container">
                <div class="row">
                    <!-- Class Gallery Start -->
                    <div class="class-gallery wow fadeIn col-md-6 clearfix">
                        <div class="class-flexslider">
                            <ul class="slides">
                                @if ($producto->FotoProducto)
                                    @foreach ($imagenes as $imagen)
                                        <li data-thumb="{{ $imagen->url }}">
                                            <img src="{{ $imagen->url }}" style="width:570px;height:400px;" />
                                        </li>
                                    @endforeach
                                @else
                                    <li data-thumb="public/img/post.jpg">
                                        <img src="public/img/post.jpg" alt="" style="width:570px;height:400px;">
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- Class Gallery End -->

                    <!-- Class Content Start -->
                    <div class="class-content wow fadeIn col-md-6 clearfix">
                        <p>{{ $producto->descripcion }}</p>

                        <ul class="with-icon">
                            <li>{{ $producto->categoria->nombre }}</li>
                            <li>{{ $producto->estado->nombre }}</li>
                        </ul>

                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Costo :</td>
                                    <td>${{ $producto->costo }}</td>
                                </tr>
                                <tr>
                                    <td>Class Size :</td>
                                    <td>15 Children</td>
                                </tr>
                                <tr>
                                    <td>Pricing</td>
                                    <td>Full Day, $45</td>
                                </tr>
                                <tr>
                                    <td>Sessions</td>
                                    <td>Mornings, 8am - 12 noon<br>Afternoons, 1pm - 5pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Class Content End -->

                    <!-- CLASS COUNTDOWN START
                                ============================================= -->
                    <div class="first-day wow fadeIn">
                        <div class="container">
                            <div class="heading-block wow fadeIn">
                                <h3>Class Start</h3>
                            </div>

                            <div class="row">
                                <div class="first-day-countdown">
                                    <div id="clock"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CLASS COUNTDOWN END -->
                </div>
            </div>
        </div>
        <!-- SINGLE CLASS END -->

        <!-- CLASS FEATURE SECTION START
                    ============================================= -->
        <div class="class-feature grey-background clearfix">
            <div class="container">
                <div class="row">
                    <div class="feature-item col-md-4 wow fadeInUp">
                        <div class="feature-with-bg" style="background-color: #f69c3b;">
                            <div class="feature-icon">
                                <div class="icon icon-check-box2"></div>
                            </div>
                            <div class="feature-desc">
                                <h4>Calificado</h4>
                                <p>Instructores calificados para la enseñanza en las area correspondientes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item col-md-4 wow fadeInUp">
                        <div class="feature-with-bg" style="background-color: #e57978;">
                            <div class="feature-icon">
                                <div class="icon icon-favorite21"></div>
                            </div>
                            <div class="feature-desc">
                                <h4>Amigable</h4>
                                <p>Instructores calificados para la enseñanza en las area correspondientes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item col-md-4 wow fadeInUp">
                        <div class="feature-with-bg" style="background-color: #fec02a;">
                            <div class="feature-icon">
                                <div class="icon icon-thumbs26"></div>
                            </div>
                            <div class="feature-desc">
                                <h4>Experiencia</h4>
                                <p>Instructores calificados para la enseñanza en las area correspondientes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item col-md-4 wow fadeInUp">
                        <div class="feature-with-bg" style="background-color: #7fb881;">
                            <div class="feature-icon">
                                <div class="icon icon-rugby-ball"></div>
                            </div>
                            <div class="feature-desc">
                                <h4>Areas de Trabajo</h4>
                                <p>Instructores calificados para la enseñanza en las area correspondientes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item col-md-4 wow fadeInUp">
                        <div class="feature-with-bg" style="background-color: #c389ce;">
                            <div class="feature-icon">
                                <div class="icon icon-book119"></div>
                            </div>
                            <div class="feature-desc">
                                <h4>Educación</h4>
                                <p>Instructores calificados para la enseñanza en las area correspondientes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item col-md-4 wow fadeInUp">
                        <div class="feature-with-bg" style="background-color: #59bec9;">
                            <div class="feature-icon">
                                <div class="icon icon-bars2"></div>
                            </div>
                            <div class="feature-desc">
                                <h4>Aprendizaje</h4>
                                <p>Instructores calificados para la enseñanza en las area correspondientes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CLASS FEATURE END -->



























    @endsection
