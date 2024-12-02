<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dodaj ocijenu</title>
</head>
<body>
<form style="margin: 100px 600px" class="d-flex flex-column gap-3" method="POST" action="/admin/dodaj_ocijenu">

    @if($errors->any())
        <p>Greska: {{ $errors->first() }}</p>
    @endif

        {{ csrf_field() }}
    <div class="form-group">
        <input type="text" class="form-control" name="ime_predmeta" placeholder="Unesite ime predmeta">
    </div>
    <div class="form-group">
        <input type="number" class="form-control" name="ocijena" placeholder="Unesite ocijenu">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="ime_profesora" placeholder="Unesite ime profesora">
    </div>
    <button type="submit" class="btn btn-primary">Dodaj ocijenu</button>
</form>
</body>
</html>
