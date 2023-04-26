<?php
include("includes/header.php");
?>

<form action="" method="POST">
    <fieldset>
    <legend>Contactanos</legend>
        <label for=nombre">nombre</label>
        <input type="text" name="nombre" placeholder="tu nombre" required>

        <label for="email">email</label>
        <input type="email" name="email" placeholder="tu email" required>

        <label for="telefono">teléfono</label>
        <input type="number" name="telefono" placeholder="tu telefono" required>

        <label for="asunto">asunto</label>
        <input type="text" name="asunto" placeholder="asunto" required>

        <label for="mensaje">mensaje</label>
        <textarea name="mensaje"></textarea>

        <input type="submit" name="enviar">
    </fieldset>
</form>

<?php
include('includes/footer.php');
?>