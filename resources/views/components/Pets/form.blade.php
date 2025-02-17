


<form action="{{ $action }}" method="post" enctype="multipart/form-data">

@csrf
@isset($Pet->id)
    @method('PUT')
    <input type="hidden" name="id" id="id" value="{{ $Pet->id }}">
@endisset

    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" @isset($Pet->nome) value="{{ $Pet->nome }}" @endisset required>

    <label for="descricao" class="form-label">descricao</label>
    <input type="text" name="descricao" class="form-control" id="descricao" @isset($Pet->descricao) value="{{ $Pet->descricao }}" @endisset name="descricao" class="form-control" id="descricao" required>

    <br/><br/>
    <input type="submit" class="btn btn-primary" value="{{ $submit }}"/>
    <a href="/Pet" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Voltar</a>
</form>
