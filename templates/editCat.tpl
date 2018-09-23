{include file="header.tpl"}
    <h3>{$titulo}</h3>
    
    <p>Categoria: {$categorias_list->nombre} // Id: {$categorias_list->id_Cat}</p>
        
    <form method="POST" action="edit">
        <input type="text" name="nombre" id="">
        <input type="text" name="id" value={$categorias_list->id_Cat}>
        <button type="submit">Actualizar</button>
    </form>    
{include file="footer.tpl"}
