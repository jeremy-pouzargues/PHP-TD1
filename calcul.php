<?php
function start_page($title)
{
    echo '<!DOCTYPE html>
            <html lang="fr">
                <head>
                    <title>'. PHP_EOL . $title . '</title></head>
                    <body>' . PHP_EOL;
};
?>

<?php
function end_page()
{


    echo '</body>
        </html>';
};
?>

<?php


    start_page('calcul');

    echo '<hr/><br/><strong>calcul</strong><br/><hr/>';

    $op1 = $_GET['op1'];
    $op2 = $_GET['op2'];
    //$op  = $_POST['op'];
    $action = $_GET['action'];

    if (is_null($op1) or is_null($op2))
        return;

    if('*' == $action)
    {
        echo "$op1" . " $action " . "$op2" . " = ";
        echo $op1*$op2;
    }
    elseif('+' == $action)
    {
        echo "$op1" . " $action " . "$op2" . " = ";
        echo $op1+$op2;
    }
    elseif('-' == $action)
    {
        echo "$op1" . " $action " . "$op2" . " = ";
        echo $op1-$op2;
    }
    elseif('/' == $action)
    {
        echo "$op1" . " $action " . "$op2" . " = ";
        echo $op1/$op2;
    }
    else
    {
        echo '<br/><strong>opérateur ' . $action . ' non géré </strong>';
    }



    end_page();
?>
