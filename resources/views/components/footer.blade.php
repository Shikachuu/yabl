<footer class="w-full sticky bg-gray-200 rounded-t-lg shadow md:px-6 md:py-8">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="#" target="_blank" class="flex items-center mb-4 sm:mb-0">
            <span class="mr-4 h-8 text-xl font-bold">YABL</span>
            <span class="self-center text-l font-semibold whitespace-nowrap">- Yet another brew logger</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 sm:mb-0">
            <li>
                <a href="{{ route('about') }}" class="mr-4 text-sm text-black hover:underline md:mr-6">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('coffees') }}" class="mr-4 text-sm text-black hover:underline md:mr-6">
                    Coffees
                </a>
            </li>
            <li>
                <a href="{{ route('brewers') }}" class="mr-4 text-sm text-black hover:underline md:mr-6">
                    Brewers
                </a>
            </li>
            <li>
                <a href="{{ route('brews') }}" class="text-sm text-black hover:underline">
                    Brews
                </a>
            </li>
        </ul>
    </div>
    <hr class="my-6 border-gray-900 sm:mx-auto lg:my-8"/>
    <span class="block text-sm text-black sm:text-center">
        <a href="https://github.com/Shikachuu">Made with ❤️ and a lot of ☕ </a>
    </span>
</footer>
