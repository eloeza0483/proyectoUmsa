@extends('app-layout')

@section('content')
<div class="w-8/10 mx-auto py-10">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-extrabold text-emerald-800 uppercase tracking-wider">Nuestro Equipo</h2>
        <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">Conoce a las mentes creativas detrás de la mejor experiencia gastronómica. Un equipo apasionado por la calidad y el servicio.</p>
    </div>

    <!-- Executive Team -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-20">
        
        <!-- Member 1 -->
        <div class="bg-white rounded-xl shadow-lg p-6 text-center border-t-4 border-emerald-600 hover:shadow-2xl transition-shadow duration-300">
            <div class="w-32 h-32 mx-auto mb-6 relative">
                 <img src="{{ asset('imgs/6.jpg') }}" alt="Juan Pérez" class="w-full h-full object-cover rounded-full border-4 border-gray-100 shadow-md">
            </div>
            <h3 class="text-xl font-bold text-gray-800">SANTOS RIVAS LISANDRO
HUMBERTO</h3>
            <p class="text-emerald-600 font-semibold mb-3">Adminstrador/ Contabilidad</p>
            <p class="text-gray-500 text-sm leading-relaxed">Encargado de mantener el ritmo financiero de la casa. Asegura que los números fluyan con la misma armonía que nuestros sabores.</p>
             <div class="mt-4 flex justify-center gap-3">
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-twitter text-lg"></i></a>
            </div>
        </div>

        <!-- Member 2 -->
        <div class="bg-white rounded-xl shadow-lg p-6 text-center border-t-4 border-emerald-600 hover:shadow-2xl transition-shadow duration-300">
             <div class="w-32 h-32 mx-auto mb-6 relative">
                 <img src="{{ asset('imgs/4.jpg') }}" alt="María García" class="w-full h-full object-cover rounded-full border-4 border-gray-100 shadow-md">
            </div>
            <h3 class="text-xl font-bold text-gray-800">SANCHEZ MORENO
DIANA ISABELLA</h3>
            <p class="text-emerald-600 font-semibold mb-3">CEO</p>
            <p class="text-gray-500 text-sm leading-relaxed">Visionaria líder del equipo. Fusiona liderazgo y pasión para llevar la experiencia tropical a otro nivel.</p>
            <div class="mt-4 flex justify-center gap-3">
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-twitter text-lg"></i></a>
            </div>
        </div>

        <!-- Member 3 -->
        <div class="bg-white rounded-xl shadow-lg p-6 text-center border-t-4 border-emerald-600 hover:shadow-2xl transition-shadow duration-300">
             <div class="w-32 h-32 mx-auto mb-6 relative">
                 <img src="{{ asset('imgs/3.jpg') }}" alt="Carlos Rodríguez" class="w-full h-full object-cover rounded-full border-4 border-gray-100 shadow-md">
            </div>
            <h3 class="text-xl font-bold text-gray-800">SERRANO GONZALEZ
MARLEN YOSELIN</h3>
            <p class="text-emerald-600 font-semibold mb-3">Atencion al cliente/ Logistica </p>
            <p class="text-gray-500 text-sm leading-relaxed">Maestra de la logística y la atención. Garantiza que cada pedido llegue con la frescura y rapidez que mereces.</p>
            <div class="mt-4 flex justify-center gap-3">
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-instagram text-lg"></i></a>
            </div>
        </div>
        
         <!-- Member 4 -->
        <div class="bg-white rounded-xl shadow-lg p-6 text-center border-t-4 border-emerald-600 hover:shadow-2xl transition-shadow duration-300">
             <div class="w-32 h-32 mx-auto mb-6 relative">
                 <img src="{{ asset('imgs/1.jpg') }}" alt="Ana López" class="w-full h-full object-cover rounded-full border-4 border-gray-100 shadow-md">
            </div>
            <h3 class="text-xl font-bold text-gray-800">GARCIA SOSA
JENNIFER CRISTINA</h3>
            <p class="text-emerald-600 font-semibold mb-3">Directora de Marketing</p>
            <p class="text-gray-500 text-sm leading-relaxed">La voz de nuestra marca. Conecta nuestra vibra tropical con el mundo a través de campañas creativas y redes sociales.</p>
            <div class="mt-4 flex justify-center gap-3">
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-facebook text-lg"></i></a>
            </div>
        </div>

        <!-- Member 5 -->
        <div class="bg-white rounded-xl shadow-lg p-6 text-center border-t-4 border-emerald-600 hover:shadow-2xl transition-shadow duration-300">
             <div class="w-32 h-32 mx-auto mb-6 relative">
                 <img src="{{ asset('imgs/2.jpg') }}" alt="David Sánchez" class="w-full h-full object-cover rounded-full border-4 border-gray-100 shadow-md">
            </div>
            <h3 class="text-xl font-bold text-gray-800">MEDINA CASERES
GABRIEL ALEJANDRO</h3>
            <p class="text-emerald-600 font-semibold mb-3">Supervisor de planta</p>
            <p class="text-gray-500 text-sm leading-relaxed">El guardián de la calidad. Supervisa cada proceso en cocina para asegurar que cada boneless sea una obra maestra.</p>
             <div class="mt-4 flex justify-center gap-3">
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-github text-lg"></i></a>
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
            </div>
        </div>

         <!-- Member 6 -->
         <div class="bg-white rounded-xl shadow-lg p-6 text-center border-t-4 border-emerald-600 hover:shadow-2xl transition-shadow duration-300">
             <div class="w-32 h-32 mx-auto mb-6 relative">
                 <img src="{{ asset('imgs/5.jpg') }}" alt="Lucía Méndez" class="w-full h-full object-cover rounded-full border-4 border-gray-100 shadow-md">
            </div>
            <h3 class="text-xl font-bold text-gray-800">AGUIRRE PANTOJA
DAZNET YAMILET</h3>
            <p class="text-emerald-600 font-semibold mb-3">Diseñadora grafica</p>
            <p class="text-gray-500 text-sm leading-relaxed">La artista visual. Plasma nuestra identidad tropical en cada diseño, desde el menú hasta nuestras redes.</p>
             <div class="mt-4 flex justify-center gap-3">
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
            </div>
        </div>

    </div>
</div>
@endsection
