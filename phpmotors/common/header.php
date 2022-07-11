<div class="header-container">
  <div class="header__left">
    <img src="/phpmotors/images/site/logo.png" alt="PHP Motors logo" id="logo">
  </div>
  <div class="header__right">
    <?php if (isset($_SESSION['loggedin'])) {
      echo "<p><a href='/phpmotors/accounts/'>Welcome ".$_SESSION['clientData']['clientFirstname']."</a> | <a href='/phpmotors/accounts?action=logout'>Logout</a></p>";
    } else{
      echo '<a href="/phpmotors/accounts?action=login-page" title="Login or Register with PHP Motors" id="acc">My Account</a>';
    } ?>
    <a href="/phpmotors/search/" >&#x1f50d;</a>
  </div>
</div>