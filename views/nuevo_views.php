<?php
require_once '../admin/config.php';
 require_once 'header.php';


?>          

<div class="contenedor">
<form id="crear1" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
<div class="row py-5">
        <div class="col">
            <div class="border-bottom">
                <h1 class="text-center">Agregar Palabra</h1>
            </div>
        </div>
</div>
    <label id="crear" for="nombre">Palabra en Español</label>
    <input  type="text1" name="espanol" value="" />


    <label id="crear" for="descripcion">Palabra en Ingles</label>
    <input type="text" name="ingles"></input>


    <label id="crear" for="nombre">Imagen</label>
    <input type="file" name="thumb" /> 

    <input type="submit" value="Guardar" />

</form>
</div>

