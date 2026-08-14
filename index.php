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
            const grupo = $('#mesa').val();;

            // URL del API+
            // //http://localhost/server/php/2026/invitacion-xv/party-xv-fotos/upload-folder/?grupo=001
            //const urlBase = "http://localhost/server/php/2026/invitacion-xv/party-xv-fotos/";
            const urlBase = "https://party.labs26.com/xv-evelyn-laila-rodrodriguez-foto-album/";
            const urlApi = urlBase + "upload-folder/?grupo=" + grupo;

            // Carpeta de imágenes originales
            const urlImages = urlBase + "upload-folder/";

            // Carpeta de thumbnails
            const urlThumbnails = urlBase + "upload-folder/thumbnails/";


            $.ajax({

                url: urlApi,
                type: "GET",
                dataType: "json",

                success: function (response) {

                    // Comprobamos que la respuesta sea correcta
                    if (
                        response.success === true &&
                        Array.isArray(response.imagenes)
                    ) {

                        // Creamos los 3 grupos
                        const grupos = [
                            [],
                            [],
                            []
                        ];


                        // =========================================
                        // DIVIDIR LAS IMÁGENES EN 3 GRUPOS
                        // =========================================

                        response.imagenes.forEach(function (imagen, index) {

                            const grupo = index % 3;

                            grupos[grupo].push(imagen);

                        });


                        // =========================================
                        // LIMPIAR CONTENEDORES
                        // =========================================

                        $("#image1").empty();
                        $("#image2").empty();
                        $("#image3").empty();


                        // =========================================
                        // AGREGAR IMÁGENES A LAS COLUMNAS
                        // =========================================

                        grupos.forEach(function (imagenes, index) {

                            const contenedor = $("#image" + (index + 1));


                            imagenes.forEach(function (imagen) {

                                /*
                                 * imagen contiene por ejemplo:
                                 *
                                 * thumb_mesa-001--1786521643-137.jpg
                                 *
                                 * Para obtener la imagen original
                                 * eliminamos "thumb_"
                                 */

                                const imagenOriginal = imagen.replace(/^thumb_/, "");


                                // URL completa del thumbnail
                                const thumbnail =
                                    urlThumbnails + imagen;


                                // URL completa de la imagen original
                                const original =
                                    urlImages + imagenOriginal;


                                // Crear HTML
                                const html = `
                            <a
                                href="${original}"
                                target="_blank"
                                rel="noopener"
                            >
                                <img
                                    src="${thumbnail}"
                                    class="w-100 shadow-1-strong rounded mb-4"
                                    alt="Foto de la fiesta"
                                    loading="lazy"
                                />
                            </a>
                        `;


                                // Agregar al contenedor
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


                // =========================================
                // ERROR EN LA PETICIÓN
                // =========================================

                error: function (xhr, status, error) {

                    console.error("Error XHR:", error);

                    console.log(
                        "Status:",
                        status
                    );

                    console.log(
                        "Respuesta:",
                        xhr.responseText
                    );

                }

            });

        });

    </script>
</body>

</html>