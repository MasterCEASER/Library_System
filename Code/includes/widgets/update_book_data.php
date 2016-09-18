<?php
require '../../core/init.php';
if(isset($_POST['title']))
{
    $statement = 'call UPDATE_BOOK_TITLE('.$_POST['id'].',\''.$_POST['title'] . '\')';
    run($statement);
}
else if(isset($_POST['author']))
{
    $statement = 'call UPDATE_BOOK_AUTHOR('.$_POST['id'].',\''.$_POST['author'] . '\')';
    run($statement);
}

else if(isset($_POST['pub']))
{
    $statement = 'call UPDATE_BOOK_PUBLISHER('.$_POST['id'].',\''.$_POST['pub'] . '\')';
    run($statement);
}

else if(isset($_POST['sub']))
{
    $statement = 'call UPDATE_BOOK_SUBJECT('.$_POST['id'].',\''.$_POST['sub'] . '\')';
    run($statement);
}


?>