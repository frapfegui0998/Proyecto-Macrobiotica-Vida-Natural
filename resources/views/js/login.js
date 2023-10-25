$(document).ready(function() {
    HabilitarBoton(true);
});

function ValidarDatos() {
    let correo = $("#txtCorreo").val().trim();

    if (correo != "") {

        $.ajax({
            type: "GET",
            url: 'https://apis.gometa.org/cedulas/' + correo,
            data: { },
            datatype: 'json',
            success: function(response)
            {
                if (response.resultcount == undefined || response.resultcount == 0) {
                    HabilitarBoton(true);
                }
                else {
                    HabilitarBoton(false);
                }
            }
       });

    }
}

function HabilitarBoton(flag)
{
    $("#btnIngresar").prop("disabled", flag);
}