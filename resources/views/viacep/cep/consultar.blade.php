<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <title>Consulta CEP - ViaCEP</title>
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 50px;">
            <div class="card-body">
                <form action="{{ route('viacep.consultarCEP') }}" method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
                    </div>
                    <button type="submit" class="btn btn-primary">Consultar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>