function cierraMenu() {

    $("div#oscurece").stop(true, false).fadeOut(500)

    $("nav#menu-hamburguesa>div#menu-desplegable").css({
        "left": "-100%",
        "transition": "left ease-out 0.5s",
    })

    $("div#hamb-icon>span:nth-child(1)").css({
        "top": "25%",
        "transform": "rotate(0)",
        "transition": "top ease-out 0.25s, transform 0.25s",
        "transition-delay": "0.25s, 0s"

    })

    $("div#hamb-icon>span:nth-child(2)").css({
        "visibility": "visible",
        "transition": "visibility 0s",
        "transition-delay": "0.25s"
    })

    $("div#hamb-icon>span:nth-child(3)").css({
        "top": "75%",
        "transform": "rotate(0)",
        "transition": "top ease-out 0.25s, transform 0.25s",
        "transition-delay": "0.25s, 0s"
    })
}

$(document).ready(function () {

    $("div#hamb-icon").on({

        click: function () {

            if ($("nav#menu-hamburguesa>div#menu-desplegable").css("left") == "0px") { //Está abierto

                cierraMenu();

            } else { //Se abre

                $("div#oscurece").stop(true, false).fadeIn(300)

                $("nav#menu-hamburguesa>div#menu-desplegable").css({
                    "left": "0",
                    "transition": "left ease-out 0.5s",
                })

                $("div#hamb-icon>span:nth-child(1)").css({
                    "top": "50%",
                    "transform": "rotate(45deg)",
                    "transition": "top ease-out 0.25s, transform 0.5s",
                    "transition-delay": "0s, 0.25s"

                })

                $("div#hamb-icon>span:nth-child(2)").css({
                    "visibility": "hidden",
                    "transition": "visibility 0s",
                    "transition-delay": "0.25s"

                })

                $("div#hamb-icon>span:nth-child(3)").css({
                    "top": "50%",
                    "transform": "rotate(-45deg)",
                    "transition": "top ease-out 0.25s, transform 0.5s",
                    "transition-delay": "0s, 0.25s"

                })

            }


        }
    })

    $("button#user-header").on({

        mouseenter: function () {

            $("button#user-header>svg>path").css({
                "stroke": "#75C5F0",
            })
        },

        mouseleave: function () {

            $("button#user-header>svg>path").css({
                "stroke": "#2267A1",
            })
        },

        click: function () {
            $("#datos-user").toggleClass("invisible");
        }
    })

    $("#input_file_csv_profesores").change(function () { 
        var fileName = this.files[0].name;
        $("#file_name_profesores").text(fileName);
    });

    $("#input_file_csv_grupos_alumnos").change(function () { 
        var fileName = this.files[0].name;
        $("#file_name_grupos_alumnos").text(fileName);
    });

    $(window).on({

        resize: function () {

            cierraMenu();
        }
    })
})