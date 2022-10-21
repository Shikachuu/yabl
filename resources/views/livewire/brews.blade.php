<div>
    <form method="get" class="mt-8 md:mt-6 flex flex-col flex-basis-1 md:flex-row">
        <select class="flex-1 p-3 md:mr-2 md:my-0 my-2" name="coffee" id="coffee" wire:model.debounce.500ms="roaster">
            <option value="" selected>Select roaster...</option>
            @foreach($roasters as $roaster)
                <option value="{{ $roaster }}">{{ $roaster }}</option>
            @endforeach
        </select>
        <select class="flex-1 p-3 md:mr-2 md:my-0 my-2" name="brewer" id="brewer" wire:model.debounce.500ms="brewer">
            <option value="0" selected>Select brewer...</option>
            @foreach($brewers as $brewer)
                <option value="{{ $brewer->id }}">{{ $brewer->name }}</option>
            @endforeach
        </select>
    </form>
    <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2" wire:loading.class.delay="opacity-25">
        @forelse($brews as $brew)
            <div onclick="window.location.assign(`{{ route('brew', ['id' => $brew->id]) }}`)"
                 class="cursor-pointer lg:flex border-solid border-2 bg-gray-200">
                <img class="object-cover w-full h-56 lg:w-64"
                     src="https://images.unsplash.com/photo-1573518378653-55e125da29e5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                     alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <h1 class="text-xl font-semibold text-gray-800 hover:underline">
                        {{ $brew->coffee }} made with {{ $brew->brewer }}
                    </h1>
                    <span class="text-sm text-black">grinder: {{ $brew->grinder }}</span>
                    <span class="text-sm text-black">at: {{ $brew->created_at }}</span>
                </div>
            </div>
        @empty
            <h1 class="text-3xl font-semibold my-64">no brews found</h1>
        @endforelse
    </div>
    <br>
    {{ $brews->links() }}
</div>
