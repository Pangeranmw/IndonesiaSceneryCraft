<?php 
  class Tambahreview extends Controller{
      public function index($id_destinasi){
          if(!empty($_POST['review']) && !empty($_POST['judul'])
            && !empty($_SESSION['id_user']) 
            && !empty($_POST['rating'])){
                $id_user = $_SESSION['id_user'];
                $review = $_POST['review'];
                $rating = $_POST['rating'];
                $judul = $_POST['judul'];
                $foto = $this->model('Upload_model')->upload($_FILES);
                if($this->model('review_model')->tambahreviewdestinasi($id_user, $id_destinasi,$review, $foto, $judul, $rating)>0){
                    $rating = $this->model('review_model')->selectratingdestinasi($id_destinasi);
                    settype($rating['rating'], "int");
                    $this->model('review_model')->updateratingreview($rating['rating'], $id_destinasi);
                    $sukses = array(
                        "success"	=> 1,
                    );
                    echo json_encode($sukses);
                }else{
                    echo
                    "<script>
                        alert('review gagal ditambahkan');
                        window.location='". BASEURL ."/destination/detail/". $id_destinasi ."';
                    </script>";
                }
        }
      }
  }
