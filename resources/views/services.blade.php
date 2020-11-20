@extends('layouts.app')

@section('content')

<!-- MAIN -->
<main role="main">
    <!-- Main Header -->
    <!-- <header class="grid margin">
        <div class="s-12 l-6 padding-2x margin-bottom text-right" data-image-src="/img/parallax-04.jpg">
            <h1 class="text-size-80 text-xl-size-50 text-extra-strong text-white text-line-height-1 text-uppercase">This is<br> Our<br> Blog</h1>
        </div>

        <div class="s-12 l-6 padding-2x margin-bottom" data-image-src="/img/parallax-04.jpg">
            <p class="text-white text-size-20 text-m-size-16">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam euismod tincidunt ut laoreet
                dolore magna aliquam erat volutpat.<br><br></p>
            <p class="text-white text-size-20 text-m-size-16">Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
        </div>
    </header> -->

    <!-- SECTION 1 --> 
    <section class="grid margin">
          <div class="s-12 m-6 l-3 l-row-2 padding-2x margin-bottom background-primary hover-zoom">
            <h2 class="text-strong text-white text-uppercase text-size-50 text-right text-line-height-1 margin-bottom-0"><br>venta</h2>
            <h3 class="text-strong text-right text-size-20 margin-bottom-20">Cómo funciona</h3>
          </div>
          
          <!-- Carousel -->
          <div class="s-12 m-6 l-9 l-row-2 margin-bottom carousel-default owl-carousel carousel-main carousel-hide-arrows carousel-nav-white background-blue">
            <div class="item padding-2x">
              <p class="text-strong text-size-80">01</p>
              <h3 class="text-strong text-size-20 margin-bottom-20">Si lo necesitas; agendamos una visita</h3>
              <p class="text-size-20">Nuestro equipo acudirá para recomendarte la mejor solución.</p>
            </div>
            <div class="item padding-2x">
              <p class="text-strong text-size-80">02</p>
              <h3 class="text-strong text-size-20 margin-bottom-20">Recibe la cotización</h3>
              <p class="text-size-20">Una vez que se haya hecho la visita, nuestro personal de oficina te hará llegar la propuesta económica.</p>
            </div>
            <div class="item padding-2x">
              <p class="text-strong text-size-80">03</p>
              <h3 class="text-strong text-size-20 margin-bottom-20">Recibe tu compra</h3>
              <p class="text-size-20">Una vez confirmados los pagos correspondientes, se programa la fecha de entrega.</p>
            </div>
          </div>

          <div class="s-12 m-6 l-3 l-row-2 padding-2x margin-bottom background-primary hover-zoom">
            <h2 class="text-strong text-white text-uppercase text-size-50 text-right text-line-height-1 margin-bottom-0"><br>instalación</h2>
            <h3 class="text-strong text-right text-size-20 margin-bottom-20">Cómo funciona</h3>
          </div>
          <!-- Carousel -->
          <div class="s-12 m-6 l-9 l-row-2 margin-bottom carousel-default owl-carousel carousel-main carousel-hide-arrows carousel-nav-white background-blue">
          	<div class="item padding-2x">
              <p class="text-strong text-size-80">01</p>
              <h3 class="text-strong text-size-20 margin-bottom-20">Para darte el mejor servicio; agendamos una visita.</h3>
              <p class="text-size-20">En la visita nuestros técnicos tomarán medidas y revisarán las condiciones del lugar de la instalación. Si es necesario, te harán preguntas importantes relativas al proyecto.</p>
            </div>
          	<div class="item padding-2x">
              <p class="text-strong text-size-80">02</p>
              <h3 class="text-strong text-size-20 margin-bottom-20">Recibe la cotización</h3>
              <p class="text-size-20">El personal de oficina, con la información proporcionada por el equipo técnico, elaborará una propuesta y te la enviaremos por el medio que nos indiques.</p>
            </div>
          	<div class="item padding-2x">
              <p class="text-strong text-size-80">03</p>
              <h3 class="text-strong text-size-20 margin-bottom-20">Confirmación</h3>
              <p class="text-size-20">Esperamos a que nos confirmes el presupuesto y fijamos las condiciones de pago.</p>
            </div>
            <div class="item padding-2x">
              <p class="text-strong text-size-80">04</p>
              <h3 class="text-strong text-size-20 margin-bottom-20">Instalación</h3>
              <p class="text-size-20">Cuando el presupuesto y condiciones de pago son aprobados, agendamos la instalación.</p>
            </div>
          </div>
                     

        </section>


</main>
        
@endsection