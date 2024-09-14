<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Erro: Parâmetro 'id' não foi passado.";
    exit;
}
?>
<main class="exercisesPageEdit">
    <form method="post" enctype="multipart/form-data" name="frmtask" id="frmtaskedit" class="form-input" action="">
        <div class="input-container">
            <label for="txtexercicio" class="input-sob-label-edit">Exercício</label>
            <input placeholder="Insira o exercício" class="input-field-edit" type="text" id="txtexercicio" name="txtexercicio">
        </div>
        <div class="input-container-edit">
            <label for="nmrrepeticoes" class="input-sob-label-edit">Repetições</label>
            <input placeholder="Insira suas repetições" class="input-field-edit" type="number" id="nmrrepeticoes" name="nmrrepeticoes">
        </div>

        <div class="input-container-edit">
            <label for="nmrseries" class="input-sob-label-edit">Series</label>
            <input placeholder="Insira quantas series" class="input-field-edit" type="number" id="nmrseries" name="nmrseries">
        </div>

        <div class="input-container-edit">
            <label for="nmrseries" class="input-sob-label-edit">Peso</label>
            <input placeholder="Insira quanto é a carga" class="input-field-edit" type="number" id="nmrpeso" name="nmrpeso">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="btn-save">
            <input type="submit" class="saveTask" name="btnsalvar" id="btnsalvar" value="Salvar alterações" />
        </div>
    </form>
</main>
<?php
if (filter_input(INPUT_POST, "btnsalvar")) {
    $exercicio = filter_input(INPUT_POST, "txtexercicio");
    $repeticoes = filter_input(INPUT_POST, "nmrrepeticoes");
    $series = filter_input(INPUT_POST, "nmrseries");
    $peso = filter_input(INPUT_POST, "nmrpeso");

    if ($id) {
        echo "<script>console.log($id)</script>";
        $dados = array(
            "exercicio" => $exercicio,
            "repeticoes" => $repeticoes,
            "series" => $series,
            "peso" => $peso
        );

        include_once '../class/exercises.php';
        $exercises = new Exercises();
        $exercises->setJsonNovosDados(json_encode($dados));

        $msg = $exercises->editar($id) === true ? "erro" : "dados editados";
        echo "<script>alert('$msg')"
            . "</script>";

        echo '<meta http-equiv="refresh" content="0.1; URL=?p=exercises/listar">';
    } else {
        echo "Erro: Parâmetro 'id' não foi passado.";
    }
}
?>