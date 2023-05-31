<x-admin::app>
    <div class="flex items-center space-x-2">
        <x-admin::back :href="route('admin::campaigns.index')" />
        <x-admin::page-title value="Detail Program" />
    </div>

    <x-admin::card>
        <div class="mb-4">
            <x-admin::label value="MSME Name" />
            <p class="text-sm">{{ $campaign->name }}</p>
        </div>
        <div class="mb-4">
            <x-admin::label value="Slug" />
            <p class="text-sm">{{ $campaign->slug }}</p>
        </div>
        <div class="mb-4">
            <x-admin::label value="Cover" />
            <img src="{!! $campaign->original_cover_url !!}" class="w-full" />
        </div>
        <div class="mb-4">
            <x-admin::label value="Business Description" />
            <p class="text-sm">{!! $campaign->description !!}</p>
        </div>
        <div class="mb-4">
            <x-admin::label value="Capital Needs" />
            <p class="text-sm">@if($campaign->isUnlimitedFunds()) @idr($campaign->funds) @else Tidak terbatas @endif</p>
        </div>
        <div class="mb-4">
            <x-admin::label value="Capital Funding" />
            <p class="text-sm">@idr($campaign->collected_funds ?? 0)</p>
        </div>
        <div class="mb-4">
            <x-admin::label value="Fund donor" />
            <p class="text-sm">{{ $campaign->donors ?? '-' }}</p>
        </div>
        <div class="mb-4">
            <x-admin::label value="Publish time" />
            <p class="text-sm">{{ $campaign->published_at ?? '-' }}</p>
        </div>
        <div class="mb-4">
            <x-admin::label value="Closed Time" />
            <p class="text-sm">{{ $campaign->closed_at ?? '-' }}</p>
        </div>
        <div class="mb-4">
            <x-admin::label value="MSME" />
            <p class="text-sm">{{ $campaign->type ?? '-' }}</p>
        </div>
        <div class="mb-4">
            <x-admin::label value="Last Unique Transaction Code" />
            <p class="text-sm">{{ $campaign->unique_code_sufix ?? '-' }}</p>
        </div>
        <div class="flex items-center space-x-2">
            <x-admin::link variant="primary" :href="route('admin::campaigns.edit', $campaign)" value="Ubah" />
            <x-admin::button-delete :action="route('admin::campaigns.destroy', $campaign)" />
        </div>
    </x-admin::card>
</x-admin::app>
