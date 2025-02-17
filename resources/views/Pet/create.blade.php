
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css')}}" media="screen" >
@endsection

<link rel="image_src" href="img/" >

<x-layout titulo="Cadastradr Pets">

   <h2>Novo pet</h2>

<x-Pets.form action="/Pet/salvar" submit="Cadastrar Pet"/>

</x-layout>
