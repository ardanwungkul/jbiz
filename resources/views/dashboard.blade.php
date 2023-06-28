<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class=" mt-5">
        <div class="flex justify-center gap-10">
            <a href="{{ route('domain.index') }}" class="group hover:scale-110 transition ease-out duration-1000">
                <div class="w-60 rounded-2xl dashItem flex items-center py-5 px-4 border border-gray-400">
                    <div>
                        <div
                            class="w-12 h-12 group-hover:animate-bounce duration-1000 motion-reduce:animate-bounce bg-gray-800 border border-gray-400 rounded-full flex justify-center items-center">
                            <i class="fa-solid text-white fa-globe"></i>
                        </div>
                    </div>
                    <div class="pl-4 w-full">
                        <div>
                            <h2 class="text-white text-2xl text-center font-extrabold">
                                {{ $totalDomain }}
                            </h2>
                            <h2 class="text-gray-300 text-sm text-center">
                                Total Domain
                            </h2>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('pelanggan.index') }}" class="group hover:scale-110 transition ease-out duration-1000">
                <div class="w-60 rounded-2xl dashItem flex items-center py-5 px-4 border border-gray-400">
                    <div>
                        <div
                            class="w-12 h-12 group-hover:animate-bounce duration-1000 motion-reduce:animate-bounce bg-gray-800 border border-gray-400 rounded-full flex justify-center items-center">
                            <i class="fa-solid text-white fa-person fa-xl"></i>
                        </div>
                    </div>
                    <div class="pl-4 w-full">
                        <div>
                            <h2 class="text-white text-2xl text-center font-extrabold">
                                {{ $totalPelanggan }}
                            </h2>
                            <h2 class="text-gray-300 text-sm text-center">
                                Total Pelanggan
                            </h2>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('user.index') }}" class="group hover:scale-110 transition ease-out duration-1000">
                <div class="w-60 rounded-2xl dashItem flex items-center py-5 px-4 border border-gray-400">
                    <div>
                        <div
                            class="w-12 h-12 group-hover:animate-bounce duration-1000 motion-reduce:animate-bounce bg-gray-800 border border-gray-400 rounded-full flex justify-center items-center">
                            <i class="fa-solid text-white fa-user"></i>
                        </div>
                    </div>
                    <div class="pl-4 w-full">
                        <div>
                            <h2 class="text-white text-2xl text-center font-extrabold">
                                {{ $totalUser }}
                            </h2>
                            <h2 class="text-gray-300 text-sm text-center">
                                Total User
                            </h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>


</x-app-layout>
