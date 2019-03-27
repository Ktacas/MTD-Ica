<?php require 'header/doctype.php'; ?>
<link rel="stylesheet" type="text/css" href="../public/css/main_b.css">
<?php require 'header/title.php'; ?>
<div class="container">
<?php require 'header.php'; ?>

        <section class="post">
            <?php require '../modelos/BlogL.php'?>
        </section>
        <aside class="aside">
            <div class="container-search">
                <h3>Búsqueda</h3>
                <div class="container-align">
                    <form action="../modelos/BlogB.php" method="post">
                        <input name="busqueda" id="busqueda" type="search" class="search" placeholder="Buscar por ..." value="">
                        <input type="submit" name="buscar" id="buscar" class="buscar"  name="buscar" value="Go!">
                    </form>
                </div>
            </div>
            <div class="container-aside">
                <div class="line-aside"></div>
                <h3>Lo más leido</h3>
                <article class="blog-post">
                    <figure class="miniature">
                        <img src="../public/img/blog_post1.png" alt="">
                    </figure>
                    <p class="content-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                </article>
                <article class="blog-post">
                    <figure class="miniature">
                        <img src="../public/img/blog_post1.png" alt="">
                    </figure>
                    <p class="content-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                </article>
                <article class="blog-post">
                    <figure class="miniature">
                        <img src="../public/img/blog_post1.png" alt="">
                    </figure>
                    <p class="content-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                </article>
                <article class="blog-post">
                    <figure class="miniature">
                        <img src="../public/img/blog_post1.png" alt="">
                    </figure>
                    <p class="content-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                </article>
            </div>
            <div class="container-categories">
                <div class="tag-categories">Categorías</div>        
                <div class="background-categories">
                    <div class="items-categories">
                        <a href="">Web Design</a>
                        <a href="">Visual Studio</a>
                        <a href="">HTML5</a>
                        <a href="">JavaScript</a>
                        <a href="">Azure</a>
                        <a href="">CSS3</a>
                    </div>
                </div>            
            </div>
        </aside>
        <section class="other">
            <nav class="container-other">
                <?php require '../modelos/BlogP.php'; ?>
            </nav>
        </section>

<?php require 'footer.php' ?>