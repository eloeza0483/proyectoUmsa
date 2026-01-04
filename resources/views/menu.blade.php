@extends('app-layout')

@section('content')
<div class="w-8/10 mx-auto py-10">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold text-emerald-800 uppercase tracking-wider">Nuestro Menú</h2>
        <p class="mt-4 text-xl text-gray-600">Deliciosas opciones preparadas con los mejores ingredientes</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Item 1 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 border border-gray-100">
            <div class="h-64 overflow-hidden relative group">
                <img src="https://placehold.co/600x400/10b981/ffffff?text=Classic+Burger" alt="Classic Burger" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <button class="bg-white text-emerald-800 font-bold py-2 px-6 rounded-full">Ver Detalles</button>
                </div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Classic Burger</h3>
                    <span class="text-2xl font-bold text-emerald-600">$8.50</span>
                </div>
                <p class="text-gray-600 mb-4 text-sm">Carne de res premium, lechuga fresca, tomate, cebolla y nuestra salsa especial.</p>
                <button class="w-full bg-emerald-800 text-white py-2 rounded-lg font-semibold hover:bg-emerald-900 transition-colors">
                    Ordenar Ahora <i class="fa-solid fa-cart-shopping ml-2"></i>
                </button>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 border border-gray-100">
             <div class="h-64 overflow-hidden relative group">
                <img src="https://placehold.co/600x400/059669/ffffff?text=Cheese+Lover" alt="Cheese Docker" class="w-full h-full object-cover">
                 <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <button class="bg-white text-emerald-800 font-bold py-2 px-6 rounded-full">Ver Detalles</button>
                </div>
            </div>
            <div class="p-6">
                 <div class="flex justify-between items-center mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Cheese Lover</h3>
                    <span class="text-2xl font-bold text-emerald-600">$10.00</span>
                </div>
                <p class="text-gray-600 mb-4 text-sm">Doble carne, triple queso cheddar fundido, bacon crujiente y salsa BBQ.</p>
                <button class="w-full bg-emerald-800 text-white py-2 rounded-lg font-semibold hover:bg-emerald-900 transition-colors">
                    Ordenar Ahora <i class="fa-solid fa-cart-shopping ml-2"></i>
                </button>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 border border-gray-100">
             <div class="h-64 overflow-hidden relative group">
                <img src="https://placehold.co/600x400/047857/ffffff?text=Chicken+Crispy" alt="Chicken Crispy" class="w-full h-full object-cover">
                 <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <button class="bg-white text-emerald-800 font-bold py-2 px-6 rounded-full">Ver Detalles</button>
                </div>
            </div>
            <div class="p-6">
                 <div class="flex justify-between items-center mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Chicken Crispy</h3>
                    <span class="text-2xl font-bold text-emerald-600">$9.50</span>
                </div>
                <p class="text-gray-600 mb-4 text-sm">Pechuga de pollo empanizada, mayonesa de hierbas, pepinillos y lechuga romana.</p>
                <button class="w-full bg-emerald-800 text-white py-2 rounded-lg font-semibold hover:bg-emerald-900 transition-colors">
                    Ordenar Ahora <i class="fa-solid fa-cart-shopping ml-2"></i>
                </button>
            </div>
        </div>

        <!-- Item 4 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 border border-gray-100">
             <div class="h-64 overflow-hidden relative group">
                <img src="https://placehold.co/600x400/065f46/ffffff?text=Veggie+Delight" alt="Veggie Delight" class="w-full h-full object-cover">
                 <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <button class="bg-white text-emerald-800 font-bold py-2 px-6 rounded-full">Ver Detalles</button>
                </div>
            </div>
            <div class="p-6">
                 <div class="flex justify-between items-center mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Veggie Delight</h3>
                    <span class="text-2xl font-bold text-emerald-600">$9.00</span>
                </div>
                <p class="text-gray-600 mb-4 text-sm">Hamburguesa de lentejas y quinoa, aguacate, rúcula y tomate asado.</p>
                <button class="w-full bg-emerald-800 text-white py-2 rounded-lg font-semibold hover:bg-emerald-900 transition-colors">
                    Ordenar Ahora <i class="fa-solid fa-cart-shopping ml-2"></i>
                </button>
            </div>
        </div>

         <!-- Item 5 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 border border-gray-100">
             <div class="h-64 overflow-hidden relative group">
                <img src="https://placehold.co/600x400/064e3b/ffffff?text=Spicy+Jalapeno" alt="Spicy Jalapeno" class="w-full h-full object-cover">
                 <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <button class="bg-white text-emerald-800 font-bold py-2 px-6 rounded-full">Ver Detalles</button>
                </div>
            </div>
            <div class="p-6">
                 <div class="flex justify-between items-center mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Spicy Jalapeño</h3>
                    <span class="text-2xl font-bold text-emerald-600">$10.50</span>
                </div>
                <p class="text-gray-600 mb-4 text-sm">Carne con especias, queso pepper jack, jalapeños frescos y salsa picante.</p>
                <button class="w-full bg-emerald-800 text-white py-2 rounded-lg font-semibold hover:bg-emerald-900 transition-colors">
                    Ordenar Ahora <i class="fa-solid fa-cart-shopping ml-2"></i>
                </button>
            </div>
        </div>

         <!-- Item 6 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 border border-gray-100">
             <div class="h-64 overflow-hidden relative group">
                <img src="https://placehold.co/600x400/34d399/ffffff?text=Tropical+Burger" alt="Tropical Burger" class="w-full h-full object-cover">
                 <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <button class="bg-white text-emerald-800 font-bold py-2 px-6 rounded-full">Ver Detalles</button>
                </div>
            </div>
            <div class="p-6">
                 <div class="flex justify-between items-center mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Tropical Burger</h3>
                    <span class="text-2xl font-bold text-emerald-600">$11.00</span>
                </div>
                <p class="text-gray-600 mb-4 text-sm">Nuestra especialidad con piña asada, jamón, queso suizo y salsa teriyaki.</p>
                <button class="w-full bg-emerald-800 text-white py-2 rounded-lg font-semibold hover:bg-emerald-900 transition-colors">
                    Ordenar Ahora <i class="fa-solid fa-cart-shopping ml-2"></i>
                </button>
            </div>
        </div>

    </div>
</div>
@endsection
