<x-mail::message>
  # Grazie per aver scelto noi.

  {{-- Gentile <strong>{{ $contactData->email }}</strong>,<br> --}}
  ti confermiamo di aver ricevuto la tua richiesta.

  Di seguito un riepilogo dei dati ricevuti:<br>
  <strong>Titolo</strong>: {{ $contactData->title }}<br>
  <strong>Messaggio</strong>: {{ $contactData->message }}

  Cordiali saluti,<br>
  {{ config('app.name') }}!
</x-mail::message>
