@extends('layouts.app')

@section('content')
Complimenti hai aggiunto la categoria {{$category->name}}
<a href="{{ route('dashboard') }}">
    <button>
        Torna alla tua dashboard
    </button>
</a>
@endsection