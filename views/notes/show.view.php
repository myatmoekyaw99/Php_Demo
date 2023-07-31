<?php require base_path("views/partials/head.php")?>

<?php require base_path("views/partials/nav.php")?>

<?php require base_path("views/partials/banner.php")?>

  <main>
    
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      <a href="/notes" class="text-blue-600">Go Back...</a>
         <p>
            <?= htmlspecialchars($note['body']);?>
         </p>

      <form method="post">

        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id']?>">
        <button class="text-red-500 text-sm mt-6">Delete</button>

      </form>
      
    </div>
  </main>

<?php require base_path("views/partials/footer.php");