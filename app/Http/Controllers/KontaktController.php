<?php

namespace App\Http\Controllers;

use App\Mail\KontaktMelding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontaktController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'fornavn'  => ['required', 'string', 'max:100'],
            'etternavn' => ['required', 'string', 'max:100'],
            'bedrift'  => ['nullable', 'string', 'max:200'],
            'epost'    => ['required', 'email', 'max:200'],
            'mobil'    => ['nullable', 'string', 'max:20'],
            'melding'  => ['required', 'string', 'max:5000'],
        ]);

        Mail::to('support@hepe.no')->send(new KontaktMelding(
            fornavn:   $data['fornavn'],
            etternavn: $data['etternavn'],
            bedrift:   $data['bedrift'] ?? '',
            epost:     $data['epost'],
            mobil:     $data['mobil'] ?? '',
            melding:   $data['melding'],
        ));

        return redirect('/kontakt-oss')->with('success', 'Takk! Vi svarer deg innen 48 timer.');
    }
}
