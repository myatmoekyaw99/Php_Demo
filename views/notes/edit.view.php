<?php require base_path("views/partials/head.php")?>

<?php require base_path("views/partials/nav.php")?>

<?php require base_path("views/partials/banner.php")?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">  
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form method="POST" action="/note">
                    <div class="shadow sm:overflow-hidden sm-rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div>
                                <input type="hidden" name="_method" value="PATCH">

                                <input type="hidden" name="id" value="<?= $note['id'];?>">

                                <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                <div class="mt-2">

                                    <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Here's an idea for notes.."><?= $note['body']?>
                                    </textarea>

                                </div>

                                <?php if(isset($errors['body'])):?>
                                    <p class="text-red-500 text-xs mt-4">
                                    <?= $errors['body'];?>
                                    </p>
                                <?php endif;?>

                            </div>
                            <div class="mt-3 mb-3 flex items-center justify-center gap-x-6">

                                <a href="/notes" class="rounded-md bg-gray-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-gray-400 hover:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</a>
                                <button type="submit" class="rounded-md bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                            </div>
                        </div>    
                    </div>
                </form>
            </div>
        </div>     
    </div>
</main>
  
<?php require base_path("views/partials/footer.php");