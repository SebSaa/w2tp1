{include file="headeradmin.tpl"}
<div class="row">
  <div class="col-sm-1">
  </div>
  <div class="col-sm-3">
    <h4>Categoria Nueva</h4>
    <form method="POST" action="save">
        <input type="text" name="nombre" id="">
        <button type="submit">Guardar</button>
    </form>  
  </div>
  <div class="col-sm-4">
    <h4>{$titulo}</h4>
    <table class="table table-striped table-dark">        
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">ID</th>
                <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
        {foreach from=$categorias_list item=listado}
          <tr>  
            <td>{$listado->nombre}</td> 
            <td><a class="js-editando" href="veredit/{$listado->id_Cat}/">Editar</a></td>
            <td><a href="delete/{$listado->id_Cat}/">Eliminar</a></td>
          </tr>
        {/foreach}
    </table>
  </div>
  <div class="col-sm-4">
    <div id="edicion">
    </div>
  </div>
</div>
{include file="footer.tpl"}
