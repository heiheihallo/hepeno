<?php

use App\Mail\KontaktMelding;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

beforeEach(function () {
    Mail::fake();
});

function validKontaktData(array $overrides = []): array
{
    return array_merge([
        'fornavn' => 'Ola',
        'etternavn' => 'Nordmann',
        'bedrift' => 'Firma AS',
        'epost' => 'ola@example.com',
        'mobil' => '99887766',
        'melding' => 'Hei, jeg lurer på noe.',
        'cf-turnstile-response' => 'test-token',
    ], $overrides);
}

test('contact form submission succeeds with valid turnstile token', function () {
    Http::fake([
        'challenges.cloudflare.com/*' => Http::response(['success' => true]),
    ]);

    $this->post(route('kontakt.send'), validKontaktData())
        ->assertRedirect('/kontakt-oss');

    Mail::assertSent(KontaktMelding::class);
});

test('contact form submission fails without turnstile token', function () {
    $this->post(route('kontakt.send'), validKontaktData(['cf-turnstile-response' => '']))
        ->assertSessionHasErrors('cf-turnstile-response');

    Mail::assertNothingSent();
});

test('contact form submission fails with invalid turnstile token', function () {
    Http::fake([
        'challenges.cloudflare.com/*' => Http::response(['success' => false]),
    ]);

    $this->post(route('kontakt.send'), validKontaktData())
        ->assertSessionHasErrors('cf-turnstile-response');

    Mail::assertNothingSent();
});

test('contact form page loads', function () {
    $this->get(route('kontakt'))->assertOk();
});
