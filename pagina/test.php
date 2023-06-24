

<!DOCTYPE html>
<html>
<head>
    <title>Panel de Administración</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION["username"]; ?></h2>
    <h3>Productos:</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
        <?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Conexión a la base de datos
$conn = new mysqli("localhost", "nombre_usuario", "contraseña", "nombre_base_de_datos");

// Obtener todos los productos de la base de datos
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Manejar las acciones del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["delete"])) {
        $productId = $_POST["delete"];
        // Eliminar el producto de la base de datos
        $sql = "DELETE FROM products WHERE id='$productId'";
        $conn->query($sql);
    } elseif (isset($_POST["edit"])) {
        $productId = $_POST["edit"];
        // Redirigir a la página de edición del producto
        header("Location: edit.php?id=$productId");
        exit();
    } elseif (isset($_POST["add"])) {
        $productName = $_POST["product_name"];
        $productPrice = $_POST["product_price"];
        $productQuantity = $_POST["product_quantity"];
        // Agregar el nuevo producto a la base de datos
        $sql = "INSERT INTO products (name, price, quantity) VALUES ('$productName', '$productPrice', '$productQuantity')";
        $conn->query($sql);
    }
}
?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
                <td><?php echo $row["quantity"]; ?></td>
                <td>
                    <form method="POST" action="">
                        <input type="hidden" name="delete" value="<?php echo $row["id"]; ?>">
                        <input type="submit" value="Eliminar">
                    </form>
                    <form method="POST" action="">
                        <input type="hidden" name="edit" value="<?php echo $row["id"]; ?>">
                        <input type="submit" value="Editar">
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <h3>Agregar Nuevo Producto:</h3>
    <form method="POST" action="">
        <label>Nombre del Producto:</label>
        <input type="text" name="product_name" required><br>

        <label>Precio:</label>
        <input type="number" name="product_price" required><br>

        <label>Cantidad:</label>
        <input type="number" name="product_quantity" required><br>

        <input type="submit" name="add" value="Agregar Producto">
    </form>
</body>
</html>