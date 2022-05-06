<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventory</title>

    <link rel="stylesheet" href="/public/assets/style.css">
</head>
<body>
</body>
<header>
    <div>
            <h2 title="Startseite" id="title">Inventory<Inventory></Inventory></h2>
        <div id="searchdiv">
            <form method="get" action="/">
                <input type="text" name="query" placeholder="Suche">
            </form>
        </div>
    </div>
</header>
<?php include './../templates/content/' . $file . '.php'; ?>
</html>