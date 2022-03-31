<?php
include '../templates/head.php';
?>
<section class="contac">
    <div class="formC">
        <p>Contacto</p><span></span>
        <br><br><br>
        <p class="C">Enviamos tus comentarios o sugerencias</p>
        <br>
        <form action="#" method="POST">
            <input class="inputC" type="text" name="correo" placeholder="Ingresa tu correo">
            <input class="inputC" type="text" name="nombre" placeholder="Ingresa tu nombre">
            <textarea class="" name="" id="" placeholder="Ingresa tu mensaje"></textarea>
            <input class="btnC" type="button" value="Enviar" name="inicio">
        </form>
    </div>
</section>
<?php
include '../templates/footer.php';
?>