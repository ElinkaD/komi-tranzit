<style>
/* inner title */
.menu-main a {
    color: #140C9C;
}
.menu-main a:hover,
.menu-main a:after,
.menu-main a:hover:after {
    color: #D8315B;
}

.navbar-logo h4{
    color: #140C9C;
}

.inner-page{
    width: 66vw;
    margin: 100px 5vw 200px 0;
    margin-left: auto;
}

@media (max-width: 800px) {
    .inner-page{
        margin: 100px 0 200px 0;
        width: 100vw;
    }
}
</style>

<section class="hero">
    <div class="hero-text">
        <a href="index.php?page=main_page"><h4>Главная</h4></a>
        <h1>Услуги</h1>
    </div>
</section>

<div class="inner-page">
<?php 
    require 'services.php';
    echo '<link rel="stylesheet" href="css/services.css">'; 
?>
</div>




