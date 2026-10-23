<script setup>
import { computed, ref } from 'vue'
import { Head } from '@inertiajs/vue3'
import { usePage } from '@inertiajs/vue3'

const page = usePage()
const locale = computed(() => page.props.locale ?? 'en')
const mobileMenuOpen = ref(false)

const translations = {
    en: {
        back: 'Back to home',
        eyebrow: 'Selected work',
        title: 'Real projects. Practical digital solutions.',
        intro: 'A selection of completed and functional projects that show our experience with education platforms, web applications, PWAs and custom desktop software.',
        contact: 'Discuss your project',
        featured: 'Our projects',
        heading: 'Built for real needs and real users.',
        description: 'Each project below is presented honestly, with its purpose, technologies and current status.',
        status: 'Status',
        technology: 'Technologies',
        clientProject: 'Client project',
        online: 'Online project',
        functional: 'Functional application',
        completed: 'Completed project',
        development: 'Final project under development',
        discuss: 'Discuss a similar project',
        open: 'Open project',
        projects: [
            {
                number: '01',
                category: 'Educational platform',
                title: 'DAVEA Academy',
                text: 'A premium programming education platform for presenting courses, learning resources and practical projects in a clear digital environment.',
                status: 'Online project',
                technologies: 'PHP · Laravel · HTML · CSS · JavaScript',
                link: 'https://davea.ro/',
                linkLabel: 'Open project',
                accent: 'from-blue-600 via-indigo-600 to-slate-950',
            },
            {
                number: '02',
                category: 'Weather PWA',
                title: 'DAVEA AI Weather Station',
                text: 'A functional weather application with location detection, current conditions, hourly and 7-day forecasts, atmospheric details and offline-ready PWA features.',
                status: 'Functional application',
                technologies: 'HTML5 · CSS3 · JavaScript · OpenWeatherMap API · PWA',
                link: '',
                linkLabel: '',
                accent: 'from-cyan-500 via-blue-600 to-indigo-950',
            },
            {
                number: '03',
                category: 'IT services website',
                title: 'DAVEA Solutions',
                text: 'A multilingual website for presenting software development, web applications, automation and custom digital solutions to international clients.',
                status: 'Final project under development',
                technologies: 'Laravel · Inertia · Vue · MySQL · Tailwind CSS',
                link: 'https://daveasolutions.com/',
                linkLabel: 'Open website',
                accent: 'from-violet-600 via-blue-700 to-slate-950',
            },
            {
                number: '04',
                category: 'Custom desktop software',
                title: 'Accounts Payable Management Software',
                text: 'A custom desktop application created for a client to manage ledgers, invoices, payment statuses, totals and supporting PDF documents.',
                status: 'Completed project · 5-star feedback',
                technologies: 'C# · SQL · Firebase Authentication · Firestore/Realtime Database · Firebase Storage',
                link: '',
                linkLabel: '',
                accent: 'from-emerald-500 via-teal-700 to-slate-950',
            },
        ],
        bottomTitle: 'Have a project that should be next?',
        bottomText: 'Tell us what you want to build, improve or automate. We will help you find a practical direction.',
        footer: 'Software solutions built around your ideas.',
    },

    ro: {
        back: 'Înapoi la pagina principală',
        eyebrow: 'Proiecte selectate',
        title: 'Proiecte reale. Soluții digitale practice.',
        intro: 'O selecție de proiecte finalizate și funcționale care arată experiența noastră cu platforme educaționale, aplicații web, PWA-uri și software desktop personalizat.',
        contact: 'Discută proiectul tău',
        featured: 'Proiectele noastre',
        heading: 'Construite pentru nevoi și utilizatori reali.',
        description: 'Fiecare proiect este prezentat corect, cu scopul, tehnologiile și starea actuală.',
        status: 'Status',
        technology: 'Tehnologii',
        clientProject: 'Proiect pentru client',
        online: 'Proiect online',
        functional: 'Aplicație funcțională',
        completed: 'Proiect finalizat',
        development: 'Proiect final în dezvoltare',
        discuss: 'Discută un proiect similar',
        open: 'Deschide proiectul',
        projects: [
            {
                number: '01',
                category: 'Platformă educațională',
                title: 'DAVEA Academy',
                text: 'O platformă premium de formare în programare pentru prezentarea cursurilor, resurselor de învățare și proiectelor practice într-un mediu digital clar.',
                status: 'Proiect online',
                technologies: 'PHP · Laravel · HTML · CSS · JavaScript',
                link: 'https://davea.ro/',
                linkLabel: 'Deschide proiectul',
                accent: 'from-blue-600 via-indigo-600 to-slate-950',
            },
            {
                number: '02',
                category: 'PWA meteo',
                title: 'DAVEA AI Weather Station',
                text: 'O aplicație meteo funcțională cu localizare automată, vreme curentă, prognoză orară și pe 7 zile, detalii atmosferice și funcții PWA pregătite pentru utilizare offline.',
                status: 'Aplicație funcțională',
                technologies: 'HTML5 · CSS3 · JavaScript · OpenWeatherMap API · PWA',
                link: '',
                linkLabel: '',
                accent: 'from-cyan-500 via-blue-600 to-indigo-950',
            },
            {
                number: '03',
                category: 'Website pentru servicii IT',
                title: 'DAVEA Solutions',
                text: 'Un website multilingv pentru prezentarea serviciilor de dezvoltare software, aplicații web, automatizări și soluții digitale personalizate pentru clienți internaționali.',
                status: 'Proiect final în dezvoltare',
                technologies: 'Laravel · Inertia · Vue · MySQL · Tailwind CSS',
                link: 'https://daveasolutions.com/',
                linkLabel: 'Deschide website-ul',
                accent: 'from-violet-600 via-blue-700 to-slate-950',
            },
            {
                number: '04',
                category: 'Software desktop personalizat',
                title: 'Accounts Payable Management Software',
                text: 'O aplicație desktop personalizată realizată pentru un client, pentru gestionarea registrelor, facturilor, statusurilor de plată, totalurilor și documentelor PDF.',
                status: 'Proiect finalizat · feedback de 5 stele',
                technologies: 'C# · SQL · Firebase Authentication · Firestore/Realtime Database · Firebase Storage',
                link: '',
                linkLabel: '',
                accent: 'from-emerald-500 via-teal-700 to-slate-950',
            },
        ],
        bottomTitle: 'Ai un proiect care urmează?',
        bottomText: 'Spune-ne ce vrei să construiești, să îmbunătățești sau să automatizezi. Te ajutăm să găsești o direcție practică.',
        footer: 'Soluții software construite în jurul ideilor tale.',
    },

    de: {
        back: 'Zurück zur Startseite',
        eyebrow: 'Ausgewählte Projekte',
        title: 'Reale Projekte. Praktische digitale Lösungen.',
        intro: 'Eine Auswahl abgeschlossener und funktionierender Projekte aus den Bereichen Bildungsplattformen, Webanwendungen, PWAs und individuelle Desktop-Software.',
        contact: 'Projekt besprechen',
        featured: 'Unsere Projekte',
        heading: 'Entwickelt für echte Anforderungen und Benutzer.',
        description: 'Jedes Projekt wird mit Zweck, Technologien und aktuellem Status ehrlich präsentiert.',
        status: 'Status',
        technology: 'Technologien',
        clientProject: 'Kundenprojekt',
        online: 'Online-Projekt',
        functional: 'Funktionierende Anwendung',
        completed: 'Abgeschlossenes Projekt',
        development: 'Abschlussprojekt in Entwicklung',
        discuss: 'Ähnliches Projekt besprechen',
        open: 'Projekt öffnen',
        projects: [
            {
                number: '01',
                category: 'Bildungsplattform',
                title: 'DAVEA Academy',
                text: 'Eine Premium-Plattform für Programmierausbildung mit Kursen, Lernressourcen und praktischen Projekten in einer klaren digitalen Umgebung.',
                status: 'Online-Projekt',
                technologies: 'PHP · Laravel · HTML · CSS · JavaScript',
                link: 'https://davea.ro/',
                linkLabel: 'Projekt öffnen',
                accent: 'from-blue-600 via-indigo-600 to-slate-950',
            },
            {
                number: '02',
                category: 'Wetter-PWA',
                title: 'DAVEA AI Weather Station',
                text: 'Eine funktionierende Wetteranwendung mit Standorterkennung, aktueller Wetterlage, Stunden- und 7-Tage-Prognose sowie Offline-fähigen PWA-Funktionen.',
                status: 'Funktionierende Anwendung',
                technologies: 'HTML5 · CSS3 · JavaScript · OpenWeatherMap API · PWA',
                link: '',
                linkLabel: '',
                accent: 'from-cyan-500 via-blue-600 to-indigo-950',
            },
            {
                number: '03',
                category: 'IT-Service-Website',
                title: 'DAVEA Solutions',
                text: 'Eine mehrsprachige Website für Softwareentwicklung, Webanwendungen, Automatisierungen und individuelle digitale Lösungen für internationale Kunden.',
                status: 'Abschlussprojekt in Entwicklung',
                technologies: 'Laravel · Inertia · Vue · MySQL · Tailwind CSS',
                link: 'https://daveasolutions.com/',
                linkLabel: 'Website öffnen',
                accent: 'from-violet-600 via-blue-700 to-slate-950',
            },
            {
                number: '04',
                category: 'Individuelle Desktop-Software',
                title: 'Accounts Payable Management Software',
                text: 'Eine individuelle Desktop-Anwendung für einen Kunden zur Verwaltung von Konten, Rechnungen, Zahlungsstatus, Summen und PDF-Dokumenten.',
                status: 'Abgeschlossen · 5-Sterne-Feedback',
                technologies: 'C# · SQL · Firebase Authentication · Firestore/Realtime Database · Firebase Storage',
                link: '',
                linkLabel: '',
                accent: 'from-emerald-500 via-teal-700 to-slate-950',
            },
        ],
        bottomTitle: 'Haben Sie ein Projekt für uns?',
        bottomText: 'Erzählen Sie uns, was Sie entwickeln, verbessern oder automatisieren möchten. Wir helfen bei der praktischen Richtung.',
        footer: 'Softwarelösungen rund um Ihre Ideen.',
    },

    es: {
        back: 'Volver al inicio',
        eyebrow: 'Proyectos seleccionados',
        title: 'Proyectos reales. Soluciones digitales prácticas.',
        intro: 'Una selección de proyectos terminados y funcionales en las áreas de plataformas educativas, aplicaciones web, PWAs y software de escritorio personalizado.',
        contact: 'Habla sobre tu proyecto',
        featured: 'Nuestros proyectos',
        heading: 'Construidos para necesidades y usuarios reales.',
        description: 'Cada proyecto se presenta con su objetivo, tecnologías y estado actual.',
        status: 'Estado',
        technology: 'Tecnologías',
        clientProject: 'Proyecto para cliente',
        online: 'Proyecto online',
        functional: 'Aplicación funcional',
        completed: 'Proyecto terminado',
        development: 'Proyecto final en desarrollo',
        discuss: 'Hablar sobre un proyecto similar',
        open: 'Abrir proyecto',
        projects: [
            {
                number: '01',
                category: 'Plataforma educativa',
                title: 'DAVEA Academy',
                text: 'Una plataforma premium de formación en programación para presentar cursos, recursos de aprendizaje y proyectos prácticos en un entorno digital claro.',
                status: 'Proyecto online',
                technologies: 'PHP · Laravel · HTML · CSS · JavaScript',
                link: 'https://davea.ro/',
                linkLabel: 'Abrir proyecto',
                accent: 'from-blue-600 via-indigo-600 to-slate-950',
            },
            {
                number: '02',
                category: 'PWA meteorológica',
                title: 'DAVEA AI Weather Station',
                text: 'Una aplicación meteorológica funcional con localización automática, tiempo actual, previsión horaria y de 7 días y funciones PWA preparadas para el modo offline.',
                status: 'Aplicación funcional',
                technologies: 'HTML5 · CSS3 · JavaScript · OpenWeatherMap API · PWA',
                link: '',
                linkLabel: '',
                accent: 'from-cyan-500 via-blue-600 to-indigo-950',
            },
            {
                number: '03',
                category: 'Sitio web de servicios IT',
                title: 'DAVEA Solutions',
                text: 'Un sitio web multilingüe para presentar desarrollo de software, aplicaciones web, automatizaciones y soluciones digitales para clientes internacionales.',
                status: 'Proyecto final en desarrollo',
                technologies: 'Laravel · Inertia · Vue · MySQL · Tailwind CSS',
                link: 'https://daveasolutions.com/',
                linkLabel: 'Abrir sitio web',
                accent: 'from-violet-600 via-blue-700 to-slate-950',
            },
            {
                number: '04',
                category: 'Software de escritorio personalizado',
                title: 'Accounts Payable Management Software',
                text: 'Una aplicación de escritorio personalizada para un cliente destinada a gestionar registros, facturas, estados de pago, totales y documentos PDF.',
                status: 'Proyecto terminado · feedback de 5 estrellas',
                technologies: 'C# · SQL · Firebase Authentication · Firestore/Realtime Database · Firebase Storage',
                link: '',
                linkLabel: '',
                accent: 'from-emerald-500 via-teal-700 to-slate-950',
            },
        ],
        bottomTitle: '¿Tienes un proyecto para nosotros?',
        bottomText: 'Cuéntanos qué quieres construir, mejorar o automatizar. Te ayudaremos a encontrar una dirección práctica.',
        footer: 'Soluciones de software construidas alrededor de tus ideas.',
    },
}

