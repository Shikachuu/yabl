<x-layout :title="''">
    <div class="mx-auto bg-yellow-800 flex flex-col w-1/2">
        <div class="bg-white relative drop-shadow-2xl rounded-3xl p-4 m-4 flex">
            <div class="flex-auto justify-evenly">
                <div class="flex items-center my-1">
                    <h2 class="font-medium text-lg font-bold">
                        {{ $coffee->name }}
                    </h2>
                    <div class="ml-auto">
                        <x-test-qr/>
                    </div>
                </div>
                <div class="border-b border-dashed border-b-2 my-5"></div>
                <div class="flex items-center px-5">
                    <div class="flex flex-col">
                        <div class="flex-auto text-xs my-1">
                            roaster
                        </div>
                        <div class="w-full flex-none text-lg text-yellow-800 font-bold">
                            {{ $coffee->roaster }}
                        </div>

                    </div>
                    <div class="flex flex-col mx-auto"></div>
                    <div class="flex flex-col ">
                        <div class="flex-auto text-xs my-1">
                            region
                        </div>
                        <div class="w-full flex-none text-lg text-yellow-800 font-bold">
                            {{ $coffee->country }}
                        </div>
                    </div>
                </div>
                <div class="border-b border-dashed border-b-2 my-5 pt-5"></div>
                <div class="flex items-center mb-5 p-5 text-sm">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col">
                            <span class="text-sm">roasted</span>
                            <div class="font-semibold">{{ $coffee->roast_date }}</div>
                        </div>
                        <div class="flex flex-col text-sm">
                            <span class="">level</span>
                            <div class="font-semibold">{{ $coffee->roast_level }}</div>
                        </div>
                        <div class="flex flex-col text-sm">
                            <span class="">specie</span>
                            <div class="font-semibold">{{ $coffee->species }}</div>
                        </div>
                    </div>
                    <div class="mx-auto"></div>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col">
                            <span class="text-sm">altitude</span>
                            <div class="font-semibold">{{ $coffee->altitude }}</div>
                        </div>
                        <div class="flex flex-col mx-auto text-sm">
                            <span class="">tasting notes</span>
                            @forelse($coffee->tasting_notes as $tastingNotes)
                                <div class="font-semibold">{{ $tastingNotes }}</div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
