<x-mail::message>
    {{-- codice markdown --}}
 {{-- <h1>{{$newContactData->objects}}</h1> --}}
# Nuovo ordine dal nostro sito!<br>
<strong>Email Cliente:</strong> {{$info["customer_email"]}} <br>
<strong>Riepilogo ordine</strong>: 
<p>Nome: {{$info["customer_name"]}}</p>
<p>Indirizzo: {{$info["customer_address"]}}</p>
<p>Telefono: {{$info["customer_phone"]}}</p>
<p>Totale Ordine: {{$info["total_order"]}}€</p><br>
Cordiali saluti,<br>
<strong>DeliveBoo!</strong>
</x-mail::message>