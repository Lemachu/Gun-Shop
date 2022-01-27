<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Brendovi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-secondary text-dark bg-opacity-25 overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($brands as $brend)
                    <h1 class="fs-1 p-3 text-center"><b>{{$brend->imeBrand}}</b></h1>
                    <div class="row p-3 bg-white  bg-opacity-75 m-auto p-2 flex items-center justify-content-center">
                    @foreach($guns as $gun)
                    @if($gun->idBrend == $brend->id)
                         <div class="col-2 ">
                            <img src="slike/{{$gun->slikaGun}}" alt="" class="" style="width:300px; height:70px; object-fit:cover;">
                        </div>
                    @endif
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
