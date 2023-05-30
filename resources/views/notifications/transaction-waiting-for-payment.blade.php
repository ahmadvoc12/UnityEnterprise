@component('mail::message')
Greeting!!

**{{ $transaction->user_name }}**, Thank you for supporting funding MSME in  {{ Config::get('app.name') }} to help MSME actors who are improving their business
Immediately distribute the donation of your choice, namely **{{ $transaction->campaign->name }}** by transferring your donation to:


<h1 style="text-align: center; margin-bottom: 0;">{{ $paymentMethod->name }}</h1>
<h1 style="text-align: center; margin-bottom: 0;">{{ $paymentMethod->account_number }}</h1>
<h1 style="text-align: center; font-weight: normal;">{{ $paymentMethod->account_holder_name }}</h1>

<h1 style="text-align: center; margin-bottom: 0; font-weight: normal;">Total Donasi Anda</h1>
<h1 style="text-align: center;">@idr($transaction->total)</h1>

**NOTE!**


Please transfer according to the nominal total payment.

Your donation will be verified by the system automatically in a maximum of 30 minutes.

You will receive a notification via email when your donation has been received.

Thankyou

<p style="color: #23925C; font-weight: bold">{{ Config::get('app.name') }}</p>
<img src="{{ asset('images/logo.png') }}" width="100" />

@endcomponent

