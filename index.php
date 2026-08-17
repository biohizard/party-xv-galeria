<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KMW67NJZ60"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-KMW67NJZ60');
    </script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <title>Mis XV · Evelyn Laila Rodríguez Martínez - 29 Agosto 2026</title>
    <meta name="description" content="Mis XV · Evelyn Laila Rodríguez Martínez - 29 Agosto 2026">
    <meta name="keywords" content="Mis XV · Evelyn Laila Rodríguez Martínez - 29 Agosto 2026">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Evelyn Laila | Mis XV Años">
    <meta property="og:description"
        content="Acompáñame a celebrar este día tan especial. Consulta todos los detalles de mi invitación.">
    <meta property="og:image" content="https://party.labs26.com/xv-evelyn-laila-rodrodriguez/preview.jpg">
    <meta property="og:url" content="https://party.labs26.com/xv-evelyn-laila-rodrodriguez/">
    <meta property="og:site_name" content="Invitación XV Años">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Evelyn Laila | Mis XV Años">
    <meta name="twitter:description" content="Acompáñame a celebrar este día tan especial.">
    <meta name="twitter:image" content="https://party.labs26.com/xv-evelyn-laila-rodrodriguez/preview.jpg">
    <!-- Open Graph / Facebook -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Jost:wght@300;400;500&family=Pinyon+Script&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">



</head>

<body>

    <div class="container">

        <!-- Gallery -->
        <div class="row">

            <div id="image1" class="col-4  mb-4 mb-lg-0"></div>

            <div id="image2" class="col-4  mb-4 mb-lg-0"></div>

            <div id="image3" class="col-4  mb-4 mb-lg-0"></div>

        </div>
        <!-- Gallery -->
        <!-- Content here -->
    </div>
    <input type="hidden" id="mesa" value="<?php echo $_GET['mesa']; ?>">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

<script>
$(document).ready(function () {
            // Grupo que queremos consultar
            const grupo = $('#mesa').val();

            // URL del API+
            //               https://party.labs26.com/xv-evelyn-laila-rodrodriguez-foto-album/upload-folder/?grupo=000
            //               http://localhost/server/php/2026/invitacion-xv/party-xv-fotos/upload-folder/?grupo=000
            const urlBase = "https://party.labs26.com/xv-evelyn-laila-rodrodriguez-foto-album/";
            const urlApi  = urlBase + "upload-folder/?grupo=" + grupo;

            //URL party-xv-fotos
            //https://party.labs26.com/xv-evelyn-laila-rodrodriguez-foto-album/?mesa=000
            //http://localhost/server/php/2026/invitacion-xv/party-xv-fotos/

            // URL de las imágenes originales
            const urlImages = urlBase + "upload-folder/";

            // URL de los thumbnails
            const urlThumbnails = urlBase + "upload-folder/thumbnails/";
                            
            //URL foto-album
            //const urlBase = "https://party.labs26.com/xv-evelyn-laila-rodrodriguez-foto-album/?mesa=000";
            //                 http://localhost/server/php/2026/invitacion-xv/party-xv-galeria/?mesa=000

    $.ajax({

        url: urlApi,
        type: "GET",
        dataType: "json",

        success: function (response) {

            if (
                response.success === true &&
                Array.isArray(response.imagenes)
            ) {

                const grupos = [
                    [],
                    [],
                    []
                ];


                // Dividir imágenes en 3 grupos
                response.imagenes.forEach(function (imagen, index) {

                    const grupo = index % 3;

                    grupos[grupo].push(imagen);

                });


                // Limpiar contenedores
                $("#image1").empty();
                $("#image2").empty();
                $("#image3").empty();


                // Crear las tres columnas
                grupos.forEach(function (imagenes, index) {

                    const contenedor = $("#image" + (index + 1));


                    imagenes.forEach(function (imagen) {

                        // Quitar thumb_ para obtener la imagen original
                        const imagenOriginal =
                            imagen.replace(/^thumb_/, "");


                        // URLs
                        const thumbnail =
                            urlThumbnails + imagen;

                        const original =
                            urlImages + imagenOriginal;

                        // HTML de la foto
                        const html = `
                            <div class="foto-container">

                                <a
                                    href="${original}"
                                    target="_blank"
                                    rel="noopener"
                                >
                                    <img
                                        src="${thumbnail}"
                                        class="w-100 shadow-1-strong rounded mb-2"
                                        alt="Foto de la fiesta"
                                        loading="lazy"
                                    >
                                </a>

                                <!-- AddToAny BEGIN -->
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="${original}" data-a2a-title="Party Galeria">
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_whatsapp"></a>
                                <a class="a2a_button_x"></a>
                                </div>
                            </div>
                        `;


                        contenedor.append(html);

                    });

                });


                console.log(
                    "Imágenes cargadas:",
                    response.imagenes.length
                );

            } else {

                console.log("No se encontraron imágenes.");

            }

        },


        error: function (xhr, status, error) {

            console.error("Error XHR:", error);

            console.log("Status:", status);

            console.log(
                "Respuesta:",
                xhr.responseText
            );

        }

    });


    // ==========================================
    // BOTÓN COMPARTIR
    // ==========================================

$(document).on("click", ".btn-compartir", async function () {

    const urlFoto = $(this).data("url");

    const textoCompartir =
        "¡Qué bonito recuerdo de esta fiesta! 🎉✨";

    const hashtags =
        "#XVAnos #EvelynLaila #XVAnos2026";

    const textoCompleto =
        textoCompartir + "\n\n" + hashtags;


    // ==========================================
    // COPIAR TEXTO AL PORTAPAPELES
    // ==========================================

    try {

        await navigator.clipboard.writeText(textoCompleto);

        console.log("Texto copiado al portapapeles");

    } catch (error) {

        console.log(
            "No se pudo copiar el texto:",
            error
        );

    }


    // ==========================================
    // COMPARTIR
    // ==========================================

    if (navigator.share) {

        try {

            await navigator.share({

                title: "Fotos de los XV años 🎉",

                text: textoCompleto,

                url: urlFoto

            });

            console.log("Compartido correctamente");

        } catch (error) {

            console.log(
                "Compartir cancelado:",
                error
            );

        }

    } else {

        // ======================================
        // NAVEGADOR SIN WEB SHARE
        // ======================================

        alert(
            "El texto y hashtags fueron copiados. " +
            "Ahora puedes compartir la foto y pegar el texto."
        );

    }

});


    // ==========================================
    // COPIAR URL SI NO EXISTE WEB SHARE
    // ==========================================

    function copiarAlPortapapeles(texto) {

        navigator.clipboard.writeText(texto)
            .then(function () {

                alert(
                    "Enlace de la foto copiado. 📋"
                );

            })
            .catch(function () {

                alert(
                    "No se pudo copiar el enlace."
                );

            });

    }

});
</script>
<script>
var a2a_config = a2a_config || {};
a2a_config.onclick = 1;
a2a_config.locale = "es";
</script>
<script defer src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
</body>

</html>