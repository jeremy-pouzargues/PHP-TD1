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
    echo '<hr/><br/><strong>Calculator</strong><br/><hr/>';

    echo '<form action="action.php" method="post">
          <p>Votre nom : <input type="text" name="nom" /></p>
          <p>Votre âge : <input type="text" name="age" /></p>
          <p><input type="submit" value="OK"></p>
          </form>';

    echo '</body>
        </html>';
};
?>

<?php
start_page('Calculator');
end_page();
?>