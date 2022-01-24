<section class="section hero-section">
    <div class="container">
        <div class="hero-text-box">
            <h1 class="hero-title">
                Stomatološka ordinacija Dr. Begeta sa tradicijom više od 30 godina
            </h1>
            <p class="hero-desc">
                Među najpoznatijim stomatološkim ordinacijama u Bosni i Hercegovini.
            </p>
            <a class="hero-view-more button button-green" href="#">
                Kontaktirajte nas
            </a>
        </div>
        <?php if(isMobile()):?>

        <?php else: ?>
            <img class="img-fluid hero-img" src="./img/hero-img.png" alt="">
        <?php endif;?>
    </div>
</section>
<section class="section img-text-section left">
    <img class="img-fluid" src="./img/ordinacija/dr_begeta_ordinacija_5.jpg" alt="">
    <div class="img-text-box">
        <div class="container">
            <div class="text-box">
                <h2 class="img-text-title">
                    Ordinacija
                </h2>
                <p class="img-text-desc">
                    Uže specijalnosti ordinacije su stomatološka protetika i dentalna implantologija dok istovremeno pružamo usluge iz oblasti estetske stomatologije ,dentalne patologije, endodoncije, parodontalne hirurgije, oralne hirurgije i preventivne stomatologije.
                </p>
                <a class="button button-red" href="#">Ordinacija</a>
            </div>
        </div>
    </div>
</section>
<section class="section img-text-section right">
    <img class="img-fluid" src="./img/laboratorija/dr_begeta_laboratorija_7.jpg" alt="">
    <div class="img-text-box">
        <div class="container">
            <div class="text-box">
                <h2 class="img-text-title">
                    Laboratorija
                </h2>
                <p class="img-text-desc">
                    U našem posjedu se nalazi i sopstvena zubotehnička laboratorija koja je opremljena najmodernijom tehnologijom za izradu svih vrsta mobilnih, fiksnih i kombinovanih protetskih radova. Od 2008 godine naša je laboratorija opremljena najnovijom opremom firme AMMANNGIRRBACH za izradu bezmetalne kermike na bazi cirkon oksida.
                </p>
                <a class="button button-red" href="#">Laboratorija</a>
            </div>
        </div>
    </div>
</section>
<section class="section section-carousel">
    <div class="owl-carousel owl-carousel-homepage owl-theme">
        <?php for ($i=1; $i <= 16; $i++): ?>
            <div class="item">
                <img class="img-fluid" src="./img/ordinacija/dr_begeta_ordinacija_<?php echo $i; ?>.jpg" alt="carousel-img">
            </div>
        <?php endfor; ?>
    </div>
</section>
<section class="section section-team">
    <img class="img-fluid" src="./img/team-img.jpg" alt="">
</section>