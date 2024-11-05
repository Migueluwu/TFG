$(document).ready(function(){

    //Filtra alumnos por grupo en Nueva intervención
    $("select[id=ud_nueva_intervencion]").change(function(){
        document.getElementById('form_nueva_intervencion').submit();
    });

    //Filtra listado intervenciones por grupo
    $("#ud_listado_intervenciones").change(function() {
        var filtro_grupo = $(this).val();
        if (filtro_grupo != ""){
            $("#tabla_listado_intervenciones tbody tr").each(function() {
                var rowValue = $(this).find("td > button#grupo_alumno_intervencion").text().toLowerCase();
                var filterValue = filtro_grupo.toLowerCase();
            
                if (filtro_grupo === "" || rowValue.indexOf(filterValue) > -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        } else {
            $("#tabla_listado_intervenciones tbody tr").each(function() {
                $(this).show();
            });
        }
        $("#filtro_grupo_csv").val(filtro_grupo)
    });

    //Filtra intervenciones por nombre de alumno
    $("#alumno_listado_intervenciones").keyup(function() {
        var filtro_nombre = $(this).val().toLowerCase();
        $("#tabla_listado_intervenciones tbody tr").each(function() {
            if ($("td > button#nombre_alumno_intervencion", this).text().toLowerCase().indexOf(filtro_nombre) > -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
        $("#filtro_nombre_csv").val($(this).val())
    });
});