const content = computed(() => translations[locale.value] ?? translations.en)

const pageSlug = '/portfolio'
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
        <header class="sticky top-0 z-30 border-b border-white/10 bg-[#07111f]/95 backdrop-blur-xl">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
                <a :href="`/${locale}`" class="group flex items-center gap-3" @click="mobileMenuOpen = false">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-blue-400 via-blue-500 to-indigo-600 text-white shadow-lg shadow-blue-500/30 transition duration-300 group-hover:-rotate-3">
                        <img src="/davea-icon-512.png" alt="DAVEA Solutions" class="h-8 w-8 object-contain" />
                    </span>
                    <span class="text-lg font-black tracking-tight">DAVEA<span class="text-blue-400">.</span> <span class="text-slate-300">Solutions</span></span>
                </a>

                <nav class="hidden items-center gap-6 lg:flex">
                    <a :href="`/${locale}`" @click="mobileMenuOpen = false" class="text-sm font-bold text-slate-300 transition hover:text-white">{{ locale === 'ro' ? 'Acasă' : locale === 'de' ? 'Startseite' : locale === 'es' ? 'Inicio' : 'Home' }}</a>
<a :href="`/${locale}/services`" @click="mobileMenuOpen = false" class="text-sm font-bold text-slate-300 transition hover:text-white">{{ locale === 'ro' ? 'Servicii' : locale === 'de' ? 'Leistungen' : locale === 'es' ? 'Servicios' : 'Services' }}</a>
<a :href="`/${locale}/process`" @click="mobileMenuOpen = false" class="text-sm font-bold text-slate-300 transition hover:text-white">{{ locale === 'ro' ? 'Proces' : locale === 'de' ? 'Ablauf' : locale === 'es' ? 'Proceso' : 'Process' }}</a>
<a :href="`/${locale}/portfolio`" @click="mobileMenuOpen = false" class="text-sm font-bold text-slate-300 transition hover:text-white">{{ locale === 'ro' ? 'Portofoliu' : locale === 'de' ? 'Projekte' : locale === 'es' ? 'Portafolio' : 'Portfolio' }}</a>
<a :href="`/${locale}/about`" @click="mobileMenuOpen = false" class="text-sm font-bold text-slate-300 transition hover:text-white">{{ locale === 'ro' ? 'Despre' : locale === 'de' ? 'Über uns' : locale === 'es' ? 'Sobre nosotros' : 'About' }}</a>
<a :href="`/${locale}/contact`" @click="mobileMenuOpen = false" class="text-sm font-bold text-slate-300 transition hover:text-white">{{ locale === 'ro' ? 'Contact' : locale === 'de' ? 'Kontakt' : locale === 'es' ? 'Contacto' : 'Contact' }}</a>
                </nav>

                <div class="flex items-center gap-2">
                    <div class="hidden items-center gap-1 rounded-xl border border-white/10 bg-white/5 p-1 sm:flex">
                        <a v-for="language in languages" :key="language.code" :href="`/${language.code}/portfolio`" :class="['rounded-lg px-2.5 py-1.5 text-[11px] font-black transition', locale === language.code ? 'bg-blue-500 text-white shadow-lg shadow-blue-500/20' : 'text-slate-400 hover:text-white']">{{ language.label }}
