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
    start_page('Calculator');

    echo '<hr/><br/><strong>Calculator</strong><br/><hr/>';

    echo '<form action="calcul.php" method="post">
          <p> op1 <input type="text" name="nom" /></p>
          <p> op2 <input type="text" name="age" /></p>
          <p><input checked ="checked" type="radio" name="op" value="*"/>*<br/></p>
          <p><input type="radio" name="op" value="+"/>+<br/></p>
          <p><input type="radio" name="op" value="-"/>-<br/></p>
          <p><input type="radio" name="op" value="/"/>/<br/></p>
          <p><input type="submit" value="calcul"></p>
          <p><input type="reset" value="effacer"></p>
          </form>';

    end_page();
?>