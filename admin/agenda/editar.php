<?php
include_once '../class/agenda.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Erro: Parâmetro 'id' não foi passado.";
    exit;
}

$visualizar = new Agenda();
$dadosAntigos = $visualizar->visualizarDadosNoEditar($id);

?>
<main class="agendaPageEdit">
    <form method="post" enctype="multipart/form-data" name="frmtask" id="frmtaskedit" class="form-input" action="">
        <div class="input-container">
            <label for="txttitulometa" class="input-sob-label-edit">Meta </label>
            <input placeholder="Insira o título de sua meta" class="input-field-edit" type="text" id="txttitulometa" name="txttitulometa" value="<?= $dadosAntigos['titulometa'] ?>">
        </div>
        <div class="input-container-edit">
            <label for="datedatainicio" class="input-sob-label-edit">Data de início </label>
            <input placeholder="Insira a data de inicialização" class="input-field-edit" type="date" id="datedatainicio" name="datedatainicio" value="<?= $dadosAntigos['datainicio'] ?>">
        </div>

        <div class="input-container-edit">
            <label for="datedatafim" class="input-sob-label-edit">Data final </label>
            <input placeholder="Insira a data de finalização" class="input-field-edit" type="date" id="datedatafim" name="datedatafim" value="<?= $dadosAntigos['datafim'] ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" style="color: whitesmoke;">
        <div class="btn-save">
            <input type="submit" class="saveTask" name="btnsalvar" id="btnsalvar" value="Salvar alterações" />
        </div>
    </form>
</main>
<?php
if (filter_input(INPUT_POST, "btnsalvar")) {
    $titulometa = filter_input(INPUT_POST, "txttitulometa");
    $datainicio = filter_input(INPUT_POST, "datedatainicio");
    $datafim = filter_input(INPUT_POST, "datedatafim");

    if ($id) {
        echo "<script>console.log($id)</script>";
        $dados = array(
            "titulometa" => $titulometa,
            "datainicio" => $datainicio,
            "datafim" => $datafim

        );
        $agenda = new Agenda();
        $agenda->setJsonNovosDados(json_encode($dados));

        $msg = $agenda->editar($id) === true ? "erro" : "dados editados";
        echo "<script>alert('$msg')"
            . "</script>";

        echo '<meta http-equiv="refresh" content="0.1; URL=?p=agenda/listar">';

    } else {
        echo "Erro: Parâmetro 'id' não foi passado.";
    }
}
?>