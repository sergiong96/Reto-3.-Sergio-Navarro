<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Navarro González">
    <link rel="icon" type="image/x-icon" href="../static/img/icon/logo.ico">
    <link rel="stylesheet" href="../static/css/style.css">
    <script src="https://kit.fontawesome.com/903082a171.js" crossorigin="anonymous"></script> <!--Fonts Awesome-->
    <title>Administración</title>
</head>

<body>
    <div id="opacar"></div>
    <div id="follow"><img src=""></div>
    <?php require("./partials/header.html"); ?>

    <?php require("./partials/navBar.html"); ?>


    <main id="heroAdmin">

        <aside id="navBarAdmin">
            <nav>
                <ul>
                    <li><a class="active" data-target="activeProducts">Productos activos</a></li>
                    <li><a data-target="lastOrders">Últimos pedidos</a></li>
                </ul>
            </nav>
        </aside>

        <section id="activeProducts" class="active">
            <h2>Productos activos</h2>
            <div id="addProduct"><button type="button" title="Añadir Producto"><i class="fa-solid fa-plus"></i>Añadir Producto</button></div>
            <table>
                <thead>
                    <tr>
                        <th>Fecha creación</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Imágenes<button type="button" id="activateZoom" title="Activar/Desactivar Lupa"><i class="fa-solid fa-magnifying-glass"></i></button></th>
                        <th>Stock</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="f1">
                        <td>13/11/2023</td>
                        <td>Portátil Intel</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores soluta, ipsa deserunt cupiditate necessitatibus expedita laborum, explicabo, quaerat fuga molestiae et debitis at tenetur.</td>
                        <td>79.99€</td>
                        <td>
                            <img src="../static/img/administracion/p1.webp" alt="Imagen 1 producto activo">
                            <img src="../static/img/administracion/p2.jfif" alt="Imagen 2 producto activo">
                            <img src="../static/img/administracion/p3.jfif" alt="Imagen 3 producto activo">
                            <img src="../static/img/administracion/p4.webp" alt="Imagen 4 producto activo">
                        </td>
                        <td>34</td>
                        <td>
                            <button type="button" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr id="f2">
                        <td>14/10/2023</td>
                        <td>Monitor Panasonic</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores soluta, ipsa deserunt cupiditate necessitatibus expedita laborum, explicabo, quaerat fuga molestiae et debitis at tenetur.</td>
                        <td>102.99€</td>
                        <td>
                            <img src="../static/img/administracion/p5.webp" alt="Imagen 1 producto activo">
                            <img src="../static/img/administracion/p6.webp" alt="Imagen 2 producto activo">
                            <img src="../static/img/administracion/p7.webp" alt="Imagen 3 producto activo">
                            <img src="../static/img/administracion/p8.webp" alt="Imagen 4 producto activo">
                        </td>
                        <td>8</td>
                        <td>
                            <button type="button" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr id="f3">
                        <td>10/09/2023</td>
                        <td>Altavoz Xiaomi</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores soluta, ipsa deserunt cupiditate necessitatibus expedita laborum, explicabo, quaerat fuga molestiae et debitis at tenetur.</td>
                        <td>35.99€</td>
                        <td>
                            <img src="../static/img/administracion/p9.jfif" alt="Imagen 1 producto activo">
                            <img src="../static/img/administracion/p10.webp" alt="Imagen 2 producto activo">
                            <img src="../static/img/administracion/p11.webp" alt="Imagen 3 producto activo">
                            <img src="../static/img/administracion/p12.webp" alt="Imagen 4 producto activo">
                        </td>
                        <td>12</td>
                        <td>
                            <button type="button" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr id="f4">
                        <td>05/08/2023</td>
                        <td>Portátil HP</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores soluta, ipsa deserunt cupiditate necessitatibus expedita laborum, explicabo, quaerat fuga molestiae et debitis at tenetur.</td>
                        <td>89.99€</td>
                        <td>
                            <img src="../static/img/administracion/p1.webp" alt="Imagen 1 producto activo">
                            <img src="../static/img/administracion/p2.jfif" alt="Imagen 2 producto activo">
                            <img src="../static/img/administracion/p3.jfif" alt="Imagen 3 producto activo">
                            <img src="../static/img/administracion/p4.webp" alt="Imagen 4 producto activo">
                        </td>
                        <td>41</td>
                        <td>
                            <button type="button" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr id="f5">
                        <td>12/07/2023</td>
                        <td>Monitor Panasonic</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores soluta, ipsa deserunt cupiditate necessitatibus expedita laborum, explicabo, quaerat fuga molestiae et debitis at tenetur.</td>
                        <td>65.99€</td>
                        <td>
                            <img src="../static/img/administracion/p5.webp" alt="Imagen 1 producto activo">
                            <img src="../static/img/administracion/p6.webp" alt="Imagen 2 producto activo">
                            <img src="../static/img/administracion/p7.webp" alt="Imagen 3 producto activo">
                            <img src="../static/img/administracion/p8.webp" alt="Imagen 4 producto activo">
                        </td>
                        <td>87</td>
                        <td>
                            <button type="button" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr id="f6">
                        <td>14/06/2023</td>
                        <td>Altavoz JBL</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores soluta, ipsa deserunt cupiditate necessitatibus expedita laborum, explicabo, quaerat fuga molestiae et debitis at tenetur.</td>
                        <td>79.99€</td>
                        <td>
                            <img src="../static/img/administracion/p9.jfif" alt="Imagen 1 producto activo">
                            <img src="../static/img/administracion/p10.webp" alt="Imagen 2 producto activo">
                            <img src="../static/img/administracion/p11.webp" alt="Imagen 3 producto activo">
                            <img src="../static/img/administracion/p12.webp" alt="Imagen 4 producto activo">
                        </td>
                        <td>56</td>
                        <td>
                            <button type="button" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr id="f7">
                        <td>12/05/2021</td>
                        <td>Portátil AMD</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores soluta, ipsa deserunt cupiditate necessitatibus expedita laborum, explicabo, quaerat fuga molestiae et debitis at tenetur.</td>
                        <td>79.99€</td>
                        <td>
                            <img src="../static/img/administracion/p1.webp" alt="Imagen 1 producto activo">
                            <img src="../static/img/administracion/p2.jfif" alt="Imagen 2 producto activo">
                            <img src="../static/img/administracion/p3.jfif" alt="Imagen 3 producto activo">
                            <img src="../static/img/administracion/p4.webp" alt="Imagen 4 producto activo">
                        </td>
                        <td>77</td>
                        <td>
                            <button type="button" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr id="f8">
                        <td>12/05/2021</td>
                        <td>Monitor ACER</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores soluta, ipsa deserunt cupiditate necessitatibus expedita laborum, explicabo, quaerat fuga molestiae et debitis at tenetur.</td>
                        <td>79.99€</td>
                        <td>
                            <img src="../static/img/detalleProducto/1.webp" alt="Imagen 1 producto activo">
                            <img src="../static/img/detalleProducto/2.webp" alt="Imagen 2 producto activo">
                            <img src="../static/img/detalleProducto/3.webp" alt="Imagen 3 producto activo">
                            <img src="../static/img/detalleProducto/4.webp" alt="Imagen 4 producto activo">
                        </td>
                        <td>66</td>
                        <td>
                            <button type="button" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr id="f9">
                        <td>12/05/2021</td>
                        <td>Altavoz Tronsmart</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores soluta, ipsa deserunt cupiditate necessitatibus expedita laborum, explicabo, quaerat fuga molestiae et debitis at tenetur.</td>
                        <td>79.99€</td>
                        <td>
                            <img src="../static/img/administracion/p9.jfif" alt="Imagen 1 producto activo">
                            <img src="../static/img/administracion/p10.webp" alt="Imagen 2 producto activo">
                            <img src="../static/img/administracion/p11.webp" alt="Imagen 3 producto activo">
                            <img src="../static/img/administracion/p12.webp" alt="Imagen 4 producto activo">
                        </td>
                        <td>15</td>
                        <td>
                            <button type="button" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr id="f10">
                        <td>12/05/2021</td>
                        <td>Portátil Omen</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores soluta, ipsa deserunt cupiditate necessitatibus expedita laborum, explicabo, quaerat fuga molestiae et debitis at tenetur.</td>
                        <td>79.99€</td>
                        <td>
                            <img src="../static/img/administracion/p1.webp" alt="Imagen 1 producto activo">
                            <img src="../static/img/administracion/p2.jfif" alt="Imagen 2 producto activo">
                            <img src="../static/img/administracion/p3.jfif" alt="Imagen 3 producto activo">
                            <img src="../static/img/administracion/p4.webp" alt="Imagen 4 producto activo">
                        </td>
                        <td>98</td>
                        <td>
                            <button type="button" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div id="pagination">
                <button type="button"><i class="fa-solid fa-caret-left"></i></button>
                <ul>
                    <a href="./administracion.php">
                        <li>1</li>
                    </a>
                    <a href="./administracion.php">
                        <li>2</li>
                    </a>
                    <a href="./administracion.php">
                        <li>3</li>
                    </a>
                    <a href="./administracion.php">
                        <li>4</li>
                    </a>

                    <li>...</li>

                    <a href="./administracion.php">
                        <li>10</li>
                    </a>
                </ul>
                <button type="button"><i class="fa-solid fa-caret-right"></i></button>
            </div>

            <dialog id="dialogAdd">
                <button type="button" data-action="close"><i class="fa-solid fa-x"></i></button>
                <h2>Añadir nuevo producto</h2>
                <form method="dialog">
                    <label for="fecha">Fecha</label>
                    <input type="text" name="fechaCreacion" id="fecha">

                    <label for="nomb">Nombre</label>
                    <input type="text" name="nombre" id="nomb">

                    <label for="descr">Descripción</label>
                    <input type="text" name="descripcion" id="descr">

                    <label for="prec">Precio</label>
                    <input type="number" name="precio" id="prec">

                    <label for="exist">Existencias</label>
                    <input type="text" name="existencias" id="exist">

                    <label for="img">Imágenes</label>
                    <input type="file" name="imagenes" id="img">

                    <button type="submit">Añadir producto</button>
                </form>
            </dialog>

            <dialog id="dialogEdit">
                <button type="button" data-action="close"><i class="fa-solid fa-x"></i></button>
                <h2>Editar producto</h2>
                <form method="dialog">
                    <label for="fechaEdit">Fecha</label>
                    <input type="text" name="fechaCreacion" id="fechaEdit">

                    <label for="nombEdit">Nombre</label>
                    <input type="text" name="nombre" id="nombEdit">

                    <label for="descrEdit">Descripción</label>
                    <input type="text" name="descripcion" id="descrEdit">

                    <label for="precEdit">Precio</label>
                    <input type="number" name="precio" id="precEdit">

                    <label for="existEdit">Existencias</label>
                    <input type="text" name="existencias" id="existEdit">

                    <label for="imgEdit">Imágenes</label>
                    <input type="file" name="imagenes" id="imgEdit">

                    <button type="submit">Editar producto</button>
                </form>
            </dialog>

        </section>

        <section id="lastOrders">
            <h2>Últimos pedidos</h2>
            <table>
                <thead>
                    <tr>
                        <th>Id pedido</th>
                        <th>Fecha</th>
                        <th>Usuario</th>
                        <th>Valor total</th>
                        <th>Productos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>10/11/2023</td>
                        <td>Juancar66</td>
                        <td>19.95€</td>
                        <td><a href="./fichaProducto.php" title="Ver producto"><img src="../static/img/detalleProducto/1.webp" alt="Imagen Producto"></a><a href="./fichaProducto.php" title="Ver producto"><img src="../static/img/productos/teclado.png" alt="Imagen Producto"></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>05/11/2023</td>
                        <td>Josemimlg</td>
                        <td>45.50€</td>
                        <td><a href="./fichaProducto.php" title="Ver producto"><img src="../static/img/administracion/p1.webp" alt="Imagen Producto"></a><a href="./fichaProducto.php" title="Ver producto"><img src="../static/img/productos/silla.png" alt="Imagen Producto"></a><a href="./fichaProducto.php" title="Ver producto"><img src="../static/img/detalleProducto/1.webp" alt="Imagen Producto"></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>01/11/2023</td>
                        <td>Mariflowers</td>
                        <td>15.10€</td>
                        <td><a href="./fichaProducto.php" title="Ver producto"><img src="../static/img/administracion/p5.webp" alt="Imagen Producto"></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>20/10/2023</td>
                        <td>Marianolol</td>
                        <td>25.95€</td>
                        <td><a href="./fichaProducto.php" title="Ver producto"><img src="../static/img/administracion/p9.jfif" alt="Imagen Producto"></a><a href="./fichaProducto.php" title="Ver producto"><img src="../static/img/productos/torre.png" alt="Imagen Producto"></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>15/10/2023</td>
                        <td>Carmenesteban</td>
                        <td>20.95€</td>
                        <td><a href="./fichaProducto.php" title="Ver producto"><img src="../static/img/administracion/p4.webp" alt="Imagen Producto"></a></td>
                    </tr>
                </tbody>
            </table>
            <div id="pagination">
                <button type="button"><i class="fa-solid fa-caret-left"></i></button>
                <ul>
                    <a href="./administracion.php">
                        <li>1</li>
                    </a>
                    <a href="./administracion.php">
                        <li>2</li>
                    </a>
                    <a href="./administracion.php">
                        <li>3</li>
                    </a>
                    <a href="./administracion.php">
                        <li>4</li>
                    </a>

                    <li>...</li>

                    <a href="./administracion.php">
                        <li>10</li>
                    </a>
                </ul>
                <button type="button"><i class="fa-solid fa-caret-right"></i></button>
            </div>
        </section>

    </main>

    <?php require("./partials/footer.html"); ?>

    <script type="text/javascript" src="../static/js/app.js"></script>
</body>

</html>