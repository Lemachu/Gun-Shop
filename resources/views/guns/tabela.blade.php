<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Oružje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a href="\add_gun" class="m-2 p-2 text-xl btn btn-dark">Dodaj Oružje</a>
                <a href="\guns" class="m-2 p-2 text-xl btn btn-dark"> < Nazad</a>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Naziv</th>
                <th scope="col">Cijena</th>
                <th colspan="2" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
             @foreach($guns as $gun)   
                <tr>
                <th scope="row">{{$gun->id}}</th>
                <td>{{$gun->nazivGun}}</td>
                <td>{{$gun->cijena}} $</td>
                <td>
                <form method="POST" action="{{route('delete_gun')}}">
                    @csrf 
                    <input type="hidden" name="id" value="{{$gun->id}}">
                    <button class="m-2 p-2 text-xl btn btn-danger">{{ __("Obrisi") }}</button>
                </form>
                </td>
                <td>
                <form method="POST" action="{{route('edit_gun')}}">
                    @csrf 
                    <input type="hidden" name="id" value="{{$gun->id}}">
                    <button class="m-2 p-2 text-xl btn btn-success">{{ __("Uredi") }}</button>
                </form>
                </td>
             </tr>
             @endforeach  
            </tbody>
            </table>
                
                    
                   
                  
                    
                    
                
            </div>
        </div>
    </div>
</x-app-layout>
