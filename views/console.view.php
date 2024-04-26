
<?php require("views/partials/header.php"); ?>
<?php require("views/partials/nav.php"); ?>

<main>
    <div class="pb-16">
        <div class="bg-gray-100 dark:bg-gray-800 flex flex-col justify-center items-center pt-9 sm:pt-12 lg:pt-36 pb-24 sm:pb-52">
            <div class="2xl:container 2xl:mx-auto flex flex-col justify-center items-center sm:pb-12 lg:pb-0 space-y-4 px-4 md:px-6 2xl:px-0">
                <div>
                    <p class="text-3xl lg:text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">Shop All Console Products</p>
                </div>
                <div>
                    <p class="text-base leading-normal sm:leading-none text-center text-gray-600 dark:text-white dark:text-white">Explore products that are bought most frequently by people</p>
                </div>
            </div>
        </div>
        <div class="-mt-16 sm:-mt-48 lg:-mt-32 xl:-mt-40 2xl:container 2xl:mx-auto flex justify-center items-center space-y-4 px-4 md:px-6 2xl:px-0 mb-16 ">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 justify-items-between gap-x-6 gap-y-5" style="margin-left: 210px;">
                <div class="flex flex-col justify-center items-start p-2 bg-white dark:bg-gray-900">
                    <div class="relative">
                        <a href="/test1/views/console-menu/console.view.php">
                            <img class="hidden lg:block" src="https://gamer-shop.s3.eu-north-1.amazonaws.com/consoles/consoles+menu/consoles.jpg" alt="console" />
                        </a>

                        <div class="flex justify-between mt-4">
                            <div>
                                <p class="text-lg font-medium leading-none text-gray-800 dark:text-white">Consoles</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-start p-2 bg-white dark:bg-gray-900">
                    <div class="relative">
                        <a href="/test1/views/console-menu/controllers.view.php">
                            <img class="lg:block hidden" src="https://gamer-shop.s3.eu-north-1.amazonaws.com/consoles/consoles/controllers/yellow.jpg" alt="controllers" />
                        </a>

                        <div class="flex justify-between mt-4">
                            <div>
                                <p class="text-lg font-medium leading-none text-gray-800 dark:text-white">controllers</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-start p-2 bg-white dark:bg-gray-900">
                    <div class="relative">
                        <a href="/test1/views/console-menu/games.view.php">
                            <img class="hidden lg:block" src="https://gamer-shop.s3.eu-north-1.amazonaws.com/consoles/consoles+menu/games.jpeg" alt="games" />
                        </a>

                        <div class="flex justify-between mt-4">
                            <div>
                                <p class="text-lg font-medium leading-none text-gray-800 dark:text-white">Games</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require("views/partials/footer.php"); ?>
