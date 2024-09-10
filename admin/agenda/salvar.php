<main class="agendaPageSave">
    <form method="post" enctype="multipart/form-data" name="frmtask" id="frmtask" class="form-input">
        <div class="input-container">
            <label for="" class="input-sob-label">Insira um título</label>
            <input placeholder="Insira o título de sua meta" class="input-field" type="text" id="txttitulometa">
            <span class="input-highlight"></span>
        </div>
        <div class="input-container">
            <label for="" class="input-sob-label">Insira a data de inicialização</label>
            <input placeholder="Insira a data de inicialização" class="input-field" type="date" id="datedatainicio">
            <span class="input-highlight"></span>
        </div>

        <div class="input-container">
            <label for="" class="input-sob-label">Insira a data de finalização</label>
            <input placeholder="Insira a data de finalização" class="input-field" type="date" id="datedatafim">
            <span class="input-highlight"></span>
        </div>

        <div class="btn-save">
            <input type="submit" class="saveTask" name="btnsalvar" id="btnsalvar" value="Salvar" />
        </div>
    </form>
    <?php
    if (filter_input(INPUT_POST, "btnsalvar")) {
        $titulometa= filter_input(INPUT_POST, "txttitulometa");
        $datainicio = filter_input(INPUT_POST, "datedatainicio");
        $datafim = filter_input(INPUT_POST, "datedatafim");

        $dados = array(
            "titulometa" =>$titulometa,
            "datainicio" => $datainicio,
            "datafim" => $datafim

        );
        include_once '../class/agenda.php';
        $age = new agenda();
        $age->setJsonDados(json_encode($dados));

        $msg = $age->salvar() === true ? "erro" : "dados salvos";
        echo "<script>alert('$msg')"
        ."</script>";
    }
    ?>
</main>