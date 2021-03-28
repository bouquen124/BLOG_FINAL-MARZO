<table class="table">
    <thead>
        <tr>
            <th>Usuario</th>
    <th>Estado </th>
    <th>Titulo</th>
    <th>Subtitulo</th>
    <th>Contenido</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>{{ $post->Autor->name }}</td>
        <td>{{ $post->estado->nombre }}</td>
        <td>{{ $post->titulo }}</td>
        <td>{{ $post->subtitulo }}</td>
        <td>{{ substr($post->contenido,0,80) }} ...</td>
        </tr>
    </tbody>
</table>


<div class="conteiner">    
    
    <a href="{{ route('posts.index') }}" class="btn btn-default">Regresar</a>
    <a href="{{ route('ilustrables.create', ['id'=>$post->id, 'type'=>'Post', 'back'=>Request::path() ]) }}"><button class="btn btn-primary btn-md">Agregar Imagen</button></a>

</div>

<table class="table" style="margin-top:100px">

    <thead>
        <tr>
            <th>Imagen id</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($imagenes as $imagen)
            <tr>
                <td>{{ $imagen->id }}</td>
                <td>
                    <img src="{{ $imagen->url }}" alt="" width="120px">
                </td>
            </tr>
        @endforeach
    </tbody>
</table>