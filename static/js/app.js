//VARIABLES
const amountProductButtons = document.querySelectorAll(".product .amount-div button");
const showElement = document.querySelector("#login #showRecover");
const inputsElementsLogin = document.querySelectorAll(".form_group .input_login");
const littleImagesProduct = document.querySelectorAll("#heroDetail #imageMainInfo #littleImages img");
const toBasketButton = document.querySelectorAll(".product button[data-button-type='toBasket']");
const prevReviewSlider = document.querySelector("#heroIndex #mainReviews #prevReviews");
const nextReviewSlider = document.querySelector("#heroIndex #mainReviews #nextReviews");
const existenceAmountInputs = document.querySelectorAll(".product .existence input");
const submitLoginbtn = document.querySelector("#heroLogin #login #logInForm button[type='submit']");
const passInputLogin = document.querySelector("#heroLogin #login #passW");
const loginButton = document.querySelector("#navBar #loginIcon a");
const closeSession = document.querySelector("#navBar #loginIcon #closeButton");
const adminBtn = document.querySelector("#navBar #loginIcon #adminButton");
const viewProducts = document.querySelector("#heroAdmin #navBarAdmin a[data-target='activeProducts']");//Pestaña 1 menú admin
const viewOrders = document.querySelector("#heroAdmin #navBarAdmin a[data-target='lastOrders']");//Pestaña menú 2 admin
const btnNewProduct = document.querySelector("#heroAdmin #activeProducts #addProduct button");
const btnEditProduct = document.querySelectorAll("#heroAdmin #activeProducts button[title='Editar']");
const btnCloseModalAdd = document.querySelector("#heroAdmin #activeProducts #dialogAdd button[data-action='close']");
const btnCloseModalEdit = document.querySelector("#heroAdmin #activeProducts #dialogEdit button[data-action='close']");
const btnDeleteProduct = document.querySelectorAll("#heroAdmin #activeProducts button[title='Eliminar']");
const dialogAdd = document.querySelector("#heroAdmin #activeProducts dialog#dialogAdd");
const dialogEdit = document.querySelector("#heroAdmin #activeProducts dialog#dialogEdit");
const divOpacar = document.querySelector("div#opacar");
const body = document.body;
const activateZoom = document.querySelector("#activeProducts button#activateZoom");
const followElement = document.getElementById("follow");
const followImg = document.querySelector("#follow img");
const productsImg = document.querySelectorAll("#activeProducts img");
const btnAddProductModal = document.querySelector("#heroAdmin #dialogAdd button[type='submit']");
const btnEditProductModal = document.querySelector("#heroAdmin dialog#dialogEdit button[type='submit']");
let currentIndex = 0; //Usado en el evento del slider



//EVENTOS
//Evento carrusel imágenes header
document.addEventListener("DOMContentLoaded", () => {
    headerSlider();
    checkSesion();
});

//Evento añadir al carrito
if (toBasketButton) {
    toBasketButton.forEach((button) => {
        button.addEventListener("click", (event) => {
            let target = event.currentTarget.getAttribute("data-target");
            increaseBasket(target);
        });
    });
}

//Evento mostrar div de recuperación de contraseña
if (showElement) {
    showElement.addEventListener("click", recoverPassForm);
}

// Eventos botones Index aumentar/disminuir cantidad
if (amountProductButtons) {
    amountProductButtons.forEach((button) => {
        button.addEventListener("click", (event) => {
            const action = event.currentTarget.getAttribute("data-action");
            const targetId = event.currentTarget.getAttribute("data-target");
            const targetInput = document.getElementById(targetId);

            if (action === "decrement") {
                decrement(targetInput);
            } else if (action === "increment") {
                increment(targetInput);
            }

        });
    });
}

//Efecto floating label del formulario de login
if (inputsElementsLogin) {
    inputsElementsLogin.forEach((inputElement) => {
        inputElement.addEventListener("focus", () => {
            const labelElement = inputElement.previousElementSibling;
            labelElement.classList.add("focused");
        });

        inputElement.addEventListener("blur", () => {
            const labelElement = inputElement.previousElementSibling;
            if (inputElement.value === "") {
                labelElement.classList.remove("focused");
            }
        });
    });
}

//Imagen pequeña se convierte en grande en detalle producto
if (littleImagesProduct) {
    littleImagesProduct.forEach((image) => {
        image.addEventListener("click", (event) => {
            let bigSRC = document.querySelector("#heroDetail #imageMainInfo #bigImage");
            let littleSRC = event.currentTarget.src;
            bigSRC.src = littleSRC;
        });
    });
}

