<?php
$urlActual = $_SERVER['REQUEST_URI'];
$listLink = [
    '/index.php',
    '/about.php',
    '/service.php',
    '/proyectos.php',
    '/contact.php'
];

$listName = [
    'Inicio',
    '¿Quiénes Somos? ',
    'Servicio',
    'Proyectos',
    'Contacto'
];   
?>

<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                <?php foreach (range(0, count($listLink)) as $i): ?>
                    <a 
                        <?php if ( $urlActual == $listLink[$i] ) { ?> 
                        class="nav-item nav-link active" 
                        <?php   } else {  ?>
                        class="nav-item nav-link"
                        <?php } ?> 
                        href="<?php echo $listLink[$i] ?>"> <?php echo $listName[$i] ?>
                    </a>
                <?php endforeach; ?>  
                </div>
                <div class="ml-auto">
                    <a class="btn" href="#">Get A Quote</a>
                </div>
            </div>
        </nav>
    </div>
</div>