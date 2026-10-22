<script setup>
import { computed } from 'vue'
import { Head } from '@inertiajs/vue3'
import { usePage } from '@inertiajs/vue3'

const page = usePage()

const locale = computed(() => page.props.locale ?? 'en')

const translations = {
    en: {
        nav: {
            home: 'Home',
            services: 'Services',
            process: 'Process',
            portfolio: 'Portfolio',
            about: 'About',
            contact: 'Contact',
        },
        eyebrow: 'Software Development & Digital Solutions',
        title: 'Technology built around your ideas.',
        intro: 'We design and develop websites, web applications, desktop software, automations and custom digital solutions for people and businesses that want to move forward.',
        primaryCta: 'Discuss your project',
        secondaryCta: 'Explore services',
        heroNote: 'From idea to functional digital solution.',
        codeFile: 'davea_solution.ts',
        systemReady: '● system ready',
        serviceProgress: '01 / 04',

        servicesEyebrow: 'What we do',
        servicesTitle: 'Solutions for real-world challenges.',
        servicesIntro: 'Whether you need a professional website, an internal tool or a complete software solution, we start by understanding what you actually need.',

        services: [
            {
                title: 'Websites & Web Applications',
                text: 'Professional websites, landing pages, online stores and custom web applications.',
            },
            {
                title: 'Custom Software',
                text: 'Desktop applications, internal tools and software adapted to your workflow.',
            },
            {
                title: 'Automation & Integrations',
                text: 'Reduce repetitive work through smart automations, data management and integrations.',
            },
            {
                title: 'Existing Project Development',
                text: 'New features, bug fixing, improvements and continued development for existing projects.',
            },
        ],

        processEyebrow: 'How we work',
        processTitle: 'A clear path from idea to delivery.',
        processIntro: 'Good software starts with good communication. We keep the process clear, practical and focused on the result.',
        steps: [
            {
                number: '01',
                title: 'Understand',
                text: 'We clarify your idea, problem, users and business goals.',
            },
            {
                number: '02',
                title: 'Plan',
                text: 'We define the right solution, priorities, stages and expected result.',
            },
            {
                number: '03',
                title: 'Build',
                text: 'We develop, test and improve the project with your feedback.',
            },
            {
                number: '04',
                title: 'Deliver',
                text: 'We launch the solution and remain available for future improvements.',
            },
        ],

        capabilitiesEyebrow: 'Built for your needs',
        capabilitiesTitle: 'Not just code. Useful digital solutions.',
        capabilities: [
            'Responsive and modern interfaces',
            'Secure and maintainable architecture',
            'Custom workflows and business logic',
            'Databases and administration panels',
            'Project development from start to finish',
            'Support and future improvements',
        ],

        portfolioEyebrow: 'Selected work',
        portfolioTitle: 'Every project starts with a problem worth solving.',
        portfolioText: 'We are preparing a portfolio of real, personal and demonstrative projects. Each case will explain the challenge, the solution and the technology behind it.',
        portfolioCta: 'View portfolio',

        ctaTitle: 'Have an idea for a digital project?',
        ctaText: 'Tell us what you need. We will discuss your goals and identify the most suitable way to turn your idea into a working solution.',
        ctaButton: 'Start a conversation',
        footerText: 'Software solutions built around your ideas.',
        contactEmail: 'contact@davea.ro',
    },

    ro: {
        nav: {
            home: 'Acasă',
            services: 'Servicii',
            process: 'Proces',
            portfolio: 'Portofoliu',
            about: 'Despre',
            contact: 'Contact',
        },
        eyebrow: 'Dezvoltare software și soluții digitale',
        title: 'Tehnologie construită în jurul ideilor tale.',
        intro: 'Dezvoltăm website-uri, aplicații web, programe desktop, automatizări și soluții digitale personalizate pentru persoane și companii care vor să evolueze.',
        primaryCta: 'Discută proiectul tău',
        secondaryCta: 'Vezi serviciile',
        heroNote: 'De la idee la soluție digitală funcțională.',
        codeFile: 'solutie_davea.ts',
        systemReady: '● sistem pregătit',
        serviceProgress: '01 / 04',

        servicesEyebrow: 'Ce facem',
        servicesTitle: 'Soluții pentru probleme reale.',
        servicesIntro: 'Ai nevoie de un website profesional, un instrument intern sau o soluție software completă? Începem prin a înțelege exact ce ai nevoie.',

        services: [
            {
                title: 'Website-uri și aplicații web',
                text: 'Website-uri profesionale, landing page-uri, magazine online și aplicații web personalizate.',
            },
            {
                title: 'Software personalizat',
                text: 'Aplicații desktop, instrumente interne și programe adaptate modului tău de lucru.',
            },
            {
                title: 'Automatizări și integrări',
                text: 'Reducem activitățile repetitive prin automatizări, gestionarea datelor și integrări.',
            },
            {
                title: 'Dezvoltarea proiectelor existente',
                text: 'Funcționalități noi, depanare, îmbunătățiri și continuarea proiectelor existente.',
            },
        ],

        processEyebrow: 'Cum lucrăm',
        processTitle: 'Un proces clar, de la idee la livrare.',
        processIntro: 'Software-ul bun începe cu o comunicare bună. Păstrăm procesul clar, practic și orientat spre rezultat.',
        steps: [
            {
                number: '01',
                title: 'Înțelegem',
                text: 'Clarificăm ideea, problema, utilizatorii și obiectivele proiectului.',
            },
            {
                number: '02',
                title: 'Planificăm',
                text: 'Definim soluția potrivită, prioritățile, etapele și rezultatul așteptat.',
            },
            {
                number: '03',
                title: 'Construim',
                text: 'Dezvoltăm, testăm și îmbunătățim proiectul pe baza feedbackului tău.',
            },
            {
                number: '04',
                title: 'Livrăm',
                text: 'Lansăm soluția și rămânem disponibili pentru îmbunătățiri ulterioare.',
            },
        ],

        capabilitiesEyebrow: 'Construit pentru nevoile tale',
        capabilitiesTitle: 'Nu doar cod. Soluții digitale utile.',
        capabilities: [
            'Interfețe moderne și responsive',
            'Arhitectură sigură și ușor de întreținut',
            'Fluxuri de lucru și logică personalizată',
            'Baze de date și panouri de administrare',
            'Dezvoltare de la idee până la lansare',
            'Suport și îmbunătățiri ulterioare',
        ],

        portfolioEyebrow: 'Proiecte selectate',
        portfolioTitle: 'Fiecare proiect începe cu o problemă care merită rezolvată.',
        portfolioText: 'Pregătim un portofoliu cu proiecte reale, proprii și demonstrative. Fiecare proiect va explica problema, soluția și tehnologia utilizată.',
        portfolioCta: 'Vezi portofoliul',

        ctaTitle: 'Ai o idee pentru un proiect digital?',
        ctaText: 'Spune-ne de ce ai nevoie. Discutăm obiectivele tale și identificăm cea mai potrivită metodă de a transforma ideea într-o soluție funcțională.',
        ctaButton: 'Începe o discuție',
        footerText: 'Soluții software construite în jurul ideilor tale.',
        contactEmail: 'contact@davea.ro',
    },

    de: {
        nav: {
            home: 'Startseite',
            services: 'Leistungen',
            process: 'Ablauf',
            portfolio: 'Projekte',
            about: 'Über uns',
            contact: 'Kontakt',
        },
        eyebrow: 'Softwareentwicklung und digitale Lösungen',
        title: 'Technologie, die rund um Ihre Ideen entwickelt wird.',
        intro: 'Wir entwickeln Websites, Webanwendungen, Desktop-Software, Automatisierungen und individuelle digitale Lösungen für Menschen und Unternehmen.',
        primaryCta: 'Projekt besprechen',
        secondaryCta: 'Leistungen ansehen',
        heroNote: 'Von der Idee zur funktionierenden digitalen Lösung.',
        codeFile: 'davea_loesung.ts',
        systemReady: '● system bereit',
        serviceProgress: '01 / 04',

        servicesEyebrow: 'Was wir anbieten',
        servicesTitle: 'Lösungen für echte Herausforderungen.',
        servicesIntro: 'Ob professionelle Website, internes Werkzeug oder komplette Softwarelösung – wir beginnen damit, Ihre Anforderungen genau zu verstehen.',

        services: [
            {
                title: 'Websites und Webanwendungen',
                text: 'Professionelle Websites, Landingpages, Online-Shops und individuelle Webanwendungen.',
            },
            {
                title: 'Individuelle Software',
                text: 'Desktop-Anwendungen, interne Werkzeuge und Software passend zu Ihren Arbeitsabläufen.',
            },
            {
                title: 'Automatisierungen und Integrationen',
                text: 'Weniger repetitive Arbeit durch Automatisierungen, Datenverwaltung und Integrationen.',
            },
            {
                title: 'Weiterentwicklung bestehender Projekte',
                text: 'Neue Funktionen, Fehlerbehebung, Verbesserungen und Weiterentwicklung bestehender Projekte.',
            },
        ],

        processEyebrow: 'Unser Ablauf',
        processTitle: 'Ein klarer Weg von der Idee bis zur Umsetzung.',
        processIntro: 'Gute Software beginnt mit guter Kommunikation. Wir halten den Prozess klar, praktisch und ergebnisorientiert.',
        steps: [
            {
                number: '01',
                title: 'Verstehen',
                text: 'Wir klären Ihre Idee, das Problem, die Benutzer und die Ziele.',
            },
            {
                number: '02',
                title: 'Planen',
                text: 'Wir definieren die passende Lösung, Prioritäten und die nächsten Schritte.',
            },
            {
                number: '03',
                title: 'Entwickeln',
                text: 'Wir entwickeln, testen und verbessern das Projekt mit Ihrem Feedback.',
            },
            {
                number: '04',
                title: 'Liefern',
                text: 'Wir veröffentlichen die Lösung und unterstützen zukünftige Verbesserungen.',
            },
        ],

        capabilitiesEyebrow: 'Für Ihre Anforderungen',
        capabilitiesTitle: 'Nicht nur Code. Nützliche digitale Lösungen.',
        capabilities: [
            'Moderne und responsive Benutzeroberflächen',
            'Sichere und wartbare Architektur',
            'Individuelle Arbeitsabläufe und Geschäftslogik',
            'Datenbanken und Administrationsbereiche',
            'Entwicklung von der Idee bis zum Start',
            'Support und zukünftige Verbesserungen',
        ],

        portfolioEyebrow: 'Ausgewählte Projekte',
        portfolioTitle: 'Jedes Projekt beginnt mit einem Problem, das gelöst werden sollte.',
        portfolioText: 'Wir bereiten ein Portfolio mit realen, eigenen und demonstrativen Projekten vor. Jeder Fall erklärt die Aufgabe, die Lösung und die verwendete Technologie.',
        portfolioCta: 'Projekte ansehen',

        ctaTitle: 'Haben Sie eine Idee für ein digitales Projekt?',
        ctaText: 'Erzählen Sie uns, was Sie benötigen. Wir besprechen Ihre Ziele und finden den passenden Weg zu einer funktionierenden Lösung.',
        ctaButton: 'Gespräch beginnen',
        footerText: 'Softwarelösungen rund um Ihre Ideen.',
        contactEmail: 'contact@davea.ro',
    },

    es: {
        nav: {
            home: 'Inicio',
            services: 'Servicios',
            process: 'Proceso',
            portfolio: 'Portafolio',
            about: 'Sobre nosotros',
            contact: 'Contacto',
        },
        eyebrow: 'Desarrollo de software y soluciones digitales',
        title: 'Tecnología construida alrededor de tus ideas.',
        intro: 'Desarrollamos sitios web, aplicaciones web, software de escritorio, automatizaciones y soluciones digitales personalizadas para personas y empresas que quieren avanzar.',
        primaryCta: 'Habla sobre tu proyecto',
        secondaryCta: 'Ver servicios',
        heroNote: 'De la idea a una solución digital funcional.',
        codeFile: 'solucion_davea.ts',
        systemReady: '● sistema preparado',
        serviceProgress: '01 / 04',

        servicesEyebrow: 'Lo que hacemos',
        servicesTitle: 'Soluciones para problemas reales.',
        servicesIntro: 'Ya sea que necesites un sitio web profesional, una herramienta interna o una solución de software completa, comenzamos por entender exactamente lo que necesitas.',

        services: [
            {
                title: 'Sitios web y aplicaciones web',
                text: 'Sitios web profesionales, páginas de aterrizaje, tiendas online y aplicaciones web personalizadas.',
            },
            {
                title: 'Software personalizado',
                text: 'Aplicaciones de escritorio, herramientas internas y software adaptado a tu forma de trabajar.',
            },
            {
                title: 'Automatizaciones e integraciones',
                text: 'Reducimos el trabajo repetitivo mediante automatizaciones, gestión de datos e integraciones.',
            },
            {
                title: 'Desarrollo de proyectos existentes',
                text: 'Nuevas funciones, corrección de errores, mejoras y continuación de proyectos existentes.',
            },
        ],

        processEyebrow: 'Cómo trabajamos',
        processTitle: 'Un camino claro desde la idea hasta la entrega.',
        processIntro: 'Un buen software comienza con una buena comunicación. Mantenemos el proceso claro, práctico y centrado en el resultado.',
        steps: [
            {
                number: '01',
                title: 'Entender',
                text: 'Aclaramos tu idea, el problema, los usuarios y los objetivos del proyecto.',
            },
            {
                number: '02',
                title: 'Planificar',
                text: 'Definimos la solución adecuada, las prioridades, las etapas y el resultado esperado.',
            },
            {
                number: '03',
                title: 'Construir',
                text: 'Desarrollamos, probamos y mejoramos el proyecto con tus comentarios.',
            },
            {
                number: '04',
                title: 'Entregar',
                text: 'Lanzamos la solución y seguimos disponibles para futuras mejoras.',
            },
        ],

        capabilitiesEyebrow: 'Creado para tus necesidades',
        capabilitiesTitle: 'No solo código. Soluciones digitales útiles.',
        capabilities: [
            'Interfaces modernas y adaptables',
            'Arquitectura segura y fácil de mantener',
            'Flujos de trabajo y lógica personalizada',
            'Bases de datos y paneles de administración',
            'Desarrollo desde la idea hasta el lanzamiento',
            'Soporte y mejoras futuras',
        ],

        portfolioEyebrow: 'Proyectos seleccionados',
        portfolioTitle: 'Cada proyecto comienza con un problema que merece una solución.',
        portfolioText: 'Estamos preparando un portafolio de proyectos reales, propios y demonstrativos. Cada caso explicará el desafío, la solución y la tecnología utilizada.',
        portfolioCta: 'Ver portafolio',

        ctaTitle: '¿Tienes una idea para un proyecto digital?',
        ctaText: 'Cuéntanos lo que necesitas. Hablaremos de tus objetivos e identificaremos la mejor manera de convertir tu idea en una solución funcional.',
        ctaButton: 'Iniciar una conversación',
        footerText: 'Soluciones de software construidas alrededor de tus ideas.',
        contactEmail: 'contact@davea.ro',
    },
}