</a>
                    </div>
                    <a :href="`/${locale}/contact`" class="hidden rounded-xl bg-blue-500 px-4 py-2.5 text-sm font-black text-white shadow-lg shadow-blue-500/20 transition hover:bg-blue-400 sm:inline-flex">{{ locale === 'ro' ? 'Discută proiectul' : locale === 'de' ? 'Projekt besprechen' : locale === 'es' ? 'Habla sobre tu proyecto' : 'Discuss your project' }}</a>
                    <button type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-slate-200 transition hover:border-blue-400 hover:text-white lg:hidden" :aria-expanded="mobileMenuOpen" aria-label="Open navigation menu" @click="mobileMenuOpen = !mobileMenuOpen">
                        <svg v-if="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" /></svg>
                        <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>
            </div>

            <div v-if="mobileMenuOpen" class="border-t border-white/10 bg-[#07111f] px-6 py-4 lg:hidden">
                <nav class="mx-auto max-w-7xl space-y-1">
                    <a :href="`/${locale}`" @click="mobileMenuOpen = false" class="block rounded-xl px-4 py-3 text-sm font-black text-slate-200 transition hover:bg-white/10 hover:text-white">{{ locale === 'ro' ? 'Acasă' : locale === 'de' ? 'Startseite' : locale === 'es' ? 'Inicio' : 'Home' }}</a>
