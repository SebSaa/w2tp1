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
          <th scope="col">ID</th>
          <th scope="col">CATEGORIA</th>

          
        </tr>
      </thead>
        
          <tr>  
            <td>{$producto->nombre}</td>
            <td>{$producto->precio}</td>
            <td>{$producto->stock}</td>
            <td>{$producto->id_Art}</td> 
            <td>{$categoria->nombre}</td> 


            
          </tr>
        
    </table>
  </div>
  <div class="col-sm-4">
  </div>
</div>
{include file="footer.tpl"}