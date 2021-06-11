<?php 
  class addreviewcraft extends Controller{
      public function index($id_craft){
        if(!empty($_POST['review']) && !empty($_POST['judul'])
            && !empty($_SESSION['id_user']) 
            && !empty($_POST['rating'])){
                $id_user = $_SESSION['id_user'];
                $review = $_POST['review'];
                $rating = $_POST['rating'];
                $judul = $_POST['judul'];
                $foto = $this->model('Upload_model')->upload($_FILES);
                if($this->model('Review_model')->tambahreviewcraft($id_user, $id_craft,$review, $foto, $judul, $rating)>0){
                    $rating = $this->model('Review_model')->selectratingcraft($id_craft);
                    settype($rating['rating'], "int");
                    $this->model('Review_model')->updateratingreviewcraft($rating['rating'], $id_craft);
                    $sukses = array(
                        "success"	=> 1,
                    );
                    echo json_encode($sukses);
                }else{
                    echo
                    "<script>
                        alert('review gagal ditambahkan');
                        window.location='". BASEURL ."/craft/detail/". $id_craft ."';
                    </script>";
                }
        }
      }
  }
