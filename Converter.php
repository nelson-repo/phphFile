<?php


    /**
     *
     */
    class Converter
    {

      private $nombre="";
      private $formato="";
      private $API = "7cf679eb-74fe-4385-9a55-e5e5ad4603e7";
      private $value = '<title>Test PDF conversion</title>Ejemplo 1 de generacion';
      private $file = "";


      public function __construct($nombre , $formato)
      {
          $this->nombre = $nombre;
          $this->formato = $formato;
      }

      /**
       *
       */
      private function download($nombre , $formato)
      {
        header('Content-Disposition: attachment; filename=' . $nombre . '.' . $formato );
      }


      /**
       *
       */
       public function convertirArchivo()
       {

         $result = file_get_contents("http://api.html2pdfrocket.com/pdf?apikey=" . urlencode($this->API) . "&value=" . urlencode($value));
         header('Content-Description: File Transfer');
         header('Content-Type: application/pdf');
         header('Expires: 0');
         header('Cache-Control: must-revalidate');
         header('Pragma: public');
         header('Content-Length: ' . strlen($result));
         $this->download($this->nombre , $this->formato);
       }



    }


?>
