<div>
    <form method="get" class="mt-8 md:mt-6 flex flex-col flex-basis-1 md:flex-row">
        <select class="flex-1 p-3 md:mr-2 md:my-0 my-2" name="category" id="category"
                wire:model.debounce.500ms="category">
            {{-- TODO: Replace this to actual query values from the models --}}
            <option value="" selected>Select category...</option>
            <option value="espresso" selected>espresso</option>
            <option value="pour over" selected>pour over</option>
            <option value="immersion" selected>immersion</option>
        </select>
    </form>
    <div class="grid grid-cols-1 gap-8 mt-8" wire:loading.class.delay="opacity-25">
        @forelse($brewers as $brewer)
            <div class="lg:flex border-solid border-2 bg-gray-200">
                <img class="object-cover w-full h-56 lg:w-64"
                     src="https://images.unsplash.com/photo-1458872590620-5056e3311cad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE0fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"
                     alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <h1 class="text-xl font-semibold text-gray-800 hover:underline">
                        {{ $brewer->name }}
                    </h1>
                    <span class="text-sm text-black">category: {{ $brewer->category }}</span>
                </div>
            </div>
        @empty
            <h1 class="text-3xl font-semibold my-64">no brewers found</h1>
        @endforelse
    </div>
    <br>
    {{ $brewers->links() }}
</div>
