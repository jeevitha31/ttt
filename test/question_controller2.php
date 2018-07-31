<?php
include 'db.php';
//--------------option --------------------------
$table_name = 'question_pat1';

$query = "create table $table_name(question_id int, question varchar(255), answer varchar(255))";

$result =  mysqli_query($con, $query);