//Control movimiento slider reseñas hacia la izquierda
if (prevReviewSlider) {
    prevReviewSlider.addEventListener("click", () => {
        if (currentIndex > 0 && currentIndex <= 4) {
            moveSlider(currentIndex, 'left');
            currentIndex--;
        }

    });
}

//Control movimiento slider reseñas hacia la derecha
if (nextReviewSlider) {
    nextReviewSlider.addEventListener("click", () => {
        if (currentIndex < 4 && currentIndex >= 0) {
            moveSlider(currentIndex, 'right');
            currentIndex++;
        }
    });
}

//Asigna una cantidad aleatoria de existencias de los productos
if (existenceAmountInputs) {
    existenceAmountInputs.forEach((input) => {
        if (input.value === "0") {
            input.closest(".product").classList.add("without-stock");
        } else {
            let randonAmount = parseInt(Math.random() * 100) + 1;
            input.value = randonAmount;
        }
    });
}

//Evento iniciar sesión admin
if (submitLoginbtn) {
    submitLoginbtn.addEventListener("click", (event) => {
        event.preventDefault();
        login();
    });
}

//Evento que hace submit en el formulario de login al pulsar enter sobre el input password
if (passInputLogin) {
    passInputLogin.addEventListener("keydown", (event) => {
        if (event.key === "Enter") {
            login();
        }
    });
}

//Control de inicio de sesión
if (loginButton) {
    loginButton.addEventListener("click", () => {
        if (localStorage.getItem("sesionAdmin") !== null) {
            if (!loginButton.classList.contains("is-loged")) {
                loginButton.classList.add("is-loged");
            }
        } else {
            if (loginButton.classList.contains("is-loged")) {
                loginButton.classList.remove("is-loged");
            }
            window.location.href = "./login.php";
        }

    });
}

//Ir a administración
if (adminBtn) {
    adminBtn.addEventListener("click", () => {
        window.location.href = "./administracion.php";
    });
}

//Cierre de sesión
if (closeSession) {
    closeSession.addEventListener("click", () => {
        localStorage.removeItem("sesionAdmin");
        loginButton.classList.remove("is-loged");
        window.location.href = "./index.php";
    });
}

//Pestañas panel de administración
if (viewProducts && viewOrders) {
    viewProducts.addEventListener("click", () => {
        let idToShow = viewProducts.getAttribute("data-target");
        showTabs(idToShow, viewProducts);
    });

    viewOrders.addEventListener("click", () => {
        let idToShow = viewOrders.getAttribute("data-target");
        showTabs(idToShow, viewOrders);
    });
}

//Botón abrir añadir producto panel administración
if (btnNewProduct) {
    btnNewProduct.addEventListener("click", () => {
        divOpacar.classList.add("active");
        body.classList.add("opacado");

        btnAddProductModal.addEventListener("click", () => {
            let tableTarget = document.querySelector("#heroAdmin #activeProducts table tbody");
            let dialogValues = dialogAdd.querySelectorAll("input");

            let newTr = document.createElement("tr");
            for (let i = 0; i < dialogValues.length - 2; i++) {
                let newTd = document.createElement("td");
                if (i === 3) {
                    newTd.innerText = dialogValues[i].value + "€";
                    newTr.appendChild(newTd);
                } else {
                    newTd.innerText = dialogValues[i].value;
                    newTr.appendChild(newTd);
                }
            }

            let tdImages = document.createElement("td");
            let arrayImgSrc = ["../static/img/detalleProducto/1.webp", "../static/img/detalleProducto/2.webp", "../static/img/detalleProducto/3.webp", "../static/img/detalleProducto/4.webp"];
            for (let i = 0; i < arrayImgSrc.length; i++) {
                let imageElement = document.createElement("img");
                imageElement.src = arrayImgSrc[i];
                tdImages.appendChild(imageElement);
            }

            let tdStock = document.createElement("td");
            tdStock.innerText = dialogValues[4].value;

            let tdBtn = document.createElement("td");
            let btn1 = document.createElement("button");
            let i1 = document.createElement("i");
            i1.classList.add("fa-solid", "fa-pen-to-square");
            btn1.appendChild(i1);

            let btn2 = document.createElement("button");
            let i2 = document.createElement("i");
            i2.classList.add("fa-solid", "fa-trash-can");
            btn2.appendChild(i2);

            tdBtn.appendChild(btn1);
            tdBtn.appendChild(btn2);

            newTr.appendChild(tdImages);
            newTr.appendChild(tdStock);
            newTr.appendChild(tdBtn);

            tableTarget.prepend(newTr);

            closeModal(dialogAdd);
        });
        dialogAdd.showModal();
    });
}

