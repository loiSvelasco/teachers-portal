<?php 

require_once('Database.php');

class App extends Database
{
    public $db;
    public $url;
    
    public function __construct()
    {
        $this->db = new Database();
        $this->url = $_ENV['BASE_URL'];
    }

    public function render(string $page, $vars = [])
    {
        $out = NULL;
        if(file_exists(VIEW . $page))
        {
            extract($vars);
            ob_start();
            include(VIEW . $page);
            $out = ob_get_clean();
        }
        else
        {
            header("HTTP/1.0 404 Not Found");
            echo "Document not found.";
            die();
        }
        echo $out;
    }

    public function redirect(string $to)
    {
        header("Location: $this->url$to");
    }

}