@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <section class="py-24 md:py-32 px-4 relative overflow-hidden pt-36">
        <div class="max-w-4xl mx-auto relative z-10">
            <h1 class="text-white font-heading text-4xl sm:text-5xl md:text-7xl tracking-tighter uppercase mb-8 leading-[1.1]">Terms of Service</h1>
            <div class="prose prose-invert prose-sm max-w-none text-white/60 space-y-6">
                <p><strong class="text-white">Last Updated:</strong> January 2024</p>
                <p>By accessing or using A1 Training Group LLC's services, you agree to be bound by these Terms of Service. If you do not agree, please do not use our services.</p>

                <h2 class="text-white font-heading text-xl uppercase tracking-tighter mt-10 mb-4">Services</h2>
                <p>A1 Training Group provides personal training, physical therapy, massage therapy, boxing instruction, kettlebell training, nutritional counseling, and online coaching. Services are delivered in-studio, in-home, or virtually depending on the program selected.</p>

                <h2 class="text-white font-heading text-xl uppercase tracking-tighter mt-10 mb-4">Booking & Payment</h2>
                <p>All sessions require advance booking. Payment is due at the time of booking unless otherwise agreed. Session packages are valid for 12 months from the purchase date. Unused sessions expire after 12 months.</p>

                <h2 class="text-white font-heading text-xl uppercase tracking-tighter mt-10 mb-4">Cancellation Policy</h2>
                <p>Cancellations must be made at least 24 hours in advance. Late cancellations or no-shows will result in the session being forfeited. Exceptions may be made for medical emergencies.</p>

                <h2 class="text-white font-heading text-xl uppercase tracking-tighter mt-10 mb-4">Liability Waiver</h2>
                <p>Clients acknowledge that physical exercise carries inherent risks. By participating, you agree that A1 Training Group LLC, its trainers, and affiliates are not liable for any injuries, damages, or losses sustained during training sessions. A signed waiver is required before the first session.</p>

                <h2 class="text-white font-heading text-xl uppercase tracking-tighter mt-10 mb-4">Contact</h2>
                <p>For questions about these terms, contact us at <a href="mailto:info@a1traininggroupllc.com" class="text-accent underline">info@a1traininggroupllc.com</a> or call (888) 872-2504.</p>
            </div>
        </div>
    </section>
</x-layouts.public>
