<?php
class Home extends Controller{
    public function index() {
        // echo "ini method index dari c`lass Home";
        // echo "home/index"; 
        $this->view('home/index');
    }
}

?>