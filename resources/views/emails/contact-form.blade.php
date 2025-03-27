@component('mail::message')
# Nouveau message de contact

**Nom:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
@if(isset($data['phone']))
**Téléphone:** {{ $data['phone'] }}  
@endif
@if(isset($data['company']))
**Entreprise:** {{ $data['company'] }}  
@endif

**Message:**  
{{ $data['message'] }}

Merci,  
{{ config('app.name') }}
@endcomponent 