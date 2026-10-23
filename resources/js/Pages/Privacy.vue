<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'

const page = usePage()
const locale = computed(() => page.props.locale ?? 'en')

const translations = {
    en: {
        back: 'Back to home',
        title: 'Privacy Policy',
        intro: 'This Privacy Policy explains how personal data is collected and used when you contact DAVEA Solutions through this website.',
        operatorTitle: '1. Data controller',
        operator: 'Data controller: Stoean Dragos, operating under the public brand DAVEA Solutions.',
        contact: 'Contact email: contact@daveasolutions.com',
        website: 'Website: https://daveasolutions.com',
        collectTitle: '2. Data we may collect',
        collectText: 'When you use the contact form, we may collect your name, email address, phone number and the content of your message. We may also receive technical information necessary to keep the website secure and functional.',
        purposeTitle: '3. Why we use your data',
        purposeText: 'Your information is used to answer enquiries, discuss requested services, prepare a possible collaboration and communicate with you about your request.',
        basisTitle: '4. Legal basis',
        basisText: 'The legal basis may be taking steps at your request before entering into a contract, responding to your enquiry and, where applicable, fulfilling legal obligations.',
        retentionTitle: '5. How long we keep data',
        retentionText: 'Messages are kept only for as long as reasonably necessary to manage the enquiry, provide follow-up communication and meet applicable legal or accounting obligations. Data that is no longer needed will be deleted or anonymised.',
        sharingTitle: '6. Data sharing',
        sharingText: 'We do not sell your personal data. Information may be processed by hosting, email or technical service providers only when necessary to operate the website and respond to your request.',
        rightsTitle: '7. Your rights',
        rightsText: 'Depending on applicable law, you may request access, correction, deletion, restriction of processing or object to processing. You may also request a copy of the data you provided. Contact us at contact@daveasolutions.com.',
        cookiesTitle: '8. Cookies and technical storage',
        cookiesText: 'The website may use necessary cookies or browser storage for functionality, security, preferences and session management. Optional analytics or marketing tools will not be added without appropriate notice and consent where required.',
        securityTitle: '9. Security',
        securityText: 'Reasonable technical and organisational measures are used to protect information. No internet transmission or storage system can be guaranteed to be completely secure.',
        changesTitle: '10. Policy updates',
        changesText: 'This policy may be updated when the website, services or legal requirements change. The latest version will be published on this page.',
        updated: 'Last updated: October 2026',
        footer: 'Software solutions built around your ideas.',
    },
    ro: {
        back: 'Înapoi la pagina principală',
        title: 'Politica de confidențialitate',
        intro: 'Această politică explică modul în care sunt colectate și utilizate datele personale atunci când contactezi DAVEA Solutions prin intermediul acestui website.',
        operatorTitle: '1. Operatorul datelor',
        operator: 'Operatorul datelor: Stoean Dragos, care desfășoară activitatea sub brandul public DAVEA Solutions.',
        contact: 'E-mail de contact: contact@daveasolutions.com',
        website: 'Website: https://daveasolutions.com',
        collectTitle: '2. Datele pe care le putem colecta',
        collectText: 'Atunci când folosești formularul de contact, putem colecta numele, adresa de e-mail, numărul de telefon și conținutul mesajului. Putem primi și informații tehnice necesare pentru menținerea securității și funcționării website-ului.',
        purposeTitle: '3. De ce folosim datele',
        purposeText: 'Folosim informațiile pentru a răspunde solicitărilor, pentru a discuta serviciile cerute, pentru a pregăti o posibilă colaborare și pentru a comunica în legătură cu cererea ta.',
        basisTitle: '4. Temeiul legal',
        basisText: 'Temeiul legal poate fi reprezentat de demersurile realizate la cererea ta înaintea încheierii unui contract, răspunsul la solicitare și, după caz, îndeplinirea obligațiilor legale.',
        retentionTitle: '5. Cât timp păstrăm datele',
        retentionText: 'Mesajele sunt păstrate doar atât timp cât este necesar în mod rezonabil pentru gestionarea solicitării, comunicarea ulterioară și respectarea obligațiilor legale sau contabile aplicabile. Datele care nu mai sunt necesare vor fi șterse sau anonimizate.',
        sharingTitle: '6. Transmiterea datelor',
        sharingText: 'Nu vindem datele personale. Informațiile pot fi procesate de furnizori de hosting, e-mail sau servicii tehnice doar atunci când este necesar pentru funcționarea website-ului și răspunsul la solicitare.',
        rightsTitle: '7. Drepturile tale',
        rightsText: 'În funcție de legislația aplicabilă, poți solicita accesul, corectarea, ștergerea, restricționarea prelucrării sau te poți opune prelucrării. Poți solicita și o copie a datelor transmise. Ne poți contacta la contact@daveasolutions.com.',
        cookiesTitle: '8. Cookie-uri și stocare tehnică',
        cookiesText: 'Website-ul poate folosi cookie-uri necesare sau stocare în browser pentru funcționalitate, securitate, preferințe și gestionarea sesiunii. Instrumentele opționale de analiză sau marketing nu vor fi adăugate fără informare și consimțământ, atunci când acestea sunt necesare.',
        securityTitle: '9. Securitatea datelor',
        securityText: 'Folosim măsuri tehnice și organizatorice rezonabile pentru protejarea informațiilor. Nicio transmisie sau stocare pe internet nu poate fi garantată ca fiind complet sigură.',
        changesTitle: '10. Actualizarea politicii',
        changesText: 'Această politică poate fi actualizată atunci când se schimbă website-ul, serviciile sau cerințele legale. Versiunea actuală va fi publicată pe această pagină.',
        updated: 'Ultima actualizare: octombrie 2026',
        footer: 'Soluții software construite în jurul ideilor tale.',
    },
    de: {
        back: 'Zurück zur Startseite',
        title: 'Datenschutzerklärung',
        intro: 'Diese Datenschutzerklärung erklärt, wie personenbezogene Daten verarbeitet werden, wenn Sie DAVEA Solutions über diese Website kontaktieren.',
        operatorTitle: '1. Verantwortlicher',
        operator: 'Verantwortlicher: Stoean Dragos, tätig unter der öffentlichen Marke DAVEA Solutions.',
        contact: 'Kontakt: contact@daveasolutions.com',
        website: 'Website: https://daveasolutions.com',
        collectTitle: '2. Erhobene Daten',
        collectText: 'Über das Kontaktformular können Name, E-Mail-Adresse, Telefonnummer und der Inhalt Ihrer Nachricht erhoben werden. Zusätzlich können technische Informationen zur Sicherheit und Funktion der Website verarbeitet werden.',
        purposeTitle: '3. Zweck der Verarbeitung',
        purposeText: 'Die Daten werden verwendet, um Anfragen zu beantworten, gewünschte Leistungen zu besprechen und eine mögliche Zusammenarbeit zu verwalten.',
        basisTitle: '4. Rechtsgrundlage',
        basisText: 'Die Verarbeitung kann auf vorvertraglichen Maßnahmen auf Ihre Anfrage, der Beantwortung Ihrer Anfrage und gegebenenfalls gesetzlichen Verpflichtungen beruhen.',
        retentionTitle: '5. Speicherdauer',
        retentionText: 'Nachrichten werden nur so lange gespeichert, wie dies für die Bearbeitung der Anfrage, die weitere Kommunikation und gesetzliche Verpflichtungen erforderlich ist. Nicht mehr benötigte Daten werden gelöscht oder anonymisiert.',
        sharingTitle: '6. Weitergabe',
        sharingText: 'Wir verkaufen keine personenbezogenen Daten. Eine Verarbeitung durch Hosting-, E-Mail- oder technische Dienstleister erfolgt nur, soweit dies für den Betrieb der Website erforderlich ist.',
        rightsTitle: '7. Ihre Rechte',
        rightsText: 'Sie können je nach anwendbarem Recht Auskunft, Berichtigung, Löschung oder Einschränkung der Verarbeitung verlangen oder der Verarbeitung widersprechen. Kontakt: contact@daveasolutions.com.',
        cookiesTitle: '8. Cookies und technische Speicherung',
        cookiesText: 'Die Website kann notwendige Cookies oder Browser-Speicher für Funktionalität, Sicherheit, Einstellungen und Sitzungen verwenden. Optionale Analyse- oder Marketingdienste werden nur mit entsprechender Information und, falls erforderlich, Einwilligung eingesetzt.',
        securityTitle: '9. Sicherheit',
        securityText: 'Wir verwenden angemessene technische und organisatorische Maßnahmen. Eine vollständige Sicherheit bei Übertragung oder Speicherung im Internet kann nicht garantiert werden.',
        changesTitle: '10. Änderungen',
        changesText: 'Diese Erklärung kann bei Änderungen der Website, der Leistungen oder der gesetzlichen Anforderungen aktualisiert werden.',
        updated: 'Letzte Aktualisierung: Oktober 2026',
        footer: 'Softwarelösungen rund um Ihre Ideen.',
    },
    es: {
        back: 'Volver al inicio',
        title: 'Política de privacidad',
        intro: 'Esta política explica cómo se recopilan y utilizan los datos personales cuando contactas con DAVEA Solutions a través de este sitio web.',
        operatorTitle: '1. Responsable del tratamiento',
        operator: 'Responsable: Stoean Dragos, que opera bajo la marca pública DAVEA Solutions.',
        contact: 'Contacto: contact@daveasolutions.com',
        website: 'Sitio web: https://daveasolutions.com',
        collectTitle: '2. Datos que podemos recopilar',
        collectText: 'Al utilizar el formulario de contacto podemos recopilar tu nombre, correo electrónico, teléfono y el contenido del mensaje. También podemos procesar información técnica necesaria para mantener el sitio seguro y funcional.',
        purposeTitle: '3. Uso de los datos',
        purposeText: 'Utilizamos la información para responder consultas, hablar sobre los servicios solicitados y gestionar una posible colaboración.',
        basisTitle: '4. Base legal',
        basisText: 'La base legal puede ser la adopción de medidas previas a un contrato solicitadas por ti, la respuesta a tu consulta y, cuando corresponda, el cumplimiento de obligaciones legales.',
        retentionTitle: '5. Conservación',
        retentionText: 'Los mensajes se conservan solo durante el tiempo razonablemente necesario para gestionar la consulta, comunicarnos contigo y cumplir las obligaciones aplicables. Después se eliminarán o anonimizarán.',
        sharingTitle: '6. Comunicación de datos',
        sharingText: 'No vendemos datos personales. Los proveedores de alojamiento, correo electrónico o servicios técnicos solo pueden procesar información cuando sea necesario para operar el sitio y responder a tu solicitud.',
        rightsTitle: '7. Tus derechos',
        rightsText: 'Puedes solicitar acceso, rectificación, eliminación o limitación del tratamiento y oponerte al mismo, según la legislación aplicable. Contacto: contact@daveasolutions.com.',
        cookiesTitle: '8. Cookies y almacenamiento técnico',
        cookiesText: 'El sitio puede utilizar cookies necesarias o almacenamiento del navegador para funciones, seguridad, preferencias y sesiones. Las herramientas opcionales de análisis o marketing solo se añadirán con la información y el consentimiento necesarios.',
        securityTitle: '9. Seguridad',
        securityText: 'Aplicamos medidas técnicas y organizativas razonables para proteger la información. Ninguna transmisión o almacenamiento por internet puede garantizarse como completamente seguro.',
        changesTitle: '10. Actualizaciones',
        changesText: 'Esta política puede actualizarse cuando cambien el sitio, los servicios o los requisitos legales. La versión vigente se publicará en esta página.',
        updated: 'Última actualización: octubre de 2026',
        footer: 'Soluciones de software construidas alrededor de tus ideas.',
    },
}

