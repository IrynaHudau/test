if ($handle = opendir('.')) {

while (false !== ($entry = readdir($handle))) {

    if ($entry != "." && $entry != "..") {

        echo "$entry\n";
        $file = $entry;
        $orig = file_get_contents($file);
        $a = htmlentities($orig);

        echo '<code>';
        echo '<pre>';

        echo $a;

        echo '</pre>';
        echo '</code>';
    }
}

closedir($handle);
}
