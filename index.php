<?php 

    require 'config.php';

?>

<?php include 'head.php'; ?>

<?php include 'navbar.php'; ?>


    <div class="container mt-3">
        <h3>Remédios cadastrados 
            <a href="cadastro.php" class="btn-custom">Novo Remédio</a>
        </h3>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Nome do remédio</th>
                    <th>Data de vencimento</th>
                    <th>Efeitos</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM remedios";

                    $sql = $pdo->query($sql);

                        if ($sql->rowCount() > 0) {
                            foreach ($sql->fetchAll() as $remedio) {
                                echo '<tr>';
                                echo '<td>'.$remedio['remedio'].'</td>';
                                $dataFormatada = date('d/m/Y', strtotime($remedio['vencimento']));
                                echo '<td>' . $dataFormatada . '</td>';
                                echo '<td>'.$remedio['efeitos'].'</td>';
                                echo '<td>
                                            <a href="vencerRemedio.php?id=' .$remedio['id'] . '" class="btn-custom-vencimento">Vencimento</a>
                                            -
                                            <a href="updateRemedio.php?id=' .$remedio['id'] . '" class="btn-custom-editar">Editar</a>
                                            -
                                            <a href="deleteRemedio.php?id=' .$remedio['id'] . '" class="btn-custom-apagar">Excluir</a>
                                        </td>';
                                echo '<tr>'; 
                                echo '</tr>';
                            }
                        }
                ?>
            </tbody>
        </table>
    </div>

<?php include 'footer.php'; ?>

