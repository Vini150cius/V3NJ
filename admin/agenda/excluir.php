<main class="agendaPageDelete">
    <div class="cardDeleteAlert" role="alert">
        <?php
        $id = filter_input(INPUT_GET, 'id');

        include_once '../class/agenda.php';
        $age = new agenda();

        if ($age->excluir($id) === 'null') {
            $msg = "Excluido";
        } else {
            $msg = "Erro ao excluir";
        }
        ?>
        <p class="textDeleteAlert" id="textDeleteAlert" name="textDeleteAlert">
            <?= $msg ?>
        </p>
    </div>
</main>
<meta http-equiv="refresh" content="2.0; URL=?p=agenda/listar">