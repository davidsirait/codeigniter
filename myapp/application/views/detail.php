<?php $this->load->view('partials/header'); ?>


    <!-- Page Header -->
    <?php 
    if(empty($books['cover']))
        $cover  = base_url(). 'assets/img/post-bg.jpg';
    else
        $cover = base_url() . 'uploads/'. $books['cover']; ?>
    <header class="masthead" style="background-image: url('<?php echo $cover ; ?>')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                    <h1><?php echo $books['title']; ?> </h1>
                        <span class="post-meta"> Posted by
            <a href="#" style="color:white;font-weight:bolder">The Pretender</a>
            on <?php echo $books['date']; ?> </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                <?php echo $books['content']; ?>    
                </div>
            </div>
        </div>
    </article>
    <hr>

<?php $this->load->view('partials/footer'); ?>