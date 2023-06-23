<section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
    <header>
        <a href="#">
            <img class="w-auto h-7 sm:h-8" src="https://jasawebsite.biz/wp-content/uploads/2021/08/New-Project.png"
                alt="">
        </a>
    </header>

    <main class="mt-8">
        <h2 class="text-gray-700 dark:text-gray-200">Hi Jbiz, Saya {{ $data['name'] }} </h2>

        <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
            {{ $data['message'] }}
        </p>

        <h2 class="text-gray-700 dark:text-gray-200">Balas pesan saya ke {{ $data['email'] }} </h2>
    </main>

</section>
