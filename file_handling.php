
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PHP Complete File & Folder Demo</title>
</head>
<body>

<h2>PHP File Functions Demonstration</h2>

<?php

/* =====================================================
   PART 1 — BASIC FILE FUNCTIONS
===================================================== */

$name = "data.txt";

// Write file
$fp = fopen($name, "w");
fwrite($fp, "Hello Vasu sir!\n");
fwrite($fp, "This is PHP File Handling Demo.\n");
fclose($fp);

echo "<b>Data written using fopen() and fwrite()</b><br>";

// Append data
file_put_contents($name, "this is vyshnavi and today is wt lab\n", FILE_APPEND);
echo "<b>Data appended using file_put_contents()</b><br><br>";

if (file_exists($name)) {

    echo "<h3>Reading File Data</h3>";

    $fp = fopen($name, "r");
    echo "<b>Using fread():</b><br>";

    echo nl2br(fread($fp, filesize($name)));
    fclose($fp);

    echo "<br><br>";

    echo "<b>Using file_get_contents():</b><br>";
    echo nl2br(file_get_contents($name));

    echo "<br><br>";

    echo "<b>Using file() (line by line):</b><br>";
    $arr = file($name);
    foreach ($arr as $line) {
        echo nl2br($line);
    }
}

/* ---------------- File Info ---------------- */

echo "<h3>File Information</h3>";

echo "File Exists: " . (file_exists($name) ? "Yes" : "No") . "<br>";
echo "File Size: " . filesize($name) . " bytes<br>";
echo "File Type: " . filetype($name) . "<br>";
echo "Last Access: " . date("Y-m-d H:i:s", fileatime($name)) . "<br>";
echo "Last Modified: " . date("Y-m-d H:i:s", filemtime($name)) . "<br>";
echo "Creation Time: " . date("Y-m-d H:i:s", filectime($name)) . "<br>";
echo "Permissions: " . substr(sprintf('%o', fileperms($name)), -4) . "<br>";
echo "Owner ID: " . fileowner($name) . "<br>";
echo "Group ID: " . filegroup($name) . "<br>";
echo "Inode Number: " . fileinode($name) . "<br><br>";

/* =====================================================
   PART 2 — FILE & FOLDER MANAGEMENT
===================================================== */

echo "<h2>PHP File & Folder Management Demo</h2>";

$dir = "testfolder";

// Create folder
if (!is_dir($dir)) {
    mkdir($dir);
    echo "Folder created: $dir <br>";
}

// Show current directory
echo "Current Directory: " . getcwd() . "<br>";

// Change directory
chdir($dir);
echo "Changed Directory: " . getcwd() . "<br><br>";

/* ---------- Create file with locking ---------- */

$file = "sample.txt";

$f = fopen($file, "w");

flock($f, LOCK_EX);
fwrite($f, "Hello Welcome to web technologies working with php!\n");
fwrite($f, "Learning PHP file handling.");
flock($f, LOCK_UN);

fclose($f);

echo "File created and written.<br><br>";

/* ---------- Display content ---------- */

echo "<b>File Content:</b><br>";
echo nl2br(file_get_contents($file));
echo "<br><br>";

/* ---------- File info ---------- */

echo "<b>File Information:</b><br>";

echo "Is File: " . (is_file($file) ? "Yes" : "No") . "<br>";
echo "File Size: " . filesize($file) . " bytes<br>";
echo "File Type: " . filetype($file) . "<br>";
echo "Last Access: " . date("Y-m-d H:i:s", fileatime($file)) . "<br>";
echo "Last Modified: " . date("Y-m-d H:i:s", filemtime($file)) . "<br>";
echo "Permissions: " . substr(sprintf('%o', fileperms($file)), -4) . "<br><br>";

/* ---------- Copy & rename ---------- */

copy($file, "copy.txt");
echo "File copied.<br>";

rename("copy.txt", "newname.txt");
echo "File renamed.<br><br>";

/* ---------- Directory listing ---------- */

echo "<b>Files using scandir():</b><br>";

$list = scandir(".");
foreach ($list as $x) {
    echo $x . "<br>";
}

echo "<br><b>Files using opendir():</b><br>";

$d = opendir(".");
while (($y = readdir($d)) !== false) {
    echo $y . "<br>";
}
closedir($d);

echo "<br>";

/* ---------- Delete renamed file ---------- */

unlink("newname.txt");
echo "Renamed file deleted.<br><br>";

/* ---------- Return to parent folder ---------- */

chdir("..");
echo "Returned Directory: " . getcwd() . "<br>";

/* ---------- Delete folder safely ---------- */

unlink($dir . "/sample.txt"); // remove inside file first
rmdir($dir);

echo "Folder deleted.<br>";

?>

</body>
</html>
