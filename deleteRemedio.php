<?php
    require 'config.php';

    if(isset($_GET['id']) && empty($_GET['id']) == false){
        $id = addslashes($_GET['id']);
        $sql = "DELETE FROM remedios WHERE id = '$id' ";
        $sql = $pdo->query($sql);

        echo "
                <META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
                    <script type=\"text/javascript\">
                    alert(\"Exclusão realizada com sucesso! \");
                    </script>
                ";    
    } else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
            <script type=\"text/javascript\">
            alert(\"Algo deu errado! \");
            </script>
        ";
    }
?>