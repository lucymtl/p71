
<section>
<!--  <div class="col-lg-4 col-md-2 col-sm-2 col-xs-2 "><a href="../accueil.php"><img src="images/logo_bfw.png" alt="logo digikan" /></a></div>-->
<!--  <div class=" col-lg-8 col-md-10 col-sm-10 navbar">-->
<!--    <div class="navbar-inner">-->
<!---->
<!--      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
<!---->
<!---->
<!--      <button type="button"class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">-->
<!--        <span class="sr-only">MENU</span>-->
<!--        <span class="icon-bar"></span>-->
<!--        <span class="icon-bar"></span>-->
<!--        <span class="icon-bar"></span>-->
<!---->
<!--      </button>-->
<!--      <a class="col-md-10  col-sm-10 col-sm-offset-2 col-xs-12 btn navbar btn-navbar collapse" data-toggle="collapse" data-target=".nav-collapse">-->
<!---->
<!---->
<!--      </a>-->
<!---->
<!--      <!-- Be sure to leave the brand out there if you want it shown -->
<!--      <!--<a class="brand" href="#">DIGIKAN</a>-->
<!---->
<!--      <!-- Everything you want hidden at 940px or less, place within here -->
<!--      <div class=" col-lg-offset-3 nav-collapse">-->
<!--        <nav >-->
<!--          <ul class=" nav navbar-nav ">-->
<!--            <li class=""><a href="accueil.php">ACCUEIL</a></li>-->
<!--            <li class=""><a href="apropos.php">A PROPOS</a></li>-->
<!--            <li><a href="service.php">NOS SERVICES</a></li>-->
<!--            <li><a href="realisations.php">REALISATIONS</a></li>-->
<!--            <li><a href="boutique.php">BOUTIQUE</a></li>-->
<!--            <li><a href="nouscontacter.php">CONTACT</a></li>-->
<!---->
<!---->
<!---->
<!--          </ul>-->
<!--        </nav>-->
<!--      </div>-->
<!---->
<!--    </div>-->
<!--  </div>-->



  <div class=" logo-h col-lg-5 col-md-2 col-sm-2 col-xs-2 "><a href="../accueil.php"><img src="images/logo_bfw.png" alt="logo digikan" /></a></div>
  <header class=" col-lg-9   col-md-10 col-sm-10 col-xs-10 ">

    <div id="nav-mobile">Menu</div>
    <nav id="nav-desktop">
      <ul>
        <li class=""><a href="accueil.php">ACCUEIL</a></li>
                    <li class=""><a href="apropos.php">A PROPOS</a></li>
                    <li class=""><a href="service.php">NOS SERVICES</a></li>
                    <li><a href="realisations.php">REALISATIONS</a></li>
                    <li><a href="boutique.php">BOUTIQUE</a></li>
                    <li><a href="nouscontacter.php">CONTACT</a></li>
      </ul>
    </nav>
  </header>
</section>

<script>
  // menu mobile basique
  $(document).ready(function(){
    console.log('DOM CHARGÉ');
    $("#nav-mobile").click(function(){
      $("#nav-desktop").toggle();
    });
  });


</script>

