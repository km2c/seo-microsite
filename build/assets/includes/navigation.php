<div class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                        <li <?php if($page == 'index') echo 'class="active"' ?>><a href="<?= $data->navigation->home?>">Home</a></li>
                        <li <?php if($page == 'photos') echo 'class="active"' ?>><a href="<?= $data->navigation->photos ?>">Photos</a></li>
                        <li <?php if($page == 'videos') echo 'class="active"' ?>><a href="<?= $data->navigation->videos ?>">Videos</a></li>
                        <li <?php if($page == 'reviews') echo 'class="active"' ?>><a href="<?= $data->navigation->reviews ?>">Reviews</a></li>
                </div><!--/.navbar-collapse -->
              </div>
            </div>
