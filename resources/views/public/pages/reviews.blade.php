@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; $testimonials = [
    ['name' => 'Sarah M.', 'role' => 'Client', 'text' => 'The trainers at A1 are incredible. They came to my apartment gym and completely transformed my strength in just 3 months.', 'textEs' => 'Los entrenadores de A1 son increíbles. Transformaron mi fuerza en solo 3 meses.'],
    ['name' => 'David R.', 'role' => 'Client', 'text' => 'After my knee surgery, Dr. Hai Lin got me back to running in half the expected time.', 'textEs' => 'Después de mi cirugía de rodilla, el Dr. Hai Lin me puso a correr en la mitad del tiempo esperado.'],
    ['name' => 'Jennifer L.', 'role' => 'Client', 'text' => 'I love that I can train at home with world-class equipment. No commuting, no crowds.', 'textEs' => 'Me encanta poder entrenar en casa con equipos de clase mundial. Sin desplazamientos, sin multitudes.'],
    ['name' => 'Marcus T.', 'role' => 'Client', 'text' => 'The boxing training has been incredible for my cardio and confidence. Coach Phillip pushes me to my limits.', 'textEs' => 'El entrenamiento de boxeo ha sido increíble para mi cardio y confianza.'],
    ['name' => 'Emily C.', 'role' => 'Client', 'text' => 'The kettlebell course completely changed how I think about strength training. Highly recommended!', 'textEs' => 'El curso de kettlebell cambió mi forma de pensar sobre el entrenamiento de fuerza.'],
    ['name' => 'Robert K.', 'role' => 'Client', 'text' => 'A1 Training brought professionalism and results. The convenience of in-home training is unmatched.', 'textEs' => 'A1 Training trajo profesionalismo y resultados. La conveniencia del entrenamiento a domicilio es inigualable.'],
]; @endphp
<x-layouts.public :meta="$meta ?? []">
    <section class="py-24 md:py-32 px-4 relative overflow-hidden pt-36">
        <div class="max-w-5xl mx-auto relative z-10 text-center">
            <div class="flex items-center justify-center gap-2 text-accent mb-6">
                @for($i=0; $i<5; $i++)<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>@endfor
            </div>
            <p class="text-white/40 text-sm font-bold uppercase tracking-widest mb-4">5.0 Google Rating</p>
            <h1 class="text-white font-heading text-4xl sm:text-5xl md:text-7xl lg:text-8xl tracking-tighter uppercase leading-[1.1]">{{ $isEs ? 'Lo Que Dicen' : 'What Our' }}<br><span class="text-accent italic">{{ $isEs ? 'Nuestros Clientes' : 'Clients Say' }}</span></h1>
        </div>
    </section>

    <section class="px-4 md:px-6 pb-24">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($testimonials as $review)
            <div class="bg-white/5 border border-white/10 rounded-[30px] p-8">
                <div class="flex text-accent mb-4">@for($i=0; $i<5; $i++)<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>@endfor</div>
                <p class="text-white/60 text-sm leading-relaxed mb-6 italic">"{{ $isEs ? $review['textEs'] : $review['text'] }}"</p>
                <p class="text-white font-bold text-sm">{{ $review['name'] }}</p>
                <p class="text-white/30 text-xs">{{ $review['role'] }}</p>
            </div>
            @endforeach
        </div>
    </section>

    @php $faqs = [
        ['q' => 'How do I leave a review?', 'qEs' => '¿Cómo dejo una reseña?', 'a' => 'You can leave a review on our Google Business profile. Simply search for A1 Training Group on Google and click "Write a review."', 'aEs' => 'Puedes dejar una reseña en nuestro perfil de Google Business. Simplemente busca A1 Training Group en Google y haz clic en "Escribir una reseña."'],
        ['q' => 'Do you have before/after photos?', 'qEs' => '¿Tienen fotos de antes/después?', 'a' => 'Yes, with client permission. Contact us to see transformation stories from clients who have achieved remarkable results.', 'aEs' => 'Sí, con permiso del cliente. Contáctanos para ver historias de transformación de clientes que han logrado resultados notables.'],
        ['q' => 'How is A1 rated compared to other NYC trainers?', 'qEs' => '¿Cómo está calificado A1 en comparación con otros entrenadores de NYC?', 'a' => 'A1 Training Group maintains a 5.0 Google rating, making us one of the highest-rated personal training services in New York City.', 'aEs' => 'A1 Training Group mantiene una calificación de 5.0 en Google, lo que nos convierte en uno de los servicios de entrenamiento personal mejor calificados de Nueva York.'],
    ]; @endphp
    <section class="px-4 pb-24">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-white font-heading text-3xl md:text-4xl uppercase tracking-tighter mb-8 text-center">{{ $isEs ? 'Preguntas Frecuentes' : 'FAQs' }}</h2>
            <div class="space-y-4">
                @foreach($faqs as $i => $faq)
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6" x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left">
                        <span class="text-white font-bold text-sm pr-4">{{ $isEs ? $faq['qEs'] : $faq['q'] }}</span>
                        <svg class="w-4 h-4 text-accent shrink-0" :class="open ? 'rotate-180' : ''" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                    </button>
                    <div x-show="open" x-cloak class="mt-4 text-white/40 text-sm leading-relaxed">{{ $isEs ? $faq['aEs'] : $faq['a'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-sections.cta />
</x-layouts.public>
