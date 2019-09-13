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
    $jour = date('l F d, Y', strtotime('2020-04-01'));
    echo '<hr/><br/><strong>Test</strong><br/><hr/>';
    echo $jour;
};
?>

<?php
    start_page('titre');
    end_page();
?>