@extends('layouts.app')

@section('content')

<!-- MAIN -->
<main role="main">
    <!-- TOP SECTION -->
    <header class="grid">
        <div class="s-12 padding-2x">
        <h1 class="text-strong text-blue text-center center text-size-60 text-uppercase margin-bottom-20">Contacto</h1>
        </div>
    </header>

    
    <!-- SECTION 1 -->
    <section class="grid">        
        <!-- Contact Information-->
        <div class="m-12 l-6 xl-5 padding-2x background-none center">
        <div class="grid margin">
            <div class="s-12 m-6 l-12 xl-6 margin-bottom-60">
            <div class="float-left">
                <i class="icon-sli-location-pin text-primary text-size-40 text-line-height-1"></i>
            </div>
            <div class="margin-left-60">
                <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase">Dirección</h2> 
                <ul>
                    <li>Estado de México, México</li>
                    <li>Monterrey, México</li>
                </ul>       
                             
            </div>
            </div>
            <div class="s-12 m-6 l-12 xl-6 margin-bottom-60">
            <div class="float-left">
                <i class="icon-sli-envelope text-primary text-size-40 text-line-height-1"></i>
            </div>
            <div class="margin-left-60">
                <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase">E-mail</h2>                
                <p><a class="text-primary-hover" href="mailto:contact@sampledomain.com">contacto@portasquadra.com</a></p>              
            </div>
            </div>
            
            <div class="s-12 m-6 l-12 xl-6 margin-bottom-60">
            <div class="float-left">
                <i class="icon-sli-earphones-alt text-primary text-size-40 text-line-height-1"></i>
            </div>
            <div class="margin-left-60">
                <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase">Teléfono</h2>                
                <p>+ 52 55 9191 2790</p>          
            </div>
            </div>
            
            <div class="s-12 m-6 l-12 xl-6">
            <div class="float-left">
                <i class="icon-sli-paper-plane text-primary text-size-40 text-line-height-1"></i>
            </div>
            <div class="margin-left-60">
                <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase">Chat</h2>
                <p>+ 52 55 9191 2790</p>                 
            </div>
            </div>
        </div>
        </div>
        
        <!-- Image-->
        <!-- <img class="s-12 l-2 hide-s hide-m hide-l" src="img/img-14.jpg">
        <div class="m-12 l-6 xl-5 padding-2x background-dark">
        <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase">Functional Ajax Contact Form</h2> -->
        <!-- If you want to make a field required, add the "required" class to the input. -->
        <!-- The form e-mail address you can change on file resp-email.php on line 4. -->
        <!-- <form name="contactForm" class="customform ajax-form" method="post" enctype="multipart/form-data">
            <div class="grid margin">
            <div class="s-12 m-12 l-6">
                <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" />
                <p class="email-error form-error">Please enter your e-mail.</p>
            </div>
            <div class="s-12 m-12 l-6">
                <input name="name" class="name" placeholder="Your name" title="Your name" type="text" />
                <p class="name-error form-error">Please enter your name.</p>
            </div>
            </div>
                    
            <div class="s-12">
            <input name="subject" class="required subject" placeholder="Subject" title="Subject" type="text" />
            <p class="subject-error form-error">Please enter your subject.</p>
            </div>
            <div class="s-12">
            <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
            <p class="message-error form-error">Please enter your message.</p>
            </div>
            <input name="full-name-field" type="text" id="full-name-field" class="full-name-field" />
            <div class="s-12"><a class="captcha-button text-white background-dark margin-bottom"><span class="not-a-robot-icon"><i class="icon-check text-green"></i></span> <span class="not-a-robot-text">I'm not a robot</span></a></div> 
            <div class="s-12 button-parent"></div>
            <div class="grid">
            <p class="s-12 mail-success form-success">Your message has been sent successfully.</p>
            <p class="s-12 mail-fail form-error">Sorry, error occured this time sending your message.</p>
            </div>  
        </form> -->
        </div>
    </section>

</main>
      
        
@endsection