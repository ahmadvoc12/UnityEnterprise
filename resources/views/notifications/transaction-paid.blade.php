@component('mail::message')
Hello MSME Hero

Thank you for supporting funding MSME in **{{ $transaction->user_name }}** for your donation of **@idr($transaction->total)** for MSME **{{ $transaction->campaign->name }}**.


We hope this donation can be good for you and good for MSME actors to develop their businesses



<p style="color: #23925C; font-weight: bold">{{ Config::get('app.name') }}</p>
<img src="{{ asset('images/logo.png') }}" width="100" />

@endcomponent

