<x-layout title="Nova Série">

    <h1>Nova Serie</h1>
    <form action="salvar" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>

</x-layout>
