@extends('ux.root')

@section('content')




    <!-- FEATURES SECTION START
                    ============================================= -->
    <div class="our-features grey-background">
        <div class="container">
            <div class="heading-block wow fadeIn">
                <br>
                <h2>Nuestros Clientes</h2>
                <h4 class="tagline">Tenemos participación en diferentes ramas de la industria</h4>
            </div>

            <div class="row">


                <div class="features">

                    @foreach ($clientes as $cliente)



                        <div class="feature-item languages col-md-4 wow fadeInUp">
                            <a href="{{ route('cliente.show', $cliente->id) }}">
                                <div class="feature-icon"> 
                                    @if ($cliente->FotoCliente)
                                        <img src="{{ $cliente->FotoCliente->url }}"  style="width:140px;height:140px;border-radius:77px;">
                                    @else
                                        <img src="{{ asset('img/user-icon.png') }}">
                                    @endif
                                </div>
                            </a>
                            <div class="feature-desc">
                                <h4>{{ $cliente->nombre }}</h4>
                                <p>{{ substr($cliente->descripcion, 0, 120) }} </p>
                            </div>
                        </div>

                    @endforeach

                    {{ $clientes->render() }}


                </div>

            </div>
        </div>
    </div>
    <!-- FEATURES SECTION END -->

@endsection
