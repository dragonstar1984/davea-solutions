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
        eyebrow: 'Our services',
        title: 'Digital solutions designed around your goals.',
        intro: 'From modern websites to custom software and intelligent automation, we build practical digital products that help people and businesses work better.',
        contact: 'Discuss your project',

        stats: {
            serviceAreas: 'Service areas',
            clearDirection: 'Clear direction',
            roomToGrow: 'Room to grow',
        },

        servicesEyebrow: 'What we can build',
        servicesHeading: 'Built around what your project actually needs.',
        servicesIntro: 'Every project is different. We combine technical knowledge with a clear understanding of your goals, processes and priorities.',

        approachEyebrow: 'Our approach',
        approachTitle: 'Technology should make things clearer, faster and more useful.',
        approachText: 'We do not believe in one-size-fits-all solutions. Every project starts with understanding your objectives, your users and the result you want to achieve.',
        approachItems: [
            'We focus on the real problem behind the request.',
            'We recommend technology based on the project, not trends.',
            'We keep communication direct and understandable.',
            'We build solutions that can grow with your needs.',
        ],

        ctaTitle: 'Have a project in mind?',
        ctaText: 'Tell us what you want to build, improve or automate. We will discuss the best direction for your project.',
        ctaButton: 'Start a conversation',
        email: 'contact@daveasolutions.com',
        footer: 'Software solutions built around your ideas.',

        services: [
            {
                number: '01',
                category: 'Web',
                title: 'Websites & Web Applications',
                text: 'Professional websites and custom web applications designed to present your business, support your customers or improve your internal workflow.',
                items: [
                    'Business websites',
                    'Landing pages',
                    'Online stores',
                    'Web portals',
                    'Custom web applications',
                ],
            },
            {
                number: '02',
                category: 'Software',
                title: 'Custom Software',
                text: 'Software developed according to the way you work, your objectives and the specific needs of your business.',
                items: [
                    'Desktop applications',
                    'Internal business tools',
                    'Management systems',
                    'User accounts and permissions',
                    'Custom business logic',
                ],
            },
            {
                number: '03',
                category: 'Automation',
                title: 'Automation & Integrations',
                text: 'Reduce repetitive tasks and connect the tools you already use through carefully planned digital workflows.',
                items: [
                    'Process automation',
                    'Data processing',
                    'Notifications and workflows',
                    'System integrations',
                    'Reports and dashboards',
                ],
            },
            {
                number: '04',
                category: 'Data',
                title: 'Databases & Admin Panels',
                text: 'Organize your information in secure, structured and easy-to-manage systems built around your workflow.',
                items: [
                    'Database design',
                    'Administration panels',
                    'Search and filtering',
                    'Data import and export',
                    'Reports and information management',
                ],
            },
            {
                number: '05',
                category: 'Development',
                title: 'Existing Project Development',
                text: 'We can continue, improve or repair an existing project after reviewing its condition, code and requirements.',
                items: [
                    'New features',
                    'Bug fixing',
                    'Interface improvements',
                    'Code refactoring',
                    'Modernization and upgrades',
                ],
            },
            {
                number: '06',
                category: 'Support',
                title: 'Maintenance & Technical Support',
                text: 'Keep your software reliable and prepared for future changes with ongoing technical support.',
                items: [
                    'Updates',
                    'Technical checks',
                    'Issue resolution',
                    'Performance improvements',
                    'Post-launch support',
                ],
            },
        ],
    },

    ro: {
        back: 'Înapoi la pagina principală',
        eyebrow: 'Serviciile noastre',
        title: 'Soluții digitale construite în jurul obiectivelor tale.',
        intro: 'De la website-uri moderne până la software personalizat și automatizări inteligente, construim produse digitale practice care ajută oamenii și companiile să lucreze mai bine.',
        contact: 'Discută proiectul tău',

        stats: {
            serviceAreas: 'Categorii de servicii',
            clearDirection: 'Direcție clară',
            roomToGrow: 'Pregătit pentru extindere',
        },

        servicesEyebrow: 'Ce putem construi',
        servicesHeading: 'Construit în jurul nevoilor reale ale proiectului tău.',
        servicesIntro: 'Fiecare proiect este diferit. Combinăm experiența tehnică cu o înțelegere clară a obiectivelor, proceselor și priorităților tale.',

        approachEyebrow: 'Abordarea noastră',
        approachTitle: 'Tehnologia trebuie să facă lucrurile mai clare, mai rapide și mai utile.',
        approachText: 'Nu credem în soluții identice pentru fiecare proiect. Totul începe prin înțelegerea obiectivelor, utilizatorilor și rezultatului dorit.',
        approachItems: [
            'Ne concentrăm pe problema reală din spatele solicitării.',
            'Alegem tehnologia în funcție de proiect, nu de tendințe.',
            'Păstrăm comunicarea directă și ușor de înțeles.',
            'Construim soluții care pot evolua odată cu nevoile tale.',
        ],

        ctaTitle: 'Ai un proiect în minte?',
        ctaText: 'Spune-ne ce vrei să construiești, să îmbunătățești sau să automatizezi. Discutăm cea mai bună direcție pentru proiectul tău.',
        ctaButton: 'Începe o discuție',
        email: 'contact@daveasolutions.com',
        footer: 'Soluții software construite în jurul ideilor tale.',

        services: [
            {
                number: '01',
                category: 'Web',
                title: 'Website-uri și aplicații web',
                text: 'Website-uri profesionale și aplicații web personalizate pentru prezentarea afacerii, sprijinirea clienților sau îmbunătățirea activității interne.',
                items: [
                    'Website-uri pentru firme',
                    'Landing page-uri',
                    'Magazine online',
                    'Portaluri web',
                    'Aplicații web personalizate',
                ],
            },
            {
                number: '02',
                category: 'Software',
                title: 'Software personalizat',
                text: 'Programe dezvoltate conform modului tău de lucru, obiectivelor și nevoilor specifice ale afacerii.',
                items: [
                    'Aplicații desktop',
                    'Instrumente interne pentru firme',
                    'Sisteme de gestiune',
                    'Conturi și permisiuni pentru utilizatori',
                    'Logică de business personalizată',
                ],
            },
            {
                number: '03',
                category: 'Automatizare',
                title: 'Automatizări și integrări',
                text: 'Reducem activitățile repetitive și conectăm instrumentele utilizate prin fluxuri digitale planificate corect.',
                items: [
                    'Automatizarea proceselor',
                    'Prelucrarea datelor',
                    'Notificări și fluxuri de lucru',
                    'Integrări între sisteme',
                    'Rapoarte și dashboard-uri',
                ],
            },
            {
                number: '04',
                category: 'Date',
                title: 'Baze de date și panouri de administrare',
                text: 'Organizăm informațiile într-un sistem sigur, structurat și ușor de administrat, adaptat modului tău de lucru.',
                items: [
                    'Proiectarea bazelor de date',
                    'Panouri de administrare',
                    'Căutare și filtrare',
                    'Import și export de date',
                    'Rapoarte și gestionarea informațiilor',
                ],
            },
            {
                number: '05',
                category: 'Dezvoltare',
                title: 'Dezvoltarea proiectelor existente',
                text: 'Putem continua, îmbunătăți sau repara un proiect existent după analizarea stării, codului și cerințelor sale.',
                items: [
                    'Funcționalități noi',
                    'Corectarea erorilor',
                    'Îmbunătățirea interfeței',
                    'Refactorizarea codului',
                    'Modernizare și actualizare',
                ],
            },
            {
                number: '06',
                category: 'Suport',
                title: 'Mentenanță și suport tehnic',
                text: 'Păstrăm software-ul funcțional și pregătit pentru schimbări viitoare prin suport tehnic continuu.',
                items: [
                    'Actualizări',
                    'Verificări tehnice',
                    'Rezolvarea problemelor',
                    'Îmbunătățirea performanței',
                    'Suport după lansare',
                ],
            },
        ],
    },

    de: {
        back: 'Zurück zur Startseite',
        eyebrow: 'Unsere Leistungen',
        title: 'Digitale Lösungen, entwickelt für Ihre Ziele.',
        intro: 'Von modernen Websites bis zu individueller Software und intelligenten Automatisierungen entwickeln wir praktische digitale Produkte für Menschen und Unternehmen.',
        contact: 'Projekt besprechen',

        stats: {
            serviceAreas: 'Leistungsbereiche',
            clearDirection: 'Klare Richtung',
            roomToGrow: 'Raum für Wachstum',
        },

        servicesEyebrow: 'Was wir entwickeln können',
        servicesHeading: 'Entwickelt für die tatsächlichen Anforderungen Ihres Projekts.',
        servicesIntro: 'Jedes Projekt ist anders. Wir verbinden technisches Wissen mit einem klaren Verständnis Ihrer Ziele, Prozesse und Prioritäten.',

        approachEyebrow: 'Unser Ansatz',
        approachTitle: 'Technologie soll Dinge klarer, schneller und nützlicher machen.',
        approachText: 'Wir glauben nicht an identische Lösungen für jedes Projekt. Wir beginnen mit Ihren Zielen, Benutzern und dem gewünschten Ergebnis.',
        approachItems: [
            'Wir konzentrieren uns auf das eigentliche Problem.',
            'Wir wählen Technologie passend zum Projekt und nicht nur nach Trends.',
            'Wir kommunizieren direkt und verständlich.',
            'Wir entwickeln Lösungen, die mit Ihren Anforderungen wachsen können.',
        ],

        ctaTitle: 'Haben Sie ein Projekt im Kopf?',
        ctaText: 'Erzählen Sie uns, was Sie entwickeln, verbessern oder automatisieren möchten. Wir besprechen die beste Richtung für Ihr Projekt.',
        ctaButton: 'Gespräch beginnen',
        email: 'contact@daveasolutions.com',
        footer: 'Softwarelösungen rund um Ihre Ideen.',

        services: [
            {
                number: '01',
                category: 'Web',
                title: 'Websites und Webanwendungen',
                text: 'Professionelle Websites und individuelle Webanwendungen für Ihre Präsentation, Kundenbetreuung oder internen Arbeitsabläufe.',
                items: [
                    'Unternehmenswebsites',
                    'Landingpages',
                    'Online-Shops',
                    'Webportale',
                    'Individuelle Webanwendungen',
                ],
            },
            {
                number: '02',
                category: 'Software',
                title: 'Individuelle Software',
                text: 'Software, die passend zu Ihren Arbeitsabläufen, Zielen und den besonderen Anforderungen Ihres Unternehmens entwickelt wird.',
                items: [
                    'Desktop-Anwendungen',
                    'Interne Geschäftswerkzeuge',
                    'Verwaltungssysteme',
                    'Benutzerkonten und Berechtigungen',
                    'Individuelle Geschäftslogik',
                ],
            },
            {
                number: '03',
                category: 'Automatisierung',
                title: 'Automatisierungen und Integrationen',
                text: 'Weniger repetitive Aufgaben und besser verbundene Werkzeuge durch geplante digitale Abläufe.',
                items: [
                    'Prozessautomatisierung',
                    'Datenverarbeitung',
                    'Benachrichtigungen und Abläufe',
                    'Systemintegrationen',
                    'Berichte und Dashboards',
                ],
            },
            {
                number: '04',
                category: 'Daten',
                title: 'Datenbanken und Administrationsbereiche',
                text: 'Organisieren Sie Ihre Informationen in sicheren, strukturierten und leicht verwaltbaren Systemen.',
                items: [
                    'Datenbankdesign',
                    'Administrationsbereiche',
                    'Suche und Filter',
                    'Datenimport und -export',
                    'Berichte und Informationsverwaltung',
                ],
            },
            {
                number: '05',
                category: 'Entwicklung',
                title: 'Weiterentwicklung bestehender Projekte',
                text: 'Wir können bestehende Projekte nach einer Prüfung von Zustand, Code und Anforderungen weiterentwickeln, verbessern oder reparieren.',
                items: [
                    'Neue Funktionen',
                    'Fehlerbehebung',
                    'Verbesserung der Benutzeroberfläche',
                    'Code-Refactoring',
                    'Modernisierung und Aktualisierung',
                ],
            },
            {
                number: '06',
                category: 'Support',
                title: 'Wartung und technischer Support',
                text: 'Halten Sie Ihre Software zuverlässig und bereit für zukünftige Änderungen mit laufender technischer Unterstützung.',
                items: [
                    'Aktualisierungen',
                    'Technische Prüfungen',
                    'Fehlerbehebung',
                    'Leistungsverbesserungen',
                    'Support nach dem Start',
                ],
            },
        ],
    },

    es: {
        back: 'Volver al inicio',
        eyebrow: 'Nuestros servicios',
        title: 'Soluciones digitales diseñadas para tus objetivos.',
        intro: 'Desde sitios web modernos hasta software personalizado y automatizaciones inteligentes, creamos productos digitales prácticos que ayudan a las personas y empresas a trabajar mejor.',
        contact: 'Habla sobre tu proyecto',

        stats: {
            serviceAreas: 'Áreas de servicio',
            clearDirection: 'Dirección clara',
            roomToGrow: 'Espacio para crecer',
        },

        servicesEyebrow: 'Lo que podemos construir',
        servicesHeading: 'Diseñado para las necesidades reales de tu proyecto.',
        servicesIntro: 'Cada proyecto es diferente. Combinamos conocimientos técnicos con una comprensión clara de tus objetivos, procesos y prioridades.',

        approachEyebrow: 'Nuestro enfoque',
        approachTitle: 'La tecnología debe hacer las cosas más claras, rápidas y útiles.',
        approachText: 'No creemos en soluciones iguales para todos. Cada proyecto comienza con la comprensión de tus objetivos, usuarios y resultados esperados.',
        approachItems: [
            'Nos centramos en el problema real detrás de la solicitud.',
            'Recomendamos la tecnología según el proyecto, no según las tendencias.',
            'Mantenemos una comunicación directa y fácil de entender.',
            'Construimos soluciones que pueden crecer con tus necesidades.',
        ],

        ctaTitle: '¿Tienes un proyecto en mente?',
        ctaText: 'Cuéntanos qué quieres construir, mejorar o automatizar. Hablaremos sobre la mejor dirección para tu proyecto.',
        ctaButton: 'Iniciar una conversación',
        email: 'contact@daveasolutions.com',
        footer: 'Soluciones de software construidas alrededor de tus ideas.',

        services: [
            {
                number: '01',
                category: 'Web',
                title: 'Sitios web y aplicaciones web',
                text: 'Sitios web profesionales y aplicaciones web personalizadas para presentar tu negocio, ayudar a tus clientes o mejorar tu trabajo interno.',
                items: [
                    'Sitios web para empresas',
                    'Páginas de aterrizaje',
                    'Tiendas online',
                    'Portales web',
                    'Aplicaciones web personalizadas',
                ],
            },
            {
                number: '02',
                category: 'Software',
                title: 'Software personalizado',
                text: 'Software desarrollado según tu forma de trabajar, tus objetivos y las necesidades específicas de tu negocio.',
                items: [
                    'Aplicaciones de escritorio',
                    'Herramientas internas para empresas',
                    'Sistemas de gestión',
                    'Cuentas y permisos de usuarios',
                    'Lógica empresarial personalizada',
                ],
            },
            {
                number: '03',
                category: 'Automatización',
                title: 'Automatizaciones e integraciones',
                text: 'Reducimos las tareas repetitivas y conectamos las herramientas que ya utilizas mediante flujos digitales bien planificados.',
                items: [
                    'Automatización de procesos',
                    'Procesamiento de datos',
                    'Notificaciones y flujos de trabajo',
                    'Integraciones entre sistemas',
                    'Informes y paneles de control',
                ],
            },
            {
                number: '04',
                category: 'Datos',
                title: 'Bases de datos y paneles de administración',
                text: 'Organizamos tu información en sistemas seguros, estructurados y fáciles de administrar, adaptados a tu forma de trabajar.',
                items: [
                    'Diseño de bases de datos',
                    'Paneles de administración',
                    'Búsqueda y filtrado',
                    'Importación y exportación de datos',
                    'Informes y gestión de información',
                ],
            },
            {
                number: '05',
                category: 'Desarrollo',
                title: 'Desarrollo de proyectos existentes',
                text: 'Podemos continuar, mejorar o reparar un proyecto existente después de revisar su estado, código y requisitos.',
                items: [
                    'Nuevas funcionalidades',
                    'Corrección de errores',
                    'Mejoras de la interfaz',
                    'Refactorización del código',
                    'Modernización y actualizaciones',
                ],
            },
            {
                number: '06',
                category: 'Soporte',
                title: 'Mantenimiento y soporte técnico',
                text: 'Mantén tu software fiable y preparado para futuros cambios mediante soporte técnico continuo.',
                items: [
                    'Actualizaciones',
                    'Revisiones técnicas',
                    'Resolución de problemas',
                    'Mejoras de rendimiento',
                    'Soporte después del lanzamiento',
                ],
            },
        ],
    },
}

