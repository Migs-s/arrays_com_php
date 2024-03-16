<?php 
        $alunos = array(
            array("Nome" => "Aline", "primeiro_s" => 10, "segundo_s" => 9.5 ),
            array("Nome" => "Alfredo", "primeiro_s" => 8, "segundo_s" => 5 ),
            array("Nome" => "Carla", "primeiro_s" => 5, "segundo_s" => 6.5 ),
            array("Nome" => "César", "primeiro_s" => 9, "segundo_s" => 9 ),
            array("Nome" => "Daniel", "primeiro_s" => 10, "segundo_s" => 7 ),
            array("Nome" => "Esnar", "primeiro_s" => 8, "segundo_s" => 6 ),
            array("Nome" => "Henzo", "primeiro_s" => 6, "segundo_s" => 8 ),
            array("Nome" => "Pablo", "primeiro_s" => 7, "segundo_s" => 5 ),
            array("Nome" => "Wallace", "primeiro_s" => 8, "segundo_s" => 7 ),
            array("Nome" => "Zulmira", "primeiro_s" => 10, "segundo_s" => 6 ),
        )
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Arrays - Agenda05</title>
</head>
<body>
    
    <header>
        <div>
            <h2 class="heading">
                8 - Ano A
            </h2>
        </div>

        <div class="barra_branca">
        </div>
    </header>

    <main>

        <table class="tabela">
            <thead class="opcoes_colunas">
                <tr>
                    <th>Nome -- </th>
                    <th>Primeiro Semestre --</th>
                    <th>Segundo Semestre</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach ($alunos as $aluno):
                ?>
                    <tr>
                        <td><?php print $aluno["Nome"]?></td>
                        <td><?php print $aluno['primeiro_s']?></td>
                        <td><?php print $aluno['segundo_s']?></td>
                    </tr>

                <?php 
                endforeach;
                ?>
            </tbody>
        </table>


    </main>    
</body>
</html>