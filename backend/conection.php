<?php
class conection{

    function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->data_base = 'blog_monroy';
    }

    // function __construct(){
    //     $this->host = 'localhost';
    //     $this->user = 'u319816431_admin';
    //     $this->pass = 'admin';
    //     $this->data_base = 'u319816431_blog';
    // }
    
    public function query($query){
            $conection = mysqli_connect($this->host,$this->user,$this->pass,$this->data_base);
            $conection -> set_charset("utf8");
            $query_result = mysqli_query($conection, $query);
            $number = mysqli_affected_rows($conection);
            $result = array('result'=>$query_result,'numero'=>$number);
            return $result;
    }

    public function close_conection($conection){
        mysqli_close($conection);
    }
}
?>
