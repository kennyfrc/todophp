<?php

// initialized todos
$todos = array("plan", "execute", "win");
echo "Initialized Todo\n";
print_r($todos);

// added a todo
$todos[] = "celebrate";
echo "Added celebrate\n";
print_r($todos);

// change a todo
$todos[0] = "assess";
echo "Changed a todo\n";
print_r($todos);

// delete a todo
array_splice($todos, 3, 1);
echo "Deleted a todo\n";
print_r($todos);
?>