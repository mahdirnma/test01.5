<?php
require_once "Category.php";
$title=$_POST["title"];
$category=new category("categories");
$category->insert(["title"=>$title]);
header("Location: index.php");