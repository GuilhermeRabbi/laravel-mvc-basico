
<x-layout title='teste'>

      <h1>Series</h1>
      <a href="/series/criar" class="btn btn-dark mb-2">Adicionar Série</a>

      <ul class="list-group">
        @foreach ($lista as $index)
            <li class="list-group-item">{{ $index->nome }}</li>
        @endforeach
      </ul>



</x-layout>

