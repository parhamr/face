<?php

// PHP tests
if ( PHP_MAJOR_VERSION < 5 ) {
  throw new Exception('Error: PHP 5.2 is required.');
} else if ( PHP_MINOR_VERSION < 2 ) {
  throw new Exception('Error: PHP 5.2 is required.');
}

// MySQLi test
if ( ! class_exists ( 'mysqli' ) ) {
  throw new Exception('Error: MySQLi is required.');
}

// GD test
if ( ! function_exists ( 'imagecreatefromjpeg' ) ) {
  throw new Exception('Error: GD is required. Please install it. http://php.net/manual/en/book.image.php');
}

// OpenCV test
if ( ! function_exists ( 'face_count' ) || ! function_exists ( 'face_detect' ) ) {
  throw new Exception('Error: PHP-Facedetect is required. Please install it. https://github.com/infusion/PHP-Facedetect');
}

?>