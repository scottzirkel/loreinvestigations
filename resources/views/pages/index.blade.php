@inject('storage', 'Illuminate\Support\Facades\Storage')
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/web/20240418183100cs_/https://loreinvestigations.com/_next/static/css/d4b18cc149264b03.css" data-precedence="next">
    <title>Lore Investigations</title>
    <meta name="description" content="Lore Investigations is a stand-alone web comic following the paranormal research of a haunted barn. Written by Amanda Jones and Scott Zirkel, art by Matt Hebb, Jason Worthington, and Juan Carlos Porras.">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="16x16">
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-stone-950 to-black">
<header class="bg-red-950 p-4 text-center">
    <img src="{{ $storage::url('/logo.png') }}" width="950" height="290" alt="Lore Investigations" class="mx-auto" />
</header>
<main class="mx-auto px-4 text-center md:px-12 lg:max-w-7xl">
    <div class="mx-auto max-w-2xl space-y-2 p-4 text-lg text-stone-200">
        <p>
            Lore Investigations follows the paranormal investigative team of Nathan and TJ. Their first case is The Creepy
            Barn, in which they go up against what is possibly a possessed teenage girl. Of course, it&apos;s hard to tell a
            regular teenage girl from one possessed by a ghost.
        </p>
        <p>
            Lore Investigations is written by Amanda Jones and{' '}
            <Link href="https://scottzirkel.com" target="_blank" class="transition hover:text-red-700">
            Scott Zirkel
            </Link>
            {', '}
            with art by{' '}
            <Link
                href="http://www.matthebb.com"
                target="_blank"
                class="text-stone-400 underline transition hover:text-red-700"
            >
            Matt Hebb
            </Link>
            {'. '}
            Jason Worthington is on inks and Juan Carlos Porras bringing up the colors.
        </p>
    </div>
    <footer class="space-y-2 text-center text-sm text-stone-400">
        <p>
            Copyright © 2009 – {date.getFullYear()}{' '}
            <Link class="text-red-700 transition hover:text-red-500" href="https://scottzirkel.com" target="_blank">
            Scott Zirkel.
            </Link>{' '}
            All rights reserved.
        </p>
        <p>
            Powered by{' '}
            <Link class="text-red-700 transition hover:text-red-500" href="https://webstrips.app" target="_blank">
            Webstrips
            </Link>
        </p>
    </footer>
    {children}
</main>
<Analytics />
</body>
</html>
