<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Jost:wght@300;400;500&family=Pinyon+Script&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://party.labs26.com/xv-evelyn-laila-rodrodriguez-foto-album/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" type="text/css" href="https://party.labs26.com/xv-evelyn-laila-rodrodriguez-foto-album/css/tinycolorpicker.css">
    <link rel="stylesheet" type="text/css" href="https://party.labs26.com/xv-evelyn-laila-rodrodriguez-foto-album/css/side-panel.css"> <!-- Resource style -->
    <link rel="stylesheet" type="text/css" href="https://party.labs26.com/xv-evelyn-laila-rodrodriguez-foto-album/css/style.css">

    <title>Mis XV  ♥ Evelyn Laila | Pon tus fotografías aquí</title>

    <style>
        body {
            font-family: 'Droid', sans-serif;
        }

        a,
        div.price a:visited,
        div.droply-docs a:visited {
            color: white;
            text-decoration: none;
        }

        div.price {
            background: rgba(255, 255, 255, 0.2);
            padding: 10px;
            padding-top: 20px;
            position: absolute;
            right: 200px;
            top: -10px;
            float: left;
            color: white;
            border-radius: 5px;
            width: 100px;
        }

        img.plugin-logo {
            margin-top: 30px;
        }

        div.droply-filedrag {
            background-color: #6e2a3895;
        }

        div.droply-docs {
            background: rgba(255, 255, 255, 0.2);
            padding: 10px;
            position: absolute;
            left: 200px;
            top: 0;
            color: white;
            border-radius: 5px;
        }

        div.price:hover {
            background: rgba(255, 255, 255, 0.4);
            font-weight: bold;
        }

        div.droply-docs:hover {
            background: rgba(255, 255, 255, 0.4);
            font-weight: bold;
        }

        div.output {
            font-family: sans-serif;
            font-size: 12px;
            max-width: 300px;
            position: absolute;
            left: 51px;
            top: 364px;
        }

        div.output:before {
            content: 'Debug : ';
            font-size: 20px;
            color: red;
        }
    </style>

</head>

<body>



    <!-- ============================ HEADER ============================ -->



    <main id="main">
        <!-- ============================ HERO ============================ -->
        <section class="hero" id="home" aria-label="Evelyn Laila Rodríguez Martínez">

            <div class="hero__bg" role="img" aria-label="Bridal bouquet of garden roses on a linen table"></div>
            <div class="hero__inner">

                <h1 class="hero__names">Mis XV <span class="amp">&hearts;</span>Evelyn Laila</h1>
                <h2 class="hero__venue">Rodríguez Martínez</h2>
                <p class="hero__meta">Sábado, 29 Agosto <span>&bull;</span> 2026</p>
                <p class="hero__venue">Revivamos esta noche juntos</p>
                <p class="footer-fine">Sube las fotografías que tomaste durante la celebración y ayúdanos a crear un álbum lleno de recuerdos inolvidables.</p>

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

            </div>
            <a class="scroll-cue" href="#story" aria-label="Scroll to our story">
                <svg viewBox="0 0 24 36" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" aria-hidden="true">
                    <rect x="7" y="1" width="10" height="20" rx="5" />
                    <path d="M12 6v4" />
                    <path d="M8 27l4 4 4-4" />
                </svg>
            </a>
        </section>


    </main>
    <!-- ============================ FOOTER ============================ -->
    <footer class="site-footer">
        <div class="container">
            <p class="footer-monogram"> Mis XV <span class="amp">&hearts;</span>Evelyn Laila </p>
            <p class="footer-date">Sábado, 29 Agosto <span>&bull;</span> 2026</p>
            <p class="footer-hash">#misxvlaila</p>

            <ul class="footer-nav">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#details">Misa & Recepción</a></li>
                <li><a href="#registry">Ideas de regalo</a></li>
            </ul>
            </ul>

            <div class="footer-rule"></div>
            <p class="footer-fine">
                &copy; 2026 Mis XV <span class="amp">&hearts;</span>Evelyn Laila<br>
            </p>
        </div>
    </footer>


    <input type="hidden" id="mesa" value="<?php echo $_GET['mesa']; ?>" />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Grupo que queremos consultar
            const grupo = $('#mesa').val();

            // URL del API+
            //               https://party.labs26.com/xv-evelyn-laila-rodrodriguez-foto-album/upload-folder/?grupo=000
            //               http://localhost/server/php/2026/invitacion-xv/party-xv-fotos/upload-folder/?grupo=000
            const urlBase = "https://party.labs26.com/xv-evelyn-laila-rodrodriguez-foto-album/";
            const urlApi = urlBase + "upload-folder/?grupo=" + grupo;

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

                success: function(response) {

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
                        response.imagenes.forEach(function(imagen, index) {

                            const grupo = index % 3;

                            grupos[grupo].push(imagen);

                        });


                        // Limpiar contenedores
                        $("#image1").empty();
                        $("#image2").empty();
                        $("#image3").empty();


                        // Crear las tres columnas
                        grupos.forEach(function(imagenes, index) {

                            const contenedor = $("#image" + (index + 1));


                            imagenes.forEach(function(imagen) {

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
                        <div class="foto-container mb-3">

                            <a
                                href="${original}"
                                target="_blank"
                                rel="noopener"
                            >
                                <img
                                    src="${thumbnail}"
                                    class="w-100 shadow-1-strong rounded mb-2  mb-3 border border-1"
                                    alt="Foto de la fiesta"
                                    loading="lazy"
                                >
                            </a>

                            <!-- AddToAny BEGIN -->
                            <div class="a2a_kit a2a_kit_size_16 a2a_default_style" data-a2a-url="${original}" data-a2a-title="#misxvlaila #EvelynLaila #XVAños2026">
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_whatsapp"></a>
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


                error: function(xhr, status, error) {

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

            $(document).on("click", ".btn-compartir", async function() {

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
                    .then(function() {

                        alert(
                            "Enlace de la foto copiado. 📋"
                        );

                    })
                    .catch(function() {

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