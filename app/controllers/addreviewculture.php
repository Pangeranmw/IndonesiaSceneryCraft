<?php 
  class addreviewculture extends Controller{
      public function index($id_culture){
        if(!empty($_POST['review']) && !empty($_POST['judul'])
            && !empty($_SESSION['id_user']) 
            && !empty($_POST['rating'])){
                $id_user = $_SESSION['id_user'];
                $review = $_POST['review'];
                $rating = $_POST['rating'];
                $judul = $_POST['judul'];
                $foto = $this->model('Upload_model')->upload($_FILES);
                if($this->model('Review_model')->tambahreviewculture($id_user, $id_culture,$review, $foto, $judul, $rating)>0){
                    $rating = $this->model('Review_model')->selectratingculture($id_culture);
                    settype($rating['rating'], "int");
                    $this->model('Review_model')->updateratingreviewculture($rating['rating'], $id_culture);
                    $sukses = array(
                        "success"	=> 1,
                    );
                    echo json_encode($sukses);
                }else{
                    echo
                    "<script>
                        alert('review gagal ditambahkan');
                        window.location='". BASEURL ."/culture/detail/". $id_culture ."';
                    </script>";
                }
        }
      }
  }
