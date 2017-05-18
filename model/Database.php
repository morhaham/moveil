<?php
namespace Transportation\Model;
//require_once '../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
use \PDO;

class Database {
    private static $queries;
    private static $connection;

    public static function connect($server_name, $username, $password, $database_name) {
        try {
            if(self::$connection == null) {
                self::$connection = new PDO("mysql:host=$servername; dbname=$database_name; charset=utf8", $username, $password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
            }
            else {
			    echo "Already connected to a database.";
			}
        }
        catch(PDOException $e) {
            echo "Connection failed: ".$e -> getMessage();
        }
    }
   
    public static function initQueriesRepository() {
        try {
            if(self::$queries == null) {
                return self::$queries = Yaml::parse(file_get_contents('../data/queries.yaml'));
            }
            else echo "The repository is already initialized.";
        } 
        catch (ParseException $e) {
            printf("Unable to parse the YAML string: %s", $e->getMessage());
        }
    }

    public static function getStatements($class_name) {
         if(array_key_exists($class_name, self::$queries)) {
            return self::$queries[$class_name];
        }
    }

    public static function prepare($statement) {
        return self::$connection->prepare($statement);
    }

}




// $queries = QueriesRepo::getQueries('Route');
// print_r($queries);



// $var = Yaml::parse(file_get_contents('../data/queries.yaml'));
// print_r($var);

