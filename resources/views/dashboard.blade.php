<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class=" mt-5">
        <div class="flex justify-center gap-10">
            <div class="w-56 rounded-2xl dashItem flex items-center py-5 px-4">
                <div
                    class="w-10 h-10 bg-white backdrop-opacity-10 backdrop-blur-xl rounded-full flex justify-center items-center">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div class="pl-4">
                    <div>
                        <h2 class="text-white">
                            {{ $totalDomain }}
                        </h2>
                        <h2 class="text-white">
                            Total Domain
                        </h2>
                    </div>
                </div>
            </div>
            <div class="w-56 rounded-2xl dashItem flex items-center py-5 px-4">
                <div class="w-10 h-10 bg-white rounded-full flex justify-center items-center">
                    <i class="fa-solid fa-person fa-xl"></i>
                </div>
                <div class="pl-4">
                    <div>
                        <h2 class="text-white">
                            {{ $totalPelanggan }}
                        </h2>
                        <h2 class="text-white">
                            Total Pelanggan
                        </h2>
                    </div>
                </div>
            </div>
            <div class="w-56 rounded-2xl dashItem flex items-center py-5 px-4">
                <div class="w-10 h-10 bg-white rounded-full flex justify-center items-center">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="pl-4">
                    <div>
                        <h2 class="text-white">
                            {{ $totalUser }}
                        </h2>
                        <h2 class="text-white">
                            Total User
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
