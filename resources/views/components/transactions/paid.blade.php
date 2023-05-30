@props(['transaction', 'paymentMethod'])

<div>
    <h3 class="text-center text-primary text-xl font-bold mb-4">Thank you</h3>
    <p class="text-center text-sm mb-5">your donation has been received </p>
    <img
        src="{{ $transaction->campaign->original_cover_url }}"
        alt="{{ $transaction->campaign->name }}"
        class="mx-auto w-2/3 mb-5"
    />
    <p class="font-bold mb-1">Program</p>
    <p class="text-sm mb-4">{{ $transaction->campaign->name }}</p>
    <div class="mb-4 border border-gray-200"></div>
    <div class="flex items-center justify-between text-sm mb-4">
        <p>Total Donasi</p>
        <p class="font-bold">@idr($transaction->total)</p>
    </div>
    <div class="mb-4"></div>
    <a href="{{ route('campaigns.index') }}" class="block bg-white text-center text-primary font-semibold border-2 border-primary px-4 py-3 uppercase">Add your donation</a>
    <div class="mb-4"></div>
    <div class="mb-4"></div>
    <div class="px-4 mb-4 text-center text-sm">
        <p>let's support people to start and grow their business</p>
        <p>you are heroes to them.</p>
    </div>
    <p class="text-center text-sm">need help? <a href="#" class="text-primary font-bold">Contact us</a></p>
</div>
