<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    <aside
        class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl">
        <div class="h-19.5">
            <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
                <img src="./vendor/assets/img/logo-ct.png"
                    class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
                <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Bacaan|Perpustakaan</span>
            </a>
        </div>
        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <div class="items-center block w-auto overflow-auto grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                {{-- dashboard menu --}}
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-all hover:scale-102 hover:shadow-soft-xs active:hover:bg-text-700 leading-pro ease-soft-in tracking-tight-soft"
                        href={{ '/dashboard' }}>
                        <div
                            class="bg-gradient-to-tl from-blue-600 to-cyan-400 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-gauge-high text-sm text-white"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>
                {{-- separator --}}
                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">User Menu</h6>
                </li>
                <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
                {{-- catalog menu --}}
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-all hover:scale-102 hover:shadow-soft-xs active:hover:bg-text-700 leading-pro ease-soft-in tracking-tight-soft"
                        href={{ '/catalog' }}>
                        <div
                            class="bg-gradient-to-tl from-blue-600 to-cyan-400 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-book-journal-whills text-sm text-white"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Katalog Buku</span>
                    </a>
                </li>
                {{-- Data  Peminjaman --}}
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-all hover:scale-102 hover:shadow-soft-xs active:hover:bg-text-700 leading-pro ease-soft-in tracking-tight-soft"
                        href={{ '/catalog' }}>
                        <div
                            class="bg-gradient-to-tl from-blue-600 to-cyan-400 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-left-long text-sm text-white"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Peminjaman</span>
                    </a>
                </li>
                {{-- Data  Pengembalian --}}
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-all hover:scale-102 hover:shadow-soft-xs active:hover:bg-text-700 leading-pro ease-soft-in tracking-tight-soft"
                        href={{ '/catalog' }}>
                        <div
                            class="bg-gradient-to-tl from-blue-600 to-cyan-400 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-right-long text-sm text-white"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Pengembalian</span>
                    </a>
                </li>
                {{-- separator --}}
                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Admin Menu</h6>
                </li>
                <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
                {{-- Data Buku --}}
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-all hover:scale-102 hover:shadow-soft-xs active:hover:bg-text-700 leading-pro ease-soft-in tracking-tight-soft"
                        href={{ '/catalog' }}>
                        <div
                            class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-database text-sm text-white"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Data Buku</span>
                    </a>
                </li>

                {{-- separator --}}
                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Profile</h6>
                </li>
                <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
                {{-- Profile Menu --}}
                <li class="mt-0.5 w-full">
                    <a href={{ 'profile' }}
                        class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-all hover:scale-102 hover:shadow-soft-xs active:hover:bg-text-700 leading-pro ease-soft-in tracking-tight-soft">
                        <div
                            class="bg-gradient-to-tl from-blue-600 to-cyan-400 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-regular fa-id-card text-sm text-white"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft"> {{ __('Profile') }}</span>
                    </a>
                </li>
                {{-- Denda Menu --}}
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-all hover:scale-102 hover:shadow-soft-xs active:hover:bg-text-700 leading-pro ease-soft-in tracking-tight-soft"
                        href={{ '/catalog' }}>
                        <div
                            class="bg-gradient-to-tl from-blue-600 to-cyan-400 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-circle-exclamation text-sm text-white"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Denda</span>
                    </a>
                </li>
            </ul>
        </div>

    </aside>
    <!-- end sidenav -->
