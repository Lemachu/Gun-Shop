<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Korpa') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h3>Sve kupovine:</h3>
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Produkt</th>
                <th scope="col">Korisnik</th>
                <th scope="col">Datum</th>
                </tr>
            </thead>
            <tbody>
             @foreach($carts as $cart)   
                <tr>
                <th scope="row">{{$cart->id}}</th>
                <td>{{$cart->puska}}</td>
                <td>{{$cart->kor}} </td>
                <td>{{$cart->datum}} </td>
                
             </tr>
             @endforeach  
            </tbody>
            </table>


                <h3>Sve kupovine korisnika Lema:</h3>
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Produkt</th>
                <th scope="col">Korisnik</th>
                <th scope="col">Datum</th>
                </tr>
            </thead>
            <tbody>
             @foreach($lema as $lem)   
                <tr>
                <th scope="row">{{$lem->id}}</th>
                <td>{{$lem->puska}}</td>
                <td>{{$lem->kor}} </td>
                <td>{{$lem->datum}} </td>
                
             </tr>
             @endforeach  
            </tbody>
            </table>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-3 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h3>Najčešće kupljeni proizvodi:</h3>
            @foreach($najcescePuske as $najcescePuske)
            <h4>{{$loop->iteration}}.{{$najcescePuske->nazivGun}} - {{$najcescePuske->brojac}} kupovine</h4>
            @endforeach
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-3 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h3>Države iz kojih dolazi najviše proizvoda:</h3>
            @foreach($najDrzave as $najDrzave)
            <h4>{{$loop->iteration}}.{{$najDrzave->drzava}} - {{$najDrzave->brojac}} X</h4>
            @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
