var tabla2;

function init(){

}
function limpiar1()
{
    $("#id_user").val("");
    $("#nombre").val("");
    $("#nickname").val("");
    $("#phone").val("");

}
function mostrarform1(flag)
{
    limpiar1();
    if (flag)
    {
        $("#listadoregistros1").hide();
        $("#formularioregistros1").show();
        $("#btnGuardar1").prop("disabled",false);


    }
    else
    {
        $("#listadoregistros1").show();
        $("#formularioregistros1").hide();
    }
}
function cancelarform1()
{
    limpiar1();
    mostrarform1(false);
}
function listar1()
{
    tabla2=$('#tbllistado1').dataTable(
        {
            "aProcessing" : true,
            "aServerSide" : true,
            dom : 'Bfrtip',
            buttons: [
                "copyHtml5",
                "excelHtml5",
                "csvHtml5",
                "pdf"
            ],
            "ajax":
            {
                url: '../ajax/users.php?op=listar',
                type: "get",
                dataType : "json",
                error : function(e){
                    console.log(e.responseText);
                }
            }
        
        }).DataTable();
}

init();