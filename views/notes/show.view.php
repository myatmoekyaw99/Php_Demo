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

      <div class="mt-6">
        <a href="/note/edit?id=<?= $note['id']?>" class="rounded-md bg-gray-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-gray-400 hover:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
      </div>

      <form method="post" class="mt-6">

        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id']?>">
        <button class="rounded-md bg-red-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-red-400 hover:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>

      </form>
      
    </div>
  </main>

<?php require base_path("views/partials/footer.php");