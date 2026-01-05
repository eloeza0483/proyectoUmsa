@extends('app-layout')

@section('content')
<div class="w-8/10 mx-auto py-10">
    <div class="text-center mb-16">
        <h2 class="text-5xl font-black text-emerald-900 uppercase tracking-widest font-sans">Menú Tropical Afro House</h2>
        <p class="mt-4 text-2xl text-emerald-600 font-medium italic">"Sabores con ritmo, flow y vibración tropical"</p>
        <div class="w-24 h-1 bg-amber-400 mx-auto mt-6 rounded-full"></div>
    </div>

    <!-- DRINKS -->
    <div class="mb-20">
        <div class="flex items-center gap-4 mb-8">
            <h3 class="text-3xl font-bold text-emerald-800 uppercase">Drinks</h3>
            <span class="bg-amber-100 text-amber-800 px-4 py-1 rounded-full text-sm font-bold tracking-wider">Beats Refrescantes</span>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Afro Mojito -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-56 overflow-hidden relative">
                    <img src="https://placehold.co/600x400/0f766e/ffffff?text=Afro+Mojito" alt="Afro Mojito" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                     <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Afro Mojito</h4>
                    <p class="text-gray-600">Limón, menta, azúcar morena y un toque de jengibre tropical.</p>
                </div>
            </div>

            <!-- Caribe Sunset -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-56 overflow-hidden relative">
                     <img src="https://placehold.co/600x400/f59e0b/ffffff?text=Caribe+Sunset" alt="Caribe Sunset" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                     <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Caribe Sunset</h4>
                    <p class="text-gray-600">Piña, naranja y vodka con espuma de coco.</p>
                </div>
            </div>

            <!-- House Punch -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-56 overflow-hidden relative">
                     <img src="https://placehold.co/600x400/be123c/ffffff?text=House+Punch" alt="House Punch" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                     <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-gray-800 mb-2">House Punch</h4>
                    <p class="text-gray-600">Frutos rojos, limón y toque ligero de ron.</p>
                </div>
            </div>

             <!-- Tropical Lemonade -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-56 overflow-hidden relative">
                     <img src="https://placehold.co/600x400/84cc16/ffffff?text=Tropical+Lemonade" alt="Tropical Lemonade" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                     <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Tropical Lemonade <span class="text-xs text-emerald-600 bg-emerald-100 px-2 py-1 rounded-full ml-2">Sin Alcohol</span></h4>
                    <p class="text-gray-600">Limonada con maracuyá.</p>
                </div>
            </div>
            
             <!-- Cartdae -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-56 overflow-hidden relative">
                     <img src="https://placehold.co/600x400/6366f1/ffffff?text=Cartdae" alt="Cartdae" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                     <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Cartdae pero nor por gramara</h4>
                    <p class="text-gray-400 italic text-sm">Pregunta por disponibilidad.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ALITAS -->
    <div class="mb-20">
         <div class="flex items-center gap-4 mb-8">
            <h3 class="text-3xl font-bold text-emerald-800 uppercase">Alitas</h3>
            <span class="bg-orange-100 text-orange-800 px-4 py-1 rounded-full text-sm font-bold tracking-wider">Wings con Flow</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
             <!-- Clasicas -->
            <div class="bg-white rounded-xl shadow border border-orange-100 p-4 hover:-translate-y-2 transition-transform duration-300">
                <img src="https://placehold.co/400x300/c2410c/ffffff?text=Clasicas+Afro" alt="Clásicas Afro" class="w-full h-40 object-cover rounded-lg mb-4">
                <h4 class="font-bold text-lg text-gray-900">Clásicas Afro</h4>
                <p class="text-sm text-gray-600 mt-2">Crujientes, con especias tropicales.</p>
            </div>

             <!-- Mango-Habanero -->
            <div class="bg-white rounded-xl shadow border border-orange-100 p-4 hover:-translate-y-2 transition-transform duration-300">
                 <img src="https://placehold.co/400x300/fb923c/ffffff?text=Mango+Tribal" alt="Mango-Habanero Tribal" class="w-full h-40 object-cover rounded-lg mb-4">
                <h4 class="font-bold text-lg text-gray-900">Mango-Habanero Tribal</h4>
                <p class="text-sm text-gray-600 mt-2">Dulce, picante y muy tropical.</p>
            </div>

             <!-- BBQ Caribeña -->
            <div class="bg-white rounded-xl shadow border border-orange-100 p-4 hover:-translate-y-2 transition-transform duration-300">
                 <img src="https://placehold.co/400x300/7c2d12/ffffff?text=BBQ+Caribe" alt="BBQ Caribeña" class="w-full h-40 object-cover rounded-lg mb-4">
                <h4 class="font-bold text-lg text-gray-900">BBQ Caribeña</h4>
                <p class="text-sm text-gray-600 mt-2">Glaseado de piña con toque ahumado.</p>
            </div>

             <!-- Buffalo House -->
            <div class="bg-white rounded-xl shadow border border-orange-100 p-4 hover:-translate-y-2 transition-transform duration-300">
                 <img src="https://placehold.co/400x300/dc2626/ffffff?text=Buffalo+House" alt="Buffalo House" class="w-full h-40 object-cover rounded-lg mb-4">
                <h4 class="font-bold text-lg text-gray-900">Buffalo House</h4>
                <p class="text-sm text-gray-600 mt-2">Intensas y llenas de ritmo.</p>
            </div>
        </div>
    </div>

    <!-- BONELESS -->
    <div class="mb-20">
         <div class="flex items-center gap-4 mb-8">
            <h3 class="text-3xl font-bold text-emerald-800 uppercase">Boneless</h3>
            <span class="bg-yellow-100 text-yellow-800 px-4 py-1 rounded-full text-sm font-bold tracking-wider">Bites Tropicales</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
             <!-- Calypso -->
            <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="w-full md:w-1/3">
                    <img src="https://placehold.co/300x300/fbbf24/ffffff?text=Calypso" alt="Boneless Calypso" class="w-full h-full object-cover">
                </div>
                <div class="w-full md:w-2/3 p-6 flex flex-col justify-center">
                    <h4 class="text-xl font-bold text-gray-800">Boneless Calypso</h4>
                    <p class="text-gray-600 mt-2">Bañados en salsa de piña y chile caribeño.</p>
                </div>
            </div>

            <!-- Afro Fire -->
            <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="w-full md:w-1/3">
                     <img src="https://placehold.co/300x300/ef4444/ffffff?text=Afro+Fire" alt="Boneless Afro Fire" class="w-full h-full object-cover">
                </div>
                <div class="w-full md:w-2/3 p-6 flex flex-col justify-center">
                    <h4 class="text-xl font-bold text-gray-800">Boneless Afro Fire</h4>
                    <p class="text-gray-600 mt-2">Picantes con toque africano.</p>
                </div>
            </div>

            <!-- BBQ Island -->
            <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="w-full md:w-1/3">
                     <img src="https://placehold.co/300x300/92400e/ffffff?text=BBQ+Island" alt="Boneless BBQ Island" class="w-full h-full object-cover">
                </div>
                <div class="w-full md:w-2/3 p-6 flex flex-col justify-center">
                    <h4 class="text-xl font-bold text-gray-800">Boneless BBQ Island</h4>
                    <p class="text-gray-600 mt-2">Dulce-ahumados.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- COMBOS -->
    <div>
         <div class="flex items-center gap-4 mb-8">
            <h3 class="text-3xl font-bold text-emerald-800 uppercase">Combos</h3>
            <span class="bg-red-100 text-red-800 px-4 py-1 rounded-full text-sm font-bold tracking-wider">Tropical Experience</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Combo Wings -->
            <div class="relative bg-emerald-900 rounded-2xl p-8 hover:bg-emerald-800 transition-colors duration-300 text-center group">
                <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                    <img src="https://placehold.co/150x150/10b981/ffffff?text=Combo+Wings" alt="Combo Wings" class="w-24 h-24 rounded-full border-4 border-white shadow-lg group-hover:scale-110 transition-transform">
                </div>
                <div class="mt-12">
                     <h4 class="text-2xl font-bold text-white mb-2">Combo Wings</h4>
                     <p class="text-emerald-200 text-lg">Alitas + papas + drink</p>
                     <button class="mt-6 bg-amber-400 text-emerald-900 font-bold py-2 px-6 rounded-full hover:bg-amber-300 transition-colors">Pedir Ahora</button>
                </div>
            </div>

             <!-- Combo Boneless -->
            <div class="relative bg-emerald-900 rounded-2xl p-8 hover:bg-emerald-800 transition-colors duration-300 text-center group">
                 <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                    <img src="https://placehold.co/150x150/059669/ffffff?text=Combo+Bones" alt="Combo Boneless" class="w-24 h-24 rounded-full border-4 border-white shadow-lg group-hover:scale-110 transition-transform">
                </div>
                <div class="mt-12">
                     <h4 class="text-2xl font-bold text-white mb-2">Combo Boneless</h4>
                     <p class="text-emerald-200 text-lg">Boneless + papas + drink</p>
                     <button class="mt-6 bg-amber-400 text-emerald-900 font-bold py-2 px-6 rounded-full hover:bg-amber-300 transition-colors">Pedir Ahora</button>
                </div>
            </div>

            <!-- Combo Burger -->
            <div class="relative bg-emerald-900 rounded-2xl p-8 hover:bg-emerald-800 transition-colors duration-300 text-center group">
                 <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                    <img src="https://placehold.co/150x150/047857/ffffff?text=Combo+Burger" alt="Combo Burger" class="w-24 h-24 rounded-full border-4 border-white shadow-lg group-hover:scale-110 transition-transform">
                </div>
                <div class="mt-12">
                     <h4 class="text-2xl font-bold text-white mb-2">Combo Burger</h4>
                     <p class="text-emerald-200 text-lg">Hamburguesa + papas + drink</p>
                     <button class="mt-6 bg-amber-400 text-emerald-900 font-bold py-2 px-6 rounded-full hover:bg-amber-300 transition-colors">Pedir Ahora</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
