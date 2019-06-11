<?php

class todo_list {
	public $todos = array();

	public function display_todos() {
		var_export($this->todos);
	}

	public function add_todo($todo) {
		$task = new task;
		$task->todo_text = $todo;
		array_push($this->todos, $task);
	}

	public function change_todo($idx, $todo) {
		$task = new task;
		$task->todo_text = $todo;
		$this->todos[$idx] = $task;
	}

	public function delete_todo($idx) {
		array_splice($this->todos, $idx, 1);
	}

	public function toggle_todo($idx) {
		$this->todos[$idx]->toggle_completed(); // you need to add the parentheses to invoke the function
	}
}

class task {
	public $todo_text = "";
	public $completed = false;

	public function toggle_completed() {
		if ($this->completed == true) {
			$this->completed = false;
			var_export($this->completed);
		} else {
			$this->completed = true;
		}
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

print_r("toggle todo\n");
$todos->toggle_todo(1);
$todos->display_todos();

?>