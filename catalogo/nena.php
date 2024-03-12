<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Cliente 2 PaginaWeb/style.css"> 
    <link rel="icon" href="Percha.png" />
    <title>DAK</title>
</head>
<body>
    <header>
        <h1>Indumentaria DAK</h1>
        <nav class="lista">
            <ul>
                <li><a href="/DAK/index.php">Inicio</a></li>
                <li><a href="/DAK/catalogo.php">Catálogo</a></li>
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
            <div class="card" data-publico="nena" data-precio="3000" data-talle="s" data-ropa="remera" data-busqueda="remera">
                <img src="/DAK/imagenes/Niña/niñas1.jpeg" alt="ropa niña">
                    <h3>Remera</h3>
                    <p>Talle S</p>
                    <p>$3000</p>
            </div>
            <div class="card" data-publico="nena" data-precio="2800" data-talle="m" data-ropa="pantalon" data-busqueda="pantalon">
            <img src="/DAK/imagenes/Niña/niñas2.jpeg" alt="ropa niña">
                    <h3>Pantalon</h3>
                    <p>Talle M</p>
                    <p>$2800</p>
            </div>
            <div class="card" data-publico="nena" data-precio="6000" data-talle="s" data-ropa="vestido" data-busqueda="vestido">
            <img src="/DAK/imagenes/Niña/niñas3.jpeg" alt="ropa niña">
                    <h3>Vestido</h3>
                    <p>Talle S</p>
                    <p>$6000</p>
            </div>
            <div class="card" data-publico="nena" data-precio="3200" data-talle="m" data-ropa="remera" data-busqueda="remera">
            <img src="/DAK/imagenes/Niña/niñas4.jpeg" alt="ropa niña">
                    <h3>Remera</h3>
                    <p>Talle M</p>
                    <p>$3200</p>
            </div>
            <div class="card" data-publico="nena" data-precio="4100" data-talle="s" data-ropa="pantalon" data-busqueda="pantalon">
            <img src="/DAK/imagenes/Niña/niñas5.jpeg" alt="ropa niña">
                    <h3>Pantalon</h3>
                    <p>Talle S</p>
                    <p>$4100</p>
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
    <script src="/DAK/script.js"></script>
</body> 
</html>