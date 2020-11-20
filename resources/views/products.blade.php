@extends('layouts.app')

@section('content')

<!-- MAIN -->
<main role="main">
    <!-- HEADER -->
    <header class="grid">
        <div class="s-12 padding-2x">
            <h1 class="text-strong text-dark text-center center text-size-60 text-uppercase margin-bottom-20">Catálogo de Productos</h1>
        </div>
    </header>
    <!-- 01 HEADER -->
    <section class="grid">
        <div id="header01" class="m-12 l-6 padding-2x background-white">
            <h2 class="text-size-50 text-line-height-1"><label class="text-strong text-size-80 text-red">01</label> <b>Cabezales</b></h2>
            <h3>Automatización para Puertas Correderas</h3>
            <p style="text-align:justify;">Los cabezales FAAC SERIE A1000 / A1400 AIR / A1400 AIR RD están diseñados para automatizar accesos de acuerdo
                con la norma europea EN 16005. Todas las líneas cumplen los criterios de seguridad más restrictivos
                establecidos por las normativas internacionales.</p>
            <p style="text-align:justify;">Las dimensiones de los automatismos se adaptan a cualquier ambiente arquitectónico,
                incluso en espacios de tamaño limitado.
                Por su versatilidad de uso, los sistemas FAAC son ideales para puertas correderas con diferentes tipos de hojas y pesos.</p>
            <a class="button-more text-white background-aqua" href="#header02">ver catálogo</a>
        </div>
        <img class="m-12 l-6" src="/img/sliding.jpg">
    </section>
    <!-- 02 BOLLARD -->
    <section class="grid">
        <div id="bollard01" class="m-12 l-6 padding-2x background-white">
            <p class="text-strong text-size-80 text-red">02</p>
            <h2 class="text-size-50 text-line-height-1"><b>Bolardos</b></h2>
            <h3>Soluciones infinitas, prestaciones superiores</h3>
            <p style="text-align:justify;">Con tecnología Hidráulica FAAC, la Línea J de Bolardos es capaz de satisfacer cualquier tipo de exigencia.</p>
            <p>Desde aplicaciones residenciales, hasta instalaciones de alta seguridad. Los productos FAAC tienen un enfoque "Design for Assembly" (Diseño para el ensamble DFA) que facilita al máximo la instalación y mantenimiento.</p>
                <a class="button-more text-white background-red" href="#bollard02">ver catálogo</a>
            </div>
        <img class="m-12 l-6" src="/img/bollard_342859078.jpg">
    </section>
    <!-- 03 PISTON -->
    <!-- <section class="grid">
    <div id="piston01" class="m-12 l-6 padding-2x background-white">
        <p class="text-strong text-size-80 text-red">03</p>
        <h2 class="text-size-50 text-line-height-1"><b>Pistones</b></h2>
        <h3>Kits de Instalación Externa</h3>
        <p style="text-align:justify;">Los diferentes tipos de puertas se pueden "transformar" en cancelas automáticas FAAC gracias a una amplia gama de sistemas de automatización. </p>
        <a class="button-more text-white background-orange" href="#piston02">saber más</a>
        </div>
        <img class="m-12 l-6" src="/img/piston.jpg">
    </section> -->
    <!-- 04 UNDERGROUND -->
    <!-- <section class="grid">
        <img class="m-12 l-6" src="/img/magnetic.jpg">
        <div id="underground01" class="m-12 l-6 padding-2x background-white">
            <p class="text-strong text-size-80 text-red">04</p>
            <h2 class="text-size-50 text-line-height-1"><b>Subterráneos</b></h2>
            <h3>Discreción y funcionalidad</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <p>Libero malesuada varius leo mollis laoreet error occaecat unde nostra harum. A morbi hymenaeos rhoncus ridiculus temporibus consectetur ducimus exercitation. Integer arcu adipiscing augue iusto nam duis facilisi senectus iaculis proin repudiandae
                nemo cupidatat. Ipsum donec enim leo ultricies pulvinar aute semper dolores habitant impedit harum. </p>
                <a class="button-more text-white background-primary" href="#underground02">saber más</a>
            </div>
    </section>  -->
    <!-- 05 SLIDING -->
    <!-- <section class="grid">
        <img class="m-12 l-6" src="/img/magnetic.jpg">
        <div id="sliding01" class="m-12 l-6 padding-2x background-white">
            <p class="text-strong text-size-80 text-red">05</p>
            <h2 class="text-size-50 text-line-height-1"><b>Corredizos</b></h2>
            <h3>La fuerza necesaria para cualquier tipo de puerta</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <p>Libero malesuada varius leo mollis laoreet error occaecat unde nostra harum. A morbi hymenaeos rhoncus ridiculus temporibus consectetur ducimus exercitation. Integer arcu adipiscing augue iusto nam duis facilisi senectus iaculis proin repudiandae
                nemo cupidatat. Ipsum donec enim leo ultricies pulvinar aute semper dolores habitant impedit harum. </p>
            <a class="button-more text-white background-green" href="#sliding02">saber más</a>
            </div>
    </section>  -->
    <!-- 06 MAGNETIC -->
    <!-- <section class="grid">
        <img class="m-12 l-6" src="/img/magnetic.jpg">
        <div id="magnetic01" class="m-12 l-6 padding-2x background-white">
            <p class="text-strong text-size-80 text-red">06</p>
            <h2 class="text-size-50 text-line-height-1"><b>Magnetic</b></h2>
            <h3>Estacionamientos, peajes, accesos, tráfico</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <p>Libero malesuada varius leo mollis laoreet error occaecat unde nostra harum. A morbi hymenaeos rhoncus ridiculus temporibus consectetur ducimus exercitation. Integer arcu adipiscing augue iusto nam duis facilisi senectus iaculis proin repudiandae
                nemo cupidatat. Ipsum donec enim leo ultricies pulvinar aute semper dolores habitant impedit harum. </p>
            <a class="button-more text-white background-pink" href="#magnetic02">saber más</a>
            </div>
    </section>     -->

    <!-- 01 HEADER 02-->
    <section id="header02" class="grid margin">
        <h1 class="s-12 text-dark text-thin text-size-60 text-white text-uppercase margin-top-bottom-20 center text-left">Cabezales <b>FAAC</b></h1> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right" style="background-image:url(img/SF140_auditorium_002.jpg)">
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">A1000</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">A1000</h3>
            <p>Ideales para puertas correderas con hojas simples de 110kg o dobles de 70 + 70kg.</p>
            <a class="button-more text-white background-aqua" href="/datasheets/headers/A1000.pdf" target="_blank">ver ficha</a>
        </div>          
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">A1400 AIR</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">A1400 AIR</h3>
            <p>Gracias a su innovador dispositivo "Energy Saving" identifica la dirección de la trayectoria y optimiza los tiempos de apertura y cierre, evitando dispersiones de aire.</p>
            <a class="button-more text-white background-aqua" href="/datasheets/headers/A1400AIR.pdf" target="_blank">ver ficha</a>
        </div>          
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">A1400 AIR RD</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">A1400 AIR RD</h3>
            <p>Con todas las ventajas del sistema AIR, además, son ideales para vías de evacuación.</p>
            <a class="button-more text-white background-aqua" href="/datasheets/headers/A1400AIRRD.pdf" target="_blank">ver ficha</a>
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Varios</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Accesorios</h3>
            <p>Accesorios comunes para puertas correderas.</p>
            <!-- <a class="button-more text-white background-yellow" href="sample-post.html">more</a>
            <a class="button-more text-white background-orange" href="sample-post.html">more</a>
            <a class="button-more text-white background-pink" href="sample-post.html">more</a>
            <a class="button-more text-white background-white" href="sample-post.html">more</a>
            <a class="button-more text-white background-red" href="sample-post.html">more</a>
            <a class="button-more text-white background-aqua" href="sample-post.html">more</a>
            <a class="button-more text-white background-green" href="sample-post.html">more</a> -->
            <a class="button-more text-white background-aqua" href="/datasheets/headers/accesories.pdf" target="_blank">ver ficha</a>
            
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Perfiles</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Perfiles</h3>
            <p>Entradas integrales: la solución ideal para cualquier tipo de necesidad.</p>
            <a class="button-more text-white background-aqua" href="/datasheets/headers/sections.pdf" target="_blank">ver ficha</a>
        </div> 
    </section>

    <!-- 02 BOLARDOS 02 -->
    <section id="bollard02" class="grid margin">
    <h1 class="s-12 text-dark text-thin text-size-60 text-white text-uppercase margin-top-bottom-20 center text-left">Bolardos <b>FAAC</b></h1> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right" style="background-image:url(img/j200sa.jpg)">
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">J200 HA</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Bolardo de tránsito automático escamoteable</h3>
            <p>Ideal para regular el tráfico en zonas residenciales.</p>
            <a class="button-more text-white background-red" href="/datasheets/bollards/J200HA.pdf" target="_blank">ver ficha</a>
        </div>          
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">J200 SA</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Bolardo de tránsito semi-automático escamoteable</h3>
            <p>No requiere alimentación eléctrica ni cableado. Bloqueo en posición baja, garantizado contra posibles subidas accidentales.</p>
            <a class="button-more text-white background-red" href="/datasheets/bollards/J200SA.pdf" target="_blank">ver ficha</a>
        </div>
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">J200 F</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Bolardo de tránsito fijo</h3>
            <p>No requiere alimentación eléctrica ni cableado. Respeta la estética del lugar en instalaciones mixtas con otros bolardos escamoteables.</p>
            <a class="button-more text-white background-red" href="/datasheets/bollards/J200F.pdf" target="_blank">ver ficha</a>
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">J275 HA V2</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Bolardo de tránsito automático escamoteable.</h3>
            <p>Garantizado para USO FRECUENTE. Mantenimiento simplificado (una sola persona). Unidad de control integrada. Función "Gentle Stop" para garantizar un posicionamiento suave en el fin de carrera bajo.</p>
            <a class="button-more text-white background-red" href="/datasheets/bollards/J275HAV2.pdf" target="_blank">ver ficha</a>
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">J275 SA</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Bolardo de tránsito semi-automático escamoteable.</h3>
            <p>No requiere alimentación eléctrica ni cableado. Bloqueo en posición baja, garantizado contra desenganche accidental.</p>
            <a class="button-more text-white background-red" href="/datasheets/bollards/J275SA.pdf" target="_blank">ver ficha</a>
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">J275 F</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Bolardo de tránsito Fijo.</h3>
            <p>No requiere alimentación eléctrica ni cableado. Fácil instalación. Posibilidad de retirar el bolardo temporalmente para abrir la zona peatonal al tráfico.</p>
            <a class="button-more text-white background-red" href="/datasheets/bollards/J275F.pdf" target="_blank">ver ficha</a>
        </div>    
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">J355 F M30</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Bolardo fijo para seguridad perimetral.</h3>
            <p>Ideal para seguridad perimetral. Probado ante ASTM F 2656-07 M30 estándar para instalaciones dobles. Coherencia estética con modelos retráctiles (HA). Capaz de detener un camión de 6,800kg a 50km/hr.</p>
            <a class="button-more text-white background-red" href="/datasheets/bollards/J355FM30.pdf" target="_blank">ver ficha</a>
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">J355 F M50</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Bolardo fijo para seguridad perimetral.</h3>
            <p>Ideal para seguridad perimetral. Probado ante ASTM F 2656-07 M30 estándar para instalaciones de triple unidad. Bloqueo garantizado en posición elevada en caso de interrupción del suministro eléctrico.</p>
            <a class="button-more text-white background-red" href="/datasheets/bollards/J355FM50.pdf" target="_blank">ver ficha</a>
        </div>
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">J355 HA M30</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Bolardo certificado para uso en ámbito de seguridad perimetral.</h3>
            <p>CERTIFICADO según ASTM F 2656-07. Clase de resistencia M30 por unidad. Capaz de detener, con un solo metro de penetración, un camión de 6,800kg a 50km/hr. Bloqueo garantizado en posición elevada en caso de interrupción del suministro eléctrico. Unidad de control oleodinámica integrada en el bolardo.</p>
            <a class="button-more text-white background-red" href="/datasheets/bollards/J355HAM30.pdf" target="_blank">ver ficha</a>
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">J355 HA M50</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Bolardo certificado para uso en ámbito de seguridad perimetral.</h3>
            <p>Testeado según PAS 68:2013e IWA 14-1:2013. Clase de resistencia N3 7.500-80 por unidad. Capaz de detener a un camión de 7,500kg circulando a 80km/hr. Bloqueo garantizado en posición elevada en caso de interrupción del suministro eléctrico. Unidad de control oleodinámica integrada en el bolardo.</p>
            <a class="button-more text-white background-red" href="/datasheets/bollards/J355HAM50.pdf" target="_blank">ver ficha</a>
        </div> 
                   
    </section>

    <!-- 03 PISTONES 023 -->
    <!-- <section id="piston02" class="grid margin">
    <h1 class="s-12 text-dark text-thin text-size-60 text-white text-uppercase margin-top-bottom-20 center text-left">Pistones <b>FAAC</b></h1> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right" style="background-image:url(img/bollard_342859078-copy.jpg)">
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">S418</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Diam nonummy nibh euismod tincidunt</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-orange" href="sample-post.html">saber más</a>
        </div>                   
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">S450H</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-orange" href="sample-post.html">saber más</a>
        </div>
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">412</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-orange" href="sample-post.html">saber más</a>
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">422</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-orange" href="sample-post.html">saber más</a>
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">400</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-orange" href="sample-post.html">saber más</a>
        </div>             
    </section> -->

    <!-- 04 SUBTERRÁNEOS 02 -->
    <!-- <section id="underground02" class="grid margin">
    <h1 class="s-12 text-dark text-thin text-size-60 text-white text-uppercase margin-top-bottom-20 center text-left">Subterráneos <b>FAAC</b></h1> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right" style="background-image:url(img/bollard_342859078-copy.jpg)">
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">770</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Diam nonummy nibh euismod tincidunt</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-white" href="sample-post.html">saber más</a>
        </div>                     
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">S800</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-white" href="sample-post.html">saber más</a>
        </div>          
    </section> -->

    <!-- 05 CORREDIZOS 02 -->
    <!-- <section id="sliding02" class="grid margin">
    <h1 class="s-12 text-dark text-thin text-size-60 text-white text-uppercase margin-top-bottom-20 center text-left">Corredizos <b>FAAC</b></h1> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right" style="background-image:url(img/bollard_342859078-copy.jpg)">
        </div>                  
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">C720</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-green" href="sample-post.html">saber más</a>
        </div>
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">C721</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-green" href="sample-post.html">saber más</a>
        </div>
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">844 ER</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-green" href="sample-post.html">saber más</a>
        </div>              
    </section> -->

    <!-- 06 MAGNETIC 02 -->
    <!-- <section id="magnetic02" class="grid margin">
    <h1 class="s-12 text-dark text-thin text-size-60 text-white text-uppercase margin-top-bottom-20 center text-left">Magnetic <b>FAAC</b></h1> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right" style="background-image:url(img/bollard_342859078-copy.jpg)">
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Access</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Diam nonummy nibh euismod tincidunt</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-pink" href="sample-post.html">saber más</a>
        </div>          
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Access-L</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-pink" href="sample-post.html">saber más</a>
        </div>
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Access Pro</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-pink" href="sample-post.html">saber más</a>
        </div>  
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Access Pro-L</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-pink" href="sample-post.html">saber más</a>
        </div>  
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Access Pro-H</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-pink" href="sample-post.html">saber más</a>
        </div>  
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Access XL 2</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-pink" href="sample-post.html">saber más</a>
        </div>  
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Access XXL</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-pink" href="sample-post.html">saber más</a>
        </div> 
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Parking Pro</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-pink" href="sample-post.html">saber más</a>
        </div>  
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Toll</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-pink" href="sample-post.html">saber más</a>
        </div>   
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Traffic H1</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-pink" href="sample-post.html">saber más</a>
        </div>  
        <div class="s-12 m-6 l-3 padding-2x margin-bottom background-blue hover-zoom text-right">
            <p class="text-strong text-size-80">Barrier Booms</p>
            <h3 class="text-strong text-size-20 margin-bottom-20 text-uppercase">Adipiscing elit sed diam nonummy nibh</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
            <a class="button-more text-white background-pink" href="sample-post.html">saber más</a>
        </div>            
    </section> -->

</main>

        
@endsection