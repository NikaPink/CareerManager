<x-layouts::app :title="__('Liste des entreprises')">
    <h1>liste des entreprises :</h1>
    <ul>
        @foreach($companies as $company)

            <li>
                <a href="{{ route('companies.show', $company->id) }}">{{ $company->name }}</a>
            </li>

        @endforeach
    </ul>
</x-layouts::app>
