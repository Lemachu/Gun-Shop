<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row">
                    <div class="col-12">
                    <img src="slike/welcome.jpg" alt="" class="" style="width:100%; height:500px; object-fit:cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
