<?php 
require_once 'navbar.html';
require_once 'sidebar.html'; 
?>


<h1>Pratikum 1</h1>
<?php 


$fruits =["Banana", "Avocado", "Melon", "Waterlemon", ];

echo $fruits[1];
echo "    ";
echo $fruits[3];

echo "<ol>";
    foreach ($fruits as $fruit) {
        echo "<li>" . $fruit . "</li>";
}
echo "</ol>";

require_once 'footer.html';
?>

