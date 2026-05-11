<title>{{ $meta['title'] ?? 'A1 Training Group' }}</title>
<meta name="description" content="{{ $meta['description'] ?? '' }}">
<meta property="og:title" content="{{ $meta['ogTitle'] ?? $meta['title'] ?? '' }}">
<meta property="og:description" content="{{ $meta['ogDescription'] ?? $meta['description'] ?? '' }}">
<meta property="og:type" content="{{ $meta['ogType'] ?? 'website' }}">
<meta property="og:image" content="{{ $meta['ogImage'] ?? '' }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="{{ $meta['twitterCard'] ?? 'summary_large_image' }}">
<meta name="twitter:title" content="{{ $meta['twitterTitle'] ?? $meta['title'] ?? '' }}">
<meta name="twitter:description" content="{{ $meta['twitterDescription'] ?? $meta['description'] ?? '' }}">
<link rel="canonical" href="{{ $meta['canonical'] ?? url()->current() }}">
@if(!empty($meta['keywords']))
<meta name="keywords" content="{{ is_array($meta['keywords']) ? implode(', ', $meta['keywords']) : $meta['keywords'] }}">
@endif
@if(!empty($meta['hreflang']))
@foreach($meta['hreflang'] as $locale => $url)
<link rel="alternate" hreflang="{{ $locale }}" href="{{ $url }}">
@endforeach
@endif