<a :href="`/${locale}/services`" @click="mobileMenuOpen = false" class="block rounded-xl px-4 py-3 text-sm font-black text-slate-200 transition hover:bg-white/10 hover:text-white">{{ locale === 'ro' ? 'Servicii' : locale === 'de' ? 'Leistungen' : locale === 'es' ? 'Servicios' : 'Services' }}</a>
<a :href="`/${locale}/process`" @click="mobileMenuOpen = false" class="block rounded-xl px-4 py-3 text-sm font-black text-slate-200 transition hover:bg-white/10 hover:text-white">{{ locale === 'ro' ? 'Proces' : locale === 'de' ? 'Ablauf' : locale === 'es' ? 'Proceso' : 'Process' }}</a>
<a :href="`/${locale}/portfolio`" @click="mobileMenuOpen = false" class="block rounded-xl px-4 py-3 text-sm font-black text-slate-200 transition hover:bg-white/10 hover:text-white">{{ locale === 'ro' ? 'Portofoliu' : locale === 'de' ? 'Projekte' : locale === 'es' ? 'Portafolio' : 'Portfolio' }}</a>
<a :href="`/${locale}/about`" @click="mobileMenuOpen = false" class="block rounded-xl px-4 py-3 text-sm font-black text-slate-200 transition hover:bg-white/10 hover:text-white">{{ locale === 'ro' ? 'Despre' : locale === 'de' ? 'Über uns' : locale === 'es' ? 'Sobre nosotros' : 'About' }}</a>
<a :href="`/${locale}/contact`" @click="mobileMenuOpen = false" class="block rounded-xl px-4 py-3 text-sm font-black text-slate-200 transition hover:bg-white/10 hover:text-white">{{ locale === 'ro' ? 'Contact' : locale === 'de' ? 'Kontakt' : locale === 'es' ? 'Contacto' : 'Contact' }}</a>
                    <a :href="`/${locale}/contact`" @click="mobileMenuOpen = false" class="mt-3 block rounded-xl bg-blue-500 px-4 py-3 text-center text-sm font-black text-white shadow-lg shadow-blue-500/20">{{ locale === 'ro' ? 'Discută proiectul' : locale === 'de' ? 'Projekt besprechen' : locale === 'es' ? 'Habla sobre tu proyecto' : 'Discuss your project' }}</a>
                    <div class="mt-4 flex gap-2 border-t border-white/10 pt-4">
                        <a v-for="language in languages" :key="`mobile-${language.code}`" :href="`/${language.code}/portfolio`" class="rounded-lg border border-white/10 px-3 py-2 text-xs font-black text-slate-300 transition hover:border-blue-400 hover:text-white">{{ language.label }}
