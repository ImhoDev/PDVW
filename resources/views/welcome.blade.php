
<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Document Title -->
    <title>Ventas Web - control de inventario, POS & HRM</title>
    <meta name="description" content="Ventas Web simplifica su inventario, ventas, compras, gastos, contabilidad, administración de empleados y mucho más. Haga ventas, obtenga ganancias, use SalePro" />
    <meta name="author" content="Lake-Coders" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://salepropos.com/demo/public/vendor/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://salepropos.com/css/style.css"/>
</head>
    {{-- Añadiendo fondo desde el body --}}
<body background="https://media-exp1.licdn.com/dms/image/C561BAQHmlmXvfOL6CQ/company-background_10000/0/1603841461669?e=1643673600&v=beta&t=NuPcHViBUd80XzCEEAKLuy0IBtZyg56QtPULehhywNg">
    {{-- La sección del body --}}

    {{-- Sección del login, registrarse, y panel y salir se recomienda comentar en producción --}}
     <section class="mt- mb-2 text-right">
        <div class="container-fluid justify-left min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-1 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                            <x-jet-dropdown-link type="button" href="{{ url('admin') }}" class="btn btn-outline-secondary btn-sm btn-bd-light mb-2 mb-md-0 underline">Panel</x-jet-dropdown-link>
                                @csrf
                                <x-jet-dropdown-link type="button" href="{{ route('logout') }}" class="btn btn-outline-secondary btn-sm btn-bd-light mb-2 mb-md-0 underline"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Salir') }}
                                </x-jet-dropdown-link>
                            </form>
                        @else
                            <a type="button" href="{{ route('login') }}" class="btn btn-outline-secondary btn-sm btn-bd-light mb-2 mb-md-0 underline">Iniciar sesion</a>
                            @if (Route::has('register'))
                                <a type="button" href="{{ route('register') }}" class="btn btn-outline-secondary btn-sm btn-bd-light mb-2 mb-md-0 underline">Registrarse</a>
                            @endif
                        @endauth
                    </div>
                @endif
        </div>
    </section>
     {{-- Sección del logo --}}
    <section class="mt-5 mb-2 text-center">
        <div class="login-logo">
            <a href="/">
                <img src="http://ventasweb.test/img/logo.png" height="50">
            </a>
                <spam>Ventas <b>Web</b></spam> 
        </div>
    </section>
    {{-- Sección de los botones --}}
    <section class="mt-3 mb-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="mt-5 mt-3 thin-text" style="line-height: 1.5;font-size: 28px;">Ventas Web, simplifica su inventario, ventas, compras, gastos, contabilidad, administración de empleados y mucho más. Haga ventas, obtenga ganancias, use ventas web</h1>
                    <a target="_blank" class="btn btn-primary btn-lg mt-3" href="admin">Demostración</a>
                    <a target="_blank" class="btn btn-default btn-lg mt-3 ml-1" href="https://github.com/ImhoDev/ventasweb.git">Repositorio</a>
                    <a target="_blank" class="btn btn-warning btn-lg mt-3" href="mailto:support@lake-coders.com">Soporte</a>
                    <a target="_blank" class="btn btn-primary btn-lg mt-3" href="/public/read_me/">Documentación</a>
                    <a target="_blank" class="btn btn-info btn-lg mt-3 ml-1"href="/buy">
                       <svg width="15px" height="15px" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    Comprar</a>
                    <a target="_blank" class="btn btn-danger btn-lg mt-3" href="/patreon">
                         <svg width="15px" height="15px" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-1 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    Patrocinar</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Sección del footer --}}
    <section class="mt-5 mb-2 text-center">
        <div class="container">
            <spam>Ventas<b>Web</b> beta-v0.5 está desarrollado con </spam> 
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </section>    
</body>
</html>