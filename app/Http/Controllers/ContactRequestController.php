<?php

namespace App\Http\Controllers;

use App\Mail\NewContactRequest;
use App\Models\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactRequestController extends Controller
{
    /**
     * Salvează solicitarea și trimite notificarea prin e-mail.
     */
    public function store(Request $request): RedirectResponse
    {
        // Câmpul honeypot trebuie să rămână gol; roboții îl completează de obicei.
        if ($request->filled('website')) {
            return back()->with('success', 'Solicitarea ta a fost trimisă cu succes.');
        }

        $validated = $request->validate([
            'website' => ['nullable', 'string', 'max:0'],
            'name' => [
                'required',
                'string',
                'max:100',
            ],

            'email' => [
                'required',
                'email',
                'max:150',
            ],

            'phone' => [
                'nullable',
                'string',
                'max:40',
            ],

            'company' => [
                'nullable',
                'string',
                'max:150',
            ],

            'project_type' => [
                'required',
                'string',
                'max:100',
            ],

            'budget' => [
                'nullable',
                'string',
                'max:100',
            ],

            'message' => [
                'required',
                'string',
                'min:10',
                'max:5000',
            ],

            'consent' => [
                'accepted',
            ],
        ], [
            'name.required' => 'Numele este obligatoriu.',
            'name.max' => 'Numele nu poate depăși 100 de caractere.',

            'email.required' => 'Adresa de e-mail este obligatorie.',
            'email.email' => 'Introdu o adresă de e-mail validă.',
            'email.max' => 'Adresa de e-mail este prea lungă.',

            'project_type.required' => 'Selectează tipul proiectului.',

            'message.required' => 'Descrierea proiectului este obligatorie.',
            'message.min' => 'Descrierea trebuie să conțină cel puțin 10 caractere.',
            'message.max' => 'Descrierea nu poate depăși 5.000 de caractere.',

            'consent.accepted' => 'Trebuie să accepți utilizarea informațiilor pentru răspuns.',
        ]);

        $contactRequest = ContactRequest::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'company' => $validated['company'] ?? null,
            'project_type' => $validated['project_type'],
            'budget' => $validated['budget'] ?? null,
            'message' => $validated['message'],
            'locale' => $request->route('locale') ?? 'en',
            'consent' => true,
            'status' => 'new',
        ]);

        Mail::to('contact@daveasolutions.com')
            ->send(new NewContactRequest($contactRequest));

        return back()->with(
            'success',
            'Solicitarea ta a fost trimisă cu succes.'
        );
    }
}
