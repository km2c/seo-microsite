    <div class="jumbotron">
      <div class="container">
        <h1><?= $data->content->h1 ?></h1>
        <?php foreach ($data->content->p as $key => $value) {
            echo "<p>$value</p>";
        } ?>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-8">
            <h2>Find Us</h2>
            <iframe id="ctl24_frmGoogle" class="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="googlemapiframe" src="http://maps.google.com/maps?cid=12639585288970605549&amp;q=<?= $data->ICBM ?>&amp;iwloc=A&amp;output=embed">
        </iframe>

        </div>
        <!-- <div class="col-lg-4">
       </div> -->
        <div class="col-lg-4">
          <h2>Contact Us</h2>
            <address>
              <strong><?= $data->name ?></strong><br>
              <?= $data->location->address ?><br>
              <?php if ($data->location->address2 !== "") { echo $data->location->address2 . "<br>"; } ?>
              <?= $data->location->city ?>, <?= $data->location->state ?> <?= $data->location->zip ?><br>
              <abbr title="Phone">P:</abbr> <?= $data->contact->phone ?>
            </address>
          <h2>Hours</h2>
            <ul class="list-unstyled">
                <?php foreach ($data->hours as $key => $value) {
                    echo "<li>" . ucfirst($key) . ": $value</li>";
                }?>
            </ul>
        </div>
      </div>