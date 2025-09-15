@if(session('success'))
    <div 
        x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 3000)" 
        x-show="show"
        x-transition
        class="max-w-7xl mx-auto mt-4 px-4"
    >
        <div class="rounded-md p-4 bg-green-50 border border-green-200 text-green-800">
            {{ session('success') }}
        </div>
    </div>
@endif

@if(session('error'))
    <div 
        x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 3000)" 
        x-show="show"
        x-transition
        class="max-w-7xl mx-auto mt-4 px-4"
    >
        <div class="rounded-md p-4 bg-red-50 border border-red-200 text-red-800">
            {{ session('error') }}
        </div>
    </div>
@endif

@if ($errors->any())
    <div 
        x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 5000)" 
        x-show="show"
        x-transition
        class="max-w-7xl mx-auto mt-4 px-4"
    >
        <div class="rounded-md p-4 bg-red-50 border border-red-200 text-red-800">
            <strong>There were some problems with your input:</strong>
            <ul class="mt-2 list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li class="mt-1">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
