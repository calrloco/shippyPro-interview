<div class="flex justify-center  {{ $flight ? '' : 'hidden' }}">
    <div class="flex flex-col">
        <div class="cursor-pointer pb-6 border border-[#f2f4f6] bg-slate-50 rounded-lg shadow-sm divide-y divide-gray-200 flex justify-center">
            <div class="grid place-items-center min-w-[300px]">
                <div class="w-full h-full rounded-t grid place-items-center py-2 bg-slate-100">
                    <h2 class="text-lg italic leading-6 font-medium text-slate-600 uppercase">{{$message}}</h2>
                </div>
                <div class="mt-8 w-full flex justify-center">
                    <span
                        class="text-4xl font-extrabold text-gray-900">{{  $flight ? Cknow\Money\Money::EUR($flight['price']) : '' }}</span>
                    <span class="text-base font-medium text-gray-500"></span>
                </div>
                @if($flight)
                    <p class="capitalize text-xs text-slate-400">{{ $flight['connections'] !== 0 ? "stopovers: $flight[connections]" : "direct fly" }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
