<?php

namespace MoveIL\Controller;

require_once './requires.php';

use MoveIL\Model\Database;



Database::connect("localhost", "mor", "morh123","transdb");
Database::initQueriesRepository();
