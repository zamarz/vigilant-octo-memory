<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url('/'); ?>"><strong>Zach</strong> Marzouk</a>
            </h1>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">
                <ul>
                  <li><a href="<?php echo site_url('/projects'); ?>">Projects</a></li>
                  <li><a href="<?php echo site_url('/tech-stack'); ?>">Tech Stack</a></li>
                </ul>
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Learn</h3>
              <nav class="nav-list">
                <ul>
                <li><a href="<?php echo site_url('/about-me'); ?>">About Me</a></li>
                  <li><a href="<?php echo site_url('/contact-me'); ?>">Contact Me</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Me</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="https://github.com/zamarz" target="_blank" class="social-color-github"><i class="fa fa-github" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://uk.linkedin.com/in/zachmarzouk" target="_blank" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>



<?php wp_footer(); ?>

</body>
</html>