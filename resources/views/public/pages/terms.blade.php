@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <main class="min-h-screen bg-white py-20">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-4xl font-heading font-black uppercase text-asphaltBlack mb-6">{{ $isEs ? 'Términos de Servicio' : 'Terms of Service' }}</h1>
            <p class="text-gray-600 mb-4">{{ $isEs ? 'Al usar este sitio, usted acepta estos términos. El contenido es informativo y puede actualizarse sin previo aviso.' : 'By using this website, you agree to these terms. Content is provided for information and may be updated without prior notice.' }}</p>
            <p class="text-gray-600 mb-4">{{ $isEs ? 'Las inscripciones y pagos están sujetos a disponibilidad de cursos, políticas de asistencia y requisitos de certificación.' : 'Enrollment and payments are subject to course availability, attendance policies, and certification requirements.' }}</p>
            <p class="text-gray-600">{{ $isEs ? 'Para soporte, contáctenos en (888) 872-2504 o info@a1traininggroupllc.com.' : 'For support, contact us at (888) 872-2504 or info@a1traininggroupllc.com.' }}</p>
        </div>
    </main>
</x-layouts.public>
