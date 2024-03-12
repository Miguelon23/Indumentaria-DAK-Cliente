let contactoLink = document.getElementById("contacto");

contactoLink.addEventListener("click", function(event) {
    event.preventDefault();

    // Solicitar que ingrese su nombre
    let nombreUsuario = prompt("Por favor, ingresa tu nombre:");
    
    // Si cancela la petición no hace nada
    if (!nombreUsuario) return;

    // Solicitar el nombre del producto interesado
    let producto = prompt("Hola " + nombreUsuario + ", ¿Qué producto te interesa?");
    
    // Mostrar un mensaje de alerta con el saludo y el producto seleccionado
    if (producto) {
        alert("Hola " + nombreUsuario + ", estás interesado en " + producto + ".");
    } else {
        alert("Por favor, introduce el nombre del producto.");
    }
});

document.addEventListener("DOMContentLoaded", function() {
    // Función para aplicar los filtros y mostrar/ocultar las tarjetas según corresponda
    function aplicarFiltros() {
        let busqueda = document.getElementById("busqueda").value.toLowerCase();
        let publico = document.getElementById("publico").value.toLowerCase();
        let precio = document.getElementById("precio").value.toLowerCase();
        let talle = document.getElementById("talle").value.toLowerCase();
        let ropa = document.getElementById("ropa").value.toLowerCase();

        let descripciones = document.querySelectorAll(".card");

        descripciones.forEach(function(card) {
            let publicoCard = card.dataset.publico.toLowerCase();
            let precioCard = card.dataset.precio ? parseInt(card.dataset.precio) : null;
            let talleCard = card.dataset.talle.toLowerCase();
            let ropaCard = card.dataset.ropa.toLowerCase();
            let contenidoTarjeta = card.textContent.toLowerCase();

            if ((publicoCard.includes(publico) || publico === "") &&
                (talleCard.includes(talle) || talle === "") &&
                (ropaCard.includes(ropa) || ropa === "") &&
                (precioCard === null || isNaN(precioCard) || precio === "" || 
                    (precio === "menor" && precioCard <= 5000) || 
                    (precio === "mayor" && precioCard > 5000)) &&
                (contenidoTarjeta.includes(busqueda) || busqueda === "")) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }

    // Mostrar todas las tarjetas al cargar la página
    aplicarFiltros();

    // Event listener para el botón de búsqueda
    document.getElementById("search-button").addEventListener("click", function() {
        aplicarFiltros();
    });

    // Event listener para el botón "Aplicar Filtro"
    document.getElementById("aplicar-filtro").addEventListener("click", function() {
        aplicarFiltros();
    });

    // Event listener para el botón de filtro
    document.getElementById("filtro-button").addEventListener("click", function() {
        let opcionesFiltro = document.getElementById("opciones-filtro");
        if (opcionesFiltro.style.display === "none") {
            opcionesFiltro.style.display = "block";
        } else {
            opcionesFiltro.style.display = "none";
        }
    });
});