<div>
    <form method="get" class="mt-8 md:mt-6 flex flex-col flex-basis-1 md:flex-row">
        <input class="flex-1 p-3 md:mr-2 md:my-0 my-2" type="text" name="roaster" id="roaster" wire:model.debounce.500ms="roaster"
               placeholder="Search roaster...">
        <input class="flex-1 p-3 md:mr-2 md:my-0 my-2" type="text" name="country" id="country" wire:model.debounce.500ms="country"
               placeholder="Search country...">
    </form>
    <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2" wire:loading.class.delay="opacity-25">
        @forelse ($coffees as $coffee)
            <div onclick="window.location.assign(`{{ route('coffee', ['id' => $coffee->id]) }}`)"
                 class="cursor-pointer lg:flex border-solid border-2 bg-gray-200">
                <img class="object-cover w-full h-56 lg:w-64"
                     src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1484&q=80"
                     alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <h1 class="text-xl font-semibold text-gray-800 hover:underline">
                        {{ $coffee->name }}
                    </h1>
                    <span class="text-sm text-black">roaster: {{ $coffee->roaster }}</span>
                    <span class="text-sm text-black">country: {{ $coffee->country }}</span>
                    <span class="text-sm text-black">roasted: {{ $coffee->roast_date }}</span>
                </div>
            </div>
        @empty
            <h1 class="text-3xl font-semibold my-64">no coffees found</h1>
        @endforelse
    </div>
    <br>
    {{ $coffees->links() }}
</div>
