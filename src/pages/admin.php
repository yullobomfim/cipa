<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/vote.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Painel de Administrador</title>
</head>

<body>
    <main>
        <div class="one">
            <h1>Painel de Administrador</h1>
            <div class="tela">
                <div id="cardOne">
                    <img src="../../assets/img/user.png" alt="" width="200px">
                    <small id="nome">EDITAR CANDIDATO</small>
                </div>
                <div class="number">
                    <input type="text" class="form-control" placeholder="Digite o número do candidato" id="myInput" onkeyup="sendData()">
                </div>
                <div id="buttonsDiv">
                    <button class="btn btn-warning" id="branco" onclick="votarEmBranco()">ALTERAR</button>
                    <button class="btn btn-danger" id="corrigir" onclick="corrigir()">APAGAR</button>
                    <button class="btn btn-success" id="confirmar">CONFIRMAR</button>
                </div>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Ver lista de candidatos
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lista de Candidatos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center active">
                                    Nome 
                                    <span class="badge badge-primary badge-pill">Número</span>
                                </li>
                                <?php
                                $data = json_decode($dados, true);
                                foreach ($data as $key => $value) { ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <?= $data[$key]['title'] ?>
                                        <span class="badge badge-primary badge-pill"><?= $data[$key]['id'] ?></span>
                                    </li>
                                <?php } ?>


                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<script>
    function sendData() {
        // Declare variables
        array = [];
        array.push(...<?= $dados ?>)
        console.log(array)
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();


        document.getElementById("nome").innerHTML = filter

        for (var i = 0; i < array.length; i++) {
            if (array[i].id === parseInt(filter)) {

                document.getElementById("nome").innerHTML = array[i].title
                console.log('Aachou' + array[i].id)
            }
        }

    }

    function corrigir() {
        document.getElementById('nome').innerHTML = 'ESCOLHA SEU CANDIDATO'
        document.getElementById('myInput').value = ''
    }

    function votarEmBranco() {

        input = document.getElementById('myInput').value = ''
        document.getElementById('nome').innerHTML = 'DESEJA VOTAR EM BRANCO? CONFIRMA.'

    }
</script>