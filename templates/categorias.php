<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Categorías de CheapShop">
    <meta name="keywords" content="categorias, productos, tecnología, ecommerce, tienda online">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Navarro González">
    <link rel="icon" type="image/x-icon" href="../static/img/icon/logo.ico">
    <link rel="stylesheet" href="../static/css/style.css">
    <script src="https://kit.fontawesome.com/903082a171.js" crossorigin="anonymous"></script> <!--Fonts Awesome-->
    <title>Categorías</title>
</head>

<body>
    <?php require("./partials/header.html"); ?>

    <?php require("./partials/navBar.html"); ?>

    <main id="heroCategory">
        <section id="titleDescription">
            <h1>Categorías</h1>
            <p>Dentro de esta categoría, encontrarás una variedad de productos esenciales, como procesadores de última generación,
                tarjetas gráficas de alto rendimiento, unidades de almacenamiento SSD de gran velocidad, módulos de memoria RAM
                de gran capacidad y placas base de vanguardia que te permitirán construir o mejorar tu PC personalizada.</p>
        </section>

        <section id="searchForm">
            <form action="#" method="GET">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="buscar" id="searchBar" placeholder="Busque aquí el producto deseado">
                <div></div>
            </form>
        </section>

        <?php require("./partials/lateralBar.html"); ?>

        <section id="productList">
            <article class="product">
                <div class="existence">
                    <p>Disponibles:</p><input type="text" class="amountExistence" value="0" readonly>
                </div>
                <a href="./fichaProducto.php" title="Ir a detalle">
                    <img src="../static/img/productos/monitor.png" alt="Monitor">
                    <p>Monitor Samsung</p>
                </a>
                <div class="amount-div">
                    <button type="button" data-action="decrement" data-target="monitor1"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="cantidad" id="monitor1" value="1">
                    <button type="button" data-action="increment" data-target="monitor1"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="price">
                    <p>119.99€</p>
                    <p><del>149.99€</del></p>
                </div>

                <button type="button" data-button-type="toBasket" data-target="monitor1"><a href="#">Añadir al carrito</a></button>
            </article>

            <article class="product">
                <div class="existence">
                    <p>Disponibles:</p><input type="text" class="amountExistence" value="1" readonly>
                </div>
                <a href="./fichaProducto.php" title="Ir a detalle">
                    <img src="../static/img/productos/portatil.png" alt="Monitor">
                    <p>Portátil Razer</p>
                </a>
                <div class="amount-div">
                    <button type="button" data-action="decrement" data-target="portatil1"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="cantidad" id="portatil1" value="1">
                    <button type="button" data-action="increment" data-target="portatil1"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="price">
                    <p>619.99€</p>
                    <p><del>729.99€</del></p>
                </div>
                <button type="button" data-button-type="toBasket" data-target="portatil1"><a href="#">Añadir al carrito</a></button>
            </article>

            <article class="product">
                <div class="existence">
                    <p>Disponibles:</p><input type="text" class="amountExistence" value="1" readonly>
                </div>
                <a href="./fichaProducto.php" title="Ir a detalle">
                    <img src="../static/img/productos/silla.png" alt="Monitor">
                    <p>Silla Gamer</p>
                </a>
                <div class="amount-div">
                    <button type="button" data-action="decrement" data-target="silla1"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="cantidad" id="silla1" value="1">
                    <button type="button" data-action="increment" data-target="silla1"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="price">
                    <p>79.99€</p>
                    <p><del>99.99€</del></p>
                </div>
                <button type="button" data-button-type="toBasket" data-target="silla1"><a href="#">Añadir al carrito</a></button>
            </article>

            <article class="product">
                <div class="existence">
                    <p>Disponibles:</p><input type="text" class="amountExistence" value="1" readonly>
                </div>
                <a href="./fichaProducto.php" title="Ir a detalle">
                    <img src="../static/img/productos/teclado.png" alt="Monitor">
                    <p>Teclado Logitech</p>
                </a>
                <div class="amount-div">
                    <button type="button" data-action="decrement" data-target="teclado1"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="cantidad" id="teclado1" value="1">
                    <button type="button" data-action="increment" data-target="teclado1"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="price">
                    <p>29.99€</p>
                    <p><del>39.99€</del></p>
                </div>
                <button type="button" data-button-type="toBasket" data-target="teclado1"><a href="#">Añadir al carrito</a></button>
            </article>

            <article class="product">
                <div class="existence">
                    <p>Disponibles:</p><input type="text" class="amountExistence" value="1" readonly>
                </div>
                <a href="./fichaProducto.php" title="Ir a detalle">
                    <img src="../static/img/productos/torre.png" alt="Monitor">
                    <p>Torre HP</p>
                </a>
                <div class="amount-div">
                    <button type="button" data-action="decrement" data-target="torre1"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="cantidad" id="torre1" value="1">
                    <button type="button" data-action="increment" data-target="torre1"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="price">
                    <p>69.99€</p>
                    <p><del>89.99€</del></p>
                </div>
                <button type="button" data-button-type="toBasket" data-target="torre1"><a href="#">Añadir al carrito</a></button>
            </article>

            <article class="product">
                <div class="existence">
                    <p>Disponibles:</p><input type="text" class="amountExistence" value="1" readonly>
                </div>
                <a href="./fichaProducto.php" title="Ir a detalle">
                    <img src="../static/img/productos/teclado.png" alt="Monitor">
                    <p>Teclado Logitech</p>
                </a>
                <div class="amount-div">
                    <button type="button" data-action="decrement" data-target="teclado2"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="cantidad" id="teclado2" value="1">
                    <button type="button" data-action="increment" data-target="teclado2"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="price">
                    <p>29.99€</p>
                    <p><del>49.99€</del></p>
                </div>
                <button type="button" data-button-type="toBasket" data-target="teclado2"><a href="#">Añadir al carrito</a></button>
            </article>

            <article class="product">
                <div class="existence">
                    <p>Disponibles:</p><input type="text" class="amountExistence" value="1" readonly>
                </div>
                <a href="./fichaProducto.php" title="Ir a detalle">
                    <img src="../static/img/productos/torre.png" alt="Monitor">
                    <p>Torre HP</p>
                </a>
                <div class="amount-div">
                    <button type="button" data-action="decrement" data-target="torre2"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="cantidad" id="torre2" value="1">
                    <button type="button" data-action="increment" data-target="torre2"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="price">
                    <p>69.99€</p>
                    <p><del>89.99€</del></p>
                </div>
                <button type="button" data-button-type="toBasket" data-target="torre2"><a href="#">Añadir al carrito</a></button>
            </article>

            <article class="product">
                <div class="existence">
                    <p>Disponibles:</p><input type="text" class="amountExistence" value="1" readonly>
                </div>
                <a href="./fichaProducto.php" title="Ir a detalle">
                    <img src="../static/img/productos/monitor.png" alt="Monitor">
                    <p>Monitor Samsung</p>
                </a>
                <div class="amount-div">
                    <button type="button" data-action="decrement" data-target="monitor2"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="cantidad" id="monitor2" value="1">
                    <button type="button" data-action="increment" data-target="monitor2"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="price">
                    <p>149.99€</p>
                    <p><del>189.99€</del></p>
                </div>
                <button type="button" data-button-type="toBasket" data-target="monitor2"><a href="#">Añadir al carrito</a></button>
            </article>

            <article class="product">
                <div class="existence">
                    <p>Disponibles:</p><input type="text" class="amountExistence" value="0" readonly>
                </div>
                <a href="./fichaProducto.php" title="Ir a detalle">
                    <img src="../static/img/productos/portatil.png" alt="Monitor">
                    <p>Portátil Razer</p>
                </a>
                <div class="amount-div">
                    <button type="button" data-action="decrement" data-target="portatil2"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="cantidad" id="portatil2" value="1">
                    <button type="button" data-action="increment" data-target="portatil2"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="price">
                    <p>799.99€</p>
                    <p><del>859.99€</del></p>
                </div>
                <button type="button" data-button-type="toBasket" data-target="portatil2"><a href="#">Añadir al carrito</a></button>
            </article>

            <article class="product">
                <div class="existence">
                    <p>Disponibles:</p><input type="text" class="amountExistence" value="1" readonly>
                </div>
                <a href="./fichaProducto.php" title="Ir a detalle">
                    <img src="../static/img/productos/silla.png" alt="Monitor">
                    <p>Silla Gamer</p>
                </a>
                <div class="amount-div">
                    <button type="button" data-action="decrement" data-target="silla2"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="cantidad" id="silla2" value="1">
                    <button type="button" data-action="increment" data-target="silla2"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="price">
                    <p>69.99€</p>
                    <p><del>89.99€</del></p>
                </div>
                <button type="button" data-button-type="toBasket" data-target="silla2"><a href="#">Añadir al carrito</a></button>
            </article>

            <article class="product">
                <div class="existence">
                    <p>Disponibles:</p><input type="text" class="amountExistence" value="1" readonly>
                </div>
                <a href="./fichaProducto.php" title="Ir a detalle">
                    <img src="../static/img/productos/teclado.png" alt="Monitor">
                    <p>Teclado Logitech</p>
                </a>
                <div class="amount-div">
                    <button type="button" data-action="decrement" data-target="teclado3"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="cantidad" id="teclado3" value="1">
                    <button type="button" data-action="increment" data-target="teclado3"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="price">
                    <p>29.99€</p>
                    <p><del>39.99€</del></p>
                </div>
                <button type="button" data-button-type="toBasket" data-target="teclado3"><a href="#">Añadir al carrito</a></button>
            </article>

            <article class="product">
                <div class="existence">
                    <p>Disponibles:</p><input type="text" class="amountExistence" value="1" readonly>
                </div>
                <a href="./fichaProducto.php" title="Ir a detalle">
                    <img src="../static/img/productos/torre.png" alt="Monitor">
                    <p>Torre HP</p>
                </a>
                <div class="amount-div">
                    <button type="button" data-action="decrement" data-target="torre3"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="cantidad" id="torre3" value="1">
                    <button type="button" data-action="increment" data-target="torre3"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="price">
                    <p>69.99€</p>
                    <p><del>89.99€</del></p>
                </div>
                <button type="button" data-button-type="toBasket" data-target="torre3"><a href="#">Añadir al carrito</a></button>
            </article>
        </section>

        <section id="pagination">
            <button type="button"><i class="fa-solid fa-caret-left"></i></button>
            <ul>
                <a href="./categorias.php">
                    <li>1</li>
                </a>
                <a href="./categorias.php">
                    <li>2</li>
                </a>
                <a href="./categorias.php">
                    <li>3</li>
                </a>
                <a href="./categorias.php">
                    <li>4</li>
                </a>

                <li>...</li>

                <a href="./categorias.php">
                    <li>15</li>
                </a>
            </ul>
            <button type="button"><i class="fa-solid fa-caret-right"></i></button>
        </section>

    </main>

    <?php require("./partials/footer.html"); ?>

    <script type="text/javascript" src="../static/js/app.js"></script>
</body>

</html>