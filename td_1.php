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
    start_page('titre');

    echo '<hr/><br/><strong>Test</strong><br/><hr/>';

    $jour = date('d/m/Y', strtotime(date('l F d, Y')));
    echo $jour;

    $jour = date('l F d, Y, h:i a');
    echo '<br/>'.$jour;

    end_page();
?>