//Botón abrir editar producto panel administración y función para modificar visualmente la línea según los valores del dialog
if (btnEditProduct) {
    btnEditProduct.forEach((button) => {
        button.addEventListener("click", () => {
            divOpacar.classList.add("active");
            let date = button.closest("tr").childNodes[1].innerText;
            let name = button.closest("tr").childNodes[3].innerText;
            let descrp = button.closest("tr").childNodes[5].innerText;
            let price = button.closest("tr").childNodes[7].innerText;
            price = parseFloat(price.split("€")[0]);
            let stock = button.closest("tr").childNodes[11].innerText;
            let arrayValues = [date, name, descrp, price, stock];
            let inputsDialog = dialogEdit.querySelectorAll("input");

            for (let i = 0; i < inputsDialog.length - 1; i++) {
                inputsDialog[i].value = arrayValues[i];
            }

            body.classList.add("opacado");

            btnEditProductModal.addEventListener("click", (event) => {
                event.preventDefault();
                let rowTarget = button.closest("tr");
                let elementsToEditTr = rowTarget.querySelectorAll("td");
                let formEditModal = btnEditProductModal.closest("form");
                let inputsEditModal = formEditModal.querySelectorAll("input");

                for (let i = 0; i < elementsToEditTr.length - 4; i++) {
                    elementsToEditTr[i].innerText = inputsEditModal[i].value;
                }

                elementsToEditTr[3].innerText = inputsEditModal[3].value + "€";
                elementsToEditTr[5].innerText = inputsEditModal[4].value;

                closeModal(dialogEdit);
            });

            dialogEdit.showModal();
        });
    });
}

//Botón cerrar modal añadir producto
if (btnCloseModalAdd) {
    btnCloseModalAdd.addEventListener("click", () => {
        closeModal(dialogAdd);
    });
}

//Botón cerrar modal editar producto
if (btnCloseModalEdit) {
    btnCloseModalEdit.addEventListener("click", () => {
        closeModal(dialogEdit);
    });
}

//Botones para eliminar fila de forma visual
if (btnDeleteProduct) {
    btnDeleteProduct.forEach((button) => {
        let idFila = button.closest("tr").id;
        button.addEventListener("click", () => {
            deleteElement(idFila);
        });
    });
}

//Botón para activar el elemento follow
if (activateZoom) {
    let zoomBtn = document.querySelector("#heroAdmin #activeProducts #activateZoom");
    activateZoom.addEventListener("click", () => {
        followElement.classList.toggle("active");
        zoomBtn.classList.toggle("active");
    })
}

//Elemento follow que sigue al ratón por la pantalla (con el objetivo de hacer zoom al pasar sobre una imagen)
if (followElement) {
    document.addEventListener("mousemove", (event) => {
        followElement.style.top = event.clientY + 15 + "px";
        followElement.style.left = event.clientX + 10 + "px";
    });
}

//Evento que pone el src de la imagn sobre la que pasa el cursos en el elemento follow
if (productsImg) {
    productsImg.forEach((imagen) => {
        imagen.addEventListener("mouseover", () => {
            followImg.src = imagen.src;
        });

        imagen.addEventListener("mouseleave", () => {
            followImg.src = "";
        });
    });
}



//FUNCIONES
//Función para controlar el slider del header
function headerSlider() {
    const imagesSrc = ['../static/img/carrusel/c1.png', '../static/img/carrusel/c2.jpg', '../static/img/carrusel/c3.jpg', '../static/img/carrusel/c4.jpg'];
    const imageElement = document.getElementById("imgCarousel");
    let index = 0;

    setInterval(() => {
        imageElement.src = imagesSrc[index];
        index++;
        if (index === 4) {
            index = 0;
        }
    }, 4000);
}

//Aumenta el número flotante del carrito de la compra
function increaseBasket(target) {
    let amountOfProduct = parseInt(document.getElementById(target).value);
    let basketNumberElement = document.querySelector("#navBar #basketIcon input[type='text']");
    let actualAmount = amountOfProduct + parseInt(basketNumberElement.value);
    basketNumberElement.value = actualAmount;
    shoppingList(target, amountOfProduct);
}

