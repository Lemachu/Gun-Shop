<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategorije') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-secondary p-2 text-dark bg-opacity-25 overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($kategorije as $kat)
                    <div class="row mt-5 p-2">
                        <div class="col-5">
                        <img src="slike/{{$kat->slikaKat}}" alt="" class="" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="col-7 ">
                            <h1><b>{{$kat->imeKat}}</b></h1>
                            <p class="fs-2" style="margin:auto; width:700px; ">{{$kat->opisKat}}</p>
                                
                        </div>
                    </div>
                    <div class="row mt-5 bg-white  bg-opacity-75 m-auto p-2 flex items-center justify-end">
                     <p></p>
                              @foreach($guns as $gun)
                                @if($gun->idKat == $kat->id)
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
