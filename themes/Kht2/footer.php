            </div>
        </div>

        <!--<aside class="aside">
            <div class="container">
                <ul class="inline-block-list">
                    <li><a href="https://github.com/h5bp/html5-boilerplate/blob/master/doc/contribute.md#reporting-issues"
                           data-ga-category="Outbound links"
                           data-ga-action="Footer click"
                           data-ga-label="Report issues">
                        <img class="icon" src="http://www.google.com/s2/favicons?domain=github.com" alt="">
                        Report issues
                    </a></li>
                    <li><a href="http://stackoverflow.com/questions/tagged/html5boilerplate"
                           data-ga-category="Outbound links"
                           data-ga-action="Footer click"
                           data-ga-label="Help on Stack Overflow">
                        <img class="icon" src="http://www.google.com/s2/favicons?domain=stackoverflow.com" alt="">
                        Help on Stack Overflow
                    </a></li>
                    <li><a href="http://html5boilerplate.tumblr.com/"
                           data-ga-category="Outbound links"
                           data-ga-action="Footer click"
                           data-ga-label="View the showcase">
                        <img class="icon" src="http://24.media.tumblr.com/avatar_c11b98176b89_16.png" alt="">
                        View the showcase
                    </a></li>
                </ul>
            </div>
        </aside><!-- end aside -->

        <footer class="site-footer" role="contentinfo">
            <div class="container">
                <p>
                    <a class="twitter-share-button"
                       href="https://twitter.com/share"
                       data-count="none"
                       data-lang="en"
                       data-via="Khertan"
                       data-size="large"
                       data-text="<?php echo $Kht_Title; ?>"
                       data-url="http://khertan.net<?php echo $Kht_CurrentPath; ?>">Tweet</a>
                   &nbsp;
                   <a class="twitter-follow-button"
                      href="https://twitter.com/khertan"
                      data-show-count="false"
                      data-lang="en"
                      data-size="large">Follow @h5bp</a>
                </p>

                <a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/80x15.png" width=80 height=15 /></a> - Benoît HERVIER (Khertan) - Powered by <a href="http://khertan.net/KhtCMS">KhtCMS</a>  - Theme mostly copied from <a href="http://http://html5boilerplate.com/">Html5BoilerPlate</a>
            </div>
        </footer><!-- end site-footer -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script src="js/main.js"></script>

        <script>
            // Twitter widgets
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='http://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');

            // Google Analytics
            var _gaq=[['_setAccount','<?php echo $config['GoogleAnalyticsIdent']; ?>'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>