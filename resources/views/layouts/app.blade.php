<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css" />
    <title>@yield('titulo', 'index')</title>
    @livewireStyles
</head>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>

<body>
    <nav>
        <nav class="custon-navbar navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/inicio') }}">
                    @auth
                        {{ Auth::user()['name'] }}
                        
                    @endauth
                    @guest
                        Bienvenido
                    @endguest
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--  validando registro  -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="itenul navbar-nav">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('inicio') }}">inicio</a>
                            </li>
                            <!-- rutas administrativas silo para administradores -->
                          

                            @can('adminUsuarios.edit')
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        inscripciones
                                    </button>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item">
                                            <a class="dropdown-item" aria-current="page" href="{{ url('categoria') }}">
                                              crear y ver categoria
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="dropdown-item" aria-current="page" href="{{ url('aulas') }}">
                                               crear y ver aulas 
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="dropdown-item" aria-current="page" href="{{ url('cursos') }}">
                                                crear y ver cursos
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" aria-current="page" href="{{ url('plantilladeregistro') }}">
                                                registro de profesores y administrativos
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" aria-current="page" href="{{ url('inscribirEstudiante') }}">
                                                inscribir estudiante
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" aria-current="page" href="{{ url('pago') }}">
                                               pago
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Administracion
                                    </button>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item">
                                            <a class="dropdown-item" aria-current="page" href="{{ url('gestionarusuarios') }}">
                                                gestionar usuarios </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" aria-current="page" href="{{ url('asignarmateria') }}">
                                                asignar curso a un profesor
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page"
                                                href="{{ url('cursos') }}">cursos</a>
                                        </li>

                                        

                                        <li class="nav-item">
                                            <a class="dropdown-item" aria-current="page"
                                                href="{{ url('calendario') }}">
                                               calendario curos programados
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" aria-current="page"
                                                href="{{ url('calendario') }}">
                                               calendario
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" aria-current="page"
                                                href="{{ url('planilla') }}">
                                               asignar materia a un estudiante
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" aria-current="page"
                                                href="{{ url('vermateriaprofesor') }}">
                                                ver matrias asignadas a un profesor
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            @endcan
                            @can('can:Rango3')
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ url('cursos') }}">cursos</a>
                                </li>
                            @endcan

                            <li class="nav-item">
                                <form action="{{ Route('logout') }}" method="post">
                                    @csrf
                                    <a href="#" onclick="this.closest('form').submit()" class="nav-link active">
                                        cerrar secion
                                    </a>
                                </form>

                            </li>
                        @endauth

                        @guest

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('login') }}">login</a>
                            </li>

                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

    </nav>

    <section>

        @yield('contenido')
    </section>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>

</body>

</html>
