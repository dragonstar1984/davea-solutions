<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'

const page = usePage()
const locale = computed(() => page.props.locale ?? 'en')

const translations = {
    en: {
        title: 'Cookie Policy', back: 'Back to home', contact: 'Contact', updated: 'Last updated: October 2026',
        intro: 'This Cookie Policy explains how cookies and similar browser storage may be used on the DAVEA Solutions website.',
        sections: [
            ['1. What cookies are', 'Cookies are small text files stored by a website in your browser. They can help a website remember settings, maintain sessions and operate securely.'],
            ['2. Necessary technologies', 'The website may use necessary cookies or browser storage for session management, language preferences, security and core functionality. These technologies are required for parts of the website to work.'],
            ['3. Contact form and sessions', 'Technical storage may be used to support the contact form, protect requests and maintain a reliable browsing session.'],
            ['4. Analytics and marketing', 'Optional analytics, advertising or marketing cookies are not required for the basic operation of this website. If they are introduced, the relevant information and consent options will be updated before they are used where required.'],
            ['5. Managing cookies', 'You can manage or delete cookies through your browser settings. Blocking necessary cookies may affect the functionality or security of the website.'],
            ['6. Updates', 'This policy may be updated when the website, technologies or legal requirements change.'],
            ['7. Contact', 'For questions about cookies, contact Stoean Dragos at contact@daveasolutions.com.'],
        ],
        footer: 'Software solutions built around your ideas.',
    },
    ro: {
        title: 'Politica privind cookie-urile', back: 'Înapoi la pagina principală', contact: 'Contact', updated: 'Ultima actualizare: octombrie 2026',
        intro: 'Această politică explică modul în care pot fi folosite cookie-urile și stocarea similară în browser pe website-ul DAVEA Solutions.',
        sections: [
            ['1. Ce sunt cookie-urile', 'Cookie-urile sunt fișiere text mici stocate de un website în browser. Ele pot ajuta la memorarea setărilor, gestionarea sesiunilor și funcționarea în siguranță.'],
            ['2. Tehnologii necesare', 'Website-ul poate folosi cookie-uri necesare sau stocare în browser pentru gestionarea sesiunii, preferințele de limbă, securitate și funcțiile de bază.'],
            ['3. Formularul de contact și sesiunile', 'Stocarea tehnică poate fi folosită pentru susținerea formularului de contact, protejarea solicitărilor și menținerea unei sesiuni de navigare stabile.'],
            ['4. Analiză și marketing', 'Cookie-urile opționale de analiză, publicitate sau marketing nu sunt necesare pentru funcționarea de bază a website-ului. Dacă vor fi introduse, vom actualiza informarea și opțiunile de consimțământ înainte de utilizare, atunci când acestea sunt necesare.'],
            ['5. Gestionarea cookie-urilor', 'Poți gestiona sau șterge cookie-urile din setările browserului. Blocarea cookie-urilor necesare poate afecta funcționarea sau securitatea website-ului.'],
            ['6. Actualizări', 'Această politică poate fi actualizată atunci când se schimbă website-ul, tehnologiile sau cerințele legale.'],
            ['7. Contact', 'Pentru întrebări despre cookie-uri, îl poți contacta pe Stoean Dragos la contact@daveasolutions.com.'],
        ],
        footer: 'Soluții software construite în jurul ideilor tale.',
    },
    de: {
        title: 'Cookie-Richtlinie', back: 'Zurück zur Startseite', contact: 'Kontakt', updated: 'Letzte Aktualisierung: Oktober 2026',
        intro: 'Diese Richtlinie erklärt, wie Cookies und ähnliche Browser-Speicher auf der DAVEA-Solutions-Website verwendet werden können.',
        sections: [
            ['1. Was Cookies sind', 'Cookies sind kleine Textdateien, die eine Website im Browser speichert. Sie können Einstellungen speichern, Sitzungen verwalten und den sicheren Betrieb unterstützen.'],
            ['2. Notwendige Technologien', 'Die Website kann notwendige Cookies oder Browser-Speicher für Sitzungen, Spracheinstellungen, Sicherheit und grundlegende Funktionen verwenden.'],
            ['3. Kontaktformular und Sitzungen', 'Technischer Speicher kann verwendet werden, um das Kontaktformular zu unterstützen, Anfragen zu schützen und eine zuverlässige Sitzung zu ermöglichen.'],
            ['4. Analyse und Marketing', 'Optionale Analyse-, Werbe- oder Marketing-Cookies sind für die grundlegende Funktion der Website nicht erforderlich. Bei ihrer Einführung werden die Informationen und Einwilligungsoptionen entsprechend aktualisiert.'],
            ['5. Cookie-Verwaltung', 'Sie können Cookies über die Einstellungen Ihres Browsers verwalten oder löschen. Das Blockieren notwendiger Cookies kann Funktionen oder Sicherheit beeinträchtigen.'],
            ['6. Änderungen', 'Diese Richtlinie kann bei Änderungen der Website, Technologien oder gesetzlichen Anforderungen aktualisiert werden.'],
            ['7. Kontakt', 'Fragen zu Cookies richten Sie bitte an Stoean Dragos unter contact@daveasolutions.com.'],
        ],
        footer: 'Softwarelösungen rund um Ihre Ideen.',
    },
    es: {
        title: 'Política de cookies', back: 'Volver al inicio', contact: 'Contacto', updated: 'Última actualización: octubre de 2026',
        intro: 'Esta política explica cómo pueden utilizarse las cookies y el almacenamiento similar del navegador en el sitio web de DAVEA Solutions.',
        sections: [
            ['1. Qué son las cookies', 'Las cookies son pequeños archivos de texto que un sitio web guarda en el navegador. Pueden recordar ajustes, gestionar sesiones y ayudar a mantener la seguridad.'],
            ['2. Tecnologías necesarias', 'El sitio puede utilizar cookies necesarias o almacenamiento del navegador para sesiones, preferencias de idioma, seguridad y funciones básicas.'],
            ['3. Formulario de contacto y sesiones', 'El almacenamiento técnico puede utilizarse para apoyar el formulario de contacto, proteger las solicitudes y mantener una sesión de navegación fiable.'],
            ['4. Análisis y marketing', 'Las cookies opcionales de análisis, publicidad o marketing no son necesarias para el funcionamiento básico. Si se introducen, se actualizarán la información y las opciones de consentimiento cuando sea necesario.'],
            ['5. Gestión de cookies', 'Puedes gestionar o eliminar las cookies desde la configuración del navegador. Bloquear las cookies necesarias puede afectar al funcionamiento o la seguridad del sitio.'],
            ['6. Actualizaciones', 'Esta política puede actualizarse cuando cambien el sitio, las tecnologías o los requisitos legales.'],
            ['7. Contacto', 'Para preguntas sobre cookies, contacta con Stoean Dragos en contact@daveasolutions.com.'],
        ],
        footer: 'Soluciones de software construidas alrededor de tus ideas.',
    },
}

