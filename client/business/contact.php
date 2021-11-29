<?php
function contact()
{
    $sql = "SELECT * FROM  contact";
    $contact = pdo_execute($sql);
    client_render('contact/index.php', compact('contact'));
}
?>
