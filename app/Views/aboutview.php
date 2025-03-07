<?= $this->extend("layouts/base") ?>

<?= $this->section("title") ?>
<?= $page_title ?>
<?= $this->endSection("title") ?>

<?= $this->section("content") ?>
<div class="container">
  <h3><?= $page_heading ?></h3>
  <h1>ABOUT PAGE</h1>
  <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
  <p>Tip: You can also remove the .navbar-expand-md class to ALWAYS hide navbar links and display the toggler button.</p>
</div>
<?= $this->endSection() ?>