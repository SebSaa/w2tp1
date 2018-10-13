{include file="headeradmin.tpl"}

<div class="row">
  <div class="col-sm-4">
        <h4>Producto Nuevo</h4>
        <form method="POST" action="saveprod">
            <select name="categoria">
                {foreach from=$categorias_list item=listado}
                    <option value={$listado->id_Cat}>{$listado->nombre}</option>
                {/foreach}
            </select>
                <input type="text" name="nombre" id="">
                <button type="submit">Guardar Producto</button>
        </form>    
  </div>
  <div class="col-sm-4">
    <h4>Productos</h4>
    <table class="table table-striped table-dark">        
            <thead>
                <tr>
                <th scope="col">Productos</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
        {foreach from=$productos_list item=listado}
            <tr> 
                <td>{$listado->nombre}</td> 
                <td><a href="veredit/{$listado->id_Cat}/">Editar</a></td>
                <td><a href="delete/{$listado->id_Cat}/">Eliminar</a></td>
            </tr>
        {/foreach}
    </table>
  </div>
  <div class="col-sm-4">
  
  </div>
</div>



    

    
{include file="footer.tpl"}