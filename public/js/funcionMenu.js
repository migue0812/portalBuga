$(function () {
    $(".enlace-menu").click(function (e) {
        e.preventDefault();
        $("#box-panel").html("Cargando...");
        var url = $(this).attr("href");
        $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
                $("#box-panel").html(data);
            }
        });
    });
});

$(function () {
    $(".menu-eventos").click(function (e) {
        e.preventDefault();
        var url = $(this).attr("href");
        $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
                $("#tablaMenu").html(data);
            }
        });
    });
});

$(function () {
    $(document).on("submit", "#formAjax", function (e) {
        e.preventDefault();
        //$("#box-panel").html("Cargando...");
        var url = $(this).attr("action");
        $.ajax({
            mimeType: "text/html; charset=utf-8",
            url: url,
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                $("#box-panel").html(data);
            },
            dataType: "html",
            async: false
        });
    });
});


