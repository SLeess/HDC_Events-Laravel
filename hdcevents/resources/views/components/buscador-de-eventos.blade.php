@props(['search'])

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="{{ route('events.home') }}" method="GET">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar" @if($search) value="{{ $search }}" @endif>
    </form>
</div>
