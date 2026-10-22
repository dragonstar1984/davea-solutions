<script setup>
import { computed, ref } from 'vue'
import { Head } from '@inertiajs/vue3'
import { router, usePage } from '@inertiajs/vue3'

const page = usePage()

const locale = computed(() => page.props.locale ?? 'en')

const form = ref({
    name: '',
    email: '',
    phone: '',
    company: '',
    projectType: '',
    budget: '',
    message: '',
    consent: false,
    website: '',
})

const submitted = ref(false)

const translations = {
    en: {
        back: 'Back to home',
        eyebrow: 'Let’s work together',
        title: 'Tell us about your project.',
        intro: 'Have an idea, a business problem or an existing project that needs improvement? Tell us what you need and we will discuss the best next step.',

        contactTitle: 'Choose the easiest way to reach us.',
        emailLabel: 'Email',
        phoneLabel: 'Phone',
        whatsappLabel: 'WhatsApp',
        languagesLabel: 'Languages',
        languages: 'English, Romanian, German and Spanish',
        availabilityLabel: 'Response time',
        availability: 'Usually within one business day',

        formEyebrow: 'Start a project',
        formTitle: 'Let’s turn your idea into something useful.',
        formIntro: 'You do not need to know the technical details. Describe what you want to achieve and we will help clarify the next step.',

        fields: {
            name: 'Your name',
            email: 'Email address',
            phone: 'Phone number',
            company: 'Company',
            projectType: 'What do you need?',
            budget: 'Estimated budget',
            message: 'Tell us about your project',
            consent: 'I agree that my information may be used to respond to my request.',
        },

        placeholders: {
            name: 'Your full name',
            email: 'you@example.com',
        phone: 'Phone',
            company: 'Company name, if applicable',
            message: 'What would you like to build, improve or automate?',
        },

        projectTypes: [
            'Website',
            'Web application',
            'Online store',
            'Desktop application',
            'Custom software',
            'Automation',
            'Existing project development',
            'Other idea',
        ],

        budgets: [
            'I am not sure yet',
            'Under €500',
            '€500 – €1,500',
            '€1,500 – €5,000',
            'Over €5,000',
        ],

        send: 'Send project request',
        sendingNote: 'We will review your message and get back to you as soon as possible.',
        successTitle: 'Thank you for reaching out.',
        successText: 'Your message has been prepared successfully. We will contact you to discuss the project.',
        sendAnother: 'Send another request',

        processTitle: 'What happens next?',
        process: [
            {
                number: '01',
                title: 'We read your request',
                text: 'We review the idea, requirements and information you provide.',
            },
            {
                number: '02',
                title: 'We clarify the details',
                text: 'If necessary, we ask a few questions to better understand the project.',
            },
            {
                number: '03',
                title: 'We discuss the direction',
                text: 'We identify a practical next step and a suitable way to continue.',
            },
        ],

        ctaTitle: 'Prefer a direct conversation?',
        ctaText: 'Call us or start a WhatsApp conversation if you would rather explain the project directly.',
        call: 'Call us',
        whatsapp: 'Open WhatsApp',
        emailButton: 'Send an email',

        footer: 'Software solutions built around your ideas.',
    },

    ro: {
        back: 'Înapoi la pagina principală',
        eyebrow: 'Hai să colaborăm',
        title: 'Spune-ne despre proiectul tău.',
        intro: 'Ai o idee, o problemă de business sau un proiect existent care are nevoie de îmbunătățiri? Spune-ne de ce ai nevoie și discutăm următorul pas.',

        contactTitle: 'Alege cea mai simplă metodă de contact.',
        emailLabel: 'E-mail',
        phoneLabel: 'Telefon',
        whatsappLabel: 'WhatsApp',
        languagesLabel: 'Limbi disponibile',
        languages: 'Română, engleză, germană și spaniolă',
        availabilityLabel: 'Timp de răspuns',
        availability: 'De regulă, în maximum o zi lucrătoare',

        formEyebrow: 'Începe un proiect',
        formTitle: 'Hai să transformăm ideea ta în ceva util.',
        formIntro: 'Nu trebuie să cunoști detaliile tehnice. Descrie ce vrei să obții și te ajutăm să clarifici următorul pas.',

        fields: {
            name: 'Numele tău',
            email: 'Adresa de e-mail',
            phone: 'Număr de telefon',
            company: 'Companie',
            projectType: 'De ce ai nevoie?',
            budget: 'Buget estimativ',
            message: 'Spune-ne despre proiect',
            consent: 'Sunt de acord ca informațiile mele să fie folosite pentru a răspunde solicitării.',
        },

        placeholders: {
            name: 'Numele și prenumele',
            email: 'tu@exemplu.com',
        phone: 'Telefon',
            company: 'Numele companiei, dacă este cazul',
            message: 'Ce ai vrea să construiești, să îmbunătățești sau să automatizezi?',
        },

        projectTypes: [
            'Website',
            'Aplicație web',
            'Magazin online',
            'Aplicație desktop',
            'Software personalizat',
            'Automatizare',
            'Dezvoltarea unui proiect existent',
            'Altă idee',
        ],

        budgets: [
            'Nu sunt sigur încă',
            'Sub 500 €',
            '500 € – 1.500 €',
            '1.500 € – 5.000 €',
            'Peste 5.000 €',
        ],

        send: 'Trimite solicitarea',
        sendingNote: 'Vom analiza mesajul și vom reveni cât mai curând posibil.',
        successTitle: 'Îți mulțumim că ne-ai contactat.',
        successText: 'Mesajul tău a fost pregătit cu succes. Te vom contacta pentru a discuta proiectul.',
        sendAnother: 'Trimite o altă solicitare',

        processTitle: 'Ce se întâmplă după aceea?',
        process: [
            {
                number: '01',
                title: 'Citim solicitarea',
                text: 'Analizăm ideea, cerințele și informațiile trimise.',
            },
            {
                number: '02',
                title: 'Clarificăm detaliile',
                text: 'Dacă este necesar, îți adresăm câteva întrebări pentru a înțelege mai bine proiectul.',
            },
            {
                number: '03',
                title: 'Discutăm direcția',
                text: 'Identificăm următorul pas practic și modalitatea potrivită de colaborare.',
            },
        ],

        ctaTitle: 'Preferi o discuție directă?',
        ctaText: 'Sună-ne sau începe o conversație pe WhatsApp dacă preferi să explici proiectul direct.',
        call: 'Sună-ne',
        whatsapp: 'Deschide WhatsApp',
        emailButton: 'Trimite un e-mail',

        footer: 'Soluții software construite în jurul ideilor tale.',
    },

    de: {
        back: 'Zurück zur Startseite',
        eyebrow: 'Lassen Sie uns zusammenarbeiten',
        title: 'Erzählen Sie uns von Ihrem Projekt.',
        intro: 'Haben Sie eine Idee, ein Geschäftsproblem oder ein bestehendes Projekt, das verbessert werden soll? Erzählen Sie uns, was Sie benötigen.',

        contactTitle: 'Wählen Sie den einfachsten Kontaktweg.',
        emailLabel: 'E-Mail',
        phoneLabel: 'Telefon',
        whatsappLabel: 'WhatsApp',
        languagesLabel: 'Sprachen',
        languages: 'Deutsch, Englisch, Rumänisch und Spanisch',
        availabilityLabel: 'Antwortzeit',
        availability: 'Normalerweise innerhalb eines Werktages',

        formEyebrow: 'Projekt starten',
        formTitle: 'Lassen Sie uns Ihre Idee in etwas Nützliches verwandeln.',
        formIntro: 'Sie müssen keine technischen Details kennen. Beschreiben Sie Ihr Ziel und wir helfen Ihnen beim nächsten Schritt.',

        fields: {
            name: 'Ihr Name',
            email: 'E-Mail-Adresse',
            phone: 'Telefonnummer',
            company: 'Unternehmen',
            projectType: 'Was benötigen Sie?',
            budget: 'Geschätztes Budget',
            message: 'Erzählen Sie uns von Ihrem Projekt',
            consent: 'Ich bin damit einverstanden, dass meine Angaben zur Beantwortung meiner Anfrage verwendet werden.',
        },

        placeholders: {
            name: 'Vor- und Nachname',
            email: 'sie@beispiel.de',
        phone: 'Telefon',
            company: 'Name des Unternehmens, falls zutreffend',
            message: 'Was möchten Sie entwickeln, verbessern oder automatisieren?',
        },

        projectTypes: [
            'Website',
            'Webanwendung',
            'Online-Shop',
            'Desktop-Anwendung',
            'Individuelle Software',
            'Automatisierung',
            'Weiterentwicklung eines bestehenden Projekts',
            'Andere Idee',
        ],

        budgets: [
            'Noch nicht sicher',
            'Unter 500 €',
            '500 € – 1.500 €',
            '1.500 € – 5.000 €',
            'Über 5.000 €',
        ],

        send: 'Projektanfrage senden',
        sendingNote: 'Wir prüfen Ihre Nachricht und melden uns so schnell wie möglich.',
        successTitle: 'Vielen Dank für Ihre Nachricht.',
        successText: 'Ihre Nachricht wurde erfolgreich vorbereitet. Wir kontaktieren Sie, um das Projekt zu besprechen.',
        sendAnother: 'Weitere Anfrage senden',

        processTitle: 'Was passiert als Nächstes?',
        process: [
            {
                number: '01',
                title: 'Wir lesen Ihre Anfrage',
                text: 'Wir prüfen Ihre Idee, Anforderungen und die bereitgestellten Informationen.',
            },
            {
                number: '02',
                title: 'Wir klären die Details',
                text: 'Falls notwendig, stellen wir einige Fragen, um das Projekt besser zu verstehen.',
            },
            {
                number: '03',
                title: 'Wir besprechen die Richtung',
                text: 'Wir bestimmen den nächsten praktischen Schritt und die passende Zusammenarbeit.',
            },
        ],

        ctaTitle: 'Bevorzugen Sie ein direktes Gespräch?',
        ctaText: 'Rufen Sie uns an oder starten Sie ein WhatsApp-Gespräch, wenn Sie das Projekt direkt erklären möchten.',
        call: 'Anrufen',
        whatsapp: 'WhatsApp öffnen',
        emailButton: 'E-Mail senden',

        footer: 'Softwarelösungen rund um Ihre Ideen.',
    },

    es: {
        back: 'Volver al inicio',
        eyebrow: 'Trabajemos juntos',
        title: 'Cuéntanos sobre tu proyecto.',
        intro: '¿Tienes una idea, un problema empresarial o un proyecto existente que necesita mejoras? Cuéntanos lo que necesitas y hablaremos del siguiente paso.',

        contactTitle: 'Elige la forma más sencilla de contactarnos.',
        emailLabel: 'Correo electrónico',
        phoneLabel: 'Teléfono',
        whatsappLabel: 'WhatsApp',
        languagesLabel: 'Idiomas',
        languages: 'Español, inglés, rumano y alemán',
        availabilityLabel: 'Tiempo de respuesta',
        availability: 'Normalmente en un día laborable',

        formEyebrow: 'Iniciar un proyecto',
        formTitle: 'Convirtamos tu idea en algo útil.',
        formIntro: 'No necesitas conocer los detalles técnicos. Describe lo que quieres conseguir y te ayudaremos a definir el siguiente paso.',

        fields: {
            name: 'Tu nombre',
            email: 'Dirección de correo',
            phone: 'Número de teléfono',
            company: 'Empresa',
            projectType: '¿Qué necesitas?',
            budget: 'Presupuesto estimado',
            message: 'Cuéntanos sobre tu proyecto',
            consent: 'Acepto que mi información sea utilizada para responder a mi solicitud.',
        },

        placeholders: {
            name: 'Nombre y apellidos',
            email: 'tu@ejemplo.com',
        phone: 'Teléfono',
            company: 'Nombre de la empresa, si corresponde',
            message: '¿Qué te gustaría construir, mejorar o automatizar?',
        },

        projectTypes: [
            'Sitio web',
            'Aplicación web',
            'Tienda online',
            'Aplicación de escritorio',
            'Software personalizado',
            'Automatización',
            'Desarrollo de un proyecto existente',
            'Otra idea',
        ],

        budgets: [
            'Todavía no estoy seguro',
            'Menos de 500 €',
            '500 € – 1.500 €',
            '1.500 € – 5.000 €',
            'Más de 5.000 €',
        ],

        send: 'Enviar solicitud',
        sendingNote: 'Revisaremos tu mensaje y responderemos lo antes posible.',
        successTitle: 'Gracias por contactarnos.',
        successText: 'Tu mensaje se ha preparado correctamente. Nos pondremos en contacto contigo para hablar del proyecto.',
        sendAnother: 'Enviar otra solicitud',

        processTitle: '¿Qué ocurre después?',
        process: [
            {
                number: '01',
                title: 'Leemos tu solicitud',
                text: 'Revisamos tu idea, los requisitos y la información que has proporcionado.',
            },
            {
                number: '02',
                title: 'Aclaramos los detalles',
                text: 'Si es necesario, te hacemos algunas preguntas para entender mejor el proyecto.',
            },
            {
                number: '03',
                title: 'Hablamos de la dirección',
                text: 'Identificamos el siguiente paso práctico y la mejor forma de continuar.',
            },
        ],

        ctaTitle: '¿Prefieres una conversación directa?',
        ctaText: 'Llámanos o inicia una conversación por WhatsApp si prefieres explicar el proyecto directamente.',
        call: 'Llamar',
        whatsapp: 'Abrir WhatsApp',
        emailButton: 'Enviar un correo',

        footer: 'Soluciones de software construidas alrededor de tus ideas.',
    },
}

