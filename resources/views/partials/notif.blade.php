@if (session('success'))
<div class="fixed top-5 right-5 z-50 max-w-sm w-full">
    <div class="bg-green-500 text-white p-4 rounded-lg shadow-lg">
        <div class="flex items-center">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    </div>
</div>
@endif

@if (session('error'))
<div class="fixed top-5 right-5 z-50 max-w-sm w-full">
    <div class="bg-red-500 text-white p-4 rounded-lg shadow-lg">
        <div class="flex items-center">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="font-medium">{{ session('error') }}</span>
        </div>
    </div>
</div>
@endif

@if ($errors->any())
<div class="fixed top-20 right-5 z-50 max-w-sm w-full">
    <div class="bg-red-100 text-red-700 p-4 rounded-lg shadow-lg">
        <ul class="list-disc list-inside text-sm space-y-1">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
