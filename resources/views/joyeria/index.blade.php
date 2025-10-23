@extends('layouts.app')

@section('template_title')
    Joyería - Página Principal
@endsection

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

<div class="container-fluid p-0">
    <!-- Hero Section -->
<section class="py-5 text-white" style="background-color: var(--color-dark);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 fw-bold">Bienvenido a Eterna Joyería</h1>
                <p class="lead fs-4">Descubre la elegancia y el brillo de nuestras piezas únicas.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/logo.png') }}" 
                     alt="Logo Joyería" 
                     class="img-fluid rounded shadow"
                     style="max-width: 220px;">
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4 display-5 fw-bold">Piezas Destacadas</h2>
        <div class="row g-4">

            <!-- Tarjeta 1 -->
            <div class="col-md-4 d-flex">
                <div class="card shadow text-white flex-fill h-100" style="background-color: var(--color-rose);">
                    <img src="https://sublimetentacion.com/wp-content/uploads/2025/01/IMG_3555-scaled.jpg"
                         class="card-img-top fixed-img" alt="Anillo de Oro">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Collar Doble Corazones</h5>
                        <p class="card-text">✨ 1 año de garantía | 🔗 Acero inoxidable de alta calidad | 📏 38 cm | ⚖️ 5 g</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col-md-4 d-flex">
                <div class="card shadow flex-fill h-100" style="background-color: var(--color-beige); color: var(--color-dark);">
                    <img src="https://sublimetentacion.com/wp-content/uploads/2025/08/IMG_9119-scaled.jpeg"
                         class="card-img-top fixed-img" alt="Collar de Plata">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Aretes Liria</h5>
                        <p class="card-text">✨ 1 año de garantía | 💎 Cover gold con micro circones | 📏 2 cm | ⚖️ 2 g (Par)</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col-md-4 d-flex">
                <div class="card shadow text-white flex-fill h-100" style="background-color: var(--color-terra);">
                    <img src="https://sublimetentacion.com/wp-content/uploads/2025/01/DSC07152-scaled-1.jpg"
                         class="card-img-top fixed-img" alt="Pulsera de Diamantes">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Pulsera Corazón Hojas Plateada</h5>
                        <p class="card-text">✨ 1 año de garantía | 🔗 Acero inoxidable | 📏 20 cm | ⚖️ 2 g</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- About Section -->
<section id="sobre-nosotros" class="py-5" style="background-color: var(--color-beige); color: var(--color-dark);">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2>Sobre Nosotros</h2>
                <p>Somos una joyería familiar con más de 50 años de tradición en el arte de la orfebrería. Nos apasiona crear piezas únicas que transmiten belleza, elegancia y un estilo atemporal.</p>
                <p>Nuestro mayor compromiso es con la calidad, la artesanía y la satisfacción de cada cliente. Cada una de nuestras joyas está elaborada con los mejores materiales y cuidada al detalle mediante técnicas tradicionales que honran nuestra historia.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://sublimetentacion.com/wp-content/uploads/2025/01/SliderPC4-scaled.jpg"
                     alt="Taller de Joyería" 
                     class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

    <!-- Gallery Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4 display-5 fw-bold">Galería</h2>
            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <img src="https://sublimetentacion.com/wp-content/uploads/2025/01/PRIMERLANZAMIENTOAGOSTO-21-600x600.jpg" alt="Joya 1"
                         class="img-fluid rounded shadow">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://sublimetentacion.com/wp-content/uploads/2025/01/SUBLIME-24DEMAYOSEGUNDOLANZAMIENTO-079-600x600.jpg" alt="Joya 2"
                         class="img-fluid rounded shadow">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://sublimetentacion.com/wp-content/uploads/2025/06/IMG_6785-600x600.jpeg" alt="Joya 3"
                         class="img-fluid rounded shadow">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://sublimetentacion.com/wp-content/uploads/2025/08/IMG_9196-600x600.jpeg" alt="Joya 4"
                         class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