const content = computed(() => translations[locale.value] ?? translations.en)

const pageSlug = ''
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

const languageUrl = (code) => `/${code}`

const sectionUrl = (section) => `/${locale.value}/${section}`
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
        <!-- Navigation -->
        <header class="relative z-20 border-b border-white/10 bg-[#07111f]/90 backdrop-blur-xl">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">
                <a :href="`/${locale}`" class="group flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-blue-400 via-blue-500 to-indigo-600 text-white shadow-lg shadow-blue-500/30 transition duration-300 group-hover:-rotate-3 group-hover:shadow-blue-400/40">
                        <img
                            src="/davea-icon-512.png"
                            alt="DAVEA Solutions"
                            class="h-8 w-8 object-contain"
                        />
                    </span>

                    <span class="text-lg font-bold tracking-tight">
                        DAVEA<span class="text-blue-400">.</span>
                        <span class="text-slate-300">Solutions</span>
                    </span>
                </a>

                <nav class="hidden items-center gap-7 text-sm text-slate-300 lg:flex">
                    <a :href="`/${locale}`" class="transition hover:text-white">
                        {{ content.nav.home }}
                    </a>

                    <a :href="sectionUrl('services')" class="transition hover:text-white">
                        {{ content.nav.services }}
                    </a>

                    <a :href="sectionUrl('process')" class="transition hover:text-white">
                        {{ content.nav.process }}
                    </a>

                    <a :href="sectionUrl('portfolio')" class="transition hover:text-white">
                        {{ content.nav.portfolio }}
                    </a>

                    <a :href="sectionUrl('about')" class="transition hover:text-white">
                        {{ content.nav.about }}
                    </a>

                    <a :href="sectionUrl('contact')" class="transition hover:text-white">
                        {{ content.nav.contact }}
                    </a>
                </nav>

                <div class="flex items-center gap-3">
                    <div class="hidden items-center gap-1 rounded-lg border border-white/10 bg-white/5 p-1 sm:flex">
                        <a
                            v-for="language in languages"
                            :key="language.code"
                            :href="languageUrl(language.code)"
                            :class="[
                                'rounded-md px-2 py-1 text-[11px] font-bold transition',
                                locale === language.code
                                    ? 'bg-blue-500 text-white'
                                    : 'text-slate-400 hover:text-white'
                            ]"
                        >
                            {{ language.label }}
                        </a>
                    </div>

                    <a
                        :href="sectionUrl('contact')"
                        class="rounded-lg bg-blue-500 px-4 py-2.5 text-sm font-bold text-white shadow-lg shadow-blue-500/20 transition hover:bg-blue-400"
                    >
                        {{ content.primaryCta }}
                    </a>
                </div>
            </div>
        </header>

        <main>
            <!-- Hero -->
            <section class="relative isolate overflow-hidden">
                <div class="absolute -right-40 -top-40 h-[34rem] w-[34rem] rounded-full bg-blue-600/20 blur-3xl"></div>
                <div class="absolute -bottom-40 -left-40 h-[28rem] w-[28rem] rounded-full bg-cyan-500/10 blur-3xl"></div>

                <div class="absolute inset-0 opacity-[0.08] [background-image:linear-gradient(rgba(148,163,184,0.3)_1px,transparent_1px),linear-gradient(90deg,rgba(148,163,184,0.3)_1px,transparent_1px)] [background-size:64px_64px]"></div>

                <div class="relative mx-auto grid max-w-7xl gap-16 px-6 py-24 lg:grid-cols-[1.08fr_0.92fr] lg:px-8 lg:py-36">
                    <div class="max-w-3xl">
                        <div class="mb-7 inline-flex items-center gap-3 rounded-full border border-blue-400/20 bg-blue-400/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-blue-300">
                            <span class="h-2 w-2 animate-pulse rounded-full bg-blue-400"></span>
                            {{ content.eyebrow }}
                        </div>

                        <h1 class="text-5xl font-black leading-[1.02] tracking-[-0.04em] text-white sm:text-6xl lg:text-8xl">
                            {{ content.title }}
                        </h1>

                        <p class="mt-8 max-w-2xl text-lg leading-8 text-slate-300 sm:text-xl">
                            {{ content.intro }}
                        </p>

                        <div class="mt-10 flex flex-wrap gap-4">
                            <a
                                :href="sectionUrl('contact')"
                                class="rounded-xl bg-blue-500 px-6 py-3.5 font-bold text-white shadow-xl shadow-blue-500/25 transition hover:-translate-y-0.5 hover:bg-blue-400"
                            >
                                {{ content.primaryCta }}
                                <span class="ml-2">→</span>
                            </a>

                            <a
                                :href="sectionUrl('services')"
                                class="rounded-xl border border-white/15 bg-white/5 px-6 py-3.5 font-bold text-slate-200 transition hover:border-blue-400/60 hover:bg-white/10 hover:text-white"
                            >
                                {{ content.secondaryCta }}
                            </a>
                        </div>

                        <div class="mt-12 flex items-center gap-4 text-sm text-slate-400">
                            <div class="flex -space-x-2">
                                <span class="h-8 w-8 rounded-full border-2 border-[#08111f] bg-blue-500"></span>
                                <span class="h-8 w-8 rounded-full border-2 border-[#08111f] bg-cyan-400"></span>
                                <span class="h-8 w-8 rounded-full border-2 border-[#08111f] bg-indigo-400"></span>
                            </div>

                            <span>{{ content.heroNote }}</span>
                        </div>
                    </div>

                    <!-- Technology visual -->
                    <div class="relative flex items-center justify-center">
                        <div class="absolute h-72 w-72 rounded-full border border-blue-400/20"></div>
                        <div class="absolute h-96 w-96 rounded-full border border-white/10"></div>

                        <div class="relative w-full max-w-md rounded-3xl border border-white/15 bg-white/[0.07] p-5 shadow-2xl shadow-blue-950/60 backdrop-blur-xl">
                            <div class="flex items-center justify-between border-b border-white/10 pb-5">
                                <div class="flex gap-2">
                                    <span class="h-3 w-3 rounded-full bg-red-400"></span>
                                    <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                                    <span class="h-3 w-3 rounded-full bg-green-400"></span>
                                </div>

                                <span class="font-mono text-xs text-slate-500">
                                    {{ content.codeFile }}
                                </span>
                            </div>

                            <div class="space-y-4 px-3 py-8 font-mono text-sm">
                                <p>
                                    <span class="text-purple-400">const</span>
                                    <span class="text-blue-300"> idea</span>
                                    <span class="text-slate-400"> = </span>
                                    <span class="text-emerald-300">"your vision"</span>
                                </p>

                                <p>
                                    <span class="text-purple-400">const</span>
                                    <span class="text-blue-300"> solution</span>
                                    <span class="text-slate-400"> = </span>
                                    <span class="text-yellow-300">build</span>
                                    <span class="text-slate-300">(idea)</span>
                                </p>

                                <div class="my-7 h-px bg-gradient-to-r from-blue-400/60 to-transparent"></div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div class="rounded-2xl border border-blue-400/20 bg-blue-500/10 p-4">
                                        <div class="mb-3 h-2 w-10 rounded bg-blue-400"></div>
                                        <div class="h-2 w-full rounded bg-white/10"></div>
                                        <div class="mt-2 h-2 w-3/4 rounded bg-white/10"></div>
                                    </div>

                                    <div class="rounded-2xl border border-cyan-400/20 bg-cyan-500/10 p-4">
                                        <div class="mb-3 h-2 w-10 rounded bg-cyan-300"></div>
                                        <div class="h-2 w-full rounded bg-white/10"></div>
                                        <div class="mt-2 h-2 w-3/4 rounded bg-white/10"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between border-t border-white/10 pt-5 text-xs text-slate-400">
                                <span>{{ content.systemReady }}</span>
                                <span class="text-blue-300">{{ content.serviceProgress }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services -->
            <section id="services" class="bg-white py-24 text-slate-950">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="grid gap-10 lg:grid-cols-[0.75fr_1.25fr]">
                        <div>
                            <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">
                                {{ content.servicesEyebrow }}
                            </p>

                            <h2 class="mt-4 text-4xl font-black tracking-tight sm:text-5xl">
                                {{ content.servicesTitle }}
                            </h2>

                            <p class="mt-6 max-w-md text-lg leading-8 text-slate-600">
                                {{ content.servicesIntro }}
                            </p>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <article
                                v-for="(service, index) in content.services"
                                :key="service.title"
                                class="group rounded-2xl border border-slate-200 bg-slate-50 p-7 transition hover:-translate-y-1 hover:border-blue-300 hover:bg-white hover:shadow-lg hover:shadow-blue-100"
                            >
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-black text-blue-600">
                                        0{{ index + 1 }}
                                    </span>

                                    <span class="text-xl text-slate-300 transition group-hover:text-blue-500">
                                        ↗
                                    </span>
                                </div>

                                <h3 class="mt-8 text-xl font-black">
                                    {{ service.title }}
                                </h3>

                                <p class="mt-4 leading-7 text-slate-600">
                                    {{ service.text }}
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Process -->
            <section id="process" class="bg-slate-100 py-24 text-slate-950">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="grid gap-12 lg:grid-cols-[0.7fr_1.3fr]">
                        <div>
                            <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">
                                {{ content.processEyebrow }}
                            </p>

                            <h2 class="mt-4 text-4xl font-black tracking-tight sm:text-5xl">
                                {{ content.processTitle }}
                            </h2>

                            <p class="mt-6 max-w-md text-lg leading-8 text-slate-600">
                                {{ content.processIntro }}
                            </p>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div
                                v-for="step in content.steps"
                                :key="step.number"
                                class="rounded-2xl bg-white p-6 shadow-sm"
                            >
                                <p class="text-sm font-black text-blue-600">
                                    {{ step.number }}
                                </p>

                                <h3 class="mt-3 font-black">
                                    {{ step.title }}
                                </h3>

                                <p class="mt-2 text-sm leading-6 text-slate-600">
                                    {{ step.text }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Capabilities -->
            <section class="bg-[#0c1a2d] py-24">
                <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-2 lg:px-8">
                    <div>
                        <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-400">
                            {{ content.capabilitiesEyebrow }}
                        </p>

                        <h2 class="mt-4 text-4xl font-black tracking-tight sm:text-5xl">
                            {{ content.capabilitiesTitle }}
                        </h2>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div
                            v-for="capability in content.capabilities"
                            :key="capability"
                            class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/5 p-5 text-sm font-bold text-slate-200"
                        >
                            <span class="h-2 w-2 rounded-full bg-blue-400"></span>
                            {{ capability }}
                        </div>
                    </div>
                </div>
            </section>

            <!-- Portfolio -->
            <section id="portfolio" class="py-24">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="rounded-3xl border border-white/10 bg-gradient-to-b from-white/[0.07] to-transparent p-10 lg:p-16">
                        <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-400">
                            {{ content.portfolioEyebrow }}
                        </p>
                        <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-4xl">
                            {{ content.portfolioTitle }}
                        </h2>
                        <p class="mt-4 max-w-2xl text-slate-300">
                            {{ content.portfolioText }}
                        </p>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section id="contact" class="border-t border-white/10 py-24">
                <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
                    <h2 class="text-4xl font-black tracking-tight sm:text-5xl">
                        {{ content.ctaTitle }}
                    </h2>
                    <p class="mx-auto mt-6 max-w-xl text-lg text-slate-300">
                        {{ content.ctaText }}
                    </p>
                    <div class="mt-10 flex justify-center gap-4">
                        <a
                            :href="sectionUrl('contact')"
                            class="rounded-xl bg-blue-600 px-8 py-4 font-black text-white shadow-xl shadow-blue-600/25 transition hover:-translate-y-0.5 hover:bg-blue-500"
                        >
                            {{ content.ctaButton }}
                        </a>
                    </div>
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
                            href="mailto:contact@davea.ro"
                            class="transition hover:text-white"
                        >
                            contact@davea.ro
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