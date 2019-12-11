<a href="{{ route('pdf', $date->uuid) }}" target="_blank" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Imprimir">
    <i class="zmdi zmdi-print zmdi-hc-lg"></i>
</a>
<span class="btn btn-primary btn-view cursor-pointer mb-0 mr-0" data-id="{{ $date->id }}" onclick="btn_view_click(this)" data-toggle="tooltip" data-placement="bottom" title="Ver">
    <i class="zmdi zmdi-eye zmdi-hc-lg"></i>
</span>
<a href="{{ route('dates.edit', $date->uuid) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Editar">
    <i class="zmdi zmdi-edit zmdi-hc-lg"></i>
</a>
@canany(['view','create', 'update',  'delete'], auth()->user())
    <form action="{{ route('dates.destroy', $date) }}" method="post" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger remove-link" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
            <i class="zmdi zmdi-delete zmdi-hc-lg"></i>
        </button>
    </form>
@endcanany