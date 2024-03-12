<p>Live</p>

<div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4">
    <?php foreach ($news as $article) : ?>
        <?php if ($article->urlToImage) : ?>
            <article class="overflow-hidden rounded-lg shadow-sm transition hover:shadow-lg">
                <a href="<?= esc($article->url) ?>">
                    <div class="h-40 overflow-hidden">
                        <img alt="" src="<?= esc($article->urlToImage) ?>" class="object-cover" />
                    </div>
                    <div class="bg-font p-4 sm:p-6">
                        <time datetime="2022-10-10" class="block text-xs text-gray-500"><?= esc($article->publishedAt) ?></time>
                        <h3 class="mt-0.5 text-lg text-primary"><?= esc($article->title) ?></h3>
                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                            <?= esc($article->description) ?>
                        </p>
                    </div>
                </a>
            </article>
        <?php endif; ?>
    <?php endforeach; ?>
</div>