
<div class="container mx-auto px-6 xl:px-24 mt-16">
    <div class="lg:flex justify-center mb-16 sm:space-x-1 space-x-0 ">

        @foreach ($hargapaket as $item)
            @if ($item->name == 'Bayi')
                {{-- card1 --}}
                    <div class="border border-gray-300  rounded w-full text-center relative mb-4">
                        {{-- <div class="card-ribbon">
                            <span class="span1">Best Seller</span>
                        </div> --}}

                        <div class="border-b-2  py-4">
                            <a class=" text-2xl font-bold">Bayi</a>
                        </div>

                        <div class="text-center py-6 border-b-2">
                            <p class="text-xl line-through text-gray-600">Rp  {{ number_format($item->harga,0, ',' , '.') }}</p>
                            <div class="flex justify-center ">
                                <a class="text-xl mr-2">Rp </a>
                                <h1 class="text-5xl font-extrabold"> {{getFirstPrice( number_format($item->promo,0, ',' , '.'))}}</h1>
                                <a class="text-xl font-bold mr-2">.{{getLastPrice( number_format($item->promo,0, ',' , '.'))}}/ </a>
                                <a class="text-xl">Bln </a>

                            </div>
                        </div>
                        <div class="text-center py-2 border-b-2">
                            <div class="flex justify-center ">
                                <a class=" font-semibold mr-2">938</a>
                                <p class="text-gray-600">Pengguna Terdaftar </p>
                            </div>
                        </div>
                        <div class="py-4 space-y-2">
                            <div class="flex justify-center ">
                                <a class=" font-semibold mr-2">0.5X RESOURCE POWER</a>
                            </div>
                            <div class="flex justify-center ">
                                <a class=" font-semibold mr-2">500 MB</a>
                                <p class="text-gray-600">Disk Space </p>
                            </div>
                            <div class="flex justify-center ">
                                <a class=" font-semibold mr-2">Unlimited</a>
                                <p class="text-gray-600">Bandwith</p>
                            </div>
                            <div class="flex justify-center ">
                                <a class=" font-semibold mr-2">Unlimited</a>
                                <p class="text-gray-600">Databases</p>
                            </div>
                            <div class="flex justify-center ">
                                <a class=" font-semibold mr-2">1</a>
                                <p class="text-gray-600">Domain</p>
                            </div>
                            <div class="flex justify-center ">
                                <a class=" font-semibold mr-2">Instant</a>
                                <p class="text-gray-600">Backup</p>
                            </div>
                            <div class="flex justify-center ">
                                <a class=" font-semibold mr-2">Unlimited SSL</a>
                                <p class="text-gray-600">Gratis Selamanya</p>
                            </div>
                        </div>

                        <div class="py-2 mb-8">
                            <button class="border-2 border-gray-600 text-gray-600 rounded-full px-4 py-1 hover:bg-black hover:text-white font-bold">Pilih Sekarang</button>
                        </div>
                    </div>
            @elseif($item->name == "Pelajar")
                            {{-- car2 --}}
                            <div class="border border-gray-300  rounded w-full text-center relative mb-4">
                                {{-- <div class="card-ribbon">
                                    <span class="span1">Best Seller</span>
                                </div> --}}

                                <div class="border-b-2  py-4">
                                    <a class=" text-2xl font-bold">Pelajar</a>
                                </div>

                                <div class="text-center py-6 border-b-2">
                                    <p class="text-xl line-through text-gray-600">Rp {{ number_format($item->harga,0, ',' , '.') }} </p>
                                    <div class="flex justify-center ">
                                        <a class="text-xl mr-2">Rp </a>
                                        <h1 class="text-5xl font-extrabold"> {{getFirstPrice( number_format($item->promo,0, ',' , '.'))}}</h1>
                                <a class="text-xl font-bold mr-2">.{{getLastPrice( number_format($item->promo,0, ',' , '.'))}}/ </a>
                                        <a class="text-xl">Bln </a>

                                    </div>
                                </div>
                                <div class="text-center py-2 border-b-2">
                                    <div class="flex justify-center ">
                                        <a class=" font-semibold mr-2">4.168</a>
                                        <p class="text-gray-600">Pengguna Terdaftar </p>
                                    </div>
                                </div>
                                <div class="py-4 space-y-2">
                                    <div class="flex justify-center ">
                                        <a class=" font-semibold mr-2">1X RESOURCE POWER</a>
                                    </div>
                                    <div class="flex justify-center ">
                                        <a class=" font-semibold mr-2">Unlimited</a>
                                        <p class="text-gray-600">Disk Space </p>
                                    </div>
                                    <div class="flex justify-center ">
                                        <a class=" font-semibold mr-2">Unlimited</a>
                                        <p class="text-gray-600">Bandwith</p>
                                    </div>
                                    <div class="flex justify-center ">
                                        <a class=" font-semibold mr-2">Unlimited</a>
                                        <p class="text-gray-600">POP3 Email</p>
                                    </div>
                                    <div class="flex justify-center ">
                                        <a class=" font-semibold mr-2">Unlimited</a>
                                        <p class="text-gray-600">Databases</p>
                                    </div>
                                    <div class="flex justify-center ">
                                        <a class=" font-semibold mr-2">10</a>
                                        <p class="text-gray-600">Addon Domains</p>
                                    </div>
                                    <div class="flex justify-center ">
                                        <a class=" font-semibold mr-2">Instant</a>
                                        <p class="text-gray-600">Backup</p>
                                    </div>
                                    <div class="flex justify-center ">
                                        <a class=" font-semibold mr-2">Domain Gratis</a>
                                        <p class="text-gray-600">Selamanya</p>
                                    </div>
                                    <div class="flex justify-center ">
                                        <a class=" font-semibold mr-2">Unlimited SSL</a>
                                        <p class="text-gray-600">Gratis Selamanya</p>
                                    </div>
                                </div>

                                <div class="py-2 mb-8">
                                    <button class="border-2 border-gray-600 text-gray-600 rounded-full px-4 py-1 hover:bg-black hover:text-white font-bold">Pilih Sekarang</button>
                                </div>
                            </div>
            @elseif($item->name == "Personal")
                {{-- card3 --}}
                <div class="border border-blue-500 rounded w-full text-center relative mb-4">
                    <div class="card-ribbon">
                        <span class="span1">Best Seller</span>
                    </div>

                    <div class="border-b-2 border-blue-500  py-4 bg-blue-500">
                        <a class=" text-2xl font-bold text-white">Personal</a>
                    </div>

                    <div class="text-center py-6 border-b-2 border-blue-600 bg-blue-500">
                        <p class="text-xl line-through text-white">{{ number_format($item->harga,0, ',' , '.') }} </p>
                        <div class="flex justify-center text-white">
                            <a class="text-xl mr-2">Rp </a>
                            <h1 class="text-5xl font-extrabold"> {{getFirstPrice( number_format($item->promo,0, ',' , '.'))}}</h1>
                            <a class="text-xl font-bold mr-2">.{{getLastPrice( number_format($item->promo,0, ',' , '.'))}}/ </a>
                            <a class="text-xl">Bln </a>

                        </div>
                    </div>
                    <div class="text-center py-2 border-b-2  bg-blue-600">
                        <div class="flex justify-center text-white">
                            <a class=" font-semibold mr-2">10.017</a>
                            <p class="">Pengguna Terdaftar </p>
                        </div>
                    </div>
                    <div class="py-4 space-y-2">
                        <div class="flex justify-center ">
                            <a class=" font-semibold mr-2">2X RESOURCE POWER</a>
                        </div>
                        <div class="flex justify-center ">
                            <a class=" font-semibold mr-2">Unlimited</a>
                            <p class="text-gray-600">Disk Space </p>
                        </div>
                        <div class="flex justify-center ">
                            <a class=" font-semibold mr-2">Unlimited</a>
                            <p class="text-gray-600">Bandwith</p>
                        </div>
                        <div class="flex justify-center ">
                            <a class=" font-semibold mr-2">Unlimited</a>
                            <p class="text-gray-600">POP3 Email</p>
                        </div>
                        <div class="flex justify-center ">
                            <a class=" font-semibold mr-2">Unlimited</a>
                            <p class="text-gray-600">Databases</p>
                        </div>
                        <div class="flex justify-center ">
                            <a class=" font-semibold mr-2">Unlimited</a>
                            <p class="text-gray-600">Addon Domain</p>
                        </div>
                        <div class="flex justify-center ">
                            <a class=" font-semibold mr-2">Instant</a>
                            <p class="text-gray-600">Backup</p>
                        </div>
                        <div class="flex justify-center ">
                            <a class=" font-semibold mr-2">Domain Gratis</a>
                            <p class="text-gray-600">Selamanya</p>
                        </div>
                        <div class="flex justify-center ">
                            <a class=" font-semibold mr-2">Unlimited SSL</a>
                            <p class="text-gray-600">Gratis Selamanya</p>
                        </div>
                        <div class="flex justify-center ">
                            <a class=" font-semibold mr-2">Private</a>
                            <p class="text-gray-600">Name Server</p>
                        </div>
                        <div class="flex justify-center ">
                            <a class=" font-semibold mr-2">SpamAssasin</a>
                            <p class="text-gray-600">Mail Protection</p>
                        </div>
                    </div>

                    <div class="py-2 mb-8">
                        <button class="border-2 font-bold border-blue-600 text-white bg-blue-600 rounded-full px-4 py-1 hover:bg-white hover:text-blue-500">Pilih Sekarang</button>
                    </div>
                </div>
            @elseif($item->name == "Bisnis")
                {{-- card4 --}}
        <div class="border border-gray-300  rounded w-full text-center relative mb-4">
            {{-- <div class="card-ribbon">
                <span class="span1">Best Seller</span>
            </div> --}}

            <div class="border-b-2  py-4">
                <a class=" text-2xl font-bold">Bisnis</a>
            </div>

            <div class="text-center py-6 border-b-2">
                <p class="text-xl line-through text-gray-600">Rp {{ number_format($item->harga,0, ',' , '.') }} </p>
                <div class="flex justify-center ">
                    <a class="text-xl mr-2">Rp </a>
                    <h1 class="text-5xl font-extrabold"> {{getFirstPrice( number_format($item->promo,0, ',' , '.'))}}</h1>
                            <a class="text-xl font-bold mr-2">.{{getLastPrice( number_format($item->promo,0, ',' , '.'))}}/ </a>
                    <a class="text-xl">Bln </a>

                </div>
            </div>
            <div class="text-center py-2 border-b-2">
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">3.552</a>
                    <p class="text-gray-600">Pengguna Terdaftar </p>
                </div>
            </div>
            <div class="py-4 space-y-2">
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">3X RESOURCE POWER</a>
                </div>
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">Unlimited</a>
                    <p class="text-gray-600">Disk Space </p>
                </div>
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">Unlimited</a>
                    <p class="text-gray-600">Bandwith</p>
                </div>
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">Unlimited</a>
                    <p class="text-gray-600">POP3 Email</p>
                </div>
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">Unlimited</a>
                    <p class="text-gray-600">Databases</p>
                </div>
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">Unlimited</a>
                    <p class="text-gray-600">Addon Domain</p>
                </div>
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">Magic Auto</a>
                    <p class="text-gray-600">Backup & Restore</p>
                </div>
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">Domain Gratis</a>
                    <p class="text-gray-600">Selamanya</p>
                </div>
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">Unlimited SSL</a>
                    <p class="text-gray-600">Gratis Selamanya</p>
                </div>
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">Private</a>
                    <p class="text-gray-600">Name Server</p>
                </div>
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">Prioritas</a>
                    <p class="text-gray-600">Layanan</p>
                </div>
                <div class="flex justify-center ">
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  class="w-5 h-5 fillstar">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  class="w-5 h-5 fillstar">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  class="w-5 h-5 fillstar">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  class="w-5 h-5 fillstar">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  class="w-5 h-5 fillstar">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                </div>
                <div class="flex justify-center ">
                    <a class=" font-semibold mr-2">SpamExpert</a>
                    <p class="text-gray-600">Pro Mail Protection</p>
                </div>
            </div>

            <div class="py-2 mb-8">
                <button class="border-2 font-bold border-gray-600 text-gray-600 rounded-full px-4 py-1 hover:bg-black hover:text-white">Pilih Sekarang</button>
            </div>
        </div>
            @endif
        @endforeach
    </div>
</div>
