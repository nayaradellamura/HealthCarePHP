<?php
    require 'config.php';

    $id = addslashes($_GET['id']);

    if(isset($_POST['remedio']) && empty($_POST['vencimento'])  && empty($_POST['efeitos']) == false){
        $remedio = addslashes($_POST['remedio']);
        $vencimento = addslashes($_POST['vencimento']);
        $efeitos = addslashes($_POST['efeitos']);
        

        $sql = "UPDATE remedios SET remedio = '$remedio', vencimento = '$vencimento', efeitos = '$efeitos' WHERE id = '$id'";

        $sql = $pdo->query($sql);
        
        echo "
             <META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
                <script type=\"text/javascript\">
                alert(\"Remédio atualizado com sucesso \");
            </script>
        ";
    }
    
?>

<?php include 'head.php'; ?>

<?php include 'navbar.php'; ?>

    <?php
        if(isset($_GET['id']) && empty($_GET['id']) == false){
            $id = addslashes($_GET['id']);

            $sql = "SELECT * FROM remedios WHERE id = '$id' ";

            $sql = $pdo->query($sql);
                if($sql->rowCount() > 0){
                    foreach($sql->fetchall() as $remedios){

                    }
                }
        }
    ?>
    <div class="container mt-3">
        <h4>Edite o remédio</h4>
        <br>
        <form method="post">
                <div class="mb-3">
                    <label class="form-label">Remédio:</label>
                    <input value="<?php echo $remedios['remedio']?>" type="text" class="form-control" placeholder="Insira o nome do Remédio" name="remedio">
                </div>
                <div class="mb-3">
                    <label class="form-label">Data de vencimento:</label>
                    <input value="<?php echo $remedios['vencimento']?>" type="date" class="form-control"  name="vencimento">
                </div>
                <div class="mb-3">
                    <label class="form-label">Efeitos:</label>
                    <input value="<?php echo $remedios['efeitos']?>" type="text" class="form-control" placeholder="Digite os possível efeitos colaterais do remédio" name="efeitos">
                </div>
                <button type="submit">Enviar</button>
        </form>
    </div>

    
<?php include 'footer.php'; ?>

