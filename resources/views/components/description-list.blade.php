<x-section>
    @if($title)
        <div class="p-2 border-b border-gray-200 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ $title }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                {{ $description }}
            </p>
        </div>
    @endif
    <div class="p-4">
        <dl>
            @foreach($item->toArray() as $key => $value)
                <div class="bg-gray-50 p-2 sm:grid sm:grid-cols-8 sm:gap-4">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        {{ $key }}
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-7">
                        {{ $value }}
                    </dd>
                </div>
            @endforeach
        </dl>
    </div>
</x-section>
