$(document).ready(function () {
  $("a[data-confirm]").click(function (ev) {
    var href = $(this).attr("href");

    if (!$("#confirm-delete").length) {
      $("body").append(
        '<style>#confirm-delete {border-radius: 15px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #f1a100; padding: 2rem;} .modal-dialog {color: black; font-size: 20pt;} .modal-header {display: flex; justify-items: center; font-weight: 700;} .close {background-color: transparent; border: none; text-align: center; line-height: 1rem;} span {color: black; padding: 0 3rem; font-size: 30pt; text-align: center; line-height: ;} .cancel {padding: 10px; color: #000; border-radius: 5px; font-size: 16pt; background-color: white; margin: 1rem 2rem; border: none;} a {color: black; text-decoration: none;}</style><div class="modal-fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header">Confirma ação?<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Pressione "sim" para confirmar...</div><div class="modal-footer"><button type="button" class="cancel" data-dismiss="modal">Cancelar</button><a class="btn btn-primary text-white" id="dataComfirmOK">Sim</a></div></div></div></div>'
      );
    }
    $("#dataComfirmOK").attr("href", href);
    $("#confirm-delete").modal({ show: true });
    return false;
  });
});
