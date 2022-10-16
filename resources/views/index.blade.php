<x-layout>
    <section class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl">Latest brews</h1>

        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
            @foreach($brews as $brew)
                <div onclick="window.location.assign(`{{ route('brew', ['id' => $brew->id]) }}`)"
                     class="cursor-pointer lg:flex border-solid border-2 bg-gray-200">
                    <img class="object-cover w-full h-56 lg:w-64"
                         src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1484&q=80"
                         alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <h1 class="text-xl font-semibold text-gray-800 hover:underline">
                            {{ $brew->coffee }} made with {{ $brew->brewer }}
                        </h1>
                        <span class="text-sm text-black">grinder: {{ $brew->grinder }}</span>
                        <span class="text-sm text-black">at: {{ $brew->created_at }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        {{ $brews->links() }}
    </section>
</x-layout>
