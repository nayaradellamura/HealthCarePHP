<?php

require 'config.php';

if (!empty($_POST['remedio']) && !empty($_POST['vencimento']) && !empty($_POST['efeitos'])) {
    $remedio = addslashes($_POST['remedio']);
    $vencimento = $_POST['vencimento']; // formato yyyy-mm-dd já pronto para o banco
    $efeitos = addslashes($_POST['efeitos']);

    $sql = "INSERT INTO remedios (remedio, vencimento, efeitos) VALUES ('$remedio', '$vencimento', '$efeitos')";
    $sql = $pdo->query($sql);

    echo "
    <META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
    <script type=\"text/javascript\">
        alert(\"Remédio cadastrado com sucesso!\");
    </script>
    ";
}
?>

