        <hr>

      <footer>
        <p>&copy; <?= $data->name ?> <?= date('Y') ?></p>
      </footer>
    </div> <!-- /container -->

        <script src="/assets/js/vendor/jquery.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','<?= $data->google_analytics ?>');ga('send','pageview');
        </script>
        <script src="/assets/js/vendor/plugins.js"></script>
        <script src="/assets/js/main.js"></script>
</body>
</html>