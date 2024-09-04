<?php include "css.php" ?>
<?php include "header.php" ?>

<body id="body-bg"> 

    <!-- Cria Carrousel de Fotos -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            
            <!-- Coloca a foto -->
            <div class="carousel-item active">
                <img class="d-block w-100" src="/ProjetoWeb/images/pizza1.jpg" alt="Primeiro Slide">
            </div>
            
            <!-- Coloca a foto -->
            <div class="carousel-item">
                <img class="d-block w-100" src="/ProjetoWeb/images/pizza2.jpg" alt="Segundo Slide">
            </div>
            
            <!-- Coloca a foto -->
            <div class="carousel-item">
                <img class="d-block w-100" src="/ProjetoWeb/images/pizza3.jpg" alt="Terceiro Slide">
            </div>
        </div>
        
        <!-- Cria os Botões de Passar e Voltar a imagem -->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
        
    </div>
</body>

<?php include "footer.php" ?>
    