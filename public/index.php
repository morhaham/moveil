<?php
declare(strict_types = 1); 

require __DIR__ . '/../src/Bootstrap.php';
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
	<script type='text/javascript' src="./js/search-stop"></script>
    <title>MoveIL</title>
</head>
<body dir="rtl">
    <header>
        <form class="search-stop">
           <div class="search-stop__input-wrap">
                <input type="text" name="search-stop__input-text" placeholder="לאן תרצה להגיע?">
           </div>
           <input type="button" onclick="AJAXRequest();" name="search-stop__input-submit" value="מצא">
        </form>
    </header>
	<main id="search-results">
	</main>
    <main>
        
    </main>
    
</body>
</html>

