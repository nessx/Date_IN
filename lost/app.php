<?php
class App{

    public function __construct($input){
        var_dump($input);
        /*foreach($input as $valor){
            echo "<p>{{$valor}}</p>",PHP_EOL;
        }*/ 
        $archivo="./controlador/".$input[0].".php";
        if (file_exists($archivo)){
            require_once $archivo;
            $control = new $input[0];
        }
    }
}
