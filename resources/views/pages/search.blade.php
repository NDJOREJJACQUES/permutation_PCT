@extends('app')

@section('dynamicPageTitle')
    Page de recherche TEACHSWA
@stop

@section('content')
<div class="search-bar">
    <form action="resultats.html" class="search-form">
        <div class="input-search">
            <input type="text" placeholder="Choisissez votre localité">
        </div>
        <div class="btn-search">
            <button type="submit">Rechercher</button>
        </div>
                    
    </form>               
</div>
@stop