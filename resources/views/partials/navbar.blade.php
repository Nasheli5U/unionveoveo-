<!-- resources/views/partials/navbar.blade.php -->
<body>
    <header style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 20px 0; display: flex; justify-content: space-between; align-items: center;">
        <!-- Logo de la tienda -->
        <div class="logo" style="margin-left: 20px; margin-right: 20px;">
            <img src="{{ asset('imagenes/logo.jpg') }}" alt="Logo" style="max-width: 150px; height: auto;" />
        </div>

        <!-- Barra de búsqueda -->
        <div class="search-bar" style="flex: 0 1 250px; display: flex; justify-content: center; align-items: center; border: 1px solid #ccc; border-radius: 5px; padding: 5px;">
            <form action="#" method="GET" style="width: 100%; display: flex; align-items: center;">
                <input type="text" placeholder="Buscar en toda la tienda..." name="search" style="width: 100%; padding: 5px; border: none; border-radius: 5px; outline: none;" />
                <button type="submit" style="background-color: #007bff; border: none; padding: 5px 10px; color: white; border-radius: 5px; cursor: pointer;">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>

        <!-- Opciones de usuario -->
        <div class="user-options" style="display: flex; align-items: center; gap: 20px;">
            @auth
                <a href="{{ route('profile.edit') }}">
                    <i class="fas fa-user"></i> Mi Cuenta
                </a>
                <a href="{{ route('profile.edit') }}">
                    <i class="fas fa-cogs"></i> Editar Perfil
                </a>
                <!-- Opción de cerrar sesión -->
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-link nav-link" style="background: none; border: none; color: inherit; cursor: pointer;">
                        <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                </a>
                <a href="{{ route('register') }}">
                    <i class="fas fa-user-plus"></i> Registrarse
                </a>
            @endauth

            <a class="nav-link" href="{{ route('carrito.index') }}" style="margin-left: 20px; margin-right: 20px;">
                <i class="fas fa-shopping-cart" style="margin-right: 5px;"></i> Carrito
                <span class="badge">
                    @if(Auth::check())
                        {{ \App\Models\CarritoItem::where('usuario_id', Auth::id())->sum('cantidad') }}
                    @else
                        0
                    @endif
                </span>
            </a>
        </div>
    </header>

    <!-- Menú de navegación -->
    <nav class="main-navigation" style="background-color: #f8f9fa; padding: 10px 0;">
        <ul style="display: flex; justify-content: center; gap: 20px; margin: 0; padding: 0; list-style: none;">
            <li><a href="{{ route('home.index') }}"><i class="fas fa-search"></i> EXPLORAR</a></li>
            <li><a href="/nosotros"><i class="fas fa-info-circle"></i> NOSOTROS</a></li>
            <li><a href="{{ route('catalogo.index') }}"><i class="fas fa-cogs"></i> CATALOGO</a></li>
            <li><a href="#"><i class="fas fa-gift"></i> OFERTAS Y PROMOCIONES</a></li>
            <li><a href="/testimonios"><i class="fas fa-comments"></i> TESTIMONIOS</a></li>
            <li><a href="{{ route('reservar.cita') }}"><i class="fas fa-calendar-check"></i> RESERVA TU CITA</a></li>
        </ul>
    </nav>
</body>