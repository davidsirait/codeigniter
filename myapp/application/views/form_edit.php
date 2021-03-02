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
            <?php echo form_open_multipart(); ?>
                <div class="form-group">
                    <label>Judul Buku</label>
                    <?php echo form_input('title',$books['title'], 'class="form-control"');?>
                </div>
                <div class="form-group">
                    <label>Alamat URL</label>
                    <?php echo form_input('url',$books['url'], 'class="form-control"');?>
                </div>
                <div class="form-group">
                    <label>Konten/Isi Buku</label>
                    </textarea>
                    <?php echo form_textarea('content', $books['content'], ' cols="30" rows="10" class="form-control"'); ?>
                </div>
                <div class="form-group">
                  <label >Cover</label>
                  <?php echo form_upload('cover',$books['cover'],'class="form-control"'); ?>
                </div>
                <button type="submit"  class="btn btn-primary">Edit Artikel</button>
            <?php echo form_close(); ?>
    </div>
  </div>
</div>

<?php $this->load->view('partials/footer.php'); ?>