<?php $this->load->view('partials/header.php');  ?>

<!-- HEADER -->
<header class="masthead" style="background-image: url('<?php echo base_url();?>assets/img/contact-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1>Edit Buku</h1>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row justify-content-center">
    <div class="com-md-8">
        <h1>Edit Buku Tersimpan</h1>
            <form method="POST">
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $books['title'];?>">
                </div>
                <div class="form-group">
                    <label>Alamat URL</label>
                    <input type="text" name="url"  class="form-control" value="<?php echo $books['url'];?>">
                </div>
                <div class="form-group">
                    <label>Konten/Isi Buku</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control">
                        <?php echo $books['content'];?>
                    </textarea>
                </div>
                <button type="submit"  class="btn btn-primary">Edit Artikel</button>
            </form>
    </div>
  </div>
</div>

<?php $this->load->view('partials/footer.php'); ?>