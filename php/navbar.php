<?php
$navItems = [
    'Home' => 'index.php',
    'About' => 'about.php',
    'Services' => 'services.php',
    'Contact' => 'contact.php'
];

function createNavbar($items) {
    echo '<nav>';
    echo '<ul>';
    foreach ($items as $name => $link) {
        echo "<li><a href='$link'>$name</a></li>";
    }
    echo '</ul>';
    echo '</nav>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            float: left;
        }
        nav ul li a {
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav ul li a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
    <?php createNavbar($navItems); ?>
</body>
</html>