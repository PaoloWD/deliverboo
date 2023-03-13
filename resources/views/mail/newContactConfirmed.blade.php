<x-mail::message>
  # Grazie per aver scelto noi.

  {{-- Gentile <strong>{{ $contactData->email }}</strong>,<br> --}}
  ti confermiamo di aver ricevuto la tua richiesta.

  Di seguito un riepilogo dei dati ricevuti:<br>
 
  <strong>Riepilogo ordine</strong>: 
  <p>Nome: {{$info["customer_name"]}}</p>
  <p>Indirizzo: {{$info["customer_address"]}}</p>
  <p>Telefono: {{$info["customer_phone"]}}</p>
  <p>Totale Ordine: {{$info["total_order"]}}€</p><br>
  Cordiali saluti,<br>
  <strong>DeliveBoo!</strong>
</x-mail::message>
