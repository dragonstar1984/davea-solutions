<script setup>
import { computed } from 'vue'
import { Head } from '@inertiajs/vue3'
import { usePage } from '@inertiajs/vue3'

const page = usePage()
const locale = computed(() => page.props.locale ?? 'en')

const translations = {
    en: {
        back: 'Back to home',
        eyebrow: 'About DAVEA Solutions',
        title: 'Technology should serve the idea, not complicate it.',
        intro: 'We build practical digital solutions for people and businesses that want to work better, present themselves professionally and grow with confidence.',
        contact: 'Discuss your project',
        storyEyebrow: 'Our approach',
        storyTitle: 'Clear communication. Thoughtful development. Useful results.',
        storyText: 'DAVEA Solutions brings together software development, web applications, automation and custom digital products in one flexible service. Every project starts with understanding the real need behind the request.',
        storyTextTwo: 'Whether you need a modern website, a custom application or improvements to an existing project, the goal remains the same: a solution that is clear, reliable and prepared for the future.',
        valuesEyebrow: 'What matters to us',
        values: [
            { number: '01', title: 'Clarity', text: 'We explain the process, the options and the next steps in a direct and understandable way.' },
            { number: '02', title: 'Practicality', text: 'We choose technology based on the real project requirements, not on trends alone.' },
            { number: '03', title: 'Quality', text: 'We care about clean structure, responsive interfaces and a reliable final result.' },
            { number: '04', title: 'Growth', text: 'We build with future improvements, maintenance and new possibilities in mind.' },
        ],
        capabilitiesEyebrow: 'What we can help with',
        capabilitiesTitle: 'From first idea to finished digital product.',
        capabilities: ['Websites and web applications', 'Custom desktop software', 'Automation and integrations', 'Databases and administration panels', 'Existing project improvements', 'Technical support and maintenance'],
        ctaTitle: 'Have an idea worth building?',
        ctaText: 'Tell us what you have in mind and we will help you define the most practical next step.',
        footer: 'Software solutions built around your ideas.',
    },
    ro: {
        back: 'Înapoi la pagina principală',
        eyebrow: 'Despre DAVEA Solutions',
        title: 'Tehnologia trebuie să susțină ideea, nu să o complice.',
        intro: 'Construim soluții digitale practice pentru persoane și companii care vor să lucreze mai bine, să se prezinte profesionist și să evolueze cu încredere.',
        contact: 'Discută proiectul tău',
        storyEyebrow: 'Abordarea noastră',
        storyTitle: 'Comunicare clară. Dezvoltare atentă. Rezultate utile.',
        storyText: 'DAVEA Solutions reunește dezvoltarea software, aplicațiile web, automatizările și produsele digitale personalizate într-un serviciu flexibil. Fiecare proiect începe prin înțelegerea nevoii reale din spatele solicitării.',
        storyTextTwo: 'Fie că ai nevoie de un website modern, de o aplicație personalizată sau de îmbunătățiri pentru un proiect existent, obiectivul rămâne același: o soluție clară, stabilă și pregătită pentru viitor.',
        valuesEyebrow: 'Ce este important pentru noi',
        values: [
            { number: '01', title: 'Claritate', text: 'Explicăm procesul, opțiunile și pașii următori într-un mod direct și ușor de înțeles.' },
            { number: '02', title: 'Practicitate', text: 'Alegem tehnologia în funcție de cerințele reale ale proiectului, nu doar în funcție de tendințe.' },
            { number: '03', title: 'Calitate', text: 'Acordăm atenție structurii curate, interfețelor responsive și unui rezultat final stabil.' },
            { number: '04', title: 'Evoluție', text: 'Construim ținând cont de îmbunătățiri, mentenanță și noi posibilități în viitor.' },
        ],
        capabilitiesEyebrow: 'Cu ce te putem ajuta',
        capabilitiesTitle: 'De la prima idee până la produsul digital final.',
        capabilities: ['Website-uri și aplicații web', 'Software desktop personalizat', 'Automatizări și integrări', 'Baze de date și panouri de administrare', 'Îmbunătățirea proiectelor existente', 'Suport tehnic și mentenanță'],
        ctaTitle: 'Ai o idee care merită construită?',
        ctaText: 'Spune-ne ce ai în minte și te ajutăm să definești următorul pas practic.',
        footer: 'Soluții software construite în jurul ideilor tale.',
    },
    de: {
        back: 'Zurück zur Startseite',
        eyebrow: 'Über DAVEA Solutions',
        title: 'Technologie soll Ideen unterstützen und nicht komplizierter machen.',
        intro: 'Wir entwickeln praktische digitale Lösungen für Menschen und Unternehmen, die besser arbeiten, professionell auftreten und sicher wachsen möchten.',
        contact: 'Projekt besprechen',
        storyEyebrow: 'Unser Ansatz',
        storyTitle: 'Klare Kommunikation. Sorgfältige Entwicklung. Nützliche Ergebnisse.',
        storyText: 'DAVEA Solutions verbindet Softwareentwicklung, Webanwendungen, Automatisierung und individuelle digitale Produkte in einem flexiblen Service. Jedes Projekt beginnt mit dem Verständnis des eigentlichen Bedarfs.',
        storyTextTwo: 'Ob moderne Website, individuelle Anwendung oder Verbesserung eines bestehenden Projekts: Das Ziel bleibt eine klare, zuverlässige und zukunftsfähige Lösung.',
        valuesEyebrow: 'Was uns wichtig ist',
        values: [
            { number: '01', title: 'Klarheit', text: 'Wir erklären Prozess, Optionen und nächste Schritte direkt und verständlich.' },
            { number: '02', title: 'Praktikabilität', text: 'Wir wählen Technologien nach den tatsächlichen Anforderungen des Projekts.' },
            { number: '03', title: 'Qualität', text: 'Wir achten auf saubere Strukturen, responsive Oberflächen und zuverlässige Ergebnisse.' },
            { number: '04', title: 'Wachstum', text: 'Wir berücksichtigen zukünftige Verbesserungen, Wartung und neue Möglichkeiten.' },
        ],
        capabilitiesEyebrow: 'Wobei wir helfen können',
        capabilitiesTitle: 'Von der ersten Idee bis zum fertigen digitalen Produkt.',
        capabilities: ['Websites und Webanwendungen', 'Individuelle Desktop-Software', 'Automatisierung und Integrationen', 'Datenbanken und Administrationsbereiche', 'Verbesserung bestehender Projekte', 'Technischer Support und Wartung'],
        ctaTitle: 'Haben Sie eine Idee, die entwickelt werden soll?',
        ctaText: 'Erzählen Sie uns davon und wir helfen beim nächsten praktischen Schritt.',
        footer: 'Softwarelösungen rund um Ihre Ideen.',
    },
    es: {
        back: 'Volver al inicio',
        eyebrow: 'Sobre DAVEA Solutions',
        title: 'La tecnología debe apoyar la idea, no complicarla.',
        intro: 'Construimos soluciones digitales prácticas para personas y empresas que quieren trabajar mejor, presentarse profesionalmente y crecer con confianza.',
        contact: 'Habla sobre tu proyecto',
        storyEyebrow: 'Nuestro enfoque',
        storyTitle: 'Comunicación clara. Desarrollo cuidadoso. Resultados útiles.',
        storyText: 'DAVEA Solutions reúne desarrollo de software, aplicaciones web, automatización y productos digitales personalizados en un servicio flexible. Cada proyecto comienza entendiendo la necesidad real.',
        storyTextTwo: 'Ya sea un sitio web moderno, una aplicación personalizada o mejoras para un proyecto existente, el objetivo es el mismo: una solución clara, fiable y preparada para el futuro.',
        valuesEyebrow: 'Lo que nos importa',
        values: [
            { number: '01', title: 'Claridad', text: 'Explicamos el proceso, las opciones y los siguientes pasos de forma directa y comprensible.' },
            { number: '02', title: 'Practicidad', text: 'Elegimos la tecnología según las necesidades reales del proyecto, no solo según las tendencias.' },
            { number: '03', title: 'Calidad', text: 'Cuidamos la estructura, las interfaces responsive y la fiabilidad del resultado final.' },
            { number: '04', title: 'Crecimiento', text: 'Construimos pensando en mejoras futuras, mantenimiento y nuevas posibilidades.' },
        ],
        capabilitiesEyebrow: 'En qué podemos ayudarte',
        capabilitiesTitle: 'Desde la primera idea hasta el producto digital terminado.',
        capabilities: ['Sitios web y aplicaciones web', 'Software de escritorio personalizado', 'Automatización e integraciones', 'Bases de datos y paneles de administración', 'Mejora de proyectos existentes', 'Soporte técnico y mantenimiento'],
        ctaTitle: '¿Tienes una idea que merece construirse?',
        ctaText: 'Cuéntanos qué tienes en mente y te ayudaremos a definir el siguiente paso práctico.',
        footer: 'Soluciones de software construidas alrededor de tus ideas.',
    },
}

