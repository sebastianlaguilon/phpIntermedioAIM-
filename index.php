<?php
require_once 'admin/config.php';
require_once 'views/header.php';
require_once 'functions.php';

$conexion = Database::connect();

$palabras = obtener_palabras($conexion);

foreach ($palabras as $palabra) {
}

?>


<section class="main">
    <section class="acerca-de" id="acerca-de">
        <div class="contenedor">
            <div class="foto">
                <img src="img/curvadelolvido.png" alt="">
            </div>
            <article>
                <h3>Curva del olvido</h3>
                <P>El psicólogo alemán Hermann Ebbinghaus
                    describe cómo olvidamos información con el tiempo si no la revisamos o reforzamos.
                    Para aplicar la curva de olvido al aprendizaje del inglés, es útil seguir algunas
                    estrategias que te ayudarán a retener el conocimiento a largo plazo.</P>
                <P>Si estás aprendiendo nuevas palabras en inglés, revísalas al día siguiente,
                    luego a los tres días, después de una semana, etc. El espaciado de repaso ayuda
                    a consolidar la memoria y refuerza el aprendizaje.</P>
            </article>
        </div>
    </section>


    <section class="menu">
        <div class="contenedor">
            <h3 class="titulo" id="platillos">Palabras a Repasar el Día</h3>
            <h5 class="titulo"><?php echo date('d/m/Y'); ?></h5>
        </div>
    </section>

    <div class="row flex-wrap">
        <?php foreach ($palabras as $palabra) : ?>

            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card background-image">
                    <img class="card-img-top small-image my-custom-class" src="img/<?= $palabra['imagen'] ?>" alt="">
                    <div class="card-body text-center">
                        <h3 class="card-title">En Español : <?= $palabra['espanol'] ?></h3>
                        <h3 class="card-title">En Ingles : <?= $palabra['ingles'] ?></h3>
                        <p class="card-text"><?= $palabra['fonetica'] ?></p>
                        <a href="repaso.php?id=<?= $palabra['id']; ?>" class="btn btn-sm btn-primary detalles-btn">Repaso</a>
                        <a href="eliminar.php?id=<?= $palabra['id']; ?>" class="button-small delete">Eliminar</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <section class="contacto" id="contacto"></section>
</section>



<script src="js/jquery.com_jquery-3.7.0.min.js"></script>
<script src="js/efectos.js"></script>
<script src="js/parallax.js"></script>
</body>
<?php require_once 'views/footer.php' ; ?>
</html>