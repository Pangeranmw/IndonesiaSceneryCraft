<?php
  Class Language_model{
    public function changeLanguage(){
      if(!isset($_SESSION['lang']))
      {
        //If Language is not set in session then set default language as English
        $_SESSION['lang'] = 'en';
      }
      else if (isset($_POST['lang']) && $_SESSION['lang'] != $_POST['lang'] && !empty($_POST['lang'])){
        if($_POST['lang'] == 'en'){
          $_SESSION['lang'] = 'en';
        }
        else if ($_POST['lang'] == 'id') {
          $_SESSION['lang'] = 'id';
        }
      }
    }
  }
