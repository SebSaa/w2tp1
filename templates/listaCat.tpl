{include file="header.tpl"}
    <h3>{$titulo}</h3>
    <ul>
        {foreach from=$categorias_list item=listado}
            
            <li>
                
                    {$listado->nombre} ---
                    <a href="tareas/{$listado->id_Cat}/">{$listado->id_Cat}</a>
                    <a href="veredit/{$listado->id_Cat}/">Editar</a>
                    <a href="delete/{$listado->id_Cat}/">Eliminar</a>
                
            </li>
            
        {/foreach}
    </ul>
    <form method="POST" action="save">
        <input type="text" name="nombre" id="">
        <button type="submit">Guardar</button>
    </form>    
{include file="footer.tpl"}
