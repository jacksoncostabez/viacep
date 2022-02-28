<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <title>Preenchimento Automático</title>
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 80px;">
            <div class="card-body">
                <div class="row g-3">

                    <div class="col-md-2">
                        <label class="form-label">CEP</label>
                        <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Cidade</label>
                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Rua</label>
                        <input type="text" class="form-control" name="logadouro" id="rua" placeholder="Logadouro">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">UF</label>
                        <input type="text" class="form-control" name="uf" id="uf" placeholder="UF">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Complemento</label>
                        <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">IBGE</label>
                        <input type="text" class="form-control" name="ibge" id="ibge" placeholder="Código IBGE">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">GIA</label>
                        <input type="text" class="form-control" name="gia" id="gia" placeholder="Código GIA">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">DDD</label>
                        <input type="text" class="form-control" name="ddd" id="ddd" placeholder="DDD">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">SIAFI</label>
                        <input type="text" class="form-control" name="siafi" id="siafi" placeholder="Siafi">
                    </div>


                </div>
                <a href="{{ route('viacep.index') }}" class="btn btn-success">Voltar</a>
            </div>
        </div>
    </div>

    <!-- Adicionando Javascript -->
    <script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
                $("#complemento").val("");
                $("#gia").val("");
                $("#ddd").val("");
                $("#siafi").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");
                        $("#complemento").val("...");
                        $("#gia").val("...");
                        $("#ddd").val("...");
                        $("#siafi").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                                $("#complemento").val(dados.complemento);
                                $("#gia").val(dados.gia);
                                $("#ddd").val(dados.ddd);
                                $("#siafi").val(dados.siafi);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
</body>
</html>