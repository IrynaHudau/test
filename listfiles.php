if ($handle = opendir('.')) {

while (false !== ($entry = readdir($handle))) {

    if ($entry != "." && $entry != "..") {

        echo "$entry\n";
//         echo "file_get_contents($entry)";
//         echo "\n========\n"
    }
}

closedir($handle);
}
