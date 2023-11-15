<div id="accountMenu">
    <button onclick="showOrders()">Mis Pedidos</button>
    <button onclick="showSettings()">Configuración</button>
    <!-- Más botones según sea necesario -->
</div>

<div id="accountContent">
    <!-- El contenido dinámico se cargará aquí -->
</div>

<script>
function showOrders() {
    // Código para mostrar los pedidos del usuario
    document.getElementById('accountContent').innerHTML = '<p>Listado de pedidos aquí.</p>';
}

function showSettings() {
    // Código para mostrar la configuración de la cuenta del usuario
    document.getElementById('accountContent').innerHTML = '<p>Configuración de la cuenta aquí.</p>';
}

// Más funciones según sea necesario
</script>
