@extends('app-layout')
@section('content')
<div>

    <div class="flex flex-col md:flex-row w-8/10 mx-auto gap-10 mt-10 mb-20 items-center">
        <div class="w-full md:w-1/2 h-96 relative group">
            <img src="{{ asset('imgs/hamburguesas.jpg') }}" alt="Hamburguesas" class="w-full h-full object-cover rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-black/10"></div>
        </div>
        
        <div class="flex flex-col w-full md:w-1/2 shadow-2xl bg-white p-10 rounded-2xl border border-gray-100 relative overflow-hidden">
            <div class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 bg-emerald-100 rounded-full opacity-50 blur-3xl"></div>
            
            <h2 class="text-4xl font-extrabold uppercase text-emerald-900 mb-6 relative z-10 leading-tight">Prueba nuestras deliciosas hamburguesas.</h2>

            <p class="mb-8 text-gray-600 text-lg leading-relaxed relative z-10">No te quedes sin probar nuestra nueva hamburguesa, <span class="text-emerald-600 font-bold">la tropical burger</span>. Una explosión de sabores en cada bocado que te transportará.</p>
            
            <a href="/menu" class="inline-flex items-center justify-center bg-emerald-800 text-white font-bold py-3 px-8 rounded-xl shadow-lg hover:bg-emerald-700 hover:shadow-xl transition-all duration-300 w-fit group">
                Ver menú
                <i class="fa-solid fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform"></i>
            </a>
            
        </div>
        
    </div>

        
    <section class="w-8/10 mx-auto mt-12 mb-12">
        <div class="bg-white rounded-2xl shadow-xl p-10 border border-emerald-100">
            <h2 class="text-4xl font-extrabold text-center text-emerald-800 uppercase mb-8">Nuestra Identidad</h2>
            
            <div class="flex flex-col md:flex-row gap-10">
                <!-- Mision -->
                <div class="flex-1 bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 h-20 bg-emerald-100 rounded-full flex items-center justify-center">
                             <i class="fa-solid fa-bullseye text-4xl text-emerald-600"></i>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4 text-emerald-900">Misión</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        Brindar a nuestros clientes una experiencia gastronómica única, ofreciendo hamburguesas de la más alta calidad con ingredientes frescos y un sabor inigualable, en un ambiente acogedor y familiar que invite a compartir momentos especiales.
                    </p>
                </div>
                
                <!-- Vision -->
                <div class="flex-1 bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                     <div class="flex justify-center mb-6">
                        <div class="w-20 h-20 bg-emerald-100 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-eye text-4xl text-emerald-600"></i>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4 text-emerald-900">Visión</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        Ser reconocidos como la mejor hamburguesería de la región, destacándonos por nuestra innovación en sabores, excelencia en el servicio y compromiso con la satisfacción de nuestros clientes, expandiendo nuestra pasión por la buena comida.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection