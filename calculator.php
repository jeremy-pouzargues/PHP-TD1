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

    $operateurs = '*+-/';

    echo '<form action="calcul.php" method="get">

          <p> op1 <input type="number" name="op1" required="required" /></p>
          
          <p> op2 <input type="number" name="op2" required="required" /></p>';

          
          for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
          {
            echo '<input '; 
            
            if($cpt == 0)
            {
                echo 'checked="checked" ';
            }
            echo 'type="submit" name="action" value="' . $operateurs[$cpt] . '"/><br/>' . "\n";
          }
          
          //echo '<p><input type="submit" name="action" value="calcul"></p>
          echo '<p><input type="reset" value="effacer"></p>
          
          </form>';

    end_page();

?>
