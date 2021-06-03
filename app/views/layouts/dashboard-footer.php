
<!--   Core JS Files   -->
  <script src="<?= BASEURL;?>/assets/js/bootstrap.min.js"></script>
  <script src="<?= BASEURL;?>/assets/js/popper.min.js" type="text/javascript"></script>
  <script src="<?= BASEURL;?>/assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
  <!-- <script src="<?= BASEURL;?>/assets/js/moment.min.js"></script> -->

  <!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <!-- <script src="<?= BASEURL;?>/assets/js/nouislider.min.js"></script> -->

  <!--  Plugin for the Carousel, full documentation here: http://jedrzejchalubek.com/  -->
  <!-- <script src="<?= BASEURL;?>/assets/js/glidejs.min.js"></script> -->

  <!--	Plugin for Select, full documentation here: https://joshuajohnson.co.uk/Choices/ -->
  <!-- <script src="<?= BASEURL;?>/assets/js/choices.min.js" type="text/javascript"></script> -->
  <script src="<?= BASEURL;?>/assets/js/smooth-scrollbar.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!--  Google Maps Plugin    -->
  <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <script>
      tinymce.init({
          selector: 'textarea',
          plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
          height : "300"
      });
  </script>
  <!-- Control Center for Soft UI Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= BASEURL;?>/assets/js/soft-dashboard.min.js" type="text/javascript"></script>
  <script src="<?= BASEURL;?>/assets/js/dashboard-script.js" type="text/javascript"></script>
  </body>
</html>
