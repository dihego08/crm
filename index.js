$(document).ready(function () {
    lista_eventos();
});
function lista_eventos() {
    $.post("index.php?parAccion=lista_eventos", function (response) {
        var obj = JSON.parse(response);
        $.each(obj, function (index, val) {
            var event = {
                from: new Date(val._from),
                to: new Date(val._to),
                title: val.title,
                description: val.description,
                id_db: val.id
            };
            calendarInstance.addEvent(event);
        });
    }
    );
}