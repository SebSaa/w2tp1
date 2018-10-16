{include file="headeradmin.tpl"}

<div class="row">
    <div class="col-sm-1">
    </div>
  <div class="col-sm-3">
        <h4>Producto Nuevo</h4>
        <form method="POST" action="saveprod">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Categoria</label>
                    <select name="categoria">
                        {foreach from=$categorias_list item=listadocat}
                            <option value={$listadocat->id_Cat}>{$listadocat->nombre}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre</label>
                    <input type="text" name="nombre" id="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Precio</label>
                    <input type="text" name="precio" id="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Stock</label>
                    <input type="text" name="stock" id="">
                </div>
            </div>
            <button type="submit">Guardar Producto</button>
        </form>    
  </div>
  <div class="col-sm-4">
    <h4>{$titulo}</h4>
    <table class="table table-striped table-dark">        
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
        {foreach from=$productos_list item=listadopro}
            <tr> 
                <td>{$listadopro->nombre}</td>
                    {foreach from=$categorias_list item=listadocat}
                        {if $listadopro->id_Cat==$listadocat->id_Cat}
                            <td>{$listadocat->nombre}</td>
                        {/if}
                    {/foreach}
                <td><a class="js-editandoprod" href="vereditprod/{$listadopro->id_Art}/">Editar</a></td>
                <td><a href="deleteprod/{$listadopro->id_Art}/">Eliminar</a></td>
            </tr>
        {/foreach}
    </table>
  </div>
  <div class="col-sm-4">
    <div id="edicionprod">
    </div>
  </div>
</div>
{include file="footer.tpl"}