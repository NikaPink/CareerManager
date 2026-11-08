<x-layouts::app :title="__('Détails de l\'entreprise')">
    @if( session('success'))
        <p class="text-green-600"> {{ session('success') }} </p>
    @endif
    <h1>nom : {{$company->name}}</h1>

    <ul>
        @if($company->website_url)
            <li>
                <a href="{{ $company->website_url }}" target="_blank">lien du site</a>
            </li>
        @endif

        @if($company->notes)
            <li>notes : {{ $company->notes }}</li>
        @endif

        @if($company->city)
            <li>ville : {{ $company->city }}</li>
        @endif

        <li>créée le {{ $company->created_at->format('d/m/Y') }}</li>
    </ul>
        <a href="{{route('companies.edit', ['company'=>$company])}}">Mettre à jour</a>


</x-layouts::app>
