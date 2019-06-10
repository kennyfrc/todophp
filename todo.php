<?php

function displayTodos($todos) {
	print_r($todos);
}

function addTodo($todos, $todo) {
	array_push($todos, $todo);
	displayTodos($todos);
}

function changeTodo($todos, $idx, $todo) {
	array_splice($todos, $idx, 1, $todo);
	displayTodos($todos);
}

function deleteTodo($todos, $idx) {
	array_splice($todos, $idx, 1);
	displayTodos($todos);
}

// initialized todos
$todos = array("plan", "execute", "win");
echo "Initialized Todo\n";
displayTodos($todos);

// added a todo
echo "Added celebrate\n";
addTodo($todos, "celebrate");


// change a todo
echo "Changed a todo\n";
changeTodo($todos, 0, "assess");

// delete a todo
echo "Deleted a todo\n";
deleteTodo($todos, 2);
?>