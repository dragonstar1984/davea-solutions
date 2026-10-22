<x-mail::message>
# Solicitare nouă de proiect

Ai primit o solicitare nouă prin formularul de contact de pe **DAVEA Solutions**.

<x-mail::panel>
**Nume:** {{ $contactRequest->name }}

**E-mail:** {{ $contactRequest->email }}

**Telefon:** {{ $contactRequest->phone ?: 'Nu a fost furnizat' }}

**Companie:** {{ $contactRequest->company ?: 'Nu a fost furnizată' }}

**Tip proiect:** {{ $contactRequest->project_type }}

**Buget estimativ:** {{ $contactRequest->budget ?: 'Nu a fost specificat' }}

**Limbă:** {{ strtoupper($contactRequest->locale) }}

**Status:** {{ $contactRequest->status }}
</x-mail::panel>

## Descrierea proiectului

{{ $contactRequest->message }}

---

Solicitarea a fost înregistrată la:

{{ $contactRequest->created_at?->format('d.m.Y H:i') }}

Poți răspunde direct clientului folosind butonul **Reply** din aplicația de e-mail.

Cu stimă,  
**DAVEA Solutions**
</x-mail::message>
