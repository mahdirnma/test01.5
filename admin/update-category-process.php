<?php
require_once "Category.php";
$title=$_POST["title"];
$id=$_POST["id"];
$category=new category("categories");
$category->update(["id"=>$id,
    "title"=>$title]);
header("Location: index.php");