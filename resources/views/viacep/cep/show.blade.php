<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>CEP: {{ isset($array['cep']) ? $array['cep'] : "-" }} - Resultado da busca</title>
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 80px;">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">CEP</th>
                            <th scope="col">Logadouro</th>
                            <th scope="col">Complemento</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Localidade</th>
                            <th scope="col">UF</th>
                            <th scope="col">IBGE</th>
                            <th scope="col">GIA</th>
                            <th scope="col">DDD</th>
                            <th scope="col">Siafi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>@if(isset($array['cep'])) {{$array['cep']}} @else - @endif</td>
                            <td>@if(isset($array['logradouro'])) {{$array['logradouro']}} @else - @endif</td>
                            <td>@if(isset($array['complemento'])) {{$array['complemento']}} @else - @endif</td>
                            <td>@if(isset($array['bairro'])) {{$array['bairro']}} @else - @endif</td>
                            <td>@if(isset($array['localidade'])) {{$array['localidade']}} @else - @endif</td>
                            <td>@if(isset($array['uf'])) {{$array['uf']}} @else - @endif</td>
                            <td>@if(isset($array['ibge'])) {{$array['ibge']}} @else - @endif</td>
                            <td>@if(isset($array['gia'])) {{$array['gia']}} @else - @endif</td>
                            <td>@if(isset($array['ddd'])) {{$array['ddd']}} @else - @endif</td>
                            <td>@if(isset($array['siafi'])) {{$array['siafi']}} @else - @endif</td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ route('viacep.index') }}" class="btn btn-success">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>