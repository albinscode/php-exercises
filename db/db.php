<?php

try {
    ini_set('display_errors', '1');
    $dbh = new PDO('mysql:host=localhost;dbname=test', 'root', 'ROOT');

    // a classic hard coded request
    echo 'handle created<br>';
    $rows = $dbh->query('select * from mytable');
    echo 'select done<br>';
    echo "Number of lines: " . $rows->rowCount() . "<br>";
    foreach($rows as $row) {
        print_r($row);
    }

    // a prepared statement
    $statement = $dbh->prepare('select * from mytable where id = :id');

    $statement->execute(
        array(
            'id' => 1
        )
    );
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    }
} catch (PDOException $e) {
    echo "error " . $e->getMessage() . "<br>";
}
?>
