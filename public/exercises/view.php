<?php
include_once '../class/exercises.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Erro: Parâmetro 'id' não foi passado.";
    exit;
}

$visualizar = new Exercises();
$dadosAntigos = $visualizar->visualizarDadosNoEditar($id);

?>
<main class="exercisesPageEdit">
    <form method="post" enctype="multipart/form-data" name="frmtask" id="frmtaskedit" class="form-input" action="">
        <div class="input-container">
            <label for="txtexercicio" class="input-sob-label-edit">Exercício</label>
            <input placeholder="Insira o exercício" class="input-field-edit" type="text" id="txtexercicio" name="txtexercicio" value="<?= $dadosAntigos['exercicio'] ?>" readonly>
        </div>
        <div class="input-container-edit">
            <label for="nmrrepeticoes" class="input-sob-label-edit">Repetições</label>
            <input placeholder="Insira suas repetições" class="input-field-edit" type="number" id="nmrrepeticoes" name="nmrrepeticoes" value="<?= $dadosAntigos['repeticoes'] ?>" readonly>
        </div>

        <div class="input-container-edit">
            <label for="nmrseries" class="input-sob-label-edit">Series</label>
            <input placeholder="Insira quantas series" class="input-field-edit" type="number" id="nmrseries" name="nmrseries" value="<?= $dadosAntigos['series'] ?>" readonly>
        </div>

        <div class="input-container-edit">
            <label for="nmrseries" class="input-sob-label-edit">Peso</label>
            <input placeholder="Insira quanto é a carga" class="input-field-edit" type="number" id="nmrpeso" name="nmrpeso" value="<?= $dadosAntigos['peso'] ?>" readonly>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="btn-save">
            <input type="submit" class="voltarTask" name="btnvoltar" id="btnvoltar" value="Voltar" />
        </div>
    </form>
</main>
<?php
if (filter_input(INPUT_POST, "btnvoltar")) {
    echo '<meta http-equiv="refresh" content="0.1; URL=?p=exercises/exercises">';
}
?>