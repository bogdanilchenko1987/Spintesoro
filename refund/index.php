<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/assets/images/logo.jpg" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
    <meta name="description" content="Spintesoro ofrece comida premium y saludable para perros y gatos. Ingredientes naturales, sabor irresistible y nutrición equilibrada para el bienestar de tu mascota. ¡Descubre nuestros productos hoy!">

    <meta name="keywords" content="comida para perros, comida para gatos, alimentos naturales mascotas, nutrición mascotas, comida premium perros, comida saludable gatos, pienso natural perros, tienda mascotas España">

    <title>
      Spintesoro – Nutrición Premium para tu Compañero Fiel
    </title>

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {

            },
            fontFamily: {
         
            },
          },
        },
      };
    </script>
    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>
  </head>

  <body class="bg-white text-gray-800 font-sans">

    <header class="fixed top-0 left-0 w-full bg-white/80 backdrop-blur z-50 shadow-md">
      <div class="container mx-auto flex items-center justify-between px-4 py-3">
    
        <a href="/" class="flex items-center gap-2">
          <img src="/assets/images/logo.jpg" alt="Spintesoro Logo" class="w-14 h-14" />
          <span class="md:text-xl font-bold text-gray-800 text-sm">Spintesoro – Tu Mascota Merece lo Mejor</span>
        </a>
    
     
        <button id="menu-toggle" class="lg:hidden focus:outline-none">
          <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
    
  
        <nav
          class="hidden lg:flex gap-6 text-gray-700 text-sm font-medium transition-all duration-300"
          id="nav-links">
          <a href="/#about" class="hover:text-pink-600 transition">Sobre nosotras</a>
          <a href="/#products" class="hover:text-pink-600 transition">Productos</a>
          <a href="/#gallery" class="hover:text-pink-600 transition">Galería</a>
          <a href="/#faqs" class="hover:text-pink-600 transition">FAQs</a>
          <a href="/#contacts" class="hover:text-pink-600 transition">Contactos</a>
        </nav>
      </div>
    

      <div id="mobile-menu"
        class="lg:hidden hidden flex-col bg-white shadow-md px-6 py-4 space-y-4 text-gray-800 font-medium">
        <a href="/#about" class="block">Sobre nosotras</a>
        <a href="/#products" class="block">Productos</a>
        <a href="/#gallery" class="block">Galería</a>
        <a href="/#faqs" class="block">FAQs</a>
        <a href="/#contacts" class="block">Contactos</a>
      </div>
    </header>


    <main class="max-w-4xl mx-auto px-4 py-10 text-gray-800">
      <h1 class="text-3xl font-bold mb-6 mt-24">Política de Reembolso</h1>
      <p class="text-sm text-gray-500 mb-10">Última actualización: 16 de abril de 2025</p>
    
      <section class="space-y-6 text-base leading-relaxed">
        <p>
          En Spintesoro.com, nos esforzamos por ofrecer productos de la más alta calidad para tu mascota. Si bien esperamos que quedes completamente satisfecho con tu compra, entendemos que puede haber situaciones en las que necesites solicitar un reembolso.
        </p>
    
        <h2 class="text-xl font-semibold mt-8">1. Productos elegibles para reembolso</h2>
        <p>
          Aceptamos solicitudes de reembolso solo en los siguientes casos:
        </p>
        <ul class="list-disc pl-6 space-y-1">
          <li>Producto dañado o defectuoso al momento de la entrega.</li>
          <li>Recepción de un producto incorrecto.</li>
          <li>El pedido nunca llegó (conforme verificación logística).</li>
        </ul>
    
        <h2 class="text-xl font-semibold mt-8">2. Plazos para solicitar reembolso</h2>
        <p>
          Debes solicitar el reembolso dentro de los <strong>7 días</strong> posteriores a la recepción del producto. Las solicitudes fuera de este plazo no serán procesadas.
        </p>
    
        <h2 class="text-xl font-semibold mt-8">3. Procedimiento</h2>
        <ol class="list-decimal pl-6 space-y-1">
          <li>Envía un correo a <a href="mailto:support@spintesoro.com" class="text-blue-600 hover:underline">support@spintesoro.com</a> explicando el motivo del reembolso.</li>
          <li>Adjunta una foto del producto y del empaque original, si aplica.</li>
          <li>Incluye tu número de pedido y nombre completo.</li>
        </ol>
        <p>
          Nuestro equipo revisará tu solicitud y te responderá en un plazo de 3 a 5 días hábiles.
        </p>
    
        <h2 class="text-xl font-semibold mt-8">4. Excepciones</h2>
        <ul class="list-disc pl-6 space-y-1">
          <li>No aceptamos devoluciones de productos abiertos o usados, salvo que estén defectuosos.</li>
          <li>No reembolsamos compras hechas por error del cliente (por ejemplo, producto o dirección incorrecta).</li>
        </ul>
    
        <h2 class="text-xl font-semibold mt-8">5. Reembolsos aprobados</h2>
        <p>
          Si se aprueba tu solicitud, emitiremos el reembolso a través del mismo método de pago utilizado en la compra, en un plazo de hasta 7 días hábiles.
        </p>
    
        <h2 class="text-xl font-semibold mt-8">6. Contacto</h2>
        <p>
          Para cualquier duda sobre esta política, contáctanos en:
          <a href="mailto:support@spintesoro.com" class="text-blue-600 hover:underline">support@spintesoro.com</a>
        </p>
      </section>
    </main>
    
    

 <footer class="bg-[#151521] text-white py-10 px-4">
  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 text-center md:text-left">
    
 
    <div class="text-center">
      <a href="/" class="inline-block mb-3">
        <img src="/assets/images/logo.jpg" alt="Spintesoro Logo" class="h-16 mx-auto md:mx-0" />
      </a>
      <p class="text-sm font-bold text-gray-400">Spintesoro – Tu Mascota Merece lo Mejor</p>
    </div>

 
    <div class="space-y-2 text-center">
      <h3 class="font-semibold text-lg mb-2">Políticas</h3>
      <ul class="text-sm text-gray-300 space-y-1">
        <li><a href="/cookies/" class="hover:underline">Política de cookies</a></li>
        <li><a href="/privacy/" class="hover:underline">Política de privacidad</a></li>
        <li><a href="/refund/" class="hover:underline">Política de reembolso</a></li>
      </ul>
    </div>


    <div class="space-y-2 text-center">
      <h3 class="font-semibold text-lg mb-2">Contacto</h3>
      <p class="text-sm text-gray-300">Email: <a href="mailto:support@spintesoro.com" class="hover:underline">support@spintesoro.com</a></p>
      <p class="text-xs text-gray-500">© 2025 spintesoro.com — All rights reserved.</p>
    </div>
  </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script src="/assets/js/main.js"></script>


</body>
</html>
