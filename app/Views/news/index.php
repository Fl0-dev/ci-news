<div class="flex flex-row justify-between py-4">
    <h2 class="text-xl"><?= esc($title) ?></h2>
    <a href="/news/new" class=" px-3 py-2 rounded-lg text-font bg-primary border border-primary hover:text-primary hover:bg-font ease-in-out duration-500">Create article</a>
</div>

<?php if (!empty($news) && is_array($news)) : ?>
    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4">
        <?php foreach ($news as $news_item) : ?>
            <article class="rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6">
                <a href="/news/<?= esc($news_item['slug'], 'url') ?>">
                    <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                        <?= esc($news_item['title']) ?>
                    </h3>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                        <?= esc($news_item['body']) ?>
                    </p>

                    <p class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-primary hover:text-blue-700">
                        Find out more

                        <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                            &rarr;
                        </span>
                    </p>
                </a>
            </article>
        <?php endforeach ?>
    </div>
<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>