#!/usr/bin/php
<?php

include("../ex03/ft_split.php");

echo "Hello    World AAA";
print_r(ft_split("Hello    World AAA"));

echo "    Hello  0  World AAA False";
print_r(ft_split("    Hello  0  World AAA False"));

echo "False";
print_r(ft_split("False"));

?>