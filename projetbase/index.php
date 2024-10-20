<?php

require_once (__DIR__ . '/config/database.php');
require_once (__DIR__ . '/includes/header.php');
phpinfo();

// CREATE TABLE IF NOT EXISTS
$sql = "IF OBJECT_ID(N'dbo.customers', N'U') IS NULL
CREATE TABLE dbo.customers (
    c1 int
    );
";
$params = [];

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}


?>

    <main role="main">

        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php

                    $products = ['name' => 'produit', 'image' => 'https://fakeimg.pl/250x100/'];

                    for ($i=0; $i<=10; $i++) {
                        echo '<div class="col-md-4"><div class="card mb-4 box-shadow"><img class="img-fluid" src="' . $products['image'] .'"/><div class="card-body"><p class="card-text">' . $products['name'] . ' ' . $i .'</p></div></div></div>';
                    }

                    ?>
                </div>
            </div>
        </div>

    </main>


<?php

require_once (__DIR__ . '/includes/footer.php');

?>