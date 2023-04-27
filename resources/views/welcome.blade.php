<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>

<body class="antialiased">

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/home') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inicio</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar
                        Sesión</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <svg viewBox="0 -0.01 1013.718 1013.718" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                    <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="-1120.126" y1="2189.824"
                        x2="-44.679" y2="1150.587" gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)">
                        <stop offset="0" stop-color="#dff4ff" />
                        <stop offset=".098" stop-color="#d6eaf5" />
                        <stop offset=".268" stop-color="#bfd0d9" />
                        <stop offset=".488" stop-color="#98a5ac" />
                        <stop offset=".747" stop-color="#646b6e" />
                        <stop offset="1" stop-color="#2b2b2b" />
                    </linearGradient>
                    <path
                        d="M506.86 0C226.94 0 0 226.918 0 506.848c0 279.927 226.94 506.849 506.86 506.849 279.94 0 506.857-226.922 506.857-506.849C1013.719 226.918 786.802 0 506.86 0zm0 988.352c-265.939 0-481.495-215.573-481.495-481.504 0-265.927 215.556-481.512 481.495-481.512 265.938 0 481.511 215.584 481.511 481.512 0 265.93-215.573 481.504-481.511 481.504z"
                        fill="url(#a)" />
                    <path
                        d="M992.004 506.848c0 267.914-217.228 485.134-485.144 485.134-267.919 0-485.123-217.22-485.123-485.134 0-267.929 217.204-485.133 485.123-485.133 267.916 0 485.144 217.204 485.144 485.133z"
                        fill="#333" />
                    <radialGradient id="b" cx="-1052.247" cy="2101.652" r="720.108"
                        gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#ffffff" />
                        <stop offset=".306" stop-color="#a8a8a8" />
                        <stop offset=".646" stop-color="#4f4f4f" />
                        <stop offset=".885" stop-color="#161616" />
                        <stop offset="1" />
                    </radialGradient>
                    <path
                        d="M988.371 506.848c0 265.931-215.573 481.504-481.511 481.504-265.939 0-481.495-215.573-481.495-481.504 0-265.927 215.556-481.512 481.495-481.512 265.938 0 481.511 215.585 481.511 481.512z"
                        fill="url(#b)" />
                    <linearGradient id="c" gradientUnits="userSpaceOnUse" x1="-818.029" y1="1409.977"
                        x2="-133.081" y2="748.092" gradientTransform="matrix(-1 0 0 1 58.906 -545.52)">
                        <stop offset="0" stop-color="#dff4ff" />
                        <stop offset=".086" stop-color="#d6eaf5" />
                        <stop offset=".233" stop-color="#bed0d9" />
                        <stop offset=".424" stop-color="#96a4ac" />
                        <stop offset=".652" stop-color="#5f686d" />
                        <stop offset=".907" stop-color="#1a1d1e" />
                        <stop offset="1" />
                    </linearGradient>
                    <path
                        d="M829.677 506.848c0 178.28-144.53 322.804-322.815 322.804-178.289 0-322.819-144.522-322.819-322.804 0-178.289 144.53-322.815 322.819-322.815 178.284-.001 322.815 144.527 322.815 322.815z"
                        fill="url(#c)" />
                    <path
                        d="M519.791 175.308l33.533-88.877v88.877h25.469V48.021h-38.275l-34.814 91.136h.331l-34.812-91.136h-38.276v127.287h25.469V86.431l33.533 88.877zM869.313 232.384l-43.514 63.447 68.347-33.615 18.538 22.231-107.569 54.012-21.735-26.315 41.697-62.869-.247-.31-69.357 29.686-21.984-26.138 72.532-96.044 18.542 22.243-45.417 61.159 70.287-31.349z" />
                    <path
                        d="M281.427 208.068c-10.251-9.951-26.069-12.951-40.939-3.733 2.847-7.363 1.691-14.858.187-19.015-6.414-11.662-8.662-13.137-13.899-17.561-17.097-14.324-35.082-2.093-47.93 13.219l-62.116 74.028 97.65 81.925 65.5-78.047c14.971-17.838 17.282-35.523 1.547-50.816zm-126.321 35.7l37.311-44.464c4.33-5.146 14.106-4.939 20.375.341 6.908 5.795 6.929 14.002 2.289 19.54l-36.896 43.95-23.079-19.367zm102.934 7.393l-38.896 46.353-24.355-20.47 39.186-46.711c4.434-5.281 14.312-6.817 20.974-1.229 7.504 6.312 8.246 15.912 3.091 22.057z"
                        fill="#333" />
                    <radialGradient id="d" cx="-1181.576" cy="2174.985" r="1730.313"
                        gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#ffffff" />
                        <stop offset=".31" stop-color="#fdfdfd" />
                        <stop offset=".451" stop-color="#f6f6f6" />
                        <stop offset=".557" stop-color="#e9e9e9" />
                        <stop offset=".646" stop-color="#d7d7d7" />
                        <stop offset=".724" stop-color="#bfbfbf" />
                        <stop offset=".794" stop-color="#a2a2a2" />
                        <stop offset=".859" stop-color="gray" />
                        <stop offset=".92" stop-color="#575757" />
                        <stop offset=".975" stop-color="#2b2b2b" />
                        <stop offset="1" stop-color="#141414" />
                    </radialGradient>
                    <path fill="url(#d)"
                        d="M520.06 170.39l33.533-88.875v88.875h25.47V43.103h-38.279l-34.811 91.133h.33l-34.812-91.133h-38.278V170.39h25.47V81.515l33.536 88.875z" />
                    <radialGradient id="e" cx="-1181.653" cy="2174.985" r="1730.461"
                        gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#ffffff" />
                        <stop offset=".31" stop-color="#fdfdfd" />
                        <stop offset=".451" stop-color="#f6f6f6" />
                        <stop offset=".557" stop-color="#e9e9e9" />
                        <stop offset=".646" stop-color="#d7d7d7" />
                        <stop offset=".724" stop-color="#bfbfbf" />
                        <stop offset=".794" stop-color="#a2a2a2" />
                        <stop offset=".859" stop-color="gray" />
                        <stop offset=".92" stop-color="#575757" />
                        <stop offset=".975" stop-color="#2b2b2b" />
                        <stop offset="1" stop-color="#141414" />
                    </radialGradient>
                    <path fill="url(#e)"
                        d="M869.563 223.844l-43.496 63.449 68.347-33.626 18.52 22.242-107.553 54.012-21.736-26.325 41.7-62.861-.245-.319-69.38 29.698-21.96-26.151 72.531-96.033 18.539 22.234-45.41 61.158 70.26-31.337z" />
                    <radialGradient id="f" cx="-1181.748" cy="2175.493" r="1731.785"
                        gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#ffffff" />
                        <stop offset=".31" stop-color="#fdfdfd" />
                        <stop offset=".451" stop-color="#f6f6f6" />
                        <stop offset=".557" stop-color="#e9e9e9" />
                        <stop offset=".646" stop-color="#d7d7d7" />
                        <stop offset=".724" stop-color="#bfbfbf" />
                        <stop offset=".794" stop-color="#a2a2a2" />
                        <stop offset=".859" stop-color="gray" />
                        <stop offset=".92" stop-color="#575757" />
                        <stop offset=".975" stop-color="#2b2b2b" />
                        <stop offset="1" stop-color="#141414" />
                    </radialGradient>
                    <path
                        d="M276.868 205.563c-10.229-9.951-26.068-12.953-40.916-3.743 2.824-7.364 1.67-14.86.166-18.996-6.415-11.682-8.642-13.137-13.923-17.57-17.096-14.333-35.059-2.095-47.887 13.231l-62.14 74.016 97.653 81.926 65.499-78.059c14.954-17.839 17.283-35.512 1.548-50.805zm-126.316 35.698l37.307-44.453c4.312-5.155 14.086-4.949 20.376.319 6.909 5.806 6.93 14.023 2.268 19.54l-36.873 43.959-23.078-19.365zm102.951 7.393l-38.896 46.352-24.398-20.47 39.207-46.721c4.434-5.269 14.291-6.806 20.953-1.216 7.547 6.32 8.29 15.9 3.134 22.055z"
                        fill="url(#f)" />
                    <radialGradient id="g" cx="-871.677" cy="1935.101" r="466.718"
                        gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#e6e6e6" />
                        <stop offset=".104" stop-color="#d6d6d6" />
                        <stop offset=".307" stop-color="#adadad" />
                        <stop offset=".588" stop-color="#6c6c6c" />
                        <stop offset=".933" stop-color="#121212" />
                        <stop offset="1" />
                    </radialGradient>
                    <path
                        d="M194.788 506.853c0-172.358 139.725-312.083 312.073-312.083 172.367 0 312.072 139.724 312.072 312.083 0 172.351-139.705 312.07-312.072 312.07-172.35 0-312.073-139.72-312.073-312.07z"
                        fill="url(#g)" />
                    <radialGradient id="h" cx="-744.024" cy="1872.327" r="678.742"
                        gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#ffffff" />
                        <stop offset=".344" stop-color="#fdfdfd" />
                        <stop offset=".481" stop-color="#f6f6f6" />
                        <stop offset=".582" stop-color="#eaeaea" />
                        <stop offset=".665" stop-color="#d8d8d8" />
                        <stop offset=".737" stop-color="#c2c2c2" />
                        <stop offset=".802" stop-color="#a6a6a6" />
                        <stop offset=".86" stop-color="#848484" />
                        <stop offset=".913" stop-color="#5f5f5f" />
                        <stop offset=".949" stop-color="#404040" />
                        <stop offset=".957" stop-color="#404040" />
                        <stop offset="1" stop-color="#404040" />
                        <stop offset="1" />
                    </radialGradient>
                    <path
                        d="M203.76 506.853c0-167.399 135.701-303.112 303.102-303.112s303.12 135.712 303.12 303.112S674.26 809.965 506.861 809.965 203.76 674.253 203.76 506.853z"
                        fill="url(#h)" />
                    <radialGradient id="i" cx="-943.312" cy="2129.614" r="1202.06"
                        gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)" gradientUnits="userSpaceOnUse">
                        <stop offset=".169" stop-color="#ffffff" />
                        <stop offset=".196" stop-color="#e0eff7" />
                        <stop offset=".241" stop-color="#b2d9ec" />
                        <stop offset=".287" stop-color="#8bc5e2" />
                        <stop offset=".335" stop-color="#6bb5da" />
                        <stop offset=".384" stop-color="#52a9d4" />
                        <stop offset=".436" stop-color="#41a0cf" />
                        <stop offset=".491" stop-color="#369bcd" />
                        <stop offset=".556" stop-color="#39c" />
                        <stop offset=".606" stop-color="#3396c8" />
                        <stop offset=".655" stop-color="#328ebc" />
                        <stop offset=".705" stop-color="#3180a8" />
                        <stop offset=".754" stop-color="#2f6d8c" />
                        <stop offset=".803" stop-color="#2d5468" />
                        <stop offset=".851" stop-color="#2a373d" />
                        <stop offset=".871" stop-color="#292929" />
                    </radialGradient>
                    <path d="M203.284 506.853H506.86V203.277c-167.669 0-303.576 135.908-303.576 303.576z"
                        fill="url(#i)" />
                    <radialGradient id="j" cx="-943.312" cy="2129.623" r="1202.037"
                        gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)" gradientUnits="userSpaceOnUse">
                        <stop offset=".169" stop-color="#ffffff" />
                        <stop offset=".196" stop-color="#e0eff7" />
                        <stop offset=".241" stop-color="#b2d9ec" />
                        <stop offset=".287" stop-color="#8bc5e2" />
                        <stop offset=".335" stop-color="#6bb5da" />
                        <stop offset=".384" stop-color="#52a9d4" />
                        <stop offset=".436" stop-color="#41a0cf" />
                        <stop offset=".491" stop-color="#369bcd" />
                        <stop offset=".556" stop-color="#39c" />
                        <stop offset=".606" stop-color="#3396c8" />
                        <stop offset=".655" stop-color="#328ebc" />
                        <stop offset=".705" stop-color="#3180a8" />
                        <stop offset=".754" stop-color="#2f6d8c" />
                        <stop offset=".803" stop-color="#2d5468" />
                        <stop offset=".851" stop-color="#2a373d" />
                        <stop offset=".871" stop-color="#292929" />
                    </radialGradient>
                    <path d="M506.86 506.853v303.578c167.667 0 303.576-135.933 303.576-303.578H506.86z"
                        fill="url(#j)" />
                    <radialGradient id="k" cx="-865.303" cy="1929.222" r="457.773"
                        gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#e6e6e6" />
                        <stop offset=".104" stop-color="#d6d6d6" />
                        <stop offset=".307" stop-color="#adadad" />
                        <stop offset=".588" stop-color="#6c6c6c" />
                        <stop offset=".933" stop-color="#121212" />
                        <stop offset="1" />
                    </radialGradient>
                    <path fill="url(#k)"
                        d="M812.95 501.458H512.242V200.75h-10.766v300.708H200.768v10.767h300.708v300.717h10.766V512.225H812.95z" />
                    <linearGradient id="l" gradientUnits="userSpaceOnUse" x1="-599.096" y1="2043.521"
                        x2="-152.677" y2="1612.133" gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)">
                        <stop offset="0" stop-color="#f0f4ff" />
                        <stop offset=".109" stop-color="#ebeff9" />
                        <stop offset=".247" stop-color="#dce0ea" />
                        <stop offset=".403" stop-color="#c4c7cf" />
                        <stop offset=".57" stop-color="#a2a4ab" />
                        <stop offset=".747" stop-color="#76777c" />
                        <stop offset=".929" stop-color="#414243" />
                        <stop offset="1" stop-color="#2b2b2b" />
                    </linearGradient>
                    <path
                        d="M512.242 209.267c160.142 2.848 289.366 132.062 292.232 292.191h5.359c-2.862-163.099-134.481-294.736-297.593-297.583l.002 5.392z"
                        fill="url(#l)" />
                    <path
                        d="M208.729 501.418c2.845-160.347 132.256-289.747 292.604-292.604v-5.383c-163.336 2.856-295.12 134.669-297.987 297.986l5.383.001z"
                        fill="#c2d7e8" />
                    <linearGradient id="m" gradientUnits="userSpaceOnUse" x1="-961.44" y1="1679.306"
                        x2="-515.015" y2="1247.911" gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)">
                        <stop offset="0" stop-color="#f0f4ff" />
                        <stop offset=".109" stop-color="#ebeff9" />
                        <stop offset=".247" stop-color="#dce0ea" />
                        <stop offset=".403" stop-color="#c4c7cf" />
                        <stop offset=".57" stop-color="#a2a4ab" />
                        <stop offset=".747" stop-color="#76777c" />
                        <stop offset=".929" stop-color="#414243" />
                        <stop offset="1" stop-color="#2b2b2b" />
                    </linearGradient>
                    <path
                        d="M501.476 804.433c-160.14-2.844-289.364-132.068-292.211-292.208h-5.381c2.865 163.108 134.483 294.75 297.593 297.595l-.001-5.387z"
                        fill="url(#m)" />
                    <path
                        d="M804.475 512.225c-2.866 160.14-132.092 289.364-292.232 292.208v5.387c163.11-2.845 294.747-134.485 297.593-297.595h-5.361z"
                        fill="#12404f" />
                    <linearGradient id="n" gradientUnits="userSpaceOnUse" x1="-745.471" y1="1833.135"
                        x2="-513.982" y2="1609.44" gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)">
                        <stop offset="0" stop-color="#c2d7e8" />
                        <stop offset=".134" stop-color="#bacfe1" />
                        <stop offset=".343" stop-color="#a4bacd" />
                        <stop offset=".6" stop-color="#8098ac" />
                        <stop offset=".894" stop-color="#4e697f" />
                        <stop offset="1" stop-color="#3a566d" />
                    </linearGradient>
                    <path fill="url(#n)" d="M495.724 203.432v292.119h-292.11v5.764h297.862V203.432z" />
                    <linearGradient id="o" gradientUnits="userSpaceOnUse" x1="-861.404" y1="1778.32"
                        x2="-419.473" y2="1351.268" gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)">
                        <stop offset="0" stop-color="#f0f4ff" />
                        <stop offset=".097" stop-color="#e8ebf6" />
                        <stop offset=".257" stop-color="#d1d4dd" />
                        <stop offset=".459" stop-color="#abaeb5" />
                        <stop offset=".695" stop-color="#78797d" />
                        <stop offset=".958" stop-color="#363637" />
                        <stop offset="1" stop-color="#2b2b2b" />
                    </linearGradient>
                    <path fill="url(#o)" d="M495.229 806.995V518.391h-289.2V512.7h294.892V806.995z" />
                    <linearGradient id="p" gradientUnits="userSpaceOnUse" x1="-535.674" y1="1619.907"
                        x2="-380.656" y2="1470.109" gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)">
                        <stop offset="0" stop-color="#d9def0" />
                        <stop offset=".123" stop-color="#d4daec" />
                        <stop offset=".263" stop-color="#c7cfe2" />
                        <stop offset=".411" stop-color="#b0bcd1" />
                        <stop offset=".566" stop-color="#90a1b8" />
                        <stop offset=".725" stop-color="#677f99" />
                        <stop offset=".885" stop-color="#355674" />
                        <stop offset=".972" stop-color="#173d5d" />
                    </linearGradient>
                    <path fill="url(#p)" d="M518.409 806.995V518.391h288.602V512.7H512.737V806.995z" />
                    <linearGradient id="q" gradientUnits="userSpaceOnUse" x1="-694.251" y1="1940.398"
                        x2="-252.797" y2="1513.809" gradientTransform="matrix(1 0 0 -1 1045.93 2135.176)">
                        <stop offset="0" stop-color="#f0f4ff" />
                        <stop offset=".109" stop-color="#ebeff9" />
                        <stop offset=".247" stop-color="#dce0ea" />
                        <stop offset=".403" stop-color="#c4c7cf" />
                        <stop offset=".57" stop-color="#a2a4ab" />
                        <stop offset=".747" stop-color="#76777c" />
                        <stop offset=".929" stop-color="#414243" />
                        <stop offset="1" stop-color="#2b2b2b" />
                    </linearGradient>
                    <path fill="url(#q)" d="M518.409 206.011v288.602h288.602v5.682H512.737V206.011z" />
                </svg>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="https://laravel.com/docs"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" stroke="#00000000" fill="none"
                                    viewBox="0 0 512 512" stroke-width="1.5" class="w-7 h-7 stroke-red-500">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g id="Christian_cross">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M400.7618,150.7H308.65V58.5925A13.1915,13.1915,0,0,0,295.4618,45.4H216.5425A13.1952,13.1952,0,0,0,203.35,58.5925V150.7H111.2425A13.1952,13.1952,0,0,0,98.05,163.8925v78.9193A13.1915,13.1915,0,0,0,111.2425,256H203.35V453.4118A13.1915,13.1915,0,0,0,216.5425,466.6h78.9193A13.1879,13.1879,0,0,0,308.65,453.4118V256h92.1118A13.1879,13.1879,0,0,0,413.95,242.8118V163.8925A13.1915,13.1915,0,0,0,400.7618,150.7ZM361.3,216.5125H269.1625V413.95a13.1625,13.1625,0,0,1-26.325,0V216.5125H150.7a13.1625,13.1625,0,1,1,0-26.325h92.1375V98.05a13.1625,13.1625,0,0,1,26.325,0v92.1375H361.3a13.1625,13.1625,0,0,1,0,26.325Z">
                                            </path>
                                        </g>
                                    </g>

                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Laravel has wonderful documentation covering every aspect of the framework. Whether you
                                are a newcomer or have prior experience with Laravel, we recommend reading our
                                documentation from beginning to end.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="https://laracasts.com"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round"
                                        d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                development. Check them out, see for yourself, and massively level up your development
                                skills in the process.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="https://laravel-news.com"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Laravel News is a community driven portal and newsletter aggregating all of the latest
                                and most important news in the Laravel ecosystem, including new package releases and
                                tutorials.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <div
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Laravel's robust library of first-party tools and libraries, such as <a
                                    href="https://forge.laravel.com"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>,
                                <a href="https://vapor.laravel.com"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>,
                                <a href="https://nova.laravel.com"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>,
                                and <a href="https://envoyer.io"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a>
                                help you take your projects to the next level. Pair them with powerful open source
                                libraries like <a href="https://laravel.com/docs/billing"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>,
                                <a href="https://laravel.com/docs/dusk"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>,
                                <a href="https://laravel.com/docs/broadcasting"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>,
                                <a href="https://laravel.com/docs/horizon"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>,
                                <a href="https://laravel.com/docs/sanctum"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>,
                                <a href="https://laravel.com/docs/telescope"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>,
                                and more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/sponsors/taylorotwell"
                            class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5"
                                class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>
