{include file="header.tpl"}

<div class="row">
    <div class="col-sm-4">
            <h4>Productos x Categoria</h4>
    </div>
    <div class="col-sm-4">
        <table class="table table-striped table-dark">        
            <thead>
                <tr>
                <th scope="col">CATEGORIA</th>
                <th scope="col"></th>
                <th scope="col">PRODUCTO</th>
                </tr>
            </thead>
        {$idcategoria=-1}
            {foreach from=$listado item=lista}
                {if $idcategoria!=$lista->id_Cat}
                    {$idcategoria=$lista->id_Cat}
                    <tr> 
                        <td>{$lista->nombrec}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td> 
                        <td>*</td>
                        <td>{$lista->nombre}</td> 
                    </tr>
                {else}
                    <tr> 
                         <td></td>
                         <td>*</td>
                        <td>{$lista->nombre}</td> 
                    </tr>
                    
                {/if}
            {/foreach}
        </table>
    </div>
  <div class="col-sm-4">
  
  </div>
</div>

{include file="footer.tpl"}