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
                 <img src="https://placehold.co/300x300/10b981/ffffff?text=JP" alt="Juan Pérez" class="w-full h-full object-cover rounded-full border-4 border-gray-100 shadow-md">
            </div>
            <h3 class="text-xl font-bold text-gray-800">Juan Pérez</h3>
            <p class="text-emerald-600 font-semibold mb-3">CEO & Fundador</p>
            <p class="text-gray-500 text-sm leading-relaxed">Visionario con más de 10 años de experiencia en la industria gastronómica. Apasionado por crear experiencias únicas.</p>
             <div class="mt-4 flex justify-center gap-3">
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-twitter text-lg"></i></a>
            </div>
        </div>

        <!-- Member 2 -->
        <div class="bg-white rounded-xl shadow-lg p-6 text-center border-t-4 border-emerald-600 hover:shadow-2xl transition-shadow duration-300">
             <div class="w-32 h-32 mx-auto mb-6 relative">
                 <img src="https://placehold.co/300x300/059669/ffffff?text=MG" alt="María García" class="w-full h-full object-cover rounded-full border-4 border-gray-100 shadow-md">
            </div>
            <h3 class="text-xl font-bold text-gray-800">María García</h3>
            <p class="text-emerald-600 font-semibold mb-3">Directora de Operaciones (COO)</p>
            <p class="text-gray-500 text-sm leading-relaxed">Experta en logística y optimización de procesos. Asegura que cada hamburguesa llegue perfecta a tu mesa.</p>
            <div class="mt-4 flex justify-center gap-3">
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-twitter text-lg"></i></a>
            </div>
        </div>

        <!-- Member 3 -->
        <div class="bg-white rounded-xl shadow-lg p-6 text-center border-t-4 border-emerald-600 hover:shadow-2xl transition-shadow duration-300">
             <div class="w-32 h-32 mx-auto mb-6 relative">
                 <img src="https://placehold.co/300x300/047857/ffffff?text=CR" alt="Carlos Rodríguez" class="w-full h-full object-cover rounded-full border-4 border-gray-100 shadow-md">
            </div>
            <h3 class="text-xl font-bold text-gray-800">Carlos Rodríguez</h3>
            <p class="text-emerald-600 font-semibold mb-3">Chef Ejecutivo</p>
            <p class="text-gray-500 text-sm leading-relaxed">El genio culinario detrás de nuestro menú. Fusiona técnicas tradicionales con sabores modernos.</p>
            <div class="mt-4 flex justify-center gap-3">
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-instagram text-lg"></i></a>
            </div>
        </div>
        
         <!-- Member 4 -->
        <div class="bg-white rounded-xl shadow-lg p-6 text-center border-t-4 border-emerald-600 hover:shadow-2xl transition-shadow duration-300">
             <div class="w-32 h-32 mx-auto mb-6 relative">
                 <img src="https://placehold.co/300x300/065f46/ffffff?text=AL" alt="Ana López" class="w-full h-full object-cover rounded-full border-4 border-gray-100 shadow-md">
            </div>
            <h3 class="text-xl font-bold text-gray-800">Ana López</h3>
            <p class="text-emerald-600 font-semibold mb-3">Gerente de Marketing (CMO)</p>
            <p class="text-gray-500 text-sm leading-relaxed">Creativa y estratega. Lleva nuestra marca a nuevos horizontes y conecta con nuestra comunidad.</p>
            <div class="mt-4 flex justify-center gap-3">
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-facebook text-lg"></i></a>
            </div>
        </div>

        <!-- Member 5 -->
        <div class="bg-white rounded-xl shadow-lg p-6 text-center border-t-4 border-emerald-600 hover:shadow-2xl transition-shadow duration-300">
             <div class="w-32 h-32 mx-auto mb-6 relative">
                 <img src="https://placehold.co/300x300/064e3b/ffffff?text=DS" alt="David Sánchez" class="w-full h-full object-cover rounded-full border-4 border-gray-100 shadow-md">
            </div>
            <h3 class="text-xl font-bold text-gray-800">David Sánchez</h3>
            <p class="text-emerald-600 font-semibold mb-3">CTO & Tecnología</p>
            <p class="text-gray-500 text-sm leading-relaxed">Implementa soluciones tecnológicas innovadoras para mejorar la experiencia de nuestros clientes.</p>
             <div class="mt-4 flex justify-center gap-3">
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-github text-lg"></i></a>
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
            </div>
        </div>

         <!-- Member 6 -->
         <div class="bg-white rounded-xl shadow-lg p-6 text-center border-t-4 border-emerald-600 hover:shadow-2xl transition-shadow duration-300">
             <div class="w-32 h-32 mx-auto mb-6 relative">
                 <img src="https://placehold.co/300x300/34d399/ffffff?text=LM" alt="Lucía Méndez" class="w-full h-full object-cover rounded-full border-4 border-gray-100 shadow-md">
            </div>
            <h3 class="text-xl font-bold text-gray-800">Lucía Méndez</h3>
            <p class="text-emerald-600 font-semibold mb-3">Gerente de Finanzas (CFO)</p>
            <p class="text-gray-500 text-sm leading-relaxed">Responsable de la salud financiera de la empresa y de asegurar el crecimiento sostenible.</p>
             <div class="mt-4 flex justify-center gap-3">
                <a href="#" class="text-gray-400 hover:text-emerald-600 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
            </div>
        </div>

    </div>
</div>
@endsection
