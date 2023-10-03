@csrf

<label class="upprcase text-gray-700 text-ux">Titulo</label>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{ $post->title }}">

<label class="upprcase text-gray-700 text-ux">Contenido</label>
<textarea name="body" rows="5" class="rounded border-gray-200 w-full">{{ $post->body }}</textarea>


<div class="flex justify-between intems-center ">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">

</div>