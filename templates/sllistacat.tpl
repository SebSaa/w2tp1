{include file="header.tpl"}
<div class="row">
  <div class="col-sm-4">
     
  </div>
  <div class="col-sm-4">
    <h4>{$titulo}</h4>
    <table>
        {foreach from=$categorias_list item=listado}
          <tr>  
            <td>{$listado->nombre}</td> 
            
          </tr>
        {/foreach}
    </table>
  </div>
  <div class="col-sm-4"></div>
</div>
{include file="footer.tpl"}