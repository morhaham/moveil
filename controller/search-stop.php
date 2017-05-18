<?php
namespace MoveIL\Controller;

use MoveIL\Model\Database;
use MoveIL\Model\Stop;
use \PDO;

require_once './requires.php';

Database::connect("localhost", "mor", "morh123","transdb");
Database::initQueriesRepository();

$stop = new Stop('הרצליה פיתוח');
$search_value = $stop->stop_name;
print($search_value);
$queries = Database::getStatements('Stop');
print_r($queries);
$stopByName = Database::prepare($queries['stopByName']);
print_r($stopByName);
$stopByName->execute(array('%ארליך%'));
$matched_results = $stopByName->fetchAll(PDO::FETCH_COLUMN);
foreach($matched_results as $row) {
    echo $row;
}







