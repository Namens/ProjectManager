<?php

include 'access/Project.php';
include 'access/Task.php';

$project = new Project("Уборка");

$task1 = new Task("Пол", "Помыть пол");
$task2 = new Task("Доска", "Помыть доску");

$project->addTask($task1);
$project->addTask($task2);

echo $project . "<br/>";
echo $task1 . "<br/>";
echo $task2 . "<br/>";

$task2->setStatus("Выполнено");
echo $task2 . "<br/>";

$task1->setStatus("Выполнено");
echo $task1 . "<br/>"; 

?>