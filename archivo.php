<?php
// Set parameters
// $apikey = '7cf679eb-74fe-4385-9a55-e5e5ad4603e7';
// $value = '<title>Test PDF conversion</title>Pero mas bien loquita'; // can aso be a url, starting with http..
//
// // Convert the HTML string to a PDF using those parameters.  Note if you have a very long HTML string use POST rather than get.  See example #5
// $result = file_get_contents("http://api.html2pdfrocket.com/pdf?apikey=" . urlencode($apikey) . "&value=" . urlencode($value));
// echo $result;
// // Save to root folder in website
// file_put_contents('mypdf-1.pdf', $result);


  // Set parameters
  $nombre = $_POST['nombre'];
  $formato = $_POST['outputFormat'];
  $apikey = '7cf679eb-74fe-4385-9a55-e5e5ad4603e7';
  $value = '<title>Test PDF conversion</title>Pero mas bien loquita'; // can aso be a url, starting with http..

  // Convert the HTML string to a PDF using those parameters.  Note if you have a very long HTML string use POST rather than get.  See example #5
  $result = file_get_contents("http://api.html2pdfrocket.com/pdf?apikey=" . urlencode($apikey) . "&value=" . urlencode($value));

  // Output headers so that the file is downloaded rather than displayed
  // Remember that header() must be called before any actual output is sent
  header('Content-Description: File Transfer');
  header('Content-Type: application/pdf');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . strlen($result));

  // Make the file a downloadable attachment - comment this out to show it directly inside the
  // web browser.  Note that you can give the file any name you want, e.g. alias-name.pdf below:
  // Permite descargar un archivo de forma inmediata
  header('Content-Disposition: attachment; filename=' . $nombre .'.' . $formato );

  // Stream PDF to user
  echo $result;


//   $value = 'http://www.google.com'; // can aso be an HTML string
//
// // Convert the HTML string to a PDF using those parameters.  Note if you have a very long HTML string in $value use POST rather than get.  See example #5
// $result = file_get_contents("http://api.html2pdfrocket.com/pdf?apikey=" . urlencode($apikey) . "&value=" . urlencode($value) . "&OutputFormat=jpg");
//
// // Save to website folder - you can then stream to the user as a thumb or full size image
// file_put_contents('my_image.jpg', $result);






?>
