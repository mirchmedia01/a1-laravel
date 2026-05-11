@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <main class="min-h-screen bg-white py-20">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-4xl font-heading font-black uppercase text-asphaltBlack mb-6">{{ $isEs ? 'Política de Privacidad' : 'Privacy Policy' }}</h1>
            <p class="text-gray-600 mb-4">{{ $isEs ? 'Recopilamos información de contacto que usted envía en formularios para responder consultas y gestionar inscripciones.' : 'We collect contact information you submit through forms to respond to inquiries and manage enrollments.' }}</p>
            <p class="text-gray-600 mb-4">{{ $isEs ? 'No vendemos su información personal. Podemos compartir datos con proveedores de servicio necesarios para operar el sitio y procesar pagos.' : 'We do not sell your personal information. We may share data with service providers required to operate the website and process payments.' }}</p>
            <p class="text-gray-600">{{ $isEs ? 'Para preguntas sobre privacidad, contáctenos en info@a1traininggroupllc.com.' : 'For privacy questions, contact us at info@a1traininggroupllc.com.' }}</p>
        </div>
    </main>
</x-layouts.public>
