{include file="header.tpl"}
<div class="row">
  <div class="col-sm-4">
         <h4>{$titulo}</h4>
  </div>
  <div class="col-sm-4">
    <table class="table table-striped table-dark">        
      <thead>
        <tr>
          <th scope="col">PRODUCTO</th>
          <th scope="col">PRECIO</th>
          <th scope="col">STOCK</th>
        </tr>
      </thead>
        {foreach from=$productos_list item=listado}
          <tr>  
            <td>{$listado->nombre}</td>
            <td>$ {$listado->precio}</td>
            <td>{$listado->stock}</td> 
            
          </tr>
        {/foreach}
    </table>
  </div>
  <div class="col-sm-4">
  </div>
</div>
{include file="footer.tpl"}