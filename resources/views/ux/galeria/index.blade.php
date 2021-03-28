@extends('ux.root')

@section('content')
    <!-- CONTENT START
                    ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Galeria</h1>
                </div>
            </div>
        </div>

        <!-- GALLERY START
        ============================================= -->
        <div>
            <div class="container">
                <!-- Gallery Items
                ============================================= -->

                <div id="gallery" class="wow fadeIn clearfix">
                    @foreach ($galerias as $galeria)
                        <div class="gallery-item exterior">
                            <div class="wow fadeIn">
                                <a title="{{ $galeria->titulo }}" href="{{ route('gallery.show', $galeria->id) }}">
                                    <div class="gallery-image">
                                        <img src="{{ $galeria->FotoGaleria->url }}" alt=""
                                            style="width:555px;height:366px;">
                                        <div class="overlay dark"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    @endforeach
                    
                    {{ $galerias->render() }}
                </div>
            </div>
        </div>
        <br><br>
        <!-- GALLERY END -->

    </section>
    <!-- CONTENT END -->


@endsection
