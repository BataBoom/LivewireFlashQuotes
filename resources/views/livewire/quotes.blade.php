<div wire:poll.2000ms>
<h1 class="mt-5 text-3xl text-gray-100 leading-snug min-h-33">{{ $quotes }}</h1>

<div class="mt-20">
<p class="font-serif font-bold text-xl">- {{ $sources }}</p>
</div>

<div class="mt-16 flex justify-between">
<a href="{{ URL::route('about') }} "><p class="font-serif p-3 border-2 border-gray-200 rounded-md text-base hover:bg-seablue-500 hover:border-gray-200 cursor-pointer hover:text-black">Our Story</p></a>
</div>
</div>
                                          
