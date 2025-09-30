<?php
// echo "ini tampilan dari core App.php";
class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {

        $url = $this->parseURL();
        // var_dump($url);

        if (file_exists('../app/controller/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controller/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Params
        if(!empty($url)) {
            $this->params = array_values($url);
            // var_dump($url);
        }

        // jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);

        // Percobaan menampilkan gambar
        // echo "<h3>ini construct dari class App, dipanggil otomatis saat instansiasi class</h3>";
        // echo "<img src='../public/image/01.png' alt='mvc' height='500' border='0'></img>";
    }

    public function parseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
    
    // Belajar membuat method
    // public function aplikasi01() {
    //     echo "ini method apk01 dari class App";
    // }
}

?>