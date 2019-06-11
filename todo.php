<?php

class todo_list {
	public $todos = array();

	public function display_todos() {
		if (empty($this->todos)) {
			print_r("Your todo list is empty. Add some tasks!\n");
		} else {
			$total_tasks = $this->count_all_tasks($this->todos);
			print_r("Number of tasks: {$total_tasks}\n");
			foreach ($this->todos as $idx => $task) {
				$task_status = "";
				if ($task->completed == true) {
					$task_status = "true";
				} else {
					$task_status = "false";
				}
				print_r("{$task->todo_text} | completed: {$task_status}\n");
			}
		}

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

	public function count_all_tasks($todos) {
		$total_tasks = 0;
		foreach ($todos as $idx => $task) {
			$total_tasks++;
		}
		return $total_tasks;
	}

	public function count_completed_tasks($todos) {
		$completed_tasks = 0;
		foreach ($todos as $idx => $task) {
			if ($task->completed == true) {
				$completed_tasks++;
			} 
		}
		return $completed_tasks;
	}

	public function toggle_all() {
		$total_tasks = $this->count_all_tasks($this->todos);
		$completed_tasks = $this->count_completed_tasks($this->todos);
		if ($completed_tasks < $total_tasks) {
			foreach ($this->todos as $idx => $task) {
				$task->completed = true;
			}
		} else {
			foreach ($this->todos as $idx => $task) {
				$task->completed = false;
			}
		}
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


print_r("initialized todos. should be empty.\n");
$todos = new todo_list;
$todos->display_todos();

print_r("\nadd todo\n");
$todos->add_todo("plan");
$todos->add_todo("execute");
$todos->add_todo("win");
$todos->display_todos();

print_r("\nchange todo\n");
$todos->change_todo(0, "assess");
$todos->display_todos();

print_r("\ndelete todo\n");
$todos->delete_todo(2);
$todos->display_todos();

print_r("\ntoggle todo\n");
$todos->toggle_todo(1);
$todos->display_todos();

print_r("\ntoggle all to true\n");
$todos->toggle_all();
$todos->display_todos();

print_r("\ntoggle all to false\n");
$todos->toggle_all();
$todos->display_todos();

?>