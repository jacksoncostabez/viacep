<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Logadouro - Resultado da busca</title>
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 80px;">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered table-striped" style="table-layout: auto;">
                        <thead>
                            <tr>
                                <th>CEP</th>
                                <th>Logadouro</th>
                                <th>Complemento</th>
                                <th>Bairro</th>
                                <th>Localidade</th>
                                <th>UF</th>
                                <th>IBGE</th>
                                <th>GIA</th>
                                <th>DDD</th>
                                <th>Siafi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($array as $arr)
                                <tr class="">
                                    <td>@if(isset($arr['cep'])) {{$arr['cep']}} @else - @endif</td>
                                    <td>@if(isset($arr['logradouro'])) {{$arr['logradouro']}} @else - @endif</td>
                                    <td>@if(isset($arr['complemento'])) {{$arr['complemento']}} @else - @endif</td>
                                    <td>@if(isset($arr['bairro'])) {{$arr['bairro']}} @else - @endif</td>
                                    <td>@if(isset($arr['localidade'])) {{$arr['localidade']}} @else - @endif</td>
                                    <td>@if(isset($arr['uf'])) {{$arr['uf']}} @else - @endif</td>
                                    <td>@if(isset($arr['ibge'])) {{$arr['ibge']}} @else - @endif</td>
                                    <td>@if(isset($arr['gia'])) {{$arr['gia']}} @else - @endif</td>
                                    <td>@if(isset($arr['ddd'])) {{$arr['ddd']}} @else - @endif</td>
                                    <td>@if(isset($arr['siafi'])) {{$arr['siafi']}} @else - @endif</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('viacep.logadouro') }}" class="btn btn-success">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>