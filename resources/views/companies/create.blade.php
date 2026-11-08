<x-layouts::app :title="__('Ajouter une entreprise')">
    <h1>Ajouter une entreprise :</h1>
    <form action="{{route('companies.store')}}" method="post">
        @csrf
        <ul>
            <li>
                <label for="name">Nom :</label>
                <input name="name" id="name" type="text" value="{{ old('name') }}">
                @error('name')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </li>
            <li>
                <label for="website_url">Site :</label>
                <input name="website_url" id="website_url" type="url" value="{{ old('website_url') }}">
                @error('website_url')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </li>
            <li>
                <label for="city">Ville :</label>
                <input name="city" id="city" type="text" value="{{ old('city') }}">
                @error('city')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </li>
            <li>
                <label for="notes">Notes :</label>
                <textarea name="notes" id="notes" cols="30" rows="10">{{ old('notes') }}</textarea>
                @error('notes')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </li>
        </ul>
        <button type="submit">ENVOYER</button>
    </form>
    <a href="{{route('companies.index')}}">Annuler</a>

</x-layouts::app>
