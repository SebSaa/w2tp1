{include file="header.tpl"}

<div class="row">
    <div class="col-sm-3">
  
    </div>
    <div class="col-sm-3">
        <h4>Categorias</h4>
        <table>
            {foreach from=$categorias_list item=listado}
                <tr> 
                    <td>{$listado->nombre}</td> 
                    
                </tr>
            {/foreach}
        </table>
    </div>
    <div class="col-sm-3">
    <h4>Productos</h4>
        <table>
            {foreach from=$productos_list item=listado}
                <tr> 
                    <td>{$listado->nombre}</td> 
                    
                </tr>
            {/foreach}
        </table>
    </div>
  <div class="col-sm-3">
  
  </div>
</div>

{include file="footer.tpl"}