//Añade el nombre del producto a la lista de la compra, si ya está, aumenta el valor del input asociado a ese producto
function shoppingList(target, amountOfProduct) {
    let shoppingListElement = document.querySelector("#navBar #basketIcon #shoppingList");
    let liElement = document.createElement("li");
    let inputElement = document.createElement("input");
    inputElement.type = "text";
    inputElement.setAttribute("readonly", "true");
    liElement.innerText = target;
    liElement.appendChild(inputElement);
    let exist = false;

    for (let element of shoppingListElement.childNodes) {
        if (element.innerText === target) {
            exist = true;
            let actualValue = parseInt(element.querySelector("input").value);
            let sumValue = actualValue + amountOfProduct;
            element.querySelector("input").value = sumValue;
        }
    }

    if (!exist) {
        shoppingListElement.appendChild(liElement);
        inputElement.value = amountOfProduct;
    }

    if (!shoppingListElement.classList.contains("active")) {
        shoppingListElement.classList.add("active");
    }

}

//Función aumentar cantidad productos Index
function increment(targetInput) {
    targetInput.value++;
}

//Función disminuir cantidad productos Index
function decrement(targetInput) {
    if (targetInput.value > 1) {
        targetInput.value--;
    }
}

//Función mostrar formulario para recuperar contraseña
function recoverPassForm() {
    let sectionShow = document.querySelector("#login #recoverPass");
    sectionShow.classList.toggle("active");
}

//Función que controla el movimiento del slider de reseñas del index
function moveSlider(index, accion) {
    const elementToMove = document.querySelector("#mainReviews #reviewsContainer");
    let translateX = 0;

    if (accion === "right") {
        switch (index) {
            case 0: translateX = 51; break;
            case 1: translateX = 102; break;
            case 2: translateX = 153; break;
            case 3: translateX = 204; break;
        }

        elementToMove.style.transform = `translateX(-${translateX}%)`;

    } else if (accion === "left") {
        switch (index) {
            case 1: translateX = 0; break;
            case 2: translateX = 51; break;
            case 3: translateX = 102; break;
            case 4: translateX = 153; break;
        }

        elementToMove.style.transform = `translateX(-${translateX}%)`;
    }
}

//Función que comprueba si el admin tiene una sesión guardada y escribe el mensaje de bienvenida. También añade elementos mouseover y mouseout para mostrar el panel de cierre de sesión
function checkSesion() {
    let adminSesion = localStorage.getItem("sesionAdmin");
    let hoverSesionElement = document.querySelector("#navBar #closeSession");
    let welcomeElement = document.querySelector("#navBar #closeSession #welcomeUser");
    let sessioParsed = JSON.parse(adminSesion);

    if (adminSesion) {
        loginButton.classList.add("is-loged");

        loginButton.addEventListener("mouseover", () => {
            hoverSesionElement.classList.add("active");
        });

        loginButton.addEventListener("mouseout", () => {

            setTimeout(() => {
                if (!hoverSesionElement.classList.contains("hovered")) {
                    hoverSesionElement.classList.remove("active");
                }
            }, 500);

        });

        hoverSesionElement.addEventListener("mouseover", () => {
            hoverSesionElement.classList.add("hovered");
            hoverSesionElement.classList.add("active");
        });

        hoverSesionElement.addEventListener("mouseout", () => {
            hoverSesionElement.classList.remove("hovered");
            hoverSesionElement.classList.remove("active");
        })


        welcomeElement.innerText = "Bienvenido, " + sessioParsed.usuario;
    }
}

//Función para que el admin inicie sesión
function login() {
    let user = document.querySelector("#heroLogin #login #logInForm input#usuario").value;
    let pass = document.querySelector("#heroLogin #login #logInForm input#passW").value;

    if (user === "admin" && pass === "admin") {
        let credentials = {
            id: "1",
            usuario: user
        };
        localStorage.setItem("sesionAdmin", JSON.stringify(credentials));
        window.location.href = "./administracion.php";
    }
}

//Funcion mostrar pestañas admin panel
function showTabs(idToShow, tab) {
    let elementToShow = document.getElementById(idToShow);
    let sectionsToHide = document.querySelectorAll("#heroAdmin section");
    let tabsToHide = document.querySelectorAll("#navBarAdmin li a");

    for (let tab of tabsToHide) {
        tab.classList.remove("active");
    }

    for (let element of sectionsToHide) {
        element.classList.remove("active");
    }

    tab.classList.add("active");
    elementToShow.classList.add("active");
}

//Eliminar filas de la tabla de productos del panel de administración
function deleteElement(idRow) {
    const deleteROW = document.getElementById(idRow);
    if (confirm("Desea eliminar la fila " + idRow + "?")) {
        deleteROW.remove();
    }
}

//Cerrar diálogo modal del panel de administración
function closeModal(dialog) {
    divOpacar.classList.remove("active");
    body.classList.remove("opacado");
    dialog.close();
}