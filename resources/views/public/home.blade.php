<x-layouts.public :meta="$meta ?? []">
    <x-sections.hero />
    <section class="py-12 md:py-16 px-4 md:px-6 scroll-reveal" x-intersect="$el.classList.add('is-visible')">
        <div class="max-w-7xl mx-auto">
            <x-sections.available-trainers :trainers="$trainers" />
        </div>
    </section>
    <x-sections.booking :trainers="$trainers" :services="$services" />
    <x-sections.about />
    <x-sections.quote />
    <x-sections.services :services="$services" />
    <x-sections.trainers :trainers="$trainers" />
    <x-sections.reviews />
    <x-sections.cta />
</x-layouts.public>
