{include file="header.tpl"}
<div class="row">
    <div class="col-md-4 col-md-offset-3">
    
    </div>
    <div class="col-md-4 col-md-offset-3">
        <form action="verify" method="post">
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="username" placeholder="name@domain.com" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name ="password" placeholder="Password" required>
        </div>
        {if !empty($error) }
            <div class="alert alert-danger" role="alert">{$error}</div>
        {/if}
        <button type="submit" class="btn btn-default">Login</button>
        </form>
    </div>
    <div class="col-md-4 col-md-offset-3">
    
    </div>
</div>
{include file="footer.tpl"}