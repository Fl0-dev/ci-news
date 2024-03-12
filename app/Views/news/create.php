<form action="/news" method="post" class="max-w-sm mx-auto">
    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>
    <?= csrf_field() ?>

    <div class="space-y-12">
        <div class="border-b border-primary pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">New article</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

            <div class="mt-10 flex flex-col gap-4">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                            <input type="text" name="title" id="title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Title of article" value="<?= set_value('title') ?>">
                        </div>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body of article</label>
                    <div class="mt-2">
                        <textarea id="body" name="body" rows="4" class="block p-2.5 w-full text-sm rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 " placeholder="Write body of article">
                    <?= set_value('body') ?>
                </textarea>
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" name="submit" value="Create news item" class="py-3 px-2 rounded-lg bg-primary text-font border border-primary hover:bg-font hover:text-primary">
                </div>
            </div>
        </div>
    </div>
</form>