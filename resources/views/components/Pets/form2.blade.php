<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    @isset($Pet->id)
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $Pet->id }}" />
    @endisset

    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome', $Pet->nome ?? '') }}" required />

    <label for="descricao" class="form-label">Descrição</label>
    <input type="text" name="descricao" class="form-control" id="descricao" value="{{ old('descricao', $Pet->descricao ?? '') }}" required />

    <br/><br/>
    <input type="submit" class="btn btn-primary" value="{{ $submit }}" />
    <a href="/Pet" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Voltar</a>
</form>
