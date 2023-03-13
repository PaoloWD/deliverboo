<x-mail::message>
    {{-- codice markdown --}}
 <h1>{{$newContactData->objects}}</h1>
# Nuovo ordine dal tuo sito!:
 
Clicca sul bottone per maggiori dettagli!

<x-mail::button :url="$url">
Dettagli
</x-mail::button>
 
Grazie,<br>
{{ config('app.name') }}
</x-mail::message>