</a>
                    </div>
                </nav>
            </div>
        </header>

        <main>
            <section class="relative isolate min-h-[620px] overflow-hidden bg-[#07111f]">
                <div class="absolute -right-48 -top-48 h-[38rem] w-[38rem] rounded-full bg-blue-600/25 blur-3xl"></div>
                <div class="absolute -bottom-48 -left-48 h-[32rem] w-[32rem] rounded-full bg-cyan-500/10 blur-3xl"></div>
                <div class="pointer-events-none absolute inset-0 opacity-[0.14] [background-image:linear-gradient(rgba(96,165,250,0.35)_1px,transparent_1px),linear-gradient(90deg,rgba(96,165,250,0.35)_1px,transparent_1px)] [background-size:64px_64px]"></div>

                <div class="relative mx-auto max-w-7xl px-6 py-24 lg:px-8 lg:py-32">
                    <a :href="`/${locale}`" class="inline-flex items-center gap-2 text-sm font-bold text-blue-400 transition hover:text-blue-300">
                        <span>←</span>
                        <span>{{ content.back }}</span>
                    </a>

                    <div class="mt-16 max-w-5xl">
                        <div class="inline-flex items-center gap-3 rounded-full border border-blue-400/20 bg-blue-400/10 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] text-blue-300">
                            <span class="h-2 w-2 animate-pulse rounded-full bg-blue-400"></span>
                            {{ content.eyebrow }}
                        </div>

                        <h1 class="mt-7 max-w-4xl text-5xl font-black leading-[1.04] tracking-[-0.04em] sm:text-7xl">
                            {{ content.title }}
                        </h1>

                        <p class="mt-8 max-w-3xl text-lg leading-8 text-slate-300 sm:text-xl">
                            {{ content.intro }}
                        </p>
                    </div>
                </div>
            </section>

            <section class="bg-white py-28 text-slate-950">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mb-14 max-w-3xl">
                        <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">{{ content.featured }}</p>
                        <h2 class="mt-4 text-4xl font-black tracking-tight sm:text-5xl">{{ content.heading }}</h2>
                        <p class="mt-6 text-lg leading-8 text-slate-600">{{ content.description }}</p>
                    </div>

                    <div class="grid gap-7 md:grid-cols-2">
                        <article
                            v-for="project in content.projects"
                            :key="project.number"
                            class="group overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-sm transition duration-500 hover:-translate-y-1 hover:border-blue-300 hover:shadow-2xl hover:shadow-blue-100"
                        >
                            <div :class="['relative h-56 overflow-hidden bg-gradient-to-br p-7', project.accent]">
                                <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full border-[18px] border-white/10"></div>
                                <div class="absolute -bottom-16 -left-10 h-44 w-44 rounded-full border-[14px] border-white/10"></div>

                                <div class="relative flex h-full flex-col justify-between">
                                    <div class="flex items-start justify-between gap-4">
                                        <span class="text-sm font-black text-white/70">{{ project.number }}</span>
                                        <span class="rounded-full border border-white/20 bg-black/10 px-3 py-1 text-right text-[10px] font-black uppercase tracking-[0.12em] text-white/80">{{ project.category }}</span>
                                    </div>

                                    <div>
                                        <div class="mb-3 h-1 w-12 rounded-full bg-white/70 transition-all duration-500 group-hover:w-24"></div>
                                        <h3 class="text-2xl font-black text-white">{{ project.title }}</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="p-7">
                                <p class="leading-7 text-slate-600">{{ project.text }}</p>

                                <div class="mt-7 space-y-4 border-t border-slate-100 pt-6">
                                    <div>
                                        <p class="text-[10px] font-black uppercase tracking-[0.18em] text-slate-400">{{ content.status }}</p>
                                        <p class="mt-1 text-sm font-bold text-slate-800">{{ project.status }}</p>
                                    </div>

                                    <div>
                                        <p class="text-[10px] font-black uppercase tracking-[0.18em] text-slate-400">{{ content.technology }}</p>
                                        <p class="mt-1 text-sm font-bold leading-6 text-slate-800">{{ project.technologies }}</p>
                                    </div>
                                </div>

                                <div class="mt-7 flex flex-wrap gap-4">
                                    <a
                                        v-if="project.link"
                                        :href="project.link"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center font-black text-blue-600 transition hover:text-blue-500"
                                    >
                                        {{ project.linkLabel }}
                                        <span class="ml-2">↗</span>
                                    </a>

                                    <a :href="`/${locale}/contact`" class="inline-flex items-center font-black text-slate-700 transition hover:text-blue-600">
                                        {{ content.discuss }}
                                        <span class="ml-2">→</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="relative overflow-hidden bg-blue-600 py-28">
                <div class="absolute -right-24 -top-24 h-80 w-80 rounded-full border-[30px] border-white/10"></div>
                <div class="absolute -bottom-32 -left-24 h-80 w-80 rounded-full border-[22px] border-white/10"></div>

                <div class="relative mx-auto max-w-4xl px-6 text-center lg:px-8">
                    <h2 class="text-4xl font-black tracking-tight sm:text-6xl">{{ content.bottomTitle }}</h2>
                    <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-blue-100">{{ content.bottomText }}</p>
                    <a :href="`/${locale}/contact`" class="mt-10 inline-flex items-center rounded-xl bg-white px-7 py-4 font-black text-blue-700 shadow-xl transition hover:-translate-y-1 hover:bg-blue-50">
                        {{ content.contact }}
                        <span class="ml-3">↗</span>
                    </a>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="border-t border-white/10 bg-[#07111f] text-slate-400">
            <div class="mx-auto flex max-w-7xl flex-col gap-6 px-6 py-9 text-sm lg:px-8">
                <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <a
                            :href="`/${locale}`"
                            class="font-black text-white transition hover:text-blue-400"
                        >
                            DAVEA<span class="text-blue-400">.</span> Solutions
                        </a>

                        <p class="mt-2">
                            {{
                                locale === 'ro'
                                    ? 'Soluții software construite în jurul ideilor tale.'
                                    : locale === 'de'
                                        ? 'Softwarelösungen rund um Ihre Ideen.'
                                        : locale === 'es'
                                            ? 'Soluciones de software construidas alrededor de tus ideas.'
                                            : 'Software solutions built around your ideas.'
                            }}
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-5 gap-y-3">
                        <a
                            :href="`/${locale}`"
                            class="transition hover:text-white"
                        >
                            {{
                                locale === 'ro'
                                    ? 'Acasă'
                                    : locale === 'de'
                                        ? 'Startseite'
                                        : locale === 'es'
                                            ? 'Inicio'
                                            : 'Home'
                            }}
                        </a>

                        <a
                            :href="`/${locale}/contact`"
                            class="transition hover:text-white"
                        >
                            {{
                                locale === 'ro'
                                    ? 'Contact'
                                    : locale === 'de'
                                        ? 'Kontakt'
                                        : locale === 'es'
                                            ? 'Contacto'
                                            : 'Contact'
                            }}
                        </a>

                        <a
                            :href="`/${locale}/privacy`"
                            class="transition hover:text-white"
                        >
                            {{
                                locale === 'ro'
                                    ? 'Confidențialitate'
                                    : locale === 'de'
                                        ? 'Datenschutz'
                                        : locale === 'es'
                                            ? 'Privacidad'
                                            : 'Privacy'
                            }}
                        </a>

                        <a
                            :href="`/${locale}/terms`"
                            class="transition hover:text-white"
                        >
                            {{
                                locale === 'ro'
                                    ? 'Termeni'
                                    : locale === 'de'
                                        ? 'Bedingungen'
                                        : locale === 'es'
                                            ? 'Términos'
                                            : 'Terms'
                            }}
                        </a>

                        <a
                            :href="`/${locale}/cookies`"
                            class="transition hover:text-white"
                        >
                            {{
                                locale === 'ro'
                                    ? 'Cookie-uri'
                                    : locale === 'de'
                                        ? 'Cookies'
                                        : locale === 'es'
                                            ? 'Cookies'
                                            : 'Cookies'
                            }}
                        </a>

                        <span class="text-slate-600">|</span>

                        <a
                            href="mailto:contact@daveasolutions.com"
                            class="transition hover:text-white"
                        >
                            contact@daveasolutions.com
                        </a>
                    </div>
                </div>

                <div class="border-t border-white/10 pt-5 text-xs text-slate-500">
                    © {{ new Date().getFullYear() }} DAVEA Solutions.
                    {{
                        locale === 'ro'
                            ? 'Toate drepturile rezervate.'
                            : locale === 'de'
                                ? 'Alle Rechte vorbehalten.'
                                : locale === 'es'
                                    ? 'Todos los derechos reservados.'
                                    : 'All rights reserved.'
                    }}
                </div>
            </div>
        </footer>
    </div>
</template>