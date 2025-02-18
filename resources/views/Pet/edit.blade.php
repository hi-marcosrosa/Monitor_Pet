
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css')}}" media="screen" >
@endsection

<link rel="image_src" href="img/" >

<x-layout titulo="Alterar Pets">

   <h2>Alterar pet</h2>

   <!-- {{ $Pet->nome }} -->
   <!-- <x-Pets.form action="/Pet/alterar" submit=" Atualizar Pets " :Pet="$Pet"/> Não funcionou, refatorei abaixo para funcionar!-->

   <form action="/Pet/alterar" method="post" enctype="multipart/form-data">

@csrf
    @method('PUT')
    <input type="hidden" name="id" id="id" value="{{ $Pet->id }}" />

    <label for="nome" class="form-label">Nome</label>
    <input type="text" value="{{ $Pet->nome }}" class="form-control" name="nome" id="nome" required />

    <label for="descricao" class="form-label">descricao</label>
    <input type="text" name="descricao" class="form-control" id="descricao" value="{{ $Pet->descricao }}" required />

    <br/><br/>
    <input type="submit" class="btn btn-primary" value="Alterar Pet"/>
    <a href="/Pet" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Voltar</a>

</form>

</x-layout>