const content = computed(() => translations[locale.value] ?? translations.en)

const pageSlug = '/contact'
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

const submitForm = () => {
    const payload = {
        name: form.value.name,
        email: form.value.email,
        phone: form.value.phone,
        company: form.value.company,
        project_type: form.value.projectType,
        budget: form.value.budget,
        message: form.value.message,
        consent: form.value.consent,
        website: form.value.website,
    }

    router.post(`/${locale.value}/contact`, payload, {
        preserveScroll: true,
        preserveState: true,
        onSuccess: () => {
            submitted.value = true
        },
        onError: (errors) => {
            console.error('Erori formular:', errors)
        },
    })
}

const resetForm = () => {
    form.value = {
        name: '',
        email: '',
        phone: '',
        company: '',
        projectType: '',
        budget: '',
        message: '',
        consent: false,
        website: '',
    }

    submitted.value = false
}
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

                    <span class="text-lg font-black tracking-tight">
                        DAVEA<span class="text-blue-400">.</span>
                        <span class="text-slate-300">Solutions</span>
                    </span>
                </a>

                <div class="flex items-center gap-3">
                    <div class="flex items-center gap-1 rounded-xl border border-white/10 bg-white/5 p-1">
                        <a
                            v-for="language in languages"
                            :key="language.code"
                            :href="`/${language.code}/contact`"
                            :class="[
                                'rounded-lg px-2.5 py-1.5 text-[11px] font-black transition',
                                locale === language.code
                                    ? 'bg-blue-500 text-white shadow-lg shadow-blue-500/20'
                                    : 'text-slate-400 hover:text-white'
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
            <!-- Hero -->
            <section class="relative isolate min-h-[620px] overflow-hidden bg-[#07111f]">
                <div class="absolute -right-48 -top-48 h-[38rem] w-[38rem] rounded-full bg-blue-600/25 blur-3xl"></div>
                <div class="absolute -bottom-48 -left-48 h-[32rem] w-[32rem] rounded-full bg-cyan-500/10 blur-3xl"></div>

                <div class="pointer-events-none absolute inset-0 opacity-[0.14] [background-image:linear-gradient(rgba(96,165,250,0.35)_1px,transparent_1px),linear-gradient(90deg,rgba(96,165,250,0.35)_1px,transparent_1px)] [background-size:64px_64px]"></div>

                <div class="relative mx-auto max-w-7xl px-6 py-24 lg:px-8 lg:py-32">
                    <a
                        :href="`/${locale}`"
                        class="inline-flex items-center gap-2 text-sm font-bold text-blue-400 transition hover:text-blue-300"
                    >
                        <span>←</span>
                        <span>{{ content.back }}</span>
                    </a>

                    <div class="mt-16 max-w-4xl">
                        <div class="inline-flex items-center gap-3 rounded-full border border-blue-400/20 bg-blue-400/10 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] text-blue-300">
                            <span class="h-2 w-2 animate-pulse rounded-full bg-blue-400"></span>
                            {{ content.eyebrow }}
                        </div>

                        <h1 class="mt-7 text-5xl font-black leading-[1.04] tracking-[-0.04em] sm:text-7xl">
                            {{ content.title }}
                        </h1>

                        <p class="mt-8 max-w-3xl text-lg leading-8 text-slate-300 sm:text-xl">
                            {{ content.intro }}
                        </p>
                    </div>
                </div>
            </section>

            <!-- Contact details -->
            <section class="relative overflow-hidden bg-white py-24 text-slate-950">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                        <a
                            href="mailto:contact@davea.ro"
                            class="group rounded-2xl border border-slate-200 bg-slate-50 p-6 transition hover:-translate-y-1 hover:border-blue-300 hover:bg-white hover:shadow-xl hover:shadow-blue-100"
                        >
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-xl text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                                @
                            </div>

                            <p class="mt-6 text-xs font-black uppercase tracking-[0.18em] text-slate-400">
                                {{ content.emailLabel }}
                            </p>

                            <p class="mt-3 break-all font-bold text-slate-900">
                                contact@davea.ro
                            </p>
                        </a>

                        <a
                            href="tel:+40726600483"
                            class="group rounded-2xl border border-slate-200 bg-slate-50 p-6 transition hover:-translate-y-1 hover:border-blue-300 hover:bg-white hover:shadow-xl hover:shadow-blue-100"
                        >
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-100 text-xl text-cyan-600 transition group-hover:bg-cyan-500 group-hover:text-white">
                                ☎
                            </div>

                            <p class="mt-6 text-xs font-black uppercase tracking-[0.18em] text-slate-400">
                                {{ content.phoneLabel }}
                            </p>

                            <p class="mt-3 font-bold text-slate-900">
                                +40 726 600 483
                            </p>
                        </a>

                        <a
                            href="https://wa.me/40726600483"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="group rounded-2xl border border-slate-200 bg-slate-50 p-6 transition hover:-translate-y-1 hover:border-blue-300 hover:bg-white hover:shadow-xl hover:shadow-blue-100"
                        >
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-100 text-lg font-black text-emerald-600 transition group-hover:bg-emerald-500 group-hover:text-white">
                                WA
                            </div>

                            <p class="mt-6 text-xs font-black uppercase tracking-[0.18em] text-slate-400">
                                {{ content.whatsappLabel }}
                            </p>

                            <p class="mt-3 font-bold text-slate-900">
                                +40 726 600 483
                            </p>
                        </a>

                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-100 text-xl text-indigo-600">
                                ✦
                            </div>

                            <p class="mt-6 text-xs font-black uppercase tracking-[0.18em] text-slate-400">
                                {{ content.languagesLabel }}
                            </p>

                            <p class="mt-3 font-bold leading-6 text-slate-900">
                                {{ content.languages }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Form section -->
            <section class="bg-slate-100 py-28 text-slate-950">
                <div class="mx-auto grid max-w-7xl gap-14 px-6 lg:grid-cols-[0.75fr_1.25fr] lg:px-8">
                    <div>
                        <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">
                            {{ content.formEyebrow }}
                        </p>

                        <h2 class="mt-5 text-4xl font-black leading-tight tracking-tight sm:text-5xl">
                            {{ content.formTitle }}
                        </h2>

                        <p class="mt-7 max-w-xl text-lg leading-8 text-slate-600">
                            {{ content.formIntro }}
                        </p>

                        <div class="mt-10 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                            <p class="text-xs font-black uppercase tracking-[0.18em] text-slate-400">
                                {{ content.availabilityLabel }}
                            </p>

                            <p class="mt-3 font-bold text-slate-900">
                                {{ content.availability }}
                            </p>
                        </div>
                    </div>

                    <div class="rounded-[2rem] border border-slate-200 bg-white p-7 shadow-xl shadow-slate-200/70 sm:p-10">
                        <div
                            v-if="submitted"
                            class="flex min-h-[500px] flex-col items-center justify-center text-center"
                        >
                            <div class="flex h-20 w-20 items-center justify-center rounded-full bg-emerald-100 text-3xl text-emerald-600">
                                ✓
                            </div>

                            <h3 class="mt-8 text-3xl font-black">
                                {{ content.successTitle }}
                            </h3>

                            <p class="mt-4 max-w-md leading-7 text-slate-600">
                                {{ content.successText }}
                            </p>

                            <button
                                type="button"
                                class="mt-8 rounded-xl bg-slate-950 px-6 py-3.5 font-black text-white transition hover:bg-blue-600"
                                @click="resetForm"
                            >
                                {{ content.sendAnother }}
                            </button>
                        </div>

                        <form
                            v-else
                            class="space-y-6"
                            @submit.prevent="submitForm"
                        >
                            <!-- Honeypot anti-spam: humans never see or fill this field. -->
                            <div class="pointer-events-none absolute -left-[9999px] h-0 w-0 overflow-hidden" aria-hidden="true">
                                <label for="contact-website">Website</label>
                                <input
                                    id="contact-website"
                                    v-model="form.website"
                                    name="website"
                                    type="text"
                                    tabindex="-1"
                                    autocomplete="off"
                                />
                            </div>
                            <div class="grid gap-6 sm:grid-cols-2">
                                <div>
                                    <label class="text-sm font-black text-slate-800">
                                        {{ content.fields.name }}
                                    </label>

                                    <input
                                        v-model="form.name"
                                        type="text"
                                        required
                                        :placeholder="content.placeholders.name"
                                        class="mt-2 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                    />
                                </div>

                                <div>
                                    <label class="text-sm font-black text-slate-800">
                                        {{ content.fields.email }}
                                    </label>

                                    <input
                                        v-model="form.email"
                                        type="email"
                                        required
                                        :placeholder="content.placeholders.email"
                                        class="mt-2 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                    />
                                </div>
                            </div>

                            <div class="grid gap-6 sm:grid-cols-2">
                                <div>
                                    <label class="text-sm font-black text-slate-800">
                                        {{ content.fields.phone }}
                                    </label>

                                    <input
                                        v-model="form.phone"
                                        type="tel"
                                        :placeholder="content.placeholders.phone"
                                        class="mt-2 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                    />
                                </div>

                                <div>
                                    <label class="text-sm font-black text-slate-800">
                                        {{ content.fields.company }}
                                    </label>

                                    <input
                                        v-model="form.company"
                                        type="text"
                                        :placeholder="content.placeholders.company"
                                        class="mt-2 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                    />
                                </div>
                            </div>

                            <div class="grid gap-6 sm:grid-cols-2">
                                <div>
                                    <label class="text-sm font-black text-slate-800">
                                        {{ content.fields.projectType }}
                                    </label>

                                    <select
                                        v-model="form.projectType"
                                        required
                                        class="mt-2 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-slate-900 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                    >
                                        <option value="" disabled>
                                            {{ content.fields.projectType }}
                                        </option>

                                        <option
                                            v-for="projectType in content.projectTypes"
                                            :key="projectType"
                                            :value="projectType"
                                        >
                                            {{ projectType }}
                                        </option>
                                    </select>
                                </div>

                                <div>
                                    <label class="text-sm font-black text-slate-800">
                                        {{ content.fields.budget }}
                                    </label>

                                    <select
                                        v-model="form.budget"
                                        class="mt-2 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-slate-900 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                    >
                                        <option value="" disabled>
                                            {{ content.fields.budget }}
                                        </option>

                                        <option
                                            v-for="budget in content.budgets"
                                            :key="budget"
                                            :value="budget"
                                        >
                                            {{ budget }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="text-sm font-black text-slate-800">
                                    {{ content.fields.message }}
                                </label>

                                <textarea
                                    v-model="form.message"
                                    required
                                    rows="6"
                                    :placeholder="content.placeholders.message"
                                    class="mt-2 w-full resize-y rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                ></textarea>
                            </div>

                            <label class="flex items-start gap-3 text-sm leading-6 text-slate-600">
                                <input
                                    v-model="form.consent"
                                    type="checkbox"
                                    required
                                    class="mt-1 h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                                />

                                <span>{{ content.fields.consent }}</span>
                            </label>

                            <div class="border-t border-slate-100 pt-6">
                                <button
                                    type="submit"
                                    class="w-full rounded-xl bg-blue-600 px-6 py-4 font-black text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-0.5 hover:bg-blue-500"
                                >
                                    {{ content.send }}
                                    <span class="ml-2">→</span>
                                </button>

                                <p class="mt-4 text-center text-xs leading-5 text-slate-500">
                                    {{ content.sendingNote }}
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- What happens next -->
            <section class="bg-white py-28 text-slate-950">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mb-14 max-w-2xl">
                        <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">
                            {{ content.processTitle }}
                        </p>
                    </div>

                    <div class="grid gap-6 md:grid-cols-3">
                        <article
                            v-for="step in content.process"
                            :key="step.number"
                            class="rounded-2xl border border-slate-200 bg-slate-50 p-7 transition hover:-translate-y-1 hover:border-blue-300 hover:bg-white hover:shadow-xl hover:shadow-blue-100"
                        >
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-sm font-black text-blue-600">
                                {{ step.number }}
                            </span>

                            <h3 class="mt-8 text-xl font-black">
                                {{ step.title }}
                            </h3>

                            <p class="mt-4 leading-7 text-slate-600">
                                {{ step.text }}
                            </p>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Direct contact CTA -->
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

                    <div class="mt-10 flex flex-wrap justify-center gap-4">
                        <a
                            href="tel:+40726600483"
                            class="rounded-xl bg-white px-6 py-3.5 font-black text-blue-700 shadow-xl transition hover:-translate-y-1 hover:bg-blue-50"
                        >
                            {{ content.call }}
                        </a>

                        <a
                            href="https://wa.me/40726600483"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="rounded-xl border border-white/30 bg-white/10 px-6 py-3.5 font-black text-white transition hover:-translate-y-1 hover:bg-white/20"
                        >
                            {{ content.whatsapp }}
                        </a>

                        <a
                            href="mailto:contact@davea.ro"
                            class="rounded-xl border border-white/30 bg-transparent px-6 py-3.5 font-black text-white transition hover:-translate-y-1 hover:bg-white/10"
                        >
                            {{ content.emailButton }}
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="border-t border-white/10 bg-[#07111f]">
            <div class="mx-auto flex max-w-7xl flex-col gap-5 px-6 py-9 text-sm text-slate-400 sm:flex-row sm:items-center sm:justify-between lg:px-8">
                <div>
                    <p class="font-black text-white">
                        DAVEA<span class="text-blue-400">.</span> Solutions
                    </p>

                    <p class="mt-1">
                        {{ content.footer }}
                    </p>
                </div>

                <div class="flex items-center gap-5">
                    <a
                        :href="`/${locale}`"
                        class="transition hover:text-white"
                    >
                        {{ content.back }}
                    </a>

                    <a
                        href="mailto:contact@davea.ro"
                        class="transition hover:text-white"
                    >
                        contact@davea.ro
                    </a>
                </div>
            </div>
        </footer>
    </div>
</template>
