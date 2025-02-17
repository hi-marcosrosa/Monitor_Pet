!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Listar Pets Cadastrados</title>
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
</head>
<body>
<style>
table{
width:90%;
margin:auto 0;

}
table, th, td{
border:1px solid #000;
}

table th{
padding:1px 0 11px;
font_weight: bold;
font-size: 18px;
text-align: left;
padding: 8px;
}
table tr{
font-size: 18px;
padding: 8px;
}

.container-admin-banner h1{
margin-top: 40px;
font-size: 30px;
}

</style>

<main>

<h3> Lista de Pets</h3>

<table>
<thead>
<tr>
<th>nome</th>
<th>descricao</th>
</tr>
</thead>
</tbody>

@foreach ($Pets as $pet)
<tr>
<td>{{ $pet->nome }}</td>
<td>{{ $pet->descricao }}</td>
</tr>
@endforeach
</tbody>
</table>

</main>
</body>
</html>




