
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css')}}" media="screen" >
@endsection

<link rel="image_src" href="img/" >

<x-layout titulo="Alterar Pets">

   <h2>Alterar pet</h2>


   <x-Pets.form action="/Pet/alterar" submit=" Atualiar Pets " :Pet="$Pet"/>

</x-layout>
