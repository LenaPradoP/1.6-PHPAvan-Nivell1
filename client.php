<?php 
declare(strict_types = 1);

class Client {
   
    private $name;
    private $password;

    public function __construct(string $name, string $password,) {
        $this->name = $name;
        $this->password = $password;
    }

    public function __toString() : string {
        
        return __METHOD__ .PHP_EOL . "Name: $this->name" .PHP_EOL . "Password: $this->password".PHP_EOL;
    }















}

?>