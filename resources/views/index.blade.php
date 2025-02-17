

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Pets Cadastrados</title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css" media="screen" />
    <link rel="image_src" href="../img/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <br>
  <br>
    <div class="container">
    <section class="container-admin-banner">
    <img src="../img/pet1site.png" class="logo-admin" >
    <h1>Lista de Pets</h1>
  </section>
    <h2>Lista de Pets</h2>
            <div class="alert alert-success" role="alert">
            </div>
            <div class="alert alert-danger" role="alert">
            </div>
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
    @foreach ($ListaPets as $pet)
        <tr>
            <th></th>
            <td>{{$pet['nome']}}</td>
            <td>{{$pet['descricao']}}</td>
            <td></tr>
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>
</body>
</html>
