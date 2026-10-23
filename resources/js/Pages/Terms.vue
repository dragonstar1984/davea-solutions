<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'

const page = usePage()
const locale = computed(() => page.props.locale ?? 'en')

const translations = {
    en: {
        title: 'Terms and Conditions',
        back: 'Back to home',
        contact: 'Contact',
        updated: 'Last updated: October 2026',
        intro: 'These terms describe the general conditions for using the DAVEA Solutions website and contacting us about software development services.',
        sections: [
            ['1. Website use', 'You may use this website for lawful purposes and in a way that does not interfere with its operation, security or availability.'],
            ['2. Services and information', 'The website presents software development and digital solution services. Descriptions are provided for general information and do not automatically create a contract or guarantee a specific result.'],
            ['3. Project discussions', 'Each project is evaluated individually. Scope, technologies, deadlines, price, deliverables and support are agreed separately before work begins.'],
            ['4. Intellectual property', 'Unless agreed otherwise in writing, the website design, text, branding and original materials published by DAVEA Solutions remain protected by applicable intellectual property laws.'],
            ['5. Client materials', 'You are responsible for ensuring that any content, documents, data or software you provide may legally be used for the requested project.'],
            ['6. External links and services', 'The website may link to external websites or projects. DAVEA Solutions is not responsible for the content, availability or policies of external services.'],
            ['7. Limitation of liability', 'We take reasonable steps to keep the website useful and available, but we do not guarantee uninterrupted operation or that the website will be free of all errors.'],
            ['8. Contact', 'For questions about these terms, contact Stoean Dragos at contact@daveasolutions.com.'],
            ['9. Changes', 'These terms may be updated when the website, services or legal requirements change. The current version will be published on this page.'],
        ],
        footer: 'Software solutions built around your ideas.',
    },
    ro: {
        title: 'Termeni și condiții',
        back: 'Înapoi la pagina principală',
        contact: 'Contact',
        updated: 'Ultima actualizare: octombrie 2026',
        intro: 'Acești termeni descriu condițiile generale de utilizare a website-ului DAVEA Solutions și de contactare pentru servicii de dezvoltare software.',
        sections: [
            ['1. Utilizarea website-ului', 'Poți folosi acest website în scopuri legale și într-un mod care nu afectează funcționarea, securitatea sau disponibilitatea acestuia.'],
            ['2. Servicii și informații', 'Website-ul prezintă servicii de dezvoltare software și soluții digitale. Descrierile au caracter general și nu creează automat un contract sau garanția unui rezultat specific.'],
            ['3. Discutarea proiectelor', 'Fiecare proiect este evaluat individual. Scopul, tehnologiile, termenele, prețul, livrabilele și suportul sunt stabilite separat înainte de începerea lucrului.'],
            ['4. Proprietate intelectuală', 'Dacă nu se stabilește altfel în scris, designul, textele, brandul și materialele originale publicate de DAVEA Solutions rămân protejate de legislația aplicabilă.'],
            ['5. Materialele clientului', 'Ești responsabil să te asiguri că orice conținut, document, date sau software furnizat poate fi folosit legal pentru proiectul solicitat.'],
            ['6. Linkuri și servicii externe', 'Website-ul poate include linkuri către site-uri sau proiecte externe. DAVEA Solutions nu este responsabil pentru conținutul, disponibilitatea sau politicile serviciilor externe.'],
            ['7. Limitarea răspunderii', 'Luăm măsuri rezonabile pentru ca website-ul să fie util și disponibil, dar nu garantăm funcționarea neîntreruptă sau lipsa tuturor erorilor.'],
            ['8. Contact', 'Pentru întrebări despre acești termeni, îl poți contacta pe Stoean Dragos la contact@daveasolutions.com.'],
            ['9. Modificări', 'Acești termeni pot fi actualizați atunci când se schimbă website-ul, serviciile sau cerințele legale. Versiunea actuală va fi publicată pe această pagină.'],
        ],
        footer: 'Soluții software construite în jurul ideilor tale.',
    },
    de: {
        title: 'Nutzungsbedingungen',
        back: 'Zurück zur Startseite',
        contact: 'Kontakt',
        updated: 'Letzte Aktualisierung: Oktober 2026',
        intro: 'Diese Bedingungen beschreiben die allgemeine Nutzung der DAVEA-Solutions-Website und die Kontaktaufnahme zu Softwareentwicklungsleistungen.',
        sections: [
            ['1. Nutzung der Website', 'Sie dürfen diese Website für rechtmäßige Zwecke nutzen, sofern Betrieb, Sicherheit und Verfügbarkeit nicht beeinträchtigt werden.'],
            ['2. Leistungen und Informationen', 'Die Website stellt Softwareentwicklung und digitale Lösungen vor. Die Beschreibungen dienen der allgemeinen Information und begründen nicht automatisch einen Vertrag.'],
            ['3. Projektbesprechungen', 'Jedes Projekt wird individuell bewertet. Umfang, Technologien, Fristen, Preis, Lieferumfang und Support werden vor Beginn separat vereinbart.'],
            ['4. Geistiges Eigentum', 'Sofern nicht schriftlich anders vereinbart, bleiben Design, Texte, Marke und ursprüngliche Inhalte von DAVEA Solutions nach geltendem Recht geschützt.'],
            ['5. Materialien des Kunden', 'Sie sind dafür verantwortlich, dass von Ihnen bereitgestellte Inhalte, Dokumente, Daten oder Software rechtmäßig verwendet werden dürfen.'],
            ['6. Externe Links und Dienste', 'Die Website kann auf externe Websites oder Projekte verweisen. DAVEA Solutions ist nicht für Inhalte, Verfügbarkeit oder Richtlinien externer Dienste verantwortlich.'],
            ['7. Haftungsbeschränkung', 'Wir bemühen uns um eine nützliche und verfügbare Website, garantieren jedoch keinen ununterbrochenen Betrieb oder Fehlerfreiheit.'],
            ['8. Kontakt', 'Fragen zu diesen Bedingungen können Sie an Stoean Dragos unter contact@daveasolutions.com richten.'],
            ['9. Änderungen', 'Diese Bedingungen können bei Änderungen der Website, Leistungen oder gesetzlichen Anforderungen aktualisiert werden.'],
        ],
        footer: 'Softwarelösungen rund um Ihre Ideen.',
    },
    es: {
        title: 'Términos y condiciones',
        back: 'Volver al inicio',
        contact: 'Contacto',
        updated: 'Última actualización: octubre de 2026',
        intro: 'Estos términos describen las condiciones generales para utilizar el sitio web de DAVEA Solutions y contactar sobre servicios de desarrollo de software.',
        sections: [
            ['1. Uso del sitio web', 'Puedes utilizar este sitio web con fines legales y sin interferir en su funcionamiento, seguridad o disponibilidad.'],
            ['2. Servicios e información', 'El sitio presenta servicios de desarrollo de software y soluciones digitales. Las descripciones son informativas y no crean automáticamente un contrato.'],
            ['3. Proyectos', 'Cada proyecto se evalúa individualmente. El alcance, tecnologías, plazos, precio, entregables y soporte se acuerdan por separado antes de comenzar.'],
            ['4. Propiedad intelectual', 'Salvo acuerdo escrito, el diseño, los textos, la marca y los materiales originales publicados por DAVEA Solutions están protegidos por la legislación aplicable.'],
            ['5. Materiales del cliente', 'Eres responsable de garantizar que cualquier contenido, documento, dato o software que proporciones pueda utilizarse legalmente.'],
            ['6. Enlaces y servicios externos', 'El sitio puede enlazar con sitios o proyectos externos. DAVEA Solutions no responde por su contenido, disponibilidad o políticas.'],
            ['7. Limitación de responsabilidad', 'Tomamos medidas razonables para mantener el sitio disponible, pero no garantizamos un funcionamiento ininterrumpido o libre de errores.'],
            ['8. Contacto', 'Para preguntas sobre estos términos, contacta con Stoean Dragos en contact@daveasolutions.com.'],
            ['9. Cambios', 'Estos términos pueden actualizarse cuando cambien el sitio, los servicios o los requisitos legales.'],
        ],
        footer: 'Soluciones de software construidas alrededor de tus ideas.',
    },
}

