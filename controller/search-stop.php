<?php
namespace MoveIL\Controller;

require_once '../requires.php';

use MoveIL\Model\Database;
use MoveIL\Model\Stop;
use \PDO;


// Database::connect("localhost", "mor", "morh123","transdb");
// Database::initQueriesRepository();

$stop = new Stop((function(){
	$stopname = 'הרצליה פיתוח';
	return $stopname;
})());


$search_value = $stop->stop_name;

$queries = Database::getStatements('Stop');

$stopByName = Database::prepare($queries['stopByName']);

$stopByName->execute(array('%ארליך%'));
$matched_results = $stopByName->fetchAll(PDO::FETCH_COLUMN);
foreach($matched_results as $row) {
    
}



?>








