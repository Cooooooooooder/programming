<?php

//    open files for reading and writing  -----   file system functions

// $handle = fopen("test.txt", "a+");

// echo fgets($handle , 4);
// echo "<br>";
// echo fread($handle , 99);

// fwrite($handle , "\r\nI love Elzero Web School");

// fclose($handle);
// ------------------------------
// echo "<pre>";
// print_r(file("test.txt"));
// echo "</pre>";

// echo count(file("test.txt"));
//-------------------------------

// $handle = fopen("test.txt" , "r");

// while(! feof($handle))
// {
// echo fgets($handle);
// echo "<br>";
// }
// fclose($handle);

// ------------------------------

// $handle = fopen("test.txt" , "r");

// echo ftell($handle) . "<br>";
// echo fgets($handle) . "<br>";
// echo ftell($handle) . "<br>";
// rewind($handle);
// echo fgets($handle) . "<br>";
// echo ftell($handle) . "<br>";

// echo "<br>";
// echo mb_strlen("Elzero\r\nWeb\r\n" , "8bit");
// echo "<br>";

// rewind($handle);

// fseek($handle, 9);
// echo fgets($handle) . "<br>";

// fseek($handle, 9, SEEK_END);
// echo fgets($handle) . "<br>";

// fseek($handle, 9 , );
// echo fgets($handle) . "<br>";


// fclose($handle);

// -------------------------

// ECHO "<pRE>";
// PRINT_R(GLOB("old/*.*"));

// ECHO "</pRE>";

// rename("old/test.txt" , "old/testing.txt");
// rename("old/testing.txt" , "new/testing_2.txt");
// rename("old/elzero.pptx" , "new/elzero.pptx");
// copy("old/info.docx" , "new/info.docx");
// copy("old/work.txt" , "new/working.txt");
// unlink("old/work.txt");

// -------------------------

// echo get_include_path() . "<br>";

// echo file_get_contents("test.txt" , true,null , 4,6);

// echo file_get_contents("https://elzero.org/");

// print_r(file("https://elzero.org/"));

// file_put_contents("elzero.txt" , "\r\nHello Elzero Web School <h3>" , FILE_APPEND);


ECHO file_put_contents("elzero.txt" , "\r\nHello Elzero Web School <h3>" , FILE_APPEND);






