<?php require_once 'header.php'; ?>

</section>
<div class="contenedor">
<form id="crear1" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $repaso['id']; ?>" name="id">
<input type="hidden" value="<?php echo $repaso['espanol']; ?>" name="espanol">
<input type="hidden" value="<?php echo $repaso['ingles']; ?>" name="inglesBd">
<div class="row py-5">
        <div class="col">
            <div class="border-bottom">
                <h1 class="text-center">Escribe la Palabra <?= $repaso['espanol'] ?> en Ingles </h1>
            </div>
        </div>
</div>
    <label id="crear" for="nombre">Palabra en Ingles</label>
    <input  type="text1" name="ingles" value="" />

    
    <input type="submit" value="Verificar" />

    <?php if (isset($status) && $status === "OK"): ?>
        <p class="text-center text-success">¡Correcto! La palabra en inglés es la correcta.</p>
        <tr>    
                    <td>
                      
                        <a href="eliminar.php?id=<?php echo $repaso['id']; ?>&accion=1" class="button-small delete">Eliminar</i></a>
                        <a href="proxima.php?id=<?php echo $repaso['id']; ?>&accion=3" class="button-small">Repaso En 3 dias</i></a>
                        <a href="proxima.php?id=<?php echo $repaso['id']; ?>&accion=7" class="button-small">Repaso En 7 dias</i></a>
                        <a href="proxima.php?id=<?php echo $repaso['id']; ?>&accion=30" class="button-small">Repaso En 30 dias</i></a>
                    </td>

        </tr>
    <?php elseif(isset($status) && $status === "ERROR"): ?>
        <p class="text-center text-danger">La palabra en inglés es incorrecta. Intenta nuevamente.</p>
        <a href="repaso.php?id=<?php echo $repaso['id']; ?>&accion=1" class="button-small">Repaso En 1 dias</i></a>
    <?php endif; ?>

</form>

<?php require_once 'footer.php'; ?>
