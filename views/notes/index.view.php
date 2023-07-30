<?php  require base_path("views/partials/head.php")?>

<?php  require base_path("views/partials/nav.php")?>

<?php  require base_path("views/partials/banner.php")?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
        <?php foreach($notes as $note):?>

          <li><a class="text-blue-500 underline" href="/note?id=<?= $note['id']?>">
            <?= htmlspecialchars($note['body']);?>
          </a></li>
          
        <?php endforeach;?>

        <p class="mt-6">
          <a href="/notes/create" class="text-blue-800 hover:underline">Create a Note</a>
        </p>
    </div>
  </main>

<?php  require base_path("views/partials/footer.php");