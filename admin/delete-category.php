<?php
require_once "Category.php";
$id=$_GET["id"];
var_dump($id);
$category=new category("categories");
$category->delete($id);
header("Location: index.php");