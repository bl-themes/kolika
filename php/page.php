    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin'); ?>
    <!-- Start title -->
    <!-- Container -->
    <div class="container pt-5 pb-4 ko">
      <div class="row">
        <div class="col-sm-8 mx-auto text-center">
          <h1 class="fw-bolder"><?php echo $page->title(); ?></h1>
          <p class="lead"><?php echo (empty($page->description())?'Complete the description of the article for a correct work of the theme':$page->description()) ?></p>
          <p class="card-text"><small class="text-muted"><i class="far fa-folder text-warning"></i>&nbsp;<?php echo $page->category() ?> &nbsp;<i class="far fa-clock text-warning"></i>&nbsp;<?php echo $page->date(); ?></small></p>
        </div>
      </div>
    </div>
    <!--/ Start title -->
    <div class="container pb-4">
      <div class="row">
        <!-- Post Detail -->
        <div class="col-sm-8 pb-4 d-grid p-4">
          <div class="col">
            <figure class="figure">
              <?php if ($page->coverImage()): ?>
                <img src="<?php echo $page->coverImage(); ?>" class="figure-img img-fluid rounded" alt="<?php echo $page->title(); ?>" width="100%">
              <?php endif ?>
              <figcaption class="figure-caption"><?php echo $page->custom('figure'); ?></figcaption>
            </figure>
          </div>
          <div class="col inner" style="padding-top:1px;">
            <?php echo $page->content(); ?>
          </div>
          <!-- tag -->
          <?php if (!empty($page->tags(true))): ?>
            <div class="col pt-3 pb-3">
              <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
                <a href="<?php echo DOMAIN_TAGS.$tagKey ?>"><span class="badge rounded-pill bg-dark"><?php echo $tagName; ?></span></a>
              <?php endforeach ?>
            </div>
          <?php endif; ?>
          <!--/ tag -->
          <div class="col pb-3">
            <?php Theme::plugins('pageEnd'); ?>
            </div>
        </div>
        <!--/ Post Detail -->
      <!-- Load Bludit Plugins: Page End -->

        <!-- Sidebar -->
        <div class="col-sm-4 p-4">
          <h3 class="pb-2" style="padding-top:1px;">Latest Post</h3>
          <?php
            $listOfKeys = $pages->getList(1, 8);
            if ($listOfKeys) :
            foreach ($listOfKeys as $key) :
            $lPage = new Page($key);
          ?>
          <div class="d-flex bd-highlight mb-3 bg-light rounded-3">
            <div class="p-2 bd-highlight"><img src="<?php echo ($page->coverImage()?$lPage->coverImage():Theme::src('img/noimage.png')) ?>" alt="mdo" width="70" height="70" class="rounded-3" style="object-fit: cover;"></div>
            <div class="p-2 bd-highlight align-self-center"><a class="text-dark" href="<?php echo $lPage->permalink() ?>"><?php echo $lPage->title() ?></a></div>
          </div>
          <?php endforeach ?>
          <?php endif ?>
        </div>
        <!--/ Sidebar -->
      </div>
    </div>
    <!--/ Container -->
