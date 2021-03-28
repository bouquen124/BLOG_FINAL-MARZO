@extends('ux.root')

@section('content')

 <!-- CONTENT START
            ============================================= -->
            <div id="content" class="single-wrapper">
                

                <!-- BLOG START
                ============================================= -->
                <div class="blog-single">
                    <div class="container">
                        <div class="row">

                            <!-- SINGLE POST START
                            ============================================= -->
                            <div class="single-post col-md-8 wow fadeIn">
                                <article class="post-item">
                                    
                                    <div class="post-content">

                                        <div class="heading-block">
                                            <a href=""><h3>{{$post->titulo}}</h3></a>
                                            <div class="post-meta">
                                                <span class="date">{{$post->created_at}}</span>/<span class="author">{{$post->Autor->name}}</span>/
                                                
                                                @if(!auth()->guest() && (auth()->user()->rol_id==1 || auth()->user()->rol_id==2))
                                                <a href="  {{ route('blog.edit',['id'=>$post->id, 'idd'=>$post->id, 'type'=>'Post', 'back'=>Request::path() ]) }} ">
                                                    <span class="comments">
                                                        Editar
                                                    </span>
                                                </a>


                                                {!! Form::open(['route' => ['blog.destroy', $post->id], 'method' => 'delete']) !!}
                                                {!! Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Seguro que quiere borrar este Post?')"]) !!}
                                                {!! Form::close() !!} 
                                            
                                            @endif
                                            </div>
                                        </div>

                                        <div class="post-image">  
                                            @if ($post->FotoPost)
                                                <img src="{{ $post->FotoPost->url }}" width="600px" alt="" />
                                                
                                            @else
                                                <img src="{{asset('img/post.jpg')}}" width="600px" alt="">
                                            
                                            @endif
                                        </div>

                                        <br>

                                        <div class="content">
                                            <p>
                                                {{ $post->contenido}}
                                            </p>
                                        </div>
                                        

                                    </div>
                                        
                            
                                    {{-- <div class="caption wow fadeInUp">
                                        <div class="button-normal green" style="float: left; width: 33%;">
                                            <a href="  {{ route('blog.create') }} ">Nuevo Post</a>
                                        </div>
                                        
                                    </div> --}}
                                    
                                </article>
                            </div>
                            <!-- SINGLE POST END -->

                            <!-- SIDEBAR START
                            ============================================= -->
                            <div class="sidebar col-md-4 wow fadeIn">
                                <!-- Recent Post Start -->
                                <div class="sidebar-widget recent-post">
                                    <div class="heading-block">
                                        <h4>Posts Recientes</h4>
                                    </div>
                                    @foreach ($post_derecha as $post_simple)
                                        
                                    <div class="post-item">
                                        <a href="{{ route('blog.show', $post_simple->id) }}">
                                            <div class="post-thumb">

                                                @if ($post_simple->FotoPost)
                                                    <img src="{{ $post_simple->FotoPost->url }}" width="75px" alt="" />
                                            
                                                @else
                                                    <img src="{{asset('img/post.jpg')}}" width="75px" alt="">
                                        
                                                @endif
                                                
                                                <div class="overlay dark">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <a href="{{ route('blog.show', $post_simple->id) }}">
                                                <h4>{{$post_simple->titulo}}</h4>
                                            </a>
                                            <p>>{{substr($post_simple->contenido,0,120)}}</p>
                                            <div class="meta">
                                                <span class="date">>{{$post_simple->created_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                   
                                </div>
                                <!-- Recent Post End -->

                                <!-- Archives Start -->
                                <div class="sidebar-widget archives">
                                    <div class="heading-block">
                                        <h4>Archives</h4>
                                    </div>

                                    <div class="archive-items">
                                        <ul class="no-padding no-margin">
                                            <li><a href="#">August 2015</a></li>
                                            <li><a href="#">July 2015</a></li>
                                            <li><a href="#">June 2015</a></li>
                                            <li><a href="#">May 2015</a></li>
                                            <li><a href="#">April 2015</a></li>
                                            <li><a href="#">March 2015</a></li>
                                            <li><a href="#">February 2015</a></li>
                                            <li><a href="#">January 2015</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Archives End -->

                                <!-- Tags Start -->
                                <div class="sidebar-widget tags">
                                    <div class="heading-block">
                                        <h4>Archives</h4>
                                    </div>

                                    <div class="tag-items">
                                        <a href="#">Painting</a><a href="#">Drawing</a><a href="#">Sports</a><a href="#">Music</a><a href="#">Games</a><a href="#">Math</a><a href="#">Dance</a><a href="#">Kids</a><a href="#">Books</a>
                                    </div>
                                </div>
                                <!-- Tags End -->
                            </div>
                            <!-- SIDEBAR END -->

                        </div>
                    </div>
                </div>
                <!-- BLOG END -->

            </div>
            <!-- CONTENT END -->
    
@endsection