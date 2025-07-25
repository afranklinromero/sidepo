<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
   

    <title>{{ config('app.name', 'SIDEPO') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Styles -->
    <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
         <!-- Scripts -->
  
</head>
<body class="antialiased">
<style>
        a.card {
            text-decoration: none; /* Quitar el subrayado */
        }
        .content {
    min-height: calc(100vh - 100px); /* Ajusta "100px" según la altura de tu footer */
    padding-bottom: 100px; /* Ajusta el valor según la altura de tu footer */
}

footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px; /* Ajusta el valor según la altura de tu footer */
    background-color: #f5f5f5; /* Cambia el color de fondo según tus preferencias */
    padding: 40px;
    display: flex;
    justify-content: space-between; /* Coloca los elementos a cada lado */
    align-items: center; /* Centra verticalmente los elementos */
}
      
        </style>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'DIPROVE') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                           
                           
                        @else
                        @if (Route::has('register'))
                            
                            <li class="nav-item">
                            
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
   
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" 
                                style="background-color: black;
                                color: white;">
                                {{ __('Admin') }}</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <p>Hola {{ Auth::user()->name }} estas conectado como Administrador del Sistema</p>
                            </div>
                        </div>
                        <br>
                    </div>

                
                    <div class="antialiased">
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col">    
                                
                                     <a href="{{ url('/casos') }}" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                        <div style="text-align: -webkit-center;">
                                            <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                                <i class="fa fa-file fa-2x"></i>
                                            </div>
                                                                        
                                            <h2 class="mt-6 text-xl font-semibold">DENUNCIAS</h2>

                                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                                INGRESAR.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">    
                                
                                <a href="{{ url('/reportes') }}" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                   <div style="text-align: -webkit-center;">
                                       <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                           <i class="fa fa-chart-pie fa-2x"></i>
                                       </div>
                                                                   
                                       <h2 class="mt-6 text-xl font-semibold">REPORTES</h2>

                                       <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                           INGRESAR.
                                       </p>
                                   </div>
                               </a>
                           </div>
                                <div class="col">    
                                
                                    <a href="#" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                        <div style="text-align: -webkit-center;">
                                            <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                                <i class="fa fa-thermometer-half fa-2x"></i>
                                            </div>
                                                                        
                                            <h2 class="mt-6 text-xl font-semibold">LABORATORIO</h2>

                                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                                INGRESAR.
                                            </p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col">    
                                
                                    <a href="#" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                        <div style="text-align: -webkit-center;">
                                            <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                                <i class="fa fa-folder fa-2x"></i>
                                            </div>
                                                                        
                                            <h2 class="mt-6 text-xl font-semibold">ARCHIVO</h2>

                                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                                INGRESAR.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            <div class="col">    
                                
                                <a href="#" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                    <div style="text-align: -webkit-center;">
                                        <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                            <i class="fa fa-compass fa-2x"></i>
                                        </div>
                                                                    
                                        <h2 class="mt-6 text-xl font-semibold">DESMARCADO</h2>

                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            INGRESAR.
                                        </p>
                                    </div>
                                </a>
                            </div>         
                            <div class="col">    
                                
                                <a href="#" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                    <div style="text-align: -webkit-center;">
                                        <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                            <i class="fa fa-thumbtack fa-2x"></i>
                                        </div>
                                                                    
                                        <h2 class="mt-6 text-xl font-semibold">MARCADO</h2>

                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            INGRESAR.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">    
                                
                                <a href="#" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                    <div style="text-align: -webkit-center;">
                                        <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                            <i class="fa fa-clipboard fa-2x"></i>
                                        </div>
                                                                    
                                        <h2 class="mt-6 text-xl font-semibold">BOLETINES</h2>

                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            INGRESAR.
                                        </p>
                                    </div>
                                </a>
                            </div>    
                            <div class="col">    
                                
                                <a href="#" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                    <div style="text-align: -webkit-center;">
                                        <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                            <i class="fa fa-book fa-2x"></i>
                                        </div>
                                                                    
                                        <h2 class="mt-6 text-xl font-semibold">LIBRO DE NOVEDADES</h2>

                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            INGRESAR.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">    
                                
                                <a href="#" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                    <div style="text-align: -webkit-center;">
                                        <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                            <i class="fa fa-tag fa-2x"></i>
                                        </div>
                                                                    
                                        <h2 class="mt-6 text-xl font-semibold">SECRETARIA</h2>

                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            INGRESAR.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">    
                                
                                <a href="departamentos" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                    <div style="text-align: -webkit-center;">
                                        <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                            <i class="fa fa-globe fa-2x"></i>
                                        </div>
                                                                    
                                        <h2 class="mt-6 text-xl font-semibold">DEPARTAMENTO</h2>

                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            INGRESAR.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">    
                                
                                <a href="municipios" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                    <div style="text-align: -webkit-center;">
                                        <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                            <i class="fa fa-city fa-2x"></i>
                                        </div>
                                                                    
                                        <h2 class="mt-6 text-xl font-semibold">MUNICIPIO</h2>

                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            INGRESAR.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">    
                                
                                <a href="model-has-roles" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                    <div style="text-align: -webkit-center;">
                                        <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                            <i class="fa fa-address-card fa-2x"></i>
                                        </div>
                                                                    
                                        <h2 class="mt-6 text-xl font-semibold">ROLES</h2>

                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            INGRESAR.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">    
                                
                                <a href="users" class="card scale-100 p-6   shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
                                    <div style="text-align: -webkit-center;">
                                        <div class="mt-3 rounded-circle btn btn-success d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; ">
                                            <i class="fa fa-address-book fa-2x"></i>
                                        </div>
                                                                    
                                        <h2 class="mt-6 text-xl font-semibold">USUARIOS</h2>

                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            INGRESAR.
                                        </p>
                                    </div>
                                </a>
                            </div>

                                            
                        </div>
                                    

                                  
                                
                     </div>
                        

                   
                </div>

            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
</body>
</html>


