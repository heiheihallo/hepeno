<x-mail::message>
# Ny henvendelse fra hepe.no

**Navn:** {{ $fornavn }} {{ $etternavn }}

@if($bedrift)
**Bedrift:** {{ $bedrift }}

@endif
**E-post:** {{ $epost }}

@if($mobil)
**Mobil:** +47 {{ $mobil }}

@endif
**Melding:**

{{ $melding }}

</x-mail::message>
