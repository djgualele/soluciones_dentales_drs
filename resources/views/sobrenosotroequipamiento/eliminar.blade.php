<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminar-{{ $sobrenosotroequipamiento->id }}">
    <i class="fas fa-trash"></i>
</button>
<div id="eliminar-{{ $sobrenosotroequipamiento->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header style-danger">
                <h5 class="modal-title" id="my-modal-title">Eliminar Sobre Nosotros Equipamiento</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('sobrenosotroequipamiento.delete', ['id' => $sobrenosotroequipamiento->id]) }}" method="post">
                @csrf
                <div class="modal-body">
                    <p>Seguro que desea eliminar el registro {{ $sobrenosotroequipamiento->nombre }} ?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success">Aceptar</button>
                    <button type="text" class="btn btn-sm btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
