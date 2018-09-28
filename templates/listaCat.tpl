{include file="header.tpl"}
<div class="row">
  <div class="col-sm-4">
    <h4>Categoria Nueva</h4>
    <form method="POST" action="save">
        <input type="text" name="nombre" id="">
        <button type="submit">Guardar</button>
    </form>  
  </div>
  <div class="col-sm-4">
    <h4>{$titulo}</h4>
    <table>
        {foreach from=$categorias_list item=listado}
          <tr>  
            <td>{$listado->nombre}</td> 
            <td><a href="tareas/{$listado->id_Cat}/">{$listado->id_Cat}</a></td>
            <td><a href="veredit/{$listado->id_Cat}/">Editar</a></td>
            <td><a href="delete/{$listado->id_Cat}/">Eliminar</a></td>
          </tr>
        {/foreach}
    </table>
  </div>
  <div class="col-sm-4"></div>
</div>
{include file="footer.tpl"}
