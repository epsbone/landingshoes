var tabla;

function init(){
    mostrarform(false);
    listar();

   
    

}
function limpiar()
{
    $("#shoe_id").val("");
    $("#name").val("");
    $("#model").val("");
    $("#color").val("");

}
function mostrarform(flag)
{
    limpiar();
    if (flag)
    {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled",false);
        $("#btnagregar").hide();


    }
    else
    {
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();
    }
}
function cancelarform()
{
    limpiar();
    mostrarform(false);
}
function listar()
{
    tabla=$('#tbllistado').dataTable(
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
            },
            "bDestroy":true,
            "iDisplayLength":5,
            "order": [[0,"desc"]]
        
        }).DataTable();
}
function guardaryeditar(e)
{
    e.preventDefault();
    $("#btnGuardar").prop("disabled",true);
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "..ajax/shoe.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos)
        {
            bootbox.alert(datos);
            mostrarform(false);
            tabla.ajax.reload();
        }
    });
    limpiar();
}
function mostrar(shoe_id)
{
    $.post("../ajax/shoe.php?op=mostrar",{shoe_id: shoe_id}, function(data, status)
    {
        data = JSON.parse(data);
        mostrarform(true);

        $("#shoe_id").val(data.shoe_id);
        $("#name").val(data.name);
        $("#model").val(data.model);
        $("#color").val(data.color);
        $("#tipe").val(data.tipe);

    })
}

init();