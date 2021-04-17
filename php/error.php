    <?php Theme::plugins('pageBegin'); ?>
    <!-- Container -->
    <div class="container pt-5 pb-4 ko">
      <div class="row">
        <div class="col-sm-8 mx-auto text-center pb-5">
          <img src=" <?php echo Theme::src('img/404error.png'); ?>" class="img-fluid" alt="Error 404 Not Found!" width="500">
          <p class="card-text">Sorry, the page you requested was <strong>not found</strong>.</p>
        </div>
      </div>
    </div>
    <?php Theme::plugins('pageEnd'); ?>