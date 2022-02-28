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
                <form action="{{ route('viacep.consultarLogadouro') }}" method="POST" >
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-2">
                            <label for="formGroupExampleInput" class="form-label">UF</label>
                            <select name="uf" id="uf" class="form-control">
                                <option value="PI">Piauí</option>
                                <option value="SP">São Paulo</option>
                                <option value="MA">Maranhão</option>
                                <option value="RJ">Rio de Janeiro</option>
                            </select>
                        </div>
    
                        <div class="col-md-4">
                            <label for="formGroupExampleInput" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                        </div>
    
                        <div class="col-md-6">
                            <label for="formGroupExampleInput" class="form-label">Logadouro</label>
                            <input type="text" class="form-control" id="logadouro" name="logadouro" placeholder="Logadouro">
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Consultar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>