const content = computed(() => translations[locale.value] ?? translations.en)
const languages = [{ code: 'en', label: 'EN' }, { code: 'ro', label: 'RO' }, { code: 'de', label: 'DE' }, { code: 'es', label: 'ES' }]
</script>

<template>
    <div class="min-h-screen bg-slate-100 text-slate-950">
        <header class="border-b border-white/10 bg-[#07111f] text-white"><div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8"><a :href="`/${locale}`" class="text-lg font-black tracking-tight">DAVEA<span class="text-blue-400">.</span> <span class="text-slate-300">Solutions</span></a><div class="flex items-center gap-3"><div class="flex items-center gap-1 rounded-xl border border-white/10 bg-white/5 p-1"><a v-for="language in languages" :key="language.code" :href="`/${language.code}/cookies`" :class="['rounded-lg px-2.5 py-1.5 text-[11px] font-black transition', locale === language.code ? 'bg-blue-500 text-white' : 'text-slate-400 hover:text-white']">{{ language.label }}</a></div><a :href="`/${locale}/contact`" class="hidden rounded-xl bg-blue-500 px-5 py-3 text-sm font-black text-white transition hover:bg-blue-400 sm:block">{{ content.contact }}</a></div></div></header>
        <main class="mx-auto max-w-4xl px-6 py-16 lg:px-8 lg:py-24"><a :href="`/${locale}`" class="font-bold text-blue-600 hover:text-blue-500">← {{ content.back }}</a><article class="mt-10 rounded-3xl bg-white p-7 shadow-sm sm:p-12"><p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">DAVEA Solutions</p><h1 class="mt-4 text-4xl font-black tracking-tight sm:text-5xl">{{ content.title }}</h1><p class="mt-6 text-lg leading-8 text-slate-600">{{ content.intro }}</p><div class="mt-12 space-y-10 text-slate-700"><section v-for="section in content.sections" :key="section[0]"><h2 class="text-2xl font-black text-slate-950">{{ section[0] }}</h2><p class="mt-3 leading-7">{{ section[1] }}</p></section></div><p class="mt-12 border-t border-slate-200 pt-6 text-sm font-semibold text-slate-500">{{ content.updated }}</p></article></main>
        <footer class="border-t border-white/10 bg-[#07111f] text-slate-400"><div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-8 text-sm sm:flex-row sm:items-center sm:justify-between lg:px-8"><div><p class="font-black text-white">DAVEA<span class="text-blue-400">.</span> Solutions</p><p class="mt-1">{{ content.footer }}</p></div><a href="mailto:contact@daveasolutions.com" class="transition hover:text-white">contact@daveasolutions.com</a></div></footer>
    </div>
</template>
