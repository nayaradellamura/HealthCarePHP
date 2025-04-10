<?php  require 'config.php';?>

<?php include 'head.php'; ?>

<?php include 'navbar.php'; ?>
<br>
<div class="container mt-3">
    <h6>Próximo ao Vencimento:</h6>
    
    <!-- 🟦 Legenda -->
    <div class="mb-2">
        <span>Legenda:</span>
        <span class="badge bg-warning text-dark">VENCE HOJE</span>
        <span class="badge bg-danger">VENCIDO</span>
        <span class="badge bg-success">Em dia</span>
    </div>
    <br>
    <table class="table table-hover">
        <thead class="azul-custom">
            <tr>
                <th>Nome do Remédio</th>
                <th>Data de Vencimento</th>
                <th>Dias Restantes do Vencimento</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM remedios";
                $sql = $pdo->query($sql);

                if ($sql->rowCount() > 0) {
                    $hoje = new DateTime();
                    $hojeStr = $hoje->format('Y-m-d');

                    foreach ($sql->fetchAll() as $remedio) {
                        if (!empty($remedio['vencimento'])) {
                            $vencimento = new DateTime($remedio['vencimento']);
                            $vencimentoStr = $vencimento->format('Y-m-d');

                            $classeLinha = '';
                            if ($vencimentoStr < $hojeStr) {
                                $diasRestantesTexto = "VENCIDO";
                                $classeLinha = 'table-danger';
                            } elseif ($vencimentoStr == $hojeStr) {
                                $diasRestantesTexto = "VENCE HOJE";
                                $classeLinha = 'table-warning';
                            } else {
                                $dias = (new DateTime($hojeStr))->diff(new DateTime($vencimentoStr))->days;
                                $diasRestantesTexto = "$dias dias";
                                $classeLinha = 'table-success';
                            }

                            echo '<tr class="'.$classeLinha.'">';
                            echo '<td>' . htmlspecialchars($remedio['remedio']) . '</td>';
                            echo '<td>' . $vencimento->format('d/m/Y') . '</td>';
                            echo '<td>' . $diasRestantesTexto . '</td>';
                            echo '</tr>';
                        }
                    }
                }
            ?>
        </tbody>
    </table>
</div>



<?php include 'footer.php'; ?>
