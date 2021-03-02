<?php $this->load->view('partials/header.php');  ?>

<!-- HEADER -->
<header class="masthead" style="background-image: url('<?php echo base_url();?>assets/img/about-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Tambah Buku</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

<div class = "container">
    <div class = "row justify-content-center" >
        <div class = "col-md-8">

        <h2>Tambah Buku</h2>
        <?php echo form_open_multipart(); ?>
            <div class="form-group">
                <label >Judul Buku</label>
                <?php echo form_input('title',null, 'class="form-control"');?>
              </br></br>
            </div>

            <div class="form-group">   
                <label >Alamat URL</label>
                <?php echo form_input('url',null, 'class="form-control"');?>
                <br><br>
            </div>

            <div class="form-group">
                <label >Konten/Isi Buku</label>
                <?php echo form_textarea('content',null,'class="form-control"'); ?>
                <br><br>
            </div>

            <div class="form-group">
                <label >Cover</label>
                <?php echo form_upload('cover',null,'class="form-control"'); ?>
                <br><br>
            </div>


            <button type="submit" class="btn btn-primary">Simpan artikel</button>
        <?php echo form_close(); ?>

        </div>
    </div>
</div>

<?php $this->load->view('partials/footer.php'); ?>