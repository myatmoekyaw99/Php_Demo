<?php require("partials/head.php")?>

<?php require("partials/nav.php")?>

<?php require("partials/banner.php")?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
    <h2><?= $title;?></h2>
    <?php if($owner === "admin"):?>
    <ul>
        <?php foreach ($products as $product):?>
            <li><?= $product['name'];?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif;?>

	<h2>items</h2>
	<ul>
        <?php foreach ($filteritems as $item):?>
            <li><?= $item['name']." Release - ".$item['releaseYear'];?> </li>
        <?php endforeach; ?>
  </ul>
    </div>
  </main>

<?php require("partials/footer.php")?>