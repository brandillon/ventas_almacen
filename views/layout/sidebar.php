<aside id="lateral">
    <div id="login" class="block_aside">
    <div class="userinfo">
    <img src="<?=base_url?>assets/img/png/img_avatar.png" alt="avatar">
        <?php if (!isset($_SESSION['identity'])) : ?>
            <h3>Inicia sesión en Ventas Almacén</h3>
            <form action="<?= base_url ?>usuario/login" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email" autocomplete="off">
                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <input type="submit" value="Enviar">
            </form>
        <?php else :  ?>
            <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
        <?php endif; ?>
        <div class="containeruser">
        <ul>
            <?php if (isset($_SESSION['admin'])) :  ?>
                <li><a href="<?= base_url ?>categoria/index">Gestionar Categorías</a>
                </li>
                <li><a href="<?= base_url ?>producto/gestion">Gestionar productos</a>
                </li>
                <li><a href="#">Gestionar pedidos</a>
                </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['identity'])) : ?>
                <li>
                    <a href="#">Mis pedidos</a>
                </li>
                <li>
                    <a href="<?= base_url ?>usuario/logout">Cerrar sesión</a>
                </li>
            <?php else : ?>
                <li>
                    <a href="<?= base_url ?>usuario/registro">Registrarse</a>
                </li>
            <?php endif; ?>
        </ul>
        </div>
        </div>
    </div>
</aside>

<div id="central">