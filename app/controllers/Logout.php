<?php 
  class Logout extends Controller{
    public function index(){
        session_destroy();
        session_abort();
        header("Location:".BASEURL."/Home");
    }
  }