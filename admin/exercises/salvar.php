<main class="exercisesPageSave">
    <form method="post" enctype="multipart/form-data" name="frmexercise" id="frmexercise" class="form-input">
        <div class="input-container">
            <label for="" class="input-sob-label">Qual o exercício?</label>
            <input placeholder="Supino reto" class="input-field" type="text" id="txtexercicio" name="txtexercicio" required>
            <span class="input-highlight"></span>
        </div>

        <div class="input-container">
            <label for="" class="input-sob-label">Quantas repetições?</label>
            <input placeholder="20" class="input-field" type="number" id="nmrrepeticoes" name="nmrrepeticoes" required>
            <span class="input-highlight"></span>
        </div>

        <div class="input-container">
            <label for="" class="input-sob-label">Quantas series?</label>
            <input placeholder="4" class="input-field" type="number" id="nmrseries" name="nmrseries" required>
            <span class="input-highlight"></span>
        </div>

        <div class="input-container">
            <label for="" class="input-sob-label">Peso?</label>
            <input placeholder="8" class="input-field" type="number" id="nmrpeso" name="nmrpeso" required>
            <span class="input-highlight"></span>
        </div>

        <div class="btn-save">
            <input type="submit" class="saveExercise" name="btnsalvar" id="btnsalvar" value="Finalizar" />
        </div>
    </form>
    <?php
    if (filter_input(INPUT_POST, "btnsalvar")) {
        $exercicio = filter_input(INPUT_POST, "txtexercicio");
        $repeticoes = filter_input(INPUT_POST, "nmrrepeticoes");
        $series = filter_input(INPUT_POST, "nmrseries");
        $peso = filter_input(INPUT_POST, "nmrpeso");
        
        $dados = array(
            "exercicio" => $exercicio,
            "repeticoes" => $repeticoes,
            "series" => $series,
            "peso" => $peso

        );
        include_once '../class/exercises.php';
        $exe = new exercises();
        $exe->setJsonDados(json_encode($dados));

        $msg = $exe->salvar() === true ? "erro" : "dados salvos";
        echo "<script>alert('$msg')"
        ."</script>";
        echo '<meta http-equiv="refresh" content="0.1; URL=?p=exercises/listar">';
    }
    ?>
</main>
<script src="../js/validacao.js"></script>