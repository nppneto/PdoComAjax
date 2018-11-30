<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/listar.css">
</head>
<body>

    <h2>Consulta de Usuários</h2>

    <form id="frmBusca">
        <div class="form-row align-items-center">
            <div class="col-sm-3 my-1">
                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input id="inputBusca" type="text" class="form-control col-12" id="inlineFormInputGroupUsername" placeholder="Digite aqui...">
                </div>
            </div>
            <div class="col-auto my-1">
                <button id="btnBuscar" type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form>

    <br/>

    <div id="painel_table"></div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script>
        window.document.getElementById('frmBusca').addEventListener('submit', function(event) {

            event.preventDefault();

            const form = {
                'action': 'buscarUsuario',
                'busca': window.document.getElementById('inputBusca').value
            };

            $.ajax({
                method: 'POST',
                async: true,
                url: '../routers/usuario.php',
                data: form,
                // dataType: 'html',
                beforeSend: function(xhr) {
                    $('#inputBusca').attr('disabled', 'disabled');
                    $('#btnBuscar').attr('disabled', 'disabled');
                }
            })
            .done(retorno => {
                console.log(retorno);
                $('#inputBusca').removeAttr('disabled');
                $('#btnBuscar').removeAttr('disabled');
                exibir_table(retorno);
            })
            .fail(e => {
                console.log(e.responseText);
            });

        });

        function exibir_table(dados) {
            // console.table(JSON.stringify(dados));
            let table_html = `<table class="table table-bordered table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Senha</th>
                                </tr>
                            </thead>
                            <tbody>`;
            
            for (let i = 0; i < dados.length; i++) {
                // table_html += `<tr><td><a href="#" onclick="carregaDados('`+ dados[i].id +`')">` + dados[i].nome_aluno + `</a></td>`;

                table_html += '<tr><td>'+dados[i].nome+'</td>';
                table_html += '<td>'+dados[i].email+'</td>';
                table_html += '<td>'+dados[i].senha+'</td></tr>';
            }

            // console.log(dados.length);

            table_html +=  `</tbody></table>`;

            // console.log(table_html);

            $('#painel_table').html(table_html);
        }

    </script>
</body>
</html>