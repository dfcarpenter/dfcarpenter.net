  <footer class="footer cf" role="contentinfo">

    <ul class="social">
       <li><a href="<?php echo $site->twitter() ?>"><img src="../assets/images/twitter.svg" alt=""></a></li>
       <li><a href="<?php echo $site->facebook() ?>"><img src="../assets/images/facebook.svg" alt=""></a></li>
       <li><a href="<?php echo $site->github() ?>"><img src="../assets/images/github.svg" alt=""></a></li>
    </ul>
  </footer>
  <div class="colophon"><?php echo $site->copyright()->kirbytext() ?></div>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57013011-1', 'auto');
  ga('send', 'pageview');

</script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js"></script>
<?php echo js('assets/js/build/main.js') ?>
</body>
</html>
