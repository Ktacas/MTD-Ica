<?php require 'header/doctype.php'; ?>
<link rel="stylesheet" href="../public/css/core.css">
<?php require 'header/title.php'; ?>
<?php require 'header.php'; ?>
<?php require '../modelos/CoreD.php'; ?>
<section class="hero">
    <div class="overlay"></div>
    <div class="content">
        <figure class="perfil">
            <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" alt="">
        </figure>
        <h1><?php echo $row['nombre'].' '.$row['apellido'] ?></h1>
        <h3><?php echo $row['cargo'] ?></h3>
        <div class="skills">
            <div class="items">
                <img class="icons" src="../public/img/code.svg" alt="">
                <p><?php echo $row['skill1']?></p>
                <p class="number">85</p>
            </div>
            <div class="items">
                <img class="icons" src="../public/img/nube.svg" alt="">
                <p><?php echo $row['skill2']?></p>
                <p class="number">70</p>
            </div>
            <div class="items">
                <img class="icons" src="../public/img/web.svg" alt="">
                <p><?php echo $row['skill3']?></p>
                <p class="number">80</p>
            </div>
            <div class="items">
                <img class="icons" src="../public/img/settings.svg" alt="">
                <p><?php echo $row['skill4']?></p>
                <p class="number">70</p>
            </div> 
        </div>
    </div>
</section>
<section class="about">
    <h2>Sobre mi</h2>
    <p><?php echo $row['descripcion']?></p>
</section>
<section class="core">
    <h2>Otros Líderes</h2>
    <div class="content_core">
        <?php require '../modelos/CoreL.php';?>
    </div>
</section>
<section class="gallery">
    <h2>Proyectos</h2>
    <div class="container">
        <div class="one hover">
            <figure>
                <img class="image_items" src="<?php echo $row['proyecto1']?>" alt="">
            </figure>
        </div>
        <div class="two hover">
            <figure>
                <img class="image_items" src="<?php echo $row['proyecto2']?>" alt="">
            </figure>   
        </div>
        <div class="three hover">
            <figure>
                <img class="image_items" src="<?php echo $row['proyecto3']?>" alt=""></div>
            </figure>  
        <div class="four hover">
            <figure>
                <img class="image_items" src="<?php echo $row['proyecto4']?>" alt="">
            </figure>
        </div>
        <div class="five hover">
            <figure>
                <img class="image_items" src="<?php echo $row['proyecto5']?>" alt="">
            </figure>
        </div>
    </div>
</section>
<?php require 'footer.php' ?>