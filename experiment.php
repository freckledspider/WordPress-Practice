<!-- PHP Practice 
This file is just for practicing PHP. 
In a real WordPress website this file would not be here.
-->

<?php
echo 2 + 2;
$myname = 'Bri';
?>


<h1>This page is all about <?php echo $myname; ?></h1>
<?php echo 5 * 5; ?>
<h2>All about <?php echo $myname; ?></h2>

<?php
function myFirstFunction()
{
    echo "<p>Hello World!</p>";
}

myFirstFunction();
?>


<?php function greet($name, $color)
{
    echo "<p>Hi, my name is $name and my favorite color is $color.</p>";
}

greet('John', 'blue');
greet('Jane', 'green');
?>