const content = computed(() => translations[locale.value] ?? translations.en)
const languages = [
    { code: 'en', label: 'EN' },
    { code: 'ro', label: 'RO' },
    { code: 'de', label: 'DE' },
    { code: 'es', label: 'ES' }
]
</script>

<template>
    <div class="min-h-screen bg-slate-100 text-slate-950">
        <header class="border-b border-white/10 bg-[#07111f] text-white">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">
                <a :href="`/${locale}`" class="text-lg font-black tracking-tight">
                    DAVEA<span class="text-blue-400">.</span> <span class="text-slate-300">Solutions</span>
                </a>
                <div class="flex items-center gap-3">
                    <div class="flex items-center gap-1 rounded-xl border border-white/10 bg-white/5 p-1">
                        <a
                            v-for="language in languages"
                            :key="language.code"
                            :href="`/${language.code}/terms`"
                            :class="[
                                'rounded-lg px-2.5 py-1.5 text-[11px] font-black transition',
                                locale === language.code ? 'bg-blue-500 text-white' : 'text-slate-400 hover:text-white'
                            ]"
                        >
                            {{ language.label }}
                        </a>
                    </div>
                    <a :href="`/${locale}/contact`" class="hidden rounded-xl bg-blue-500 px-5 py-3 text-sm font-black text-white transition hover:bg-blue-400 sm:block">
                        {{ content.contact }}
                    </a>
                </div>
            </div>
        </header>

        <main class="mx-auto max-w-4xl px-6 py-16 lg:px-8 lg:py-24">
            <a :href="`/${locale}`" class="font-bold text-blue-600 hover:text-blue-500">← {{ content.back }}</a>
            <article class="mt-10 rounded-3xl bg-white p-7 shadow-sm sm:p-12">
                <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">DAVEA Solutions</p>
                <h1 class="mt-4 text-4xl font-black tracking-tight sm:text-5xl">{{ content.title }}</h1>
                <p class="mt-6 text-lg leading-8 text-slate-600">{{ content.intro }}</p>
                <div class="mt-12 space-y-10 text-slate-700">
                    <section v-for="section in content.sections" :key="section[0]">
                        <h2 class="text-2xl font-black text-slate-950">{{ section[0] }}</h2>
                        <p class="mt-3 leading-7">{{ section[1] }}</p>
                    </section>
                </div>
                <p class="mt-12 border-t border-slate-200 pt-6 text-sm font-semibold text-slate-500">{{ content.updated }}</p>
            </article>
        </main>

        <!-- Footer -->
        <footer class="border-t border-white/10 bg-[#07111f] text-slate-400">
            <div class="mx-auto flex max-w-7xl flex-col gap-6 px-6 py-9 text-sm lg:px-8">
                <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <a :href="`/${locale}`" class="font-black text-white transition hover:text-blue-400">
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
                        <a :href="`/${locale}`" class="transition hover:text-white">
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
                        <a :href="`/${locale}/contact`" class="transition hover:text-white">
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
                        <a :href="`/${locale}/privacy`" class="transition hover:text-white">
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
                        <a :href="`/${locale}/terms`" class="transition hover:text-white">
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
                        <a :href="`/${locale}/cookies`" class="transition hover:text-white">
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
                        <a href="mailto:contact@daveasolutions.com" class="transition hover:text-white">
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