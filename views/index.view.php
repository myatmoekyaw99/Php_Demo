<?php require("partials/head.php")?>

<?php require("partials/nav.php")?>

<?php require("partials/banner.php")?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
    <p class="mt-3">Hello, <span class="text-blue-600"><?= $_SESSION['user']['email'] ?? "Guest"?></span> Welcome from the home page.</p>
    
    <h2 class="mt-5"><?= $title;?></h2>
    
    <?php if($owner === "admin"):?>
    <ul>
        <?php foreach ($products as $product):?>
            <li><?= $product['name'];?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif;?>
    <br>
	<h2>items</h2>
	<ul>
        <?php foreach ($filteritems as $item):?>
            <li><?= $item['name']." Release - ".$item['releaseYear'];?> </li>
        <?php endforeach; ?>
  </ul>
    </div>
  </main>

<?php require("partials/footer.php")?>