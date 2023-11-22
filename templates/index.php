<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Página principal de CheapShop">
    <meta name="keywords" content="reseñas, promociones, main, principal, tecnología, ecommerce, tienda online">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Navarro González">
    <link rel="icon" type="image/x-icon" href="../static/img/icon/logo.ico">
    <link rel="stylesheet" href="../static/css/style.css">
    <script src="https://kit.fontawesome.com/903082a171.js" crossorigin="anonymous"></script> <!--Fonts Awesome-->
    <title>Página Principal</title>
</head>

<body>
    <main id="heroIndex">
        <?php require("./partials/header.html"); ?>

        <?php require("./partials/navBar.html"); ?>

        <section id="goToProducts">

            <article id="toFeatured">
                <h2>¿No tienes claro lo que buscas?</h2>
                <div>
                    <p>¡No te pierdas nuestros productos destacados y decídete!</p>
                    <a href="./destacados.php">Ver productos destacados</a>
                    <video src="../static/video/promotion.mp4" autoplay muted loop></video>
                </div>
            </article>

            <article id="toCategory">
                <h2>También puedes navegar entre nuestras categorías</h2>
                <div id="categories">
                    <div class="category">
                        <a href="./categorias.php">
                            <img src="../static/img/categorias/monitor.webp" alt="Monitores">
                            <p>Monitores</p>
                        </a>
                    </div>
                    <div class="category">
                        <a href="./categorias.php">
                            <img src="../static/img/categorias/torre.webp" alt="Torres">
                            <p>Torres</p>
                        </a>
                    </div>
                    <div class="category">
                        <a href="./categorias.php">
                            <img src="../static/img/categorias/silla.webp" alt="Sillas">
                            <p>Sillas</p>
                        </a>
                    </div>
                    <div class="category">
                        <a href="./categorias.php">
                            <img src="../static/img/categorias/reacondicionado.webp" alt="Reacondicionados">
                            <p>Reacondicionados</p>
                        </a>
                    </div>
                    <div class="category">
                        <a href="./categorias.php">
                            <img src="../static/img/categorias/cable.webp" alt="Conectividad">
                            <p>Conectividad</p>
                        </a>
                    </div>
                    <div class="category">
                        <a href="./categorias.php">
                            <img src="../static/img/categorias/tecladoRaton.webp" alt="Teclados y ratones">
                            <p>Teclados y ratones</p>
                        </a>
                    </div>
                    <div class="category">
                        <a href="./categorias.php">
                            <img src="../static/img/categorias/componente.webp" alt="Componentes">
                            <p>Componentes</p>
                        </a>
                    </div>
                    <div class="category">
                        <a href="./categorias.php">
                            <img src="../static/img/categorias/portatil.webp" alt="Portátiles">
                            <p>Portátiles</p>
                        </a>
                    </div>
                    <div class="category">
                        <a href="./categorias.php">
                            <img src="../static/img/categorias/audio.webp" alt="Audio y HiFi">
                            <p>Audio</p>
                        </a>
                    </div>
                </div>

            </article>
        </section>

        <section id="promotions">
            <h2>No te pierdas las promociones de este mes. ¡Unidades limitadas!</h2>
            <article class="promotion">
                <a href="#"><img src="../static/img/promociones/prom1.webp" alt="Promoción Energy System"></a>
            </article>

            <article class="promotion">
                <a href="#"><img src="../static/img/promociones/prom2.webp" alt="Promoción GhsotHunter"></a>
            </article>

            <article class="promotion">
                <a href="#"><img src="../static/img/promociones/prom3.jpg" alt="Promoción AMD"></a>
            </article>

            <article class="promotion">
                <a href="#"><img src="../static/img/promociones/prom4.jpg" alt="Promoción ASUS"></a>
            </article>
        </section>

        <section id="mainReviews">
            <h2>Reseñas de nuestros clientes</h2>
            <button type="button" id="prevReviews"><i class="fa-solid fa-chevron-left"></i></button>
            <div id="reviewsContainer">
                <article class="review">
                    <div class="name">
                        <p>De: juanillo98</p>
                    </div>
                    <img src="../static/img/reseñasCarrusel/customer.png" alt="Imagen Usuario" class="img">
                    <div class="date">
                        <p>12/05/2022</p>
                    </div>
                    <p class="content">El envío llegó antes de lo esperado, tenéis una clienta asegurada</p>
                    <div class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </article>

                <article class="review">
                    <div class="name">
                        <p>De: marilo6754</p>
                    </div>
                    <img src="../static/img/reseñasCarrusel/customer.png" alt="Imagen Usuario" class="img">
                    <div class="date">
                        <p>12/05/2022</p>
                    </div>
                    <p class="content">Tuve un problema con el envío y lo solucionaron el mismo día</p>
                    <div class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </article>

                <article class="review">
                    <div class="name">
                        <p>De: serter54</p>
                    </div>
                    <img src="../static/img/reseñasCarrusel/customer.png" alt="Imagen Usuario" class="img">
                    <div class="date">
                        <p>12/05/2022</p>
                    </div>
                    <p class="content">Me encanta la variedad de productos que tienen</p>
                    <div class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </article>

                <article class="review">
                    <div class="name">
                        <p>De: jumanari</p>
                    </div>
                    <img src="../static/img/reseñasCarrusel/customer.png" alt="Imagen Usuario" class="img">
                    <div class="date">
                        <p>12/05/2022</p>
                    </div>
                    <p class="content">Volveré a pedir sin duda, muy profesionales</p>
                    <div class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </article>

                <article class="review">
                    <div class="name">
                        <p>De: user45674</p>
                    </div>
                    <img src="../static/img/reseñasCarrusel/customer.png" alt="Imagen Usuario" class="img">
                    <div class="date">
                        <p>12/05/2022</p>
                    </div>
                    <p class="content">Tienda de referencia para productos informáticos</p>
                    <div class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </article>

                <article class="review">
                    <div class="name">
                        <p>De: esther88</p>
                    </div>
                    <img src="../static/img/reseñasCarrusel/customer.png" alt="Imagen Usuario" class="img">
                    <div class="date">
                        <p>12/05/2022</p>
                    </div>
                    <p class="content">De lo mejor que existe, mis dieses</p>
                    <div class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </article>
            </div>
            <button type="button" id="nextReviews"><i class="fa-solid fa-chevron-right"></i></button>
        </section>

    </main>

    <?php require("./partials/footer.html"); ?>

    <script type="text/javascript" src="../static/js/app.js"></script>

</body>

</html>