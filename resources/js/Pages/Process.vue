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
        eyebrow: 'How we work',
        title: 'A clear path from idea to digital solution.',
        intro: 'Good software starts with good communication. We keep every stage clear, practical and focused on creating something useful for you.',
        contact: 'Discuss your project',

        stats: {
            stages: 'Core stages',
            communication: 'Direct communication',
            focus: 'One clear focus',
        },

        timelineEyebrow: 'Our process',
        timelineTitle: 'From first conversation to final delivery.',
        timelineIntro: 'Every project is different, but our approach remains structured. We adapt the implementation to your goals, resources and priorities.',

        steps: [
            {
                number: '01',
                label: 'Discover',
                title: 'Understand the idea',
                text: 'We start by discussing your goals, the problem you want to solve, the people who will use the solution and the result you expect.',
                result: 'Result: a clear understanding of the project direction.',
            },
            {
                number: '02',
                label: 'Define',
                title: 'Clarify the requirements',
                text: 'We identify the essential features, priorities, possible challenges and the information needed to make the project realistic.',
                result: 'Result: a structured list of requirements and priorities.',
            },
            {
                number: '03',
                label: 'Plan',
                title: 'Choose the right approach',
                text: 'We recommend a practical technical direction, divide the work into stages and define the expected deliverables.',
                result: 'Result: a clear proposal and development roadmap.',
            },
            {
                number: '04',
                label: 'Build',
                title: 'Develop the solution',
                text: 'We implement the project step by step, keeping the code organised and allowing feedback during the development process.',
                result: 'Result: a working version of the planned solution.',
            },
            {
                number: '05',
                label: 'Refine',
                title: 'Test and improve',
                text: 'We review the functionality, interface, responsiveness and main user flows, then correct issues and improve the details.',
                result: 'Result: a more stable and polished product.',
            },
            {
                number: '06',
                label: 'Deliver',
                title: 'Launch and support',
                text: 'We prepare the final delivery, help with the launch and discuss possible maintenance or future improvements.',
                result: 'Result: a solution ready to be used and extended.',
            },
        ],

        principlesEyebrow: 'What you can expect',
        principlesTitle: 'A development process without unnecessary complexity.',
        principles: [
            {
                title: 'Clear communication',
                text: 'You always know what is being worked on and what the next step is.',
            },
            {
                title: 'Practical decisions',
                text: 'We choose solutions that make sense for your project, budget and future plans.',
            },
            {
                title: 'Structured development',
                text: 'The project is divided into understandable stages instead of becoming one large unknown.',
            },
            {
                title: 'Long-term thinking',
                text: 'We build with future changes, improvements and maintenance in mind.',
            },
        ],

        ctaTitle: 'Ready to discuss your idea?',
        ctaText: 'Tell us what you want to build or improve. We will help you understand the next practical step.',
        ctaButton: 'Start a conversation',
        email: 'contact@daveasolutions.com',
        footer: 'Software solutions built around your ideas.',
    },

    ro: {
        back: 'Înapoi la pagina principală',
        eyebrow: 'Cum lucrăm',
        title: 'Un traseu clar de la idee la soluție digitală.',
        intro: 'Software-ul bun începe cu o comunicare bună. Păstrăm fiecare etapă clară, practică și orientată spre crearea unei soluții utile pentru tine.',
        contact: 'Discută proiectul tău',

        stats: {
            stages: 'Etape principale',
            communication: 'Comunicare directă',
            focus: 'Un obiectiv clar',
        },

        timelineEyebrow: 'Procesul nostru',
        timelineTitle: 'De la prima discuție până la livrarea finală.',
        timelineIntro: 'Fiecare proiect este diferit, dar abordarea noastră rămâne structurată. Adaptăm implementarea la obiectivele, resursele și prioritățile tale.',

        steps: [
            {
                number: '01',
                label: 'Descoperim',
                title: 'Înțelegem ideea',
                text: 'Începem prin a discuta obiectivele, problema pe care vrei să o rezolvi, persoanele care vor folosi soluția și rezultatul dorit.',
                result: 'Rezultat: o înțelegere clară a direcției proiectului.',
            },
            {
                number: '02',
                label: 'Definim',
                title: 'Clarificăm cerințele',
                text: 'Identificăm funcționalitățile esențiale, prioritățile, posibilele provocări și informațiile necesare pentru un proiect realist.',
                result: 'Rezultat: o listă structurată de cerințe și priorități.',
            },
            {
                number: '03',
                label: 'Planificăm',
                title: 'Alegem abordarea potrivită',
                text: 'Recomandăm direcția tehnică potrivită, împărțim activitatea pe etape și definim livrabilele așteptate.',
                result: 'Rezultat: o propunere clară și un plan de dezvoltare.',
            },
            {
                number: '04',
                label: 'Construim',
                title: 'Dezvoltăm soluția',
                text: 'Implementăm proiectul pas cu pas, păstrăm codul organizat și ținem cont de feedback pe parcursul dezvoltării.',
                result: 'Rezultat: o versiune funcțională a soluției planificate.',
            },
            {
                number: '05',
                label: 'Îmbunătățim',
                title: 'Testăm și ajustăm',
                text: 'Verificăm funcționalitatea, interfața, afișarea pe dispozitive și fluxurile principale, apoi corectăm problemele.',
                result: 'Rezultat: un produs mai stabil și mai bine finisat.',
            },
            {
                number: '06',
                label: 'Livrăm',
                title: 'Lansăm și oferim suport',
                text: 'Pregătim livrarea finală, ajutăm la lansare și discutăm eventualele servicii de mentenanță sau îmbunătățiri.',
                result: 'Rezultat: o soluție pregătită pentru utilizare și extindere.',
            },
        ],

        principlesEyebrow: 'La ce te poți aștepta',
        principlesTitle: 'Un proces de dezvoltare fără complexitate inutilă.',
        principles: [
            {
                title: 'Comunicare clară',
                text: 'Știi în permanență la ce se lucrează și care este următorul pas.',
            },
            {
                title: 'Decizii practice',
                text: 'Alegem soluții potrivite pentru proiectul, bugetul și planurile tale.',
            },
            {
                title: 'Dezvoltare structurată',
                text: 'Proiectul este împărțit în etape ușor de înțeles și rămâne clar pe tot parcursul colaborării.',
            },
            {
                title: 'Gândire pe termen lung',
                text: 'Construim ținând cont de schimbări, îmbunătățiri și mentenanță viitoare.',
            },
        ],

        ctaTitle: 'Ești gata să discutăm ideea ta?',
        ctaText: 'Spune-ne ce vrei să construiești sau să îmbunătățești. Te ajutăm să identifici următorul pas practic.',
        ctaButton: 'Începe o discuție',
        email: 'contact@daveasolutions.com',
        footer: 'Soluții software construite în jurul ideilor tale.',
    },

    de: {
        back: 'Zurück zur Startseite',
        eyebrow: 'Unser Ablauf',
        title: 'Ein klarer Weg von der Idee zur digitalen Lösung.',
        intro: 'Gute Software beginnt mit guter Kommunikation. Wir halten jede Phase klar, praktisch und auf eine nützliche Lösung für Sie ausgerichtet.',
        contact: 'Projekt besprechen',

        stats: {
            stages: 'Kernphasen',
            communication: 'Direkte Kommunikation',
            focus: 'Ein klares Ziel',
        },

        timelineEyebrow: 'Unser Prozess',
        timelineTitle: 'Vom ersten Gespräch bis zur fertigen Lösung.',
        timelineIntro: 'Jedes Projekt ist anders, aber unser Vorgehen bleibt strukturiert. Die Umsetzung passen wir an Ihre Ziele, Ressourcen und Prioritäten an.',

        steps: [
            {
                number: '01',
                label: 'Entdecken',
                title: 'Die Idee verstehen',
                text: 'Wir besprechen Ihre Ziele, das zu lösende Problem, die Benutzer der Lösung und das gewünschte Ergebnis.',
                result: 'Ergebnis: ein klares Verständnis der Projektrichtung.',
            },
            {
                number: '02',
                label: 'Definieren',
                title: 'Anforderungen klären',
                text: 'Wir bestimmen die wichtigsten Funktionen, Prioritäten, mögliche Herausforderungen und notwendige Informationen.',
                result: 'Ergebnis: eine strukturierte Liste der Anforderungen und Prioritäten.',
            },
            {
                number: '03',
                label: 'Planen',
                title: 'Den passenden Ansatz wählen',
                text: 'Wir empfehlen eine praktische technische Richtung, teilen die Arbeit in Phasen und definieren die erwarteten Ergebnisse.',
                result: 'Ergebnis: ein klarer Vorschlag und Entwicklungsplan.',
            },
            {
                number: '04',
                label: 'Entwickeln',
                title: 'Die Lösung bauen',
                text: 'Wir entwickeln das Projekt Schritt für Schritt, halten den Code organisiert und berücksichtigen Ihr Feedback.',
                result: 'Ergebnis: eine funktionierende Version der geplanten Lösung.',
            },
            {
                number: '05',
                label: 'Verbessern',
                title: 'Testen und optimieren',
                text: 'Wir prüfen Funktionalität, Benutzeroberfläche, Darstellung und wichtige Abläufe und beheben mögliche Probleme.',
                result: 'Ergebnis: ein stabileres und besser ausgearbeitetes Produkt.',
            },
            {
                number: '06',
                label: 'Liefern',
                title: 'Veröffentlichen und unterstützen',
                text: 'Wir bereiten die endgültige Übergabe vor, unterstützen den Start und besprechen mögliche Wartung und Erweiterungen.',
                result: 'Ergebnis: eine Lösung, die genutzt und erweitert werden kann.',
            },
        ],

        principlesEyebrow: 'Was Sie erwarten können',
        principlesTitle: 'Ein Entwicklungsprozess ohne unnötige Komplexität.',
        principles: [
            {
                title: 'Klare Kommunikation',
                text: 'Sie wissen immer, woran gearbeitet wird und was der nächste Schritt ist.',
            },
            {
                title: 'Praktische Entscheidungen',
                text: 'Wir wählen Lösungen, die zu Ihrem Projekt, Budget und Ihren Zukunftsplänen passen.',
            },
            {
                title: 'Strukturierte Entwicklung',
                text: 'Das Projekt wird in verständliche Phasen aufgeteilt und bleibt nachvollziehbar.',
            },
            {
                title: 'Langfristiges Denken',
                text: 'Wir berücksichtigen zukünftige Änderungen, Verbesserungen und Wartung.',
            },
        ],

        ctaTitle: 'Möchten Sie Ihre Idee besprechen?',
        ctaText: 'Erzählen Sie uns, was Sie entwickeln oder verbessern möchten. Wir helfen Ihnen beim nächsten praktischen Schritt.',
        ctaButton: 'Gespräch beginnen',
        email: 'contact@daveasolutions.com',
        footer: 'Softwarelösungen rund um Ihre Ideen.',
    },

    es: {
        back: 'Volver al inicio',
        eyebrow: 'Cómo trabajamos',
        title: 'Un camino claro desde la idea hasta la solución digital.',
        intro: 'Un buen software comienza con una buena comunicación. Mantenemos cada etapa clara, práctica y centrada en crear algo útil para ti.',
        contact: 'Habla sobre tu proyecto',

        stats: {
            stages: 'Etapas principales',
            communication: 'Comunicación directa',
            focus: 'Un objetivo claro',
        },

        timelineEyebrow: 'Nuestro proceso',
        timelineTitle: 'Desde la primera conversación hasta la entrega final.',
        timelineIntro: 'Cada proyecto es diferente, pero nuestro enfoque sigue siendo estructurado. Adaptamos la implementación a tus objetivos, recursos y prioridades.',

        steps: [
            {
                number: '01',
                label: 'Descubrir',
                title: 'Entender la idea',
                text: 'Comenzamos hablando sobre tus objetivos, el problema que quieres resolver, las personas que utilizarán la solución y el resultado esperado.',
                result: 'Resultado: una comprensión clara de la dirección del proyecto.',
            },
            {
                number: '02',
                label: 'Definir',
                title: 'Aclarar los requisitos',
                text: 'Identificamos las funciones esenciales, las prioridades, los posibles desafíos y la información necesaria para que el proyecto sea realista.',
                result: 'Resultado: una lista estructurada de requisitos y prioridades.',
            },
            {
                number: '03',
                label: 'Planificar',
                title: 'Elegir el enfoque adecuado',
                text: 'Recomendamos una dirección técnica práctica, dividimos el trabajo en etapas y definimos los resultados esperados.',
                result: 'Resultado: una propuesta clara y una hoja de ruta de desarrollo.',
            },
            {
                number: '04',
                label: 'Construir',
                title: 'Desarrollar la solución',
                text: 'Implementamos el proyecto paso a paso, mantenemos el código organizado y tenemos en cuenta tus comentarios durante el desarrollo.',
                result: 'Resultado: una versión funcional de la solución planificada.',
            },
            {
                number: '05',
                label: 'Mejorar',
                title: 'Probar y optimizar',
                text: 'Revisamos la funcionalidad, la interfaz, la adaptación a dispositivos y los flujos principales, y corregimos los problemas encontrados.',
                result: 'Resultado: un producto más estable y mejor terminado.',
            },
            {
                number: '06',
                label: 'Entregar',
                title: 'Lanzar y ofrecer soporte',
                text: 'Preparamos la entrega final, ayudamos con el lanzamiento y hablamos sobre mantenimiento o futuras mejoras.',
                result: 'Resultado: una solución lista para utilizar y ampliar.',
            },
        ],

        principlesEyebrow: 'Lo que puedes esperar',
        principlesTitle: 'Un proceso de desarrollo sin complejidad innecesaria.',
        principles: [
            {
                title: 'Comunicación clara',
                text: 'Siempre sabrás en qué estamos trabajando y cuál es el siguiente paso.',
            },
            {
                title: 'Decisiones prácticas',
                text: 'Elegimos soluciones adecuadas para tu proyecto, presupuesto y planes futuros.',
            },
            {
                title: 'Desarrollo estructurado',
                text: 'El proyecto se divide en etapas comprensibles y no se convierte en una gran incógnita.',
            },
            {
                title: 'Pensamiento a largo plazo',
                text: 'Desarrollamos teniendo en cuenta futuros cambios, mejoras y mantenimiento.',
            },
        ],

        ctaTitle: '¿Listo para hablar sobre tu idea?',
        ctaText: 'Cuéntanos qué quieres construir o mejorar. Te ayudaremos a identificar el siguiente paso práctico.',
        ctaButton: 'Iniciar una conversación',
        email: 'contact@daveasolutions.com',
        footer: 'Soluciones de software construidas alrededor de tus ideas.',
    },
}

