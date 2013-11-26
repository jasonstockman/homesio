        <?php 
        $page = $_SERVER['PHP_SELF'];
        $page = str_replace('.php', '', $page);
        $page = str_replace('/', '', $page);
        ?>        

        <div class="navbar navbar-static-top" id="nav-main">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button> 
              <a class="navbar-brand" id="logo" href="/">homes<span>.io</span></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav" id="nav">
                <li<?php if($page=='buyers'){echo' class="active"';}?>><a href="buyers">Buyers</a></li>
                <li<?php if($page=='sellers'){echo' class="active"';}?>><a href="sellers">Sellers</a></li>
                <li<?php if($page=='listings'){echo' class="active"';}?>><a href="listings">Browse Listings</a></li>
                <li<?php if($page=='about'){echo' class="active"';}?>><a href="about">About</a></li> 
                <li<?php if($page=='faq'){echo' class="active"';}?>><a href="faq">FAQ</a></li>
                <li<?php if($page=='contact'){echo' class="active"';}?>><a href="contact">Contact</a></li>
                <li<?php if($page=='forum'){echo' class="active"';}?>><a href="forum">Forum</a></li>
              </ul>
              <a href="login" class="btn btn-primary pull-right">Sign In</a>         
            </div>
          </div>
        </div>
