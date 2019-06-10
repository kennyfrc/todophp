<?php

class todo_list {
	public $todos = array();

	function display_todos() {
		print_r($this->todos);
	}

	function add_todo($todo) {
		array_push($this->todos, $todo);
	}

	function change_todo($idx, $todo) {
		array_splice($this->todos, $idx, 1, $todo);
	}

	function delete_todo($idx) {
		array_splice($this->todos, $idx, 1);
	}
}


print_r("initialized todos");
$todos = new todo_list;

print_r("add todo\n");
$todos->add_todo("plan");
$todos->add_todo("execute");
$todos->add_todo("win");
$todos->display_todos();

print_r("change todo\n");
$todos->change_todo(0, "assess");
$todos->display_todos();

print_r("delete todo\n");
$todos->delete_todo(2);
$todos->display_todos();

?>