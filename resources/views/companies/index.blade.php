<x-layouts::app :title="__('Liste des entreprises')">
<h1>liste des entreprises :</h1>
@foreach($companies as $company)
    <ul>
        <li>{{ $company->name }}</li>
    </ul>
@endforeach

</x-layouts::app>
