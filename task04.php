<?php
function whoami() {
    if (isset($_POST['name']) && isset($_POST['age'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];

        if (is_numeric($age) && intval($age) > 0) {
            echo "Hi, my name is $name and I'm $age years old.";
        } else {
            echo "Hi, my name is $name.";
        }
    } elseif (isset($_POST['name'])) {
        $name = $_POST['name'];
        echo "Hi, my name is $name.";
    } elseif (isset($_POST['age'])) {
        $age = $_POST['age'];
        echo "Hi, I have no name and I'm $age years old.";
    } else {
        echo "Guess what you should print.";
    }
}
?>