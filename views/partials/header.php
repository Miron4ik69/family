<header>

<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
  <a class="navbar-brand"><?php echo $_SESSION['name']; ?></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <?php if($_SESSION): ?>
        <a href="/logout" class="nav-link">Logout</a>
        <?php endif; ?>
      </li>
    </ul>
  </div>
</nav>

</header>