@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css')}}" media="screen" >
@endsection

<x-layout titulo="Listar Pets Cadastrados">

    <h2>Lista de Pets</h2>
            <div class="alert alert-success" role="alert">
            </div>
            <div class="alert alert-danger" role="alert">
            </div>
    <a href="Pet/novo" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Novo Pet</a>
    <form action="/relatorio" method="get">
    <input type= "submit" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true" value=" Baixar Relatório "/>
    </form>
    <table class="table">
    <thead>
        <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">descricao</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($ListaAni as $Pet)
        <tr>
            <th></th>
            <td>{{$Pet['nome']}}</td>
            <td>{{$Pet['descricao']}}</td>
            <td>
            <a href="/Pet/editar/{{ $Pet->id }}" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Alterar</a>

            <form action="Pet/excluir" method="post">
            @csrf
            @method('DELETE')
                <input type = "hidden" name="id" id="id" value="{{ $Pet->id }}">
                <input type = "submit" class="btn btn-danger" value= "Excluir"></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</x-layout>
