<x-layouts::app :title="__('Liste des entreprises')">
    @if( session('success'))
        <p class="text-green-600"> {{ session('success') }} </p>
    @endif
    <h1>liste des entreprises :</h1>
    <ul>
        @foreach($companies as $company)

            <li>
                <a href="{{ route('companies.show', $company->id) }}">{{ $company->name }}</a>
            </li>

        @endforeach
    </ul>
    <a href="{{route('companies.create')}}">Créer une entreprise</a>
</x-layouts::app>
