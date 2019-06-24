<nav class="navbar navbar-inverse" style="border-radius: unset;">
  <div class="container">
    <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

      <a class="navbar-brand" href="<?php  echo URLROOT; ?>"><?php echo SITENAME; ?></a>
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li ><a href="<?php  echo URLROOT; ?>">Home</a></li>
      <li ><a href="<?php  echo URLROOT; ?>/pages/about">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php  echo URLROOT; ?>/users/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href="<?php  echo URLROOT; ?>/users/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
  </div>
</nav>

