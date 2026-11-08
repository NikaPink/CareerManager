<x-layouts::app :title="__('Ajouter une entreprise')">
    <h1>Ajouter une entreprise :</h1>
    <form action="{{route('companies.store')}}" method="post">
        @csrf
        <ul>
            <li>
                <label for="name">Nom :</label>
                <input name="name" id="name" type="text">
            </li>
            <li>
                <label for="website_url">Site :</label>
                <input name="website_url" id="website_url" type="url">
            </li>
            <li>
                <label for="city">Ville :</label>
                <input name="city" id="city" type="text">
            </li>
            <li>
                <label for="notes">Notes :</label>
                <textarea name="notes" id="notes" cols="30" rows="10"></textarea>
            </li>
        </ul>
        <button type="submit">ENVOYER</button>
    </form>

</x-layouts::app>