const content = computed(() => translations[locale.value] ?? translations.en)
const languages = [
    { code: 'en', label: 'EN' },
    { code: 'ro', label: 'RO' },
    { code: 'de', label: 'DE' },
    { code: 'es', label: 'ES' },
]
</script>

<template>
    <div class="min-h-screen bg-slate-100 text-slate-950">
        <header class="border-b border-white/10 bg-[#07111f] text-white">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">
                <a :href="`/${locale}`" class="text-lg font-black tracking-tight">DAVEA<span class="text-blue-400">.</span> <span class="text-slate-300">Solutions</span></a>
                <div class="flex items-center gap-3">
                    <div class="flex items-center gap-1 rounded-xl border border-white/10 bg-white/5 p-1">
                        <a v-for="language in languages" :key="language.code" :href="`/${language.code}/privacy`" :class="['rounded-lg px-2.5 py-1.5 text-[11px] font-black transition', locale === language.code ? 'bg-blue-500 text-white' : 'text-slate-400 hover:text-white']">{{ language.label }}</a>
                    </div>
                    <a :href="`/${locale}/contact`" class="hidden rounded-xl bg-blue-500 px-5 py-3 text-sm font-black text-white transition hover:bg-blue-400 sm:block">Contact</a>
                </div>
            </div>
        </header>

        <main class="mx-auto max-w-4xl px-6 py-16 lg:px-8 lg:py-24">
            <a :href="`/${locale}`" class="inline-flex items-center gap-2 font-bold text-blue-600 hover:text-blue-500">← {{ content.back }}</a>

            <article class="mt-10 rounded-3xl bg-white p-7 shadow-sm sm:p-12">
                <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-600">DAVEA Solutions</p>
                <h1 class="mt-4 text-4xl font-black tracking-tight sm:text-5xl">{{ content.title }}</h1>
                <p class="mt-6 text-lg leading-8 text-slate-600">{{ content.intro }}</p>

                <div class="mt-12 space-y-10 text-slate-700">
                    <section>
                        <h2 class="text-2xl font-black text-slate-950">{{ content.operatorTitle }}</h2>
                        <p class="mt-3 leading-7">{{ content.operator }}</p>
                        <p class="mt-2 leading-7">{{ content.contact }}</p>
                        <p class="mt-2 leading-7">{{ content.website }}</p>
                    </section>
                    <section><h2 class="text-2xl font-black text-slate-950">{{ content.collectTitle }}</h2><p class="mt-3 leading-7">{{ content.collectText }}</p></section>
                    <section><h2 class="text-2xl font-black text-slate-950">{{ content.purposeTitle }}</h2><p class="mt-3 leading-7">{{ content.purposeText }}</p></section>
                    <section><h2 class="text-2xl font-black text-slate-950">{{ content.basisTitle }}</h2><p class="mt-3 leading-7">{{ content.basisText }}</p></section>
                    <section><h2 class="text-2xl font-black text-slate-950">{{ content.retentionTitle }}</h2><p class="mt-3 leading-7">{{ content.retentionText }}</p></section>
                    <section><h2 class="text-2xl font-black text-slate-950">{{ content.sharingTitle }}</h2><p class="mt-3 leading-7">{{ content.sharingText }}</p></section>
                    <section><h2 class="text-2xl font-black text-slate-950">{{ content.rightsTitle }}</h2><p class="mt-3 leading-7">{{ content.rightsText }}</p></section>
                    <section><h2 class="text-2xl font-black text-slate-950">{{ content.cookiesTitle }}</h2><p class="mt-3 leading-7">{{ content.cookiesText }}</p></section>
                    <section><h2 class="text-2xl font-black text-slate-950">{{ content.securityTitle }}</h2><p class="mt-3 leading-7">{{ content.securityText }}</p></section>
                    <section><h2 class="text-2xl font-black text-slate-950">{{ content.changesTitle }}</h2><p class="mt-3 leading-7">{{ content.changesText }}</p></section>
                </div>

                <p class="mt-12 border-t border-slate-200 pt-6 text-sm font-semibold text-slate-500">{{ content.updated }}</p>
            </article>
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