const content = computed(() => translations[locale.value] ?? translations.en)

const pageSlug = '/process'
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
        <!-- Header -->
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
                        <a v-for="language in languages" :key="language.code" :href="`/${language.code}/process`" :class="['rounded-lg px-2.5 py-1.5 text-[11px] font-black transition', locale === language.code ? 'bg-blue-500 text-white shadow-lg shadow-blue-500/20' : 'text-slate-400 hover:text-white']">{{ language.label }}
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
                        <a v-for="language in languages" :key="`mobile-${language.code}`" :href="`/${language.code}/process`" class="rounded-lg border border-white/10 px-3 py-2 text-xs font-black text-slate-300 transition hover:border-blue-400 hover:text-white">{{ language.label }}
</a>
                    </div>
                </nav>
            </div>
        </header>

        <main>
            <!-- Hero -->
            <section class="relative isolate min-h-[700px] overflow-hidden bg-[#07111f]">
                <div class="absolute -right-48 -top-48 h-[38rem] w-[38rem] rounded-full bg-blue-600/25 blur-3xl"></div>
                <div class="absolute -bottom-48 -left-48 h-[32rem] w-[32rem] rounded-full bg-cyan-500/10 blur-3xl"></div>

                <div class="pointer-events-none absolute inset-0 opacity-[0.14] [background-image:linear-gradient(rgba(96,165,250,0.35)_1px,transparent_1px),linear-gradient(90deg,rgba(96,165,250,0.35)_1px,transparent_1px)] [background-size:64px_64px]"></div>

                <div class="relative mx-auto flex min-h-[700px] max-w-7xl flex-col justify-center px-6 py-24 lg:px-8 lg:py-32">
                    <a
                        :href="`/${locale}`"
                        class="inline-flex items-center gap-2 text-sm font-bold text-blue-400 transition hover:text-blue-300"
                    >
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

                    <div class="mt-16 grid max-w-5xl gap-4 sm:grid-cols-3">
                        <div class="rounded-2xl border border-white/15 bg-white/[0.07] p-6 shadow-xl shadow-blue-950/20 backdrop-blur-xl transition hover:border-blue-400/40 hover:bg-white/[0.1]">
                            <p class="text-4xl font-black text-blue-400">06</p>
                            <p class="mt-3 text-sm font-semibold text-slate-300">
                                {{ content.stats.stages }}
                            </p>
                        </div>

                        <div class="rounded-2xl border border-white/15 bg-white/[0.07] p-6 shadow-xl shadow-blue-950/20 backdrop-blur-xl transition hover:border-cyan-400/40 hover:bg-white/[0.1]">
                            <p class="text-4xl font-black text-cyan-300">01</p>
                            <p class="mt-3 text-sm font-semibold text-slate-300">
                                {{ content.stats.communication }}
                            </p>
                        </div>

                        <div class="rounded-2xl border border-white/15 bg-white/[0.07] p-6 shadow-xl shadow-blue-950/20 backdrop-blur-xl transition hover:border-indigo-400/40 hover:bg-white/[0.1]">
                            <p class="text-4xl font-black text-indigo-300">∞</p>
                            <p class="mt-3 text-sm font-semibold text-slate-300">
                                {{ content.stats.focus }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Timeline -->
            <section class="relative overflow-hidden bg-gradient-to-b from-white via-slate-50 to-white py-28 text-slate-950">
                <div class="absolute left-0 top-0 h-72 w-72 rounded-full bg-blue-100/60 blur-3xl"></div>
                <div class="absolute bottom-0 right-0 h-80 w-80 rounded-full bg-indigo-100/60 blur-3xl"></div>

                <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mb-16 max-w-3xl">
                        <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">
                            {{ content.timelineEyebrow }}
                        </p>

                        <h2 class="mt-4 text-4xl font-black tracking-tight sm:text-5xl">
                            {{ content.timelineTitle }}
                        </h2>

                        <p class="mt-6 text-lg leading-8 text-slate-600">
                            {{ content.timelineIntro }}
                        </p>
                    </div>

                    <div class="relative">
                        <div class="absolute bottom-8 left-[2rem] top-8 hidden w-px bg-gradient-to-b from-blue-400 via-indigo-300 to-cyan-300 md:block"></div>

                        <div class="space-y-6">
                            <article
                                v-for="step in content.steps"
                                :key="step.number"
                                class="group relative grid gap-7 rounded-[2rem] border border-slate-200 bg-white p-7 shadow-sm transition duration-500 hover:-translate-y-1 hover:border-blue-300 hover:shadow-2xl hover:shadow-blue-100 md:grid-cols-[5rem_0.35fr_1fr] md:items-start md:p-9"
                            >
                                <div class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 text-lg font-black text-white shadow-xl shadow-blue-500/25 transition duration-500 group-hover:scale-105 group-hover:rotate-3">
                                    {{ step.number }}
                                </div>

                                <div>
                                    <p class="text-[10px] font-black uppercase tracking-[0.2em] text-blue-600">
                                        {{ step.label }}
                                    </p>

                                    <h3 class="mt-3 text-2xl font-black leading-tight">
                                        {{ step.title }}
                                    </h3>
                                </div>

                                <div>
                                    <p class="leading-8 text-slate-600">
                                        {{ step.text }}
                                    </p>

                                    <div class="mt-6 border-t border-slate-100 pt-5">
                                        <p class="text-sm font-bold text-slate-800">
                                            <span class="text-blue-600">✓</span>
                                            {{ step.result }}
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Principles -->
            <section class="bg-slate-100 py-28 text-slate-950">
                <div class="mx-auto grid max-w-7xl gap-14 px-6 lg:grid-cols-[0.8fr_1.2fr] lg:px-8">
                    <div>
                        <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">
                            {{ content.principlesEyebrow }}
                        </p>

                        <h2 class="mt-5 text-4xl font-black leading-tight tracking-tight sm:text-5xl">
                            {{ content.principlesTitle }}
                        </h2>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <article
                            v-for="(principle, index) in content.principles"
                            :key="principle.title"
                            class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-300 hover:shadow-xl"
                        >
                            <div class="flex items-center justify-between">
                                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-100 text-sm font-black text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                                    0{{ index + 1 }}
                                </span>

                                <span class="text-xl text-slate-300 transition group-hover:text-blue-500">
                                    ✦
                                </span>
                            </div>

                            <h3 class="mt-8 text-xl font-black">
                                {{ principle.title }}
                            </h3>

                            <p class="mt-4 leading-7 text-slate-600">
                                {{ principle.text }}
                            </p>
                        </article>
                    </div>
                </div>
            </section>

            <!-- CTA -->
            <section class="relative overflow-hidden bg-blue-600 py-28">
                <div class="absolute -right-24 -top-24 h-80 w-80 rounded-full border-[30px] border-white/10"></div>
                <div class="absolute -bottom-32 -left-24 h-80 w-80 rounded-full border-[22px] border-white/10"></div>

                <div class="relative mx-auto max-w-4xl px-6 text-center lg:px-8">
                    <h2 class="text-4xl font-black tracking-tight sm:text-6xl">
                        {{ content.ctaTitle }}
                    </h2>

                    <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-blue-100">
                        {{ content.ctaText }}
                    </p>

                    <a
                        :href="`/${locale}/contact`"
                        class="mt-10 inline-flex items-center rounded-xl bg-white px-7 py-4 font-black text-blue-700 shadow-xl transition hover:-translate-y-1 hover:bg-blue-50"
                    >
                        {{ content.ctaButton }}
                        <span class="ml-3">↗</span>
                    </a>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer class="border-t border-white/10 bg-[#07111f]">
            <div class="mx-auto flex max-w-7xl flex-col gap-6 px-6 py-9 text-sm text-slate-400 lg:px-8">
                <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <a
                            :href="`/${locale}`"
                            class="font-black text-white transition hover:text-blue-400"
                        >
                            DAVEA<span class="text-blue-400">.</span> Solutions
                        </a>

                        <p class="mt-2">
                            {{ content.footer }}
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-5 gap-y-3">
                        <a :href="`/${locale}`" class="transition hover:text-white">
                            {{ locale === 'ro' ? 'Acasă' : locale === 'de' ? 'Startseite' : locale === 'es' ? 'Inicio' : 'Home' }}
                        </a>

                        <a :href="`/${locale}/contact`" class="transition hover:text-white">
                            {{ locale === 'ro' ? 'Contact' : locale === 'de' ? 'Kontakt' : locale === 'es' ? 'Contacto' : 'Contact' }}
                        </a>

                        <a :href="`/${locale}/privacy`" class="transition hover:text-white">
                            {{ locale === 'ro' ? 'Confidențialitate' : locale === 'de' ? 'Datenschutz' : locale === 'es' ? 'Privacidad' : 'Privacy' }}
                        </a>

                        <a :href="`/${locale}/terms`" class="transition hover:text-white">
                            {{ locale === 'ro' ? 'Termeni' : locale === 'de' ? 'Bedingungen' : locale === 'es' ? 'Términos' : 'Terms' }}
                        </a>

                        <a :href="`/${locale}/cookies`" class="transition hover:text-white">
                            Cookies
                        </a>

                        <span class="text-slate-600">|</span>

                        <a href="mailto:contact@daveasolutions.com" class="transition hover:text-white">
                            contact@daveasolutions.com
                        </a>
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
