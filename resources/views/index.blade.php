@extends('layouts.app')

@section('content')

<!-- div INDEX -->
<div>
  <!-- <div class="section grid">
    <div id="typed-strings">
      <p>Oleodinamica</p>
    </div>
    <h1 class="m-12 l-6 center text-size-100 text-l-size-50 text-extra-strong text-center text-white margin-bottom-30 text-line-height-1 text-uppercase">This is <br><span id="typed" style="white-space:pre;"></span></h1>
    <p class="m-12 l-6 text-size-20 text-white text-center center text-uppercase">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat consectetuer volutpat.</p>
  </div> -->
  <!-- TOP SECTION -->
  <section class="grid">
    <!-- Main Carousel -->
    <div class="s-12 margin-bottom carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-hide-arrows background-dark">
      <div class="item background-image" style="background-image:url(img/sliding_002.jpg)">
        <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">cabezales para puertas automáticas</p>
        <p class="text-padding text-size-20 text-dark text-uppercase background-white">Especiales para hospitales, hoteles, comercio, oficinas, etc.</p>
      </div>
      <div class="item background-image" style="background-image:url(img/bollards/j355_002.jpg)">
        <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">Bolardos de seguridad y control</p>
        <p class="text-padding text-size-20 text-dark text-uppercase background-white">Dispositivos automáticos, semi-automáticos y fijos</p>
      </div>
      <div class="item background-image" style="background-image:url(img/magnetic-TerraPass-hero.jpg)">
        <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">Venta e instalación de automatismos</p>
        <p class="text-padding text-size-20 text-dark text-uppercase background-white">Solo las mejores marcas a nivel mundial</p>
      </div>
    </div>  
  </section>

    <!-- <section class="grid">
        <div class="m-12 l-3 padding-2x background-primary margin-bottom">
          <div class="item"><img src="img/bollards/3.png" alt=""></div>
            <h1 class="text-m-size-40 text-xl-size-50 text-size-70 text-extra-strong text-white text-line-height-1 text-uppercase">FAAC</h1>
            <p>Llorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
        <div class="m-12 l-9 margin-bottom carousel-default owl-carousel carousel-main carousel-nav-white background-dark">
            <div class="item"><img src="img/bollards/2.jpg" alt=""></div>
            <div class="item"><img src="img/bollards/5.jpg" alt=""></div>
            <div class="item"><img src="img/bollards/j355.jpg" alt=""></div>
        </div>
    </section> -->

    <!-- SECTION 1 -->
    <!-- <section class="grid padding-2x margin-bottom background-dark">
        <h2 class="m-12 l-6 center text-thin text-size-30 text-white text-uppercase margin-bottom-30"><b>Italomatic</b></h2>
        <p class="m-12 l-6 center">Somos un grupo con más de 10 años de experiencia en el sector. La calidad de los productos que comercializamos y el profesionalismo de nuestro equipo nos convierten en la empresa líder en automatización de accesos en México.</p>
    </section> -->

    <header class="section grid">
      <div id="typed-strings">
        <p>Porta Squadra</p>
      </div>
      <h1 class="m-12 l-6 center text-size-100 text-l-size-50 text-extra-strong text-center text-dark margin-bottom-30 text-line-height-1 text-uppercase">Somos <br><span id="typed" style="white-space:pre;"></span></h1>
      <p class="m-12 l-6 text-size-20 text-dark text-center center text-uppercase">Desde hace 11 años: líder de la automatización de accesos en México. Representantes de la marca <b>FAAC</b>, somos especialistas en la automatización de todo tipo de accesos.</p>
    </header>

   <!-- CLIENTES --> 
    <header class="grid">
    <div class="s-12 padding-2x">
      <h1 class="text-strong text-dark text-center center text-size-60 text-uppercase margin-bottom-20">Algunos de Nuestros Clientes</h1>
      <!-- <p class="text-size-20 text-white text-center center text-uppercase">Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam. Iriure duis autem vel<br> eum dolor in hendrerit in vulputate velit esse molestie consequat.</p> -->
    </div>
    </header>
    <section class="grid margin2x margin-bottom background-none">
      <div class="s-6 m-4 l-2 padding">
        <img src="img/logos/huaweipng.png"/>
      </div>
      <div class="s-6 m-4 l-2 padding">
        <img src="img/logos/bayerpng.png"/>
      </div>
      <div class="s-6 m-4 l-2 padding father">
        <img src="img/logos/bimbopng.png"/>
      </div>
      <div class="s-6 m-4 l-2 padding father" >
       <img src="img/logos/coca-cola-logo-1.png" />
      </div>
      <div class="s-6 m-4 l-2 padding">
        <img src="img/logos/hilti.png"/>
      </div>
      <div class="s-6 m-4 l-2 padding">
        <img src="img/logos/edomexpng.png"/>
      </div>
    </section>

    <!-- <section class="grid text-center padding-2x margin-bottom background-blue">
      <div class="s-12 m-9 l-7 center">
        <h2 class="s-12 text-strong text-uppercase"><b>Satisfied</b> Clients</h2>
        <div class="s-12 carousel-default owl-carousel carousel-nav-white carousel-hide-arrows">
          <div class="item">
            <div class="s-12">
              
              <div class="text-yellow margin-bottom-10"><i class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i></div>
              <p>Iriure duis autem vel eum dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis  lobortis nisl ut aliquip ex ea commodo consequat.</p>
              <p class="text-white text-size-16"><strong>Scott Star</strong> / CEO / Company</p>              
            </div>
          </div>
          <div class="item">
            <div class="s-12">
              <div class="text-yellow margin-bottom-10"><i class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i></div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, lobortis nisl ut aliquip ex ea commodo consequat vel illum dolore eu feugiat nulla facilisis.</p>
              <p class="text-white text-size-16"><strong>Mark Stoner</strong> / Web Developer / Company</p>
            </div>
          </div>
          <div class="item">
            <div class="s-12">
              <div class="text-yellow margin-bottom-10"><i class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i></div>
              <p>Vulputate velit duis autem vel eum iriure dolor in hendrerit in vulputate lobortis nisl ut aliquip ex ea commodo consequat velit esse molestie consequat, vel illum dolore eu feugiat nulla.</p>
              <p class="text-white text-size-16"><strong>Jane Naismith</strong> / Web Designer / Company</p>
            </div>
          </div>
        </div>
      </div>  
    </section> -->
    
</div>
    
@endsection