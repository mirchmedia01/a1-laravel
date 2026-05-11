<?php

use Illuminate\Support\Facades\App;

if (! function_exists('load_translations')) {
    function load_translations(?string $locale = null): array
    {
        static $cache = [];
        $locale = $locale ?? App::getLocale();
        if (isset($cache[$locale])) {
            return $cache[$locale];
        }
        $jsonPath = lang_path("{$locale}.json");
        $cache[$locale] = file_exists($jsonPath) ? (json_decode(file_get_contents($jsonPath), true) ?? []) : [];

        return $cache[$locale];
    }
}

if (! function_exists('t')) {
    function t(string $key, array $replace = [], ?string $locale = null): string
    {
        $translations = load_translations($locale);
        $keys = explode('.', $key);
        $value = null;
        $cursor = $translations;

        foreach ($keys as $k) {
            if (! is_array($cursor) || ! array_key_exists($k, $cursor)) {
                return $key;
            }
            $cursor = $cursor[$k];
        }

        $value = $cursor;

        if (! is_string($value)) {
            return $key;
        }

        foreach ($replace as $placeholder => $replacement) {
            $value = str_replace(':'.$placeholder, $replacement, $value);
        }

        return $value;
    }
}

if (! function_exists('tc')) {
    function tc(string $key, ?string $locale = null): array
    {
        $translations = load_translations($locale);
        $keys = explode('.', $key);
        $cursor = $translations;

        foreach ($keys as $k) {
            if (! is_array($cursor) || ! array_key_exists($k, $cursor)) {
                return [];
            }
            $cursor = $cursor[$k];
        }

        return is_array($cursor) ? $cursor : [];
    }
}
