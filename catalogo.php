<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Percha.png" /> 
    <title>DAK</title>
</head>
<body>
    <header>
        <h1>Indumentaria DAK</h1>
        <nav class="lista">
            <ul>
                <li><a href="/DAK/index.php">Inicio</a></li>
                <li><a id="contacto" href="/contacto" >Contacto</a></li>
            </ul>
            <div class="buscador">
                <input type="text" id="busqueda" placeholder="Buscar"></input>
                <button type="submit" id="search-button"><span class="lupa">&#128269;</span></button>
                <button id="filtro-button">Filtros</button>
                <div id="opciones-filtro" style="display: none;">
                    <select id="publico">
                        <option value="">Todos</option>
                        <option value="nene">Nene</option>
                        <option value="nena">Nena</option>
                        <option value="damas">Damas</option>
                        <option value="caballeros">Caballeros</option>
                    </select>
                    <select id="precio">
                        <option value="">Todos</option>
                        <option value="menor">Precio menor</option>
                        <option value="mayor">Precio mayor</option>
                    </select>
                    <select id="talle">
                        <option value="">Todos</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                    </select>
                    <select id="ropa">
                        <option value="">Todos</option>
                        <option value="remera">Remera</option>
                        <option value="pantalon">Pantalon</option>
                        <option value="malla">Malla</option>
                        <option value="vestido">Vestido</option>
                    </select>
                    <button id="aplicar-filtro">Aplicar Filtro</button>
                </div>
            </div>
        </nav>
    </header>
    <section class="productos">
        <h2>Productos</h2>
        <div class="cards">
            <div class="card" data-publico="damas" data-precio="" data-talle="" data-ropa="" data-busqueda="">
            <img src="imagenes/Damas/dama1.jpeg" alt="ropa mujer">
                <a href="/DAK/catalogo/damas.php">
                    <h3>Damas</h3>
                    <p>Descubre mas</p>
                </a>
            </div>
            <div class="card" data-publico="caballeros" data-precio="" data-talle="" data-ropa="" data-busqueda="">
            <img src="imagenes/Caballeros/caballero4.jpeg" alt="ropa varón">
                <a href="/DAK/catalogo/caballeros.php">
                    <h3>Caballeros</h3>
                    <p>Descubre mas</p>
                </a>
            </div>
            <div class="card" data-publico="nena" data-precio="" data-talle="" data-ropa="" data-busqueda="">
            <img src="imagenes/Niña/niñas1.jpeg" alt="ropa niña">
                <a href="/DAK/catalogo/nena.php">
                    <h3>Nena</h3>
                    <p>Descubre mas</p>
                </a>
            </div>
            <div class="card" data-publico="nene" data-precio="" data-talle="" data-ropa="" data-busqueda=""> 
            <img src="imagenes/Niño/niños3.jpeg" alt="ropa niño">
                <a href="/DAK/catalogo/nene.php">
                    <h3>Nene</h3>
                    <p>Descubre mas</p>
                </a>
            </div>
        </div>
    </section>
   
    <footer>
        <h3 id="redes">¡Seguinos en nuestras redes!</h3>
        <div id="icon-container">
            <img src="/DAK/instagram.png" alt="instagram" >
            <img src="/DAK/facebook.png" alt="facebook" >
            <img src="/DAK/tiktok.png" alt="tik-tok" >
        </div>
    </footer>
    <script src="script.js"></script>
</body> 
</html>