<?php

require_once ( __DIR__ . '/../../config/database.php' );
require_once ( __DIR__ . '/../../includes/header.php' );

$sql = 'SELECT vehicle_uid, customer_uid FROM Contract';
$stmt = sqlsrv_query( $conn, $sql );
if ( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true ) );
}

?>

<main role = 'main'>

<div class = 'py-5 bg-light'>
<?php
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC ) ) {
    echo '  <div class="col-md-4">
            <div class="card mb-4 box-shadow">            
            <div class="card-body">
            <h3 class="card-title">'. $row[ 'customer_uid' ] .'</h3>
            <p class="card-text">' .$row[ 'vehicle_uid' ].'</p>
            </div>
            </div>            
            </div>';

}

sqlsrv_free_stmt( $stmt );
?>
</div>

</main>

<?php

require_once ( __DIR__ . '/../../includes/footer.php' );

?>