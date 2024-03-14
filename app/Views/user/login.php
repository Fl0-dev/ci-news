<div>

    <form action="/login" method="post" class="max-w-sm mx-auto">
        <?= session()->getFlashdata('error') ?>
        <?= validation_list_errors() ?>
        <?= csrf_field() ?>

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
            <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring- focus:border-primary block w-full p-2.5" placeholder="name@address.com" value="<?= set_value('email') ?>" required />
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
            <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5" value="<?= set_value('password') ?>" required />
        </div>
        <div class="flex flex-row justify-around">
            <input type="submit" name="submit" value="Login" class="py-3 px-2 rounded-lg bg-primary text-font border border-primary hover:bg-font hover:text-primary ease-in-out duration-500">
            <a href="/register" class="py-3 px-2 rounded-lg bg-font text-primary border border-primary hover:bg-primary hover:text-font ease-in-out duration-500">Sign up</a>
        </div>
    </form>
</div>