<?php if ($WHERE_AM_I == 'home'): ?>
    <!-- welcome text -->
    <div class="container pt-5 pb-4 ko">
      <div class="row">
        <div class="col-sm-8 mx-auto text-center">
          <h1 class="fw-bolder pt-2"><?php echo $site->title(); ?></h1>
          <p class="lead"><?php echo $site->description(); ?></p>
        </div>
      </div>
    </div>
    <!--/ welcome text -->
    <?php
      $featured = array_slice($content, 0, 1);
      $content = array_slice($content, 1);
      foreach ($featured as $page):
    ?>
    <!-- feature post -->
    <div class="container pb-5">
        <div class="card mb-3 bg-light border-0">
          <div class="row g-0">
            <div class="col-md-6">
              <img class="img-fluid" src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" alt="<?php echo $page->title(); ?>">
            </div>
            <div class="col-md-6 align-self-center">
              <div class="card-body">
                <p class="card-text"><small class="text-muted"><i class="far fa-folder text-warning"></i>&nbsp;<?php echo $page->category() ?> &nbsp;<i class="far fa-clock text-warning"></i>&nbsp;<?php echo $page->date(); ?></small></p>
                <h2 class="card-title pb-2"><?php echo $page->title(); ?></h2>
                <p><img src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" alt="mdo" width="30" height="30" class="rounded-circle" alt="<?php echo $page->user('nickname'); ?>"> <span class="text-dark"><small><?php echo $page->user('nickname'); ?></small></span></p>
                <p class="card-text pb-2"><?php echo (empty($page->description())?'Complete the description of the article for a correct work of the theme':$page->description()) ?></p>
                <p>
                  <a class="btn rounded-pill" href="<?php echo $page->permalink(); ?>" role="button">Read More</a>
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!--/ feature post -->
    <?php endforeach ?>
  <?php endif; ?>
    <!-- all post -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12 pt-4 pb-4">
          <h3 class="pb-4"><?php ($WHERE_AM_I=='search'?$language->p('Search'):$language->p('All Article')) ?></h3>
          <!-- start blog post -->
          <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php if (empty($content)) { $language->p('No pages found'); } ?>
          <?php foreach ($content as $page): ?>
            <div class="col">
              <div class="card h-100">
                <img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <a class="text-dark" href="<?php echo $page->permalink(); ?>"><h5 class="card-title"><?php echo $page->title(); ?></h5></a>
                  <p class="pt-3"><img src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" alt="<?php echo $page->title(); ?>" width="30" height="30" class="rounded-circle" alt="<?php echo $page->user('nickname'); ?>"> <span class="text-dark"><small><?php echo $page->user('nickname'); ?></small></span>
                  <p class="card-text"><?php echo (empty($page->description())?$language->p('Complete the description of the article'):$page->description()) ?></p>
                </div>
                <div class="card-footer bg-white">
                  <p class="card-text"><small class="text-muted"><i class="far fa-folder text-warning"></i>&nbsp;<?php echo $page->category() ?> &nbsp;<i class="far fa-clock text-warning"></i>&nbsp;<?php echo $page->date(); ?></small></p>
                </div>
              </div>
            </div>
          <?php endforeach ?>
          </div>
          <!--/ start blog post -->
        </div>
      </div>
    </div>
    <!-- all post -->
    <!-- nav -->
    <?php if (Paginator::numberOfPages()>1): ?>
    <div class="container pt-2 pb-5">
      <div class="row">
        <div class="col">
          <?php if (Paginator::showPrev()): ?>
          <a href="<?php echo Paginator::previousPageUrl() ?>" class="btn rounded-pill btn-sm">&larr; Previous</a>
          <?php endif ?>
          <?php if (Paginator::showNext()): ?>
          <a href="<?php echo Paginator::nextPageUrl() ?>" class="btn rounded-pill btn-sm">Next &rarr;</a>
          <?php endif ?>
        </div>
      </div>
    </div>
    <?php endif ?>
    <!--/ nav -->
