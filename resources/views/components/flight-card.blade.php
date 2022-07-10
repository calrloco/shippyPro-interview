<div class="flex justify-center  {{ $flight ? '' : 'hidden' }}">
    <div class="flex flex-col">
        <div
            class="cursor-pointer border border-[#f2f4f6] bg-slate-50 rounded-lg shadow-sm divide-y divide-gray-200 flex justify-center">
            <div class="p-6 grid place-items-center min-w-[300px]">
                <h2 class="text-lg leading-6 font-medium text-gray-900 uppercase">{{$message}}</h2>
                <p class="mt-4 text-sm text-gray-500"></p>
                <div class="mt-8 w-full flex justify-center">
                        <span class="text-4xl font-extrabold text-gray-900">{{  $flight ? Cknow\Money\Money::EUR($flight['price']) : '' }}</span>
                        <span class="text-base font-medium text-gray-500"></span>
                </div>
                @if($flight)
                    <p class="capitalize text-xs text-slate-400">{{ $flight['connections'] !== 0 ? "stopovers required: $flight[connections] " : "direct fly" }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
