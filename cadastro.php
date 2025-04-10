<?php include 'head.php'; ?>

<?php include 'navbar.php'; ?>

<div class="container mt-3">
    <h4>Cadastre um novo remédio</h4>
    <br>
    <form action="insertRemedio.php" method="post">
        <div class="mb-3">
            <label class="form-label">Remédio:</label>
            <input type="text" class="form-control" placeholder="Insira o nome do Remédio" name="remedio">
        </div>
        <div class="mb-3">
            <label class="form-label">Data de vencimento:</label>
            <input type="date" class="form-control"  name="vencimento">
        </div>
        <div class="mb-3">
            <label class="form-label">Efeitos:</label>
            <input type="text" class="form-control" placeholder="Digite os possível efeitos colaterais do remédio" name="efeitos">
        </div>
        <button type="submit">Enviar</button>
    </form>
</div>

<?php include 'footer.php'; ?>
