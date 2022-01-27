<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-secondary p-2 text-dark bg-opacity-25 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="p-2">Kategorije:</h2>
                <a href="{{ route('kategorije') }}" :active="request()->routeIs('kategorije')">
                <div class="row bg-white  bg-opacity-75 d-flex justify-content-center p-5" >
                    @foreach($kategorije as $kat)
                    <div class="col-2">
                            <img src="slike/{{$kat->slikaKat}}" alt="" class="" style="width:100%; height:100%; object-fit:cover;">
                            <p class="fs-5 bg-white text-dark bg-opacity-25" style="height:60px; position:absolute; width:200px; margin-top:-25px"><b>{{$kat->imeKat}}</b></p>     
                    </div>
                    
                    @endforeach
                </div>
                </a>
                <div class="row bg-white  bg-opacity-75 mt-5 d-flex justify-content-center p-4">
                    <h3>Novo u ponudi:</h3>
                    @foreach($novi as $new)
                    <div class="col-3">
                            <img src="slike/{{$new->slikaGun}}" alt="" class="" style="width:300px; height:100px; object-fit:cover;">
                            <div class="" style="word-wrap: break-all; white-space: normal; width:300px;" >
                                        <p class="fs-6" style="height:60px; width:300px;"><b>{{$new->nazivGun}}</b></p>     
                            </div>
                            <h5 class="p-2 flex items-center justify-end" style="color:#FC2929"><b>{{$new->cijena}} $</b></h5>
                    </div>
                    @endforeach
                </div>
                <div class="row bg-white  bg-opacity-75 mt-5 d-flex justify-content-center p-4">
                    <h3>Najbolje ocijenjeni proizvodi:</h3>
                    @foreach($best as $naj)
                    <div class="col-3">
                            <img src="slike/{{$naj->slikaGun}}" alt="" class="" style="width:300px; height:100px; object-fit:cover;">
                            <div class="" style="word-wrap: break-all; white-space: normal; width:300px;" >
                                        <p class="fs-6" style="height:60px; width:300px;"><b>{{$naj->nazivGun}}</b></p>     
                            </div>
                            <h5 class="p-2 flex items-center justify-end" style="color:#FC2929"><b>{{$naj->cijena}} $</b></h5>
                    </div>
                    @endforeach
                </div>
                <div class="row bg-white  bg-opacity-75 mt-5 d-flex justify-content-center p-4">
                    <h3>Proizvodi iz V. Britanije:</h3>
                    @foreach($drzava as $drz)
                    <div class="col-3">
                            <img src="slike/{{$drz->slikaGun}}" alt="" class="" style="width:300px; height:100px; object-fit:cover;">
                            <div class="" style="word-wrap: break-all; white-space: normal; width:300px;" >
                                        <p class="fs-6" style="height:60px; width:300px;"><b>{{$drz->nazivGun}}</b></p>     
                            </div>
                            <h5 class="p-2 flex items-center justify-end" style="color:#FC2929"><b>{{$drz->cijena}} $</b></h5>
                    </div>
                    @endforeach
                </div>
                <div class="row bg-white  bg-opacity-75 mt-5 d-flex justify-content-center p-4">
                    <h3>Najpovoljnije (ispod 500$):</h3>
                    @foreach($izmedju as $bet)
                    <div class="col-3 p-5">
                            <img src="slike/{{$bet->slikaGun}}" alt="" class="" style="width:300px; height:100px; object-fit:cover;">
                            <div class="" style="word-wrap: break-all; white-space: normal; width:300px;" >
                                        <p class="fs-6" style="height:60px; width:300px;"><b>{{$bet->nazivGun}}</b></p>     
                            </div>
                            <h5 class="p-2 flex items-center justify-end" style="color:#FC2929"><b>{{$bet->cijena}} $</b></h5>
                    </div>
                    @endforeach
                </div>
                <div class="row bg-white  bg-opacity-75 mt-5 d-flex justify-content-center p-4">
                    <h3>Sve što sadrži 'AK':</h3>
                    @foreach($kao as $kao)
                    <div class="col-3 p-5">
                            <img src="slike/{{$kao->slikaGun}}" alt="" class="" style="width:300px; height:100px; object-fit:cover;">
                            <div class="" style="word-wrap: break-all; white-space: normal; width:300px;" >
                                        <p class="fs-6" style="height:60px; width:300px;"><b>{{$kao->nazivGun}}</b></p>     
                            </div>
                            <h5 class="p-2 flex items-center justify-end" style="color:#FC2929"><b>{{$kao->cijena}} $</b></h5>
                    </div>
                    @endforeach
                </div>
                <div class="row bg-white  bg-opacity-75 mt-5 d-flex justify-content-center p-4">
                    <h3>Broj pušaka koje pripadaju brendu Riley Defense:{{$data}}</h3>
                    @foreach($guns as $gun)
                    @if($gun->idBrend == 2)
                    <div class="col-3 p-5">
                        
                            <img src="slike/{{$gun->slikaGun}}" alt="" class="" style="width:300px; height:100px; object-fit:cover;">
                            <div class="" style="word-wrap: break-all; white-space: normal; width:300px;" >
                                        <p class="fs-6" style="height:60px; width:300px;"><b>{{$gun->nazivGun}}</b></p>     
                            </div>
                            <h5 class="p-2 flex items-center justify-end" style="color:#FC2929"><b>{{$gun->cijena}} $</b></h5>
                            
                    </div>
                    @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
