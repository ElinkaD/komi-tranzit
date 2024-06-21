<style>
.hero {
    position: relative;
    color: #FEFEFE;
    height: 84vh;
}
.hero h4{
    color: #F0F2F2
}

.hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}

.hero-text p {
    width: 60vw;
    color: #FEFEFE;
}

@media (max-width: 800px) {
    .hero-text h1 {
        font-size: 48px;
    }

    .hero-text p {
        width: 90vw;
        font-size: 16px;
        line-height: 1.5; 
    }

    .hero {
    height: 90vh;
}
}
</style>

<section class="hero">
    <picture>
        <source media="(min-width: 800px)" srcset="img/background_company@3x.png 2x, img/background_company@2x.png">
        <source media="(min-width: 500px)" srcset="img/background_company@2x.png">
        <img src="img/background_company.png" alt="Background Image" class="hero-image">
    </picture>
    <div class="hero-text">
        <a href="index.php?page=main_page"><h4>Главная</h4></a>
        <h1>ООО Коми Транзит</h1>
        <p>Компания предоставляет механизированные услуги железнодорожного тупика по&nbsp;приему и&nbsp;переработке груза (в&nbsp;том числе негабаритного), приходящего железнодорожным транспортом на&nbsp;станцию Усинск Северной железной дороги.</p>    
    </div>
</section>

<div class="page">
<?php 
    require 'history.php';
    echo '<link rel="stylesheet" href="css/history.css">'; 
?>

<?php 
    require 'advatages.php'; 
    echo '<link rel="stylesheet" href="css/advatages.css">';
?>
</div>




