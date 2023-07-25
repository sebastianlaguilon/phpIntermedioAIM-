<?php
require_once 'admin/config.php';
require_once 'views/header.php';
require_once 'functions.php';
?>
<div class="row py-5">
        <div class="col">
            <div class="border-bottom">
                <h1 class="text-center">Informe del Repaso</h1>
            </div>
            <?php        
        $archivo = fopen("repaso.txt",'r');
echo fread($archivo,1800);
?>
        </div>

</div>

<?php require_once 'views/footer.php' ; ?>

