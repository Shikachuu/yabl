<x-layout :title="''">
    <div class="mx-auto bg-yellow-800 flex flex-col w-1/2">
        <div class="bg-white relative drop-shadow-2xl rounded-3xl p-4 m-4 flex">
            <div class="flex-auto justify-evenly">
                <div class="flex items-center my-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="mr-3 bg-white w-8 h-8 text-yellow-900">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/>
                    </svg>
                    <h2 class="font-medium text-gray-500">
                        <b class="text-black">{{ $brew->coffee->name }}</b>
                        made with
                        <b class="text-black">{{ $brew->brewer->name }}</b>
                    </h2>
                    <div class="ml-auto">
                        <x-test-qr/>
                    </div>
                </div>
                <div class="border-b border-dashed border-b-2 my-5"></div>
                <div class="flex items-center px-5">
                    <div class="flex flex-col">
                        <div class="flex-auto text-xs my-1">
                            {{ $brew->time }}
                        </div>
                        <div class="w-full flex-none text-lg text-yellow-800 font-bold">
                            {{ $brew->yield }}g
                        </div>

                    </div>
                    <div class="flex flex-col mx-auto"></div>
                    <div class="flex flex-col ">
                        <div class="flex-auto text-xs my-1">
                            {{ $brew->dose }}g
                        </div>
                        <div class="w-full flex-none text-lg text-yellow-800 font-bold">
                            {{ $brew->grinder }}
                        </div>
                        <div class="text-xs">{{ $brew->clicks }} clicks</div>

                    </div>
                </div>
                <div class="border-b border-dashed border-b-2 my-5 pt-5"></div>
                <div class="flex items-center mb-5 p-5 text-sm">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col">
                            <span class="text-sm">roasted</span>
                            <div class="font-semibold">{{ $brew->coffee->roast_date }}</div>

                        </div>
                        <div class="flex flex-col mx-auto text-sm">
                            <span class="">name</span>
                            <div class="font-semibold">{{ $brew->coffee->name }}</div>

                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm">country</span>
                            <div class="font-semibold">{{ $brew->coffee->country }}</div>

                        </div>
                    </div>
                    <div class="mx-auto"></div>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col text-sm">
                            <span class="">level</span>
                            <div class="font-semibold">{{ $brew->coffee->roast_level }}</div>

                        </div>
                        <div class="flex flex-col mx-auto text-sm">
                            <span class="">roaster</span>
                            <div class="font-semibold">{{ $brew->coffee->roaster }}</div>

                        </div>
                        <div class="flex flex-col text-sm">
                            <span class="">specie</span>
                            <div class="font-semibold">{{ $brew->coffee->species }}</div>

                        </div>
                    </div>
                </div>
                <div class="border-b border-dashed border-b-2 my-5 pt-5"></div>
                <div class="flex flex-col items-center px-5 pt-3 text-sm">
                    <h2 class="text-lg font-bold text-yellow-800">description</h2>
                    <p>{{ $brew->description }}</p>
                    @isset($brew->notes)
                        <h2 class="text-lg font-bold text-yellow-800">notes</h2>
                        <p>{{ $brew->notes }}</p>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</x-layout>
