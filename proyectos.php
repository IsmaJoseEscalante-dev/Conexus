<div class="row">
        <?php
        ini_set('display_errors',1);
        error_reporting(E_ALL);
        include "./proyectos/Config/Conexion.php";
        $sql = "SELECT * FROM tm_proyecto";
        $mysqli = $conexion->query($sql);
        while ($row = $mysqli->fetch_assoc()) { 
            $sqlNew = "SELECT * FROM tm_imagen WHERE proy_id = {$row['proy_id']}";
            $images = $conexion->query($sqlNew)->fetch_assoc();
            ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo "http://localhost/Proyectos/".$images['ima_path'] ?>" alt="Image">
                        </div>
                        <div class="blog-meta">
                            <p>Fecha:<?php echo $row['proy_date'] ?></p>
                        </div>
                        <div class="blog-text">
                            <p>
                            <a href="./proyecto.php?name=<?php echo $row['proy_nom'] ?>"><?php echo $row['proy_nom'] ?></a>
                            </p>
                        </div>
                    </div>
                </div>
        <?php } ?>

</div>