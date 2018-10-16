<h3>{$titulo}</h3>
    
    <h4>Categoria: {$producto_list->nombre} // Id: {$producto_list->id_Art}</h4>

<form method="POST" action="editprod">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Nombre</label>
            <input type="text" name="nombre" value={$producto_list->nombre} id="">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>ID producto</label>
            <input type="text" name="id" value={$producto_list->id_Art}>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Precio</label>
            <input type="text" name="precio" value={$producto_list->precio}>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Stock</label>
            <input type="text" name="stock" value={$producto_list->stock}>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <button type="submit">Actualizar</button>
        </div>
    </div>
</form>