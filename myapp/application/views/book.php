<?php $this->load->view('partials/header'); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url() ;?>assets/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Buku Terlaris Saat Ini !</h1>
            <span class="subheading">Selamat datang dan silahkan lihat-lihat</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <form >
            <input type="text" name="find">
            <button type="submit">CARI!</button>
        </form>
        <hr>
      <?php foreach ($books as $key => $book) : ?> 
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
            <a href="<?php echo site_url('book/detail/'.$book['url']); ?>">
             <?php echo $book['title']; ?>
            </a>
            </h2>
            <p class="post-subtitle">
              <?php echo $book['content']; ?>
            </p>
          </a>
          <a href="<?php echo site_url('book/edit/'.$book['id']); ?>" style="font-size: 15px;font-weight:bolder">Edit Buku</a>
          <br>
           <a href="<?php echo site_url('book/delete/'.$book['id']); ?>"  style="font-size: 15px;font-weight:bolder">Delete Buku</a> 
          <p class="post-meta">Posted by
            <a href="#">The Pretender</a>
            on <?php echo $book['date']; ?> </p>
        </div>
        <?php endforeach; ?>
        <hr>

      </div>
    </div>
  </div>

  <hr>

  <?php $this->load->view('partials/footer'); ?>
  