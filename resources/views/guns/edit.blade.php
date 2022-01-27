<x-app-layout>
    <div class="py-12" style="width:50%; margin:auto;">
        <a href="\ispis" class="m-2 p-2 text-xl btn btn-dark float-end"> < Nazad</a>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($guns as $gun)
                    <form method="POST" enctype="multipart/form-data" action="{{ route('update_gun') }}">
                        @csrf 
                        <div>
                            <input type="hidden" name="id" id="id" value="{{$gun->id}}">
                            <label for="nazivGun" value="{{ __('Naziv') }}" >Naziv</label>
                            <input id="nazivGun" class="form-control" type="text" name="nazivGun" value="{{$gun->nazivGun}}"/>
                        </div>
                        <div class="mt-4">
                            <label for="idBrend" value="{{ __('Brend') }}" >Brend</label>
                            <select id="idBrend" class="form-control" name="idBrend">
                                <option selected="true" disabled="disabled">Odaberi</option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}"
                                @if($gun->idBrend==$brand->id) selected
                                @endif >
                                {{$brand->imeBrand}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4">
                            <label for="idKat" value="{{ __('Kategorija') }}" >Kategorija</label>
                            <select id="idKat" class="form-control" name="idKat">
                                <option selected="true" disabled="disabled">Odaberi</option>
                                @foreach($kategorije as $kat)
                                <option value="{{$kat->id}}"
                                @if($gun->idKat==$kat->id) selected
                                @endif >
                                {{$kat->imeKat}}</option>
                                @endforeach
                            </select>
                         </div>
                        <div class="mt-4">
                            <label for="opis" value="{{ __('Opis') }}" >Opis</label>
                            <textarea name="opis" id="opis" class="form-control" rows="4" cols="40">{{$gun->opis}}</textarea>
                        </div>
                        <div class="mt-4">
                            <label for="cijena" value="{{ __('Cijena') }}" >Cijena</label>
                            <input id="cijena" class="form-control" type="number"  step=".01" name="cijena" value="{{$gun->cijena}}" />
                        </div>
                        <div class="mt-4">
                            <label for="rating" value="{{ __('Rating') }}" >Rating</label>
                            <input id="rating" class="form-control" type="number" name="rating" value="{{$gun->rating}}"/>
                        </div>
                        <div class="mt-4">
                            <label for="slikaGun" value="{{ __('Slika') }}" >Slika</label>
                            <img src="slike/{{$gun->slikaGun}}" alt="" class="p-4" style="width:400px; height:150px; object-fit:cover;">
                            <input type="hidden" value="{{$gun->slikaGun}}" id="stara" name="stara"/>
                            <input id="nova" class="form-control" type="file" name="nova" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn btn-danger">
                                {{ __('Spremi')}}
                            </button>
                            
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
