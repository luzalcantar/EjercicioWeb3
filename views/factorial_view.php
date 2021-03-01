<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Resultados</h2>
    </div>
    <div class="panel-body table-responsive">
        <?php 
            foreach ($resultados as $dato) { 
                echo "<p class='mensaje'>El factorial del número <strong>".$dato['numero']."</strong> es igual a <strong>".$dato['resultado']."</strong></p>";
                echo "<p><strong>Cálculo de Factorial de ".$dato['numero'].": </strong></p>";
                echo "<p><strong>".$dato['numero']."!= </strong>".$dato['proceso']."</p>";
                echo "<p><strong>".$dato['numero']."!= </strong>".$dato['resultado']."</p>";

            } 
        ?>
        
        <a href="index.php" class="btn btn-primary btn-return">Volver al Inicio</a>
    </div>
</div>