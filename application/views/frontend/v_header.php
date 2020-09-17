<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $pengaturan->nama ?> - <?php echo $pengaturan->deskripsi ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="<?php echo $meta_keyword ?>" name="keywords">
  <meta content="<?php echo $meta_description ?>" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url().'/gambar/website/'.$pengaturan->logo; ?>" rel="icon">
  <link href="<?php echo base_url(); ?>assets_frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>assets_frontend/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>assets_frontend/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(); ?>assets_frontend/css/style.css" rel="stylesheet">


  <style type="text/css">
   .stroke {
      font-size: 70px;
      color: #C0C0C0;
      font-weight: bolder;
      -webkit-text-stroke: 0.02em #000;
   }

.nav{
  border-bottom : 3px solid transparent ;
}
.nav-link{

  margin-bottom: 15px;
}
.dropdown-content {
  display: none;
  font-weight: bolder;     
  position: absolute;
  background-color: #489ee0;
  min-width: 250px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  opacity: 0.92;
}

.dropdown-content a {
  color: white;
  font-weight: : bolder;
  padding: 0px 0px;
  margin-top: 10px;
  text-decoration: none;
  display: block;
  text-align: left;
  margin-left: 10px;
  margin-bottom: 5px;
}

.dropdown-content a:hover {background-color: #0000ffff;}

.dropdown:hover .dropdown-content {
  display: inline;
}

</style>
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">

      <img src="<?php echo base_url().'/gambar/website/'.$pengaturan->logo; ?>" width="30px" class="mr-2">

      <a class="navbar-brand js-scroll" href="#page-top" > <?php echo $pengaturan->nama ?> </a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo base_url(); ?>">Home</a>
          </li>
          
          <li class="nav-item dropdown">
            <a  class="nav-link js-scroll" href="<?php echo base_url('page/Profil'); ?>" >Profil</a>
           <div class="dropdown-content">
           <a href="#">Sejarah Sekolah</a> 
           <a href="#">Visi Dan Misi</a> 
           <a href="#">Profil Kepala Sekolah</a> 
           <a href="#">Tenaga Pendidik</a> 
          
          </div>
          </li>
          <li class="nav-item dropdown">
            <a  class="nav-link js-scroll"  href="<?php echo base_url('Pendaftaran'); ?>"  >PPDB</a>
           <div class="dropdown-content">
           <a href="#">Tata Cara Daftar</a> 
           <a href="#">Persyaratan Daftar</a> 
           <a href="#">Daftar Online</a> 
           
          </div>
          </li>
          <li class="nav-item dropdown">
            <a  class="nav-link js-scroll" href="<?php echo base_url('page/Kompetensi'); ?>" >Kompetensi Keahlian</a>
           <div class="dropdown-content">
           <a href="#">Rekayasa Perangkat Lunak</a> 
           <a href="#">Akuntansi</a> 
           <a href="#">Perhotelan</a> 
          </div>
          </li>
          <li class="nav-item dropdown">
            <a  class="nav-link js-scroll" href="<?php echo base_url('page/Produk'); ?>" >Program Sekolah</a>
           <div class="dropdown-content">
           <a href="#">Teaching Factory</a> 
           <a href="#">Unit Produksi</a> 
           <a href="#">Hubungan Industri</a> 
           
          </div>
          <li class="nav-item dropdown">
            <a  class="nav-link js-scroll"  href="<?php echo base_url('blog'); ?>" >Berita</a>
           <div class="dropdown-content">
           <a href="#">Berita Terkini</a> 
           <a href="#">Galery</a> 
          </div>

          </li>
          

        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->