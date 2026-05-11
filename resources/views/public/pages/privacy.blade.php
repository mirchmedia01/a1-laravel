@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <section class="py-24 md:py-32 px-4 relative overflow-hidden pt-36">
        <div class="max-w-4xl mx-auto relative z-10">
            <h1 class="text-white font-heading text-4xl sm:text-5xl md:text-7xl tracking-tighter uppercase mb-8 leading-[1.1]">Privacy Policy</h1>
            <div class="prose prose-invert prose-sm max-w-none text-white/60 space-y-6">
                <p><strong class="text-white">Last Updated:</strong> January 2024</p>
                <p>A1 Training Group LLC ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>

                <h2 class="text-white font-heading text-xl uppercase tracking-tighter mt-10 mb-4">Information We Collect</h2>
                <p><strong class="text-white">Personal Data:</strong> Name, email address, phone number, billing address, and payment information when you book a consultation or purchase services.</p>
                <p><strong class="text-white">Health Data:</strong> Fitness goals, injury history, and medical information voluntarily provided for training program design.</p>
                <p><strong class="text-white">Usage Data:</strong> Pages visited, time spent, browser type, and device information collected via cookies and analytics.</p>

                <h2 class="text-white font-heading text-xl uppercase tracking-tighter mt-10 mb-4">How We Use Your Information</h2>
                <ul class="list-disc pl-5 space-y-2 text-white/50">
                    <li>To provide and maintain our personal training, physical therapy, and wellness services</li>
                    <li>To process payments and send confirmations</li>
                    <li>To communicate with you about appointments, promotions, and updates</li>
                    <li>To improve our website and service offerings</li>
                    <li>To comply with legal obligations</li>
                </ul>

                <h2 class="text-white font-heading text-xl uppercase tracking-tighter mt-10 mb-4">Data Sharing</h2>
                <p>We do not sell your personal information. We may share data with trusted third-party service providers (payment processors, scheduling platforms) who assist in operating our business, subject to confidentiality agreements.</p>

                <h2 class="text-white font-heading text-xl uppercase tracking-tighter mt-10 mb-4">Your Rights</h2>
                <p>You have the right to access, correct, or delete your personal data at any time. Contact us at <a href="mailto:info@a1traininggroupllc.com" class="text-accent underline">info@a1traininggroupllc.com</a> to exercise these rights.</p>

                <h2 class="text-white font-heading text-xl uppercase tracking-tighter mt-10 mb-4">Contact</h2>
                <p>For questions about this policy, contact us at <a href="mailto:info@a1traininggroupllc.com" class="text-accent underline">info@a1traininggroupllc.com</a> or call (888) 872-2504.</p>
            </div>
        </div>
    </section>
</x-layouts.public>
