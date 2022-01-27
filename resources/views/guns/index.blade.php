<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Oružje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a href="\add_gun" class="m-2 p-2 text-xl btn btn-dark">Dodaj Oružje</a>
                <a href="\ispis" class="m-2 p-2 text-xl btn btn-dark">Uredi/obriši</a>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row">
                    @foreach($guns as $gun)
                    <div class="col-4 p-5">
                            <h1 class="fs-4" style="height:60px;"><b>{{$gun->nazivGun}}</b></h1>
                            <img src="slike/{{$gun->slikaGun}}" alt="" class="p-4" style="width:400px; height:150px; object-fit:cover;">
                            <h6>{{$gun->brend}}</h6>
                            <p class="p-2  opacity-75" style="height:150px;">{{$gun->opis}}</p>
                            <div class="row">
                                <div class="col-1" ><p style="margin-top:17px; margin-left:15px;"> {{$gun->rating}}</p></div>
                                <div class="col-1" style="margin-top:17px">
                                    <svg style="fill:gold" width="22" height="22" viewBox="0 0 25 25"> <path  d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/></svg>
                                </div>
                                <div class="col-10">
                                    <h2 class="p-2 flex items-center justify-end" style="color:#FC2929"><b>{{$gun->cijena}} $</b></h2>
                                </div>
                                
                            </div>
                            
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
