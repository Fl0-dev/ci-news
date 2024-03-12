<div class="max-w-sm mx-auto flex flex-col gap-8">
    <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?= esc($news['title']) ?></h5>
        <p class="font-normal text-gray-700 dark:text-gray-400"><?= esc($news['body']) ?></p>
    </div>
    <p class="text-center">
        <a href="/news" class="py-3 px-2 rounded-lg bg-primary text-font border border-primary hover:bg-font hover:text-primary">Back to list</a>
    </p>
</div>