const content = computed(() => translations[locale.value] ?? translations.en)

const pageSlug = '/services'
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
                        <a v-for="language in languages" :key="language.code" :href="`/${language.code}/services`" :class="['rounded-lg px-2.5 py-1.5 text-[11px] font-black transition', locale === language.code ? 'bg-blue-500 text-white shadow-lg shadow-blue-500/20' : 'text-slate-400 hover:text-white']">{{ language.label }}
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
                        <a v-for="language in languages" :key="`mobile-${language.code}`" :href="`/${language.code}/services`" class="rounded-lg border border-white/10 px-3 py-2 text-xs font-black text-slate-300 transition hover:border-blue-400 hover:text-white">{{ language.label }}
</a>
                    </div>
                </nav>
            </div>
        </header>

        <main>
            <!-- Hero -->
            <section class="relative isolate min-h-[720px] overflow-hidden bg-[#07111f]">
                <div class="absolute -right-48 -top-48 h-[38rem] w-[38rem] rounded-full bg-blue-600/25 blur-3xl"></div>
                <div class="absolute -bottom-48 -left-48 h-[32rem] w-[32rem] rounded-full bg-cyan-500/10 blur-3xl"></div>

                <div class="pointer-events-none absolute inset-0 opacity-[0.14] [background-image:linear-gradient(rgba(96,165,250,0.35)_1px,transparent_1px),linear-gradient(90deg,rgba(96,165,250,0.35)_1px,transparent_1px)] [background-size:64px_64px]"></div>

                <div class="relative mx-auto flex min-h-[720px] max-w-7xl flex-col justify-center px-6 py-24 lg:px-8 lg:py-32">
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

                    <!-- Statistics -->
                    <div class="mt-16 grid max-w-5xl gap-4 sm:grid-cols-3">
                        <div class="rounded-2xl border border-white/15 bg-white/[0.07] p-6 shadow-xl shadow-blue-950/20 backdrop-blur-xl transition hover:border-blue-400/40 hover:bg-white/[0.1]">
                            <p class="text-4xl font-black text-blue-400">06</p>
                            <p class="mt-3 text-sm font-semibold text-slate-300">
                                {{ content.stats.serviceAreas }}
                            </p>
                        </div>

                        <div class="rounded-2xl border border-white/15 bg-white/[0.07] p-6 shadow-xl shadow-blue-950/20 backdrop-blur-xl transition hover:border-cyan-400/40 hover:bg-white/[0.1]">
                            <p class="text-4xl font-black text-cyan-300">01</p>
                            <p class="mt-3 text-sm font-semibold text-slate-300">
                                {{ content.stats.clearDirection }}
                            </p>
                        </div>

                        <div class="rounded-2xl border border-white/15 bg-white/[0.07] p-6 shadow-xl shadow-blue-950/20 backdrop-blur-xl transition hover:border-indigo-400/40 hover:bg-white/[0.1]">
                            <p class="text-4xl font-black text-indigo-300">∞</p>
                            <p class="mt-3 text-sm font-semibold text-slate-300">
                                {{ content.stats.roomToGrow }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services -->
            <section class="relative overflow-hidden bg-gradient-to-b from-white via-slate-50 to-white py-28 text-slate-950">
                <div class="absolute left-0 top-0 h-64 w-64 rounded-full bg-blue-100/50 blur-3xl"></div>
                <div class="absolute bottom-0 right-0 h-72 w-72 rounded-full bg-indigo-100/50 blur-3xl"></div>

                <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mb-14 max-w-3xl">
                        <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">
                            {{ content.servicesEyebrow }}
                        </p>

                        <h2 class="mt-4 max-w-2xl text-4xl font-black tracking-tight sm:text-5xl">
                            {{ content.servicesHeading }}
                        </h2>

                        <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600">
                            {{ content.servicesIntro }}
                        </p>
                    </div>

                    <div class="grid gap-7 md:grid-cols-2">
                        <article
                            v-for="service in content.services"
                            :key="service.number"
                            class="group relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-500 hover:border-blue-300 hover:shadow-2xl hover:shadow-blue-200/40 sm:p-10"
                        >
                            <div class="pointer-events-none absolute -right-20 -top-20 h-56 w-56 rounded-full bg-blue-100/70 blur-3xl transition duration-500 group-hover:bg-blue-200"></div>

                            <div class="absolute bottom-0 left-0 top-0 w-1.5 bg-gradient-to-b from-blue-500 via-indigo-500 to-cyan-400 opacity-70 transition duration-500 group-hover:opacity-100"></div>

                            <div class="relative">
                                <div class="flex items-start justify-between">
                                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 text-lg font-black text-white shadow-xl shadow-blue-500/25 transition duration-500 group-hover:scale-105">
                                        {{ service.number }}
                                    </div>

                                    <div class="text-right">
                                        <p class="text-[10px] font-black uppercase tracking-[0.2em] text-blue-600">
                                            {{ service.category }}
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-10">
                                    <h3 class="max-w-md text-2xl font-black leading-tight tracking-tight text-slate-950 sm:text-[1.7rem]">
                                        {{ service.title }}
                                    </h3>

                                    <div class="mt-5 h-1 w-12 rounded-full bg-blue-500 transition-all duration-500 group-hover:w-24"></div>

                                    <p class="mt-6 max-w-xl text-base leading-8 text-slate-600">
                                        {{ service.text }}
                                    </p>
                                </div>

                                <ul class="mt-9 space-y-4 border-t border-slate-200 pt-7">
                                    <li
                                        v-for="item in service.items"
                                        :key="item"
                                        class="flex items-start gap-3 text-sm font-semibold leading-6 text-slate-700"
                                    >
                                        <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-100 text-xs font-black text-blue-600">
                                            ✓
                                        </span>

                                        <span>{{ item }}</span>
                                    </li>
                                </ul>

                                <div class="mt-10 border-t border-slate-100 pt-5">
                                    <span class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">
                                        DAVEA Solutions
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Approach -->
            <section class="bg-slate-100 py-28 text-slate-950">
                <div class="mx-auto grid max-w-7xl gap-14 px-6 lg:grid-cols-[0.85fr_1.15fr] lg:px-8">
                    <div>
                        <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">
                            {{ content.approachEyebrow }}
                        </p>

                        <h2 class="mt-5 text-4xl font-black leading-tight tracking-tight sm:text-5xl">
                            {{ content.approachTitle }}
                        </h2>

                        <p class="mt-7 max-w-xl text-lg leading-8 text-slate-600">
                            {{ content.approachText }}
                        </p>

                        <a
                            :href="`/${locale}/contact`"
                            class="mt-9 inline-flex rounded-xl bg-slate-950 px-6 py-3.5 font-black text-white transition hover:-translate-y-0.5 hover:bg-blue-600"
                        >
                            {{ content.contact }}
                            <span class="ml-2">→</span>
                        </a>
                    </div>

                    <div class="space-y-4">
                        <div
                            v-for="(item, index) in content.approachItems"
                            :key="item"
                            class="group flex items-start gap-5 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-blue-300 hover:shadow-lg"
                        >
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-100 text-sm font-black text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                                0{{ index + 1 }}
                            </span>

                            <span class="pt-2 font-bold leading-6 text-slate-800">
                                {{ item }}
                            </span>
                        </div>
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
