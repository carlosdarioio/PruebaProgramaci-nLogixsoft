<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';
?>
<?php include BASE_PATH . '/includes/header.php'; ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tabla con nombres y ubicaciones de clientes</h1>
		</div>        
    </div>
    <?php include BASE_PATH . '/includes/flash_messages.php'; ?>    
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th width="50%">Nombre</th>
                <th width="25%">Latitud</th>
                <th width="25%">Longitud</th>                
            </tr>
        </thead>
        <tbody>            
            <tr>
                <td>Punto 1</td>
                <td>13.705243</td>
                <td>-89.24231</td>
            </tr>                        
			<tr>
                <td>Punto 2</td>
                <td>13.696674</td>
                <td>-89.197927</td>
            </tr>                        
			<tr>
                <td>Punto 3</td>
                <td>14.692511</td>
                <td>-87.86136</td>
            </tr>                        
			<tr>
                <td>Punto 4</td>
                <td>12.022747</td>
                <td>-86.252007</td>
            </tr>                        
			<tr>
                <td>Punto 5</td>
                <td>8.103289</td>
                <td>-80.596013</td>
            </tr>                        
        </tbody>
    </table>    
</div>
<?php include BASE_PATH . '/includes/footer.php'; ?>
