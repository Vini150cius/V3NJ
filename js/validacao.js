$("#frmexercise").validate({
    debug: true,
    rules: {
        txtexercicio: {
            required: true,
            rangelength: [2, 100]
        },
        nmrrepeticoes: {
            required: true,
            min: 1,
            max: 100
        },
        nmrseries: {
            required: true,
            min: 1,
            max: 100
        },
        nmrpeso: {
            required: true,
            min: 1,
            max: 1000
        }
    },
    messages: {
        txtexercicio: {
            required: "Nome exercicio requerido",
            minlength: jQuery.validator.format("Exigido 2 caracteres no mínimo"),
            maxlength: jQuery.validator.format("Permitido 100 caracteres no máximo")
        },

        nmrrepeticoes: {
            required: "Repetições requeridas",
            min: "Valor mínimo: 1",
            max: "Valor máximo: 100",
        },
        nmrseries: {
            required: "Séries requeridas",
            min: "Valor mínimo: 1",
            max: "Valor máximo: 100",
        },
        nmrpeso: {
            required: "Peso requerido",
            min: "Valor mínimo: 1",
            max: "Valor máximo: 100",
        },
    }
})
$("#frmtask").validate({

    debug : true,
    rules:{
        txttitulometa:{
            required :true,
            rangelength:[2,100]
        },
        datedatainicio:{
            required :true,
        },
        datedatafim:{
            required :true,
        }
    },
    messages:{
        txttitulometa: {
            required: "Título requerido",
            minlength: jQuery.validator.format("Exigido 2 caracteres no mínimo"),
            maxlength: jQuery.validator.format("Permitido 100 caracteres no máximo")
        },    
        datedatainicio:{
            required :"Data de início requerida",
        },
        datedatafim:{
            required :"Data de fim requerida",
        },
    }
})