<div class="row">
        <?php
        ini_set('display_errors',1);
        error_reporting(E_ALL);
        include "./proyectos/Config/Conexion.php";
        $sql = "SELECT * FROM tm_proyecto WHERE proy_nom  = '$nombre'";
        $mysqli = $conexion->query($sql);   
        $row = $mysqli->fetch_assoc();
        $sqlNew = "SELECT * FROM tm_imagen WHERE proy_id = {$row['proy_id']}";
        $images = $conexion->query($sqlNew)->fetch_all();
        foreach($images as $image): ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo "http://localhost/Proyectos/".$image[1] ?>" alt="Image">
                        </div>
                    </div>
                </div>
        <?php endforeach; ?>

</div>