const content = computed(() => translations[locale.value] ?? translations.en)

const pageSlug = '/about'
const seo = computed(() => ({
    title: `${content.value.title} | DAVEA Solutions`,
    description: content.value.intro,
    canonical: `https://daveasolutions.com/${locale.value}${pageSlug}`,
}))
const languages = [
    { code: 'en', label: 'EN' },
    { code: 'ro', label: 'RO' },
    { code: 'de', label: 'DE' },
    { code: 'es', label: 'ES' },
]
</script>

<template>
    <Head>
        <title>{{ seo.title }}</title>
        <meta name="description" :content="seo.description" />
        <link rel="canonical" :href="seo.canonical" />
        <meta property="og:title" :content="seo.title" />
        <meta property="og:description" :content="seo.description" />
        <meta property="og:url" :content="seo.canonical" />
        <meta property="og:type" content="website" />
        <link
            v-for="language in languages"
            :key="`alternate-${language.code}`"
            rel="alternate"
            :hreflang="language.code"
            :href="`https://daveasolutions.com/${language.code}${pageSlug}`"
        />
        <link rel="alternate" hreflang="x-default" :href="`https://daveasolutions.com/en${pageSlug}`" />
    </Head>
    <div class="min-h-screen overflow-hidden bg-[#07111f] text-white">
        <header class="sticky top-0 z-30 border-b border-white/10 bg-[#07111f]/90 backdrop-blur-xl">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">
                <a :href="`/${locale}`" class="group flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-blue-400 via-blue-500 to-indigo-600 text-white shadow-lg shadow-blue-500/30 transition duration-300 group-hover:-rotate-3 group-hover:shadow-blue-400/40">
                        <img
                            src="/davea-icon-512.png"
                            alt="DAVEA Solutions"
                            class="h-8 w-8 object-contain"
                        />
                    </span>
                    <span class="text-lg font-black tracking-tight">DAVEA<span class="text-blue-400">.</span> <span class="text-slate-300">Solutions</span></span>
                </a>

                <div class="flex items-center gap-3">
                    <div class="flex items-center gap-1 rounded-xl border border-white/10 bg-white/5 p-1">
                        <a
                            v-for="language in languages"
                            :key="language.code"
                            :href="`/${language.code}/about`"
                            :class="[
                                'rounded-lg px-2.5 py-1.5 text-[11px] font-black transition',
                                locale === language.code ? 'bg-blue-500 text-white shadow-lg shadow-blue-500/20' : 'text-slate-400 hover:text-white'
                            ]"
                        >
                            {{ language.label }}
                        </a>
                    </div>
                    <a
                        :href="`/${locale}`"
                        class="hidden rounded-xl border border-white/15 px-5 py-3 text-sm font-black text-slate-200 transition hover:border-blue-400 hover:text-white sm:block"
                    >
                        {{ content.back }}
                    </a>
                </div>
            </div>
        </header>

        <main>
            <section class="relative isolate min-h-[620px] overflow-hidden bg-[#07111f]">
                <div class="absolute -right-48 -top-48 h-[38rem] w-[38rem] rounded-full bg-blue-600/25 blur-3xl"></div>
                <div class="absolute -bottom-48 -left-48 h-[32rem] w-[32rem] rounded-full bg-cyan-500/10 blur-3xl"></div>
                <div class="pointer-events-none absolute inset-0 opacity-[0.14] [background-image:linear-gradient(rgba(96,165,250,0.35)_1px,transparent_1px),linear-gradient(90deg,rgba(96,165,250,0.35)_1px,transparent_1px)] [background-size:64px_64px]"></div>

                <div class="relative mx-auto max-w-7xl px-6 py-24 lg:px-8 lg:py-32">
                    <a :href="`/${locale}`" class="inline-flex items-center gap-2 text-sm font-bold text-blue-400 transition hover:text-blue-300"><span>←</span><span>{{ content.back }}</span></a>
                    <div class="mt-16 max-w-5xl">
                        <div class="inline-flex items-center gap-3 rounded-full border border-blue-400/20 bg-blue-400/10 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] text-blue-300"><span class="h-2 w-2 animate-pulse rounded-full bg-blue-400"></span>{{ content.eyebrow }}</div>
                        <h1 class="mt-7 max-w-4xl text-5xl font-black leading-[1.04] tracking-[-0.04em] sm:text-7xl">{{ content.title }}</h1>
                        <p class="mt-8 max-w-3xl text-lg leading-8 text-slate-300 sm:text-xl">{{ content.intro }}</p>
                    </div>
                </div>
            </section>

            <section class="bg-white py-28 text-slate-950">
                <div class="mx-auto grid max-w-7xl gap-14 px-6 lg:grid-cols-[0.8fr_1.2fr] lg:px-8">
                    <div>
                        <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">{{ content.storyEyebrow }}</p>
                        <h2 class="mt-5 text-4xl font-black leading-tight tracking-tight sm:text-5xl">{{ content.storyTitle }}</h2>
                    </div>
                    <div class="space-y-6 text-lg leading-8 text-slate-600">
                        <p>{{ content.storyText }}</p>
                        <p>{{ content.storyTextTwo }}</p>
                        <a :href="`/${locale}/contact`" class="inline-flex rounded-xl bg-slate-950 px-6 py-3.5 font-black text-white transition hover:-translate-y-0.5 hover:bg-blue-600">{{ content.contact }} <span class="ml-2">→</span></a>
                    </div>
                </div>
            </section>

            <section class="bg-slate-100 py-28 text-slate-950">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">{{ content.valuesEyebrow }}</p>
                    <div class="mt-5 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                        <article v-for="value in content.values" :key="value.number" class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-300 hover:shadow-xl">
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-100 text-sm font-black text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">{{ value.number }}</span>
                            <h3 class="mt-8 text-xl font-black">{{ value.title }}</h3>
                            <p class="mt-4 leading-7 text-slate-600">{{ value.text }}</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="bg-[#0c1a2d] py-28">
                <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-2 lg:px-8">
                    <div>
                        <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-400">{{ content.capabilitiesEyebrow }}</p>
                        <h2 class="mt-5 text-4xl font-black leading-tight tracking-tight sm:text-5xl">{{ content.capabilitiesTitle }}</h2>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div v-for="(capability, index) in content.capabilities" :key="capability" class="flex items-start gap-4 rounded-2xl border border-white/10 bg-white/[0.04] p-5 text-slate-300 transition hover:border-blue-400/40 hover:bg-white/[0.08]"><span class="text-blue-400">0{{ index + 1 }}</span><span class="font-semibold leading-6">{{ capability }}</span></div>
                    </div>
                </div>
            </section>

            <section class="relative overflow-hidden bg-blue-600 py-28">
                <div class="absolute -right-24 -top-24 h-80 w-80 rounded-full border-[30px] border-white/10"></div>
                <div class="absolute -bottom-32 -left-24 h-80 w-80 rounded-full border-[22px] border-white/10"></div>
                <div class="relative mx-auto max-w-4xl px-6 text-center lg:px-8">
                    <h2 class="text-4xl font-black tracking-tight sm:text-6xl">{{ content.ctaTitle }}</h2>
                    <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-blue-100">{{ content.ctaText }}</p>
                    <a :href="`/${locale}/contact`" class="mt-10 inline-flex items-center rounded-xl bg-white px-7 py-4 font-black text-blue-700 shadow-xl transition hover:-translate-y-1 hover:bg-blue-50">{{ content.contact }} <span class="ml-3">↗</span></a>
                </div>
            </section>
        </main>

        <footer class="border-t border-white/10 bg-[#07111f] text-slate-400">
            <div class="mx-auto flex max-w-7xl flex-col gap-6 px-6 py-9 text-sm lg:px-8">
                <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <a :href="`/${locale}`" class="font-black text-white transition hover:text-blue-400">
                            DAVEA<span class="text-blue-400">.</span> Solutions
                        </a>
                        <p class="mt-2">{{ content.footer }}</p>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-5 gap-y-3">
                        <a :href="`/${locale}`" class="transition hover:text-white">
                            {{ locale === 'ro' ? 'Acasă' : locale === 'de' ? 'Startseite' : locale === 'es' ? 'Inicio' : 'Home' }}
                        </a>

                        <a :href="`/${locale}/contact`" class="transition hover:text-white">
                            {{ content.contact }}
                        </a>

                        <a :href="`/${locale}/privacy`" class="transition hover:text-white">
                            {{ locale === 'ro' ? 'Confidențialitate' : locale === 'de' ? 'Datenschutz' : locale === 'es' ? 'Privacidad' : 'Privacy' }}
                        </a>

                        <a :href="`/${locale}/terms`" class="transition hover:text-white">
                            {{ locale === 'ro' ? 'Termeni' : locale === 'de' ? 'Bedingungen' : locale === 'es' ? 'Términos' : 'Terms' }}
                        </a>

                        <a :href="`/${locale}/cookies`" class="transition hover:text-white">
                            {{ locale === 'ro' ? 'Cookie-uri' : 'Cookies' }}
                        </a>

                        <span class="text-slate-600">|</span>

                        <a href="mailto:contact@davea.ro" class="transition hover:text-white">contact@davea.ro</a>
                    </div>
                </div>

                <div class="border-t border-white/10 pt-5 text-xs text-slate-500">
                    © {{ new Date().getFullYear() }} DAVEA Solutions.
                    {{ locale === 'ro' ? 'Toate drepturile rezervate.' : locale === 'de' ? 'Alle Rechte vorbehalten.' : locale === 'es' ? 'Todos los derechos reservados.' : 'All rights reserved.' }}
                </div>
            </div>
        </footer>
    </div>
</template>
