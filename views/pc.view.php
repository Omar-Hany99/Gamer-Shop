
<?php require(__DIR__ . "/partials/header.php"); ?>
<?php require(__DIR__ . "/partials/nav.php"); ?>

<main>

    <div class="pb-16">
        <div class="bg-gray-100 dark:bg-gray-800 flex flex-col justify-center items-center pt-9 sm:pt-12 lg:pt-16 pb-24 sm:pb-52">
            <div class="2xl:container 2xl:mx-auto flex flex-col justify-center items-center sm:pb-12 lg:pb-0 space-y-4 px-4 md:px-6 2xl:px-0">
                <div>
                    <p class="text-3xl lg:text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">Shop All Pc Products</p>
                </div>
                <div>
                    <p class="text-base leading-normal sm:leading-none text-center text-gray-600 dark:text-white dark:text-white">Explore products that are bought most frequently by people</p>
                </div>
            </div>
        </div>
        <div class="-mt-16 sm:-mt-48 lg:-mt-32 xl:-mt-40 2xl:container 2xl:mx-auto flex justify-center items-center space-y-4 px-4 md:px-6 2xl:px-0 mb-16">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 justify-items-between gap-x-6 gap-y-5">
                <div class="flex flex-col justify-center items-start p-2 bg-white dark:bg-gray-900">
                    <div class="relative">
                        <a href="/test1/views/pc-menu/cpu.view.php">
                        <img class="hidden lg:block" src="https://gamer-shop.s3.eu-north-1.amazonaws.com/pc/pc+menu/cpu.jpg " alt="cpu" />
                        </a>
                        <div class="flex justify-between mt-4">
                            <div>
                                <p class="text-lg font-medium leading-none text-gray-800 dark:text-white">CPU</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-start p-2 bg-white dark:bg-gray-900">
                    <div class="relative">
                        <a href="/test1/views/pc-menu/graphics-cards.view.php">
                        <img class="lg:block hidden" src="https://gamer-shop.s3.eu-north-1.amazonaws.com/pc/pc+menu/graphics-card.jpg" alt="gpu" />
                        </a>
                        <div class="flex justify-between mt-4">
                            <div>
                                <p class="text-lg font-medium leading-none text-gray-800 dark:text-white">Graphics Cards</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-start p-2 bg-white dark:bg-gray-900">
                    <div class="relative">
                        <a href="/test1/views/pc-menu/monitors.view.php">
                        <img class="hidden lg:block" src="https://gamer-shop.s3.eu-north-1.amazonaws.com/pc/pc+menu/Monitors.jpg" alt="Monitors" />
                        </a>
                        <div class="flex justify-between mt-4">
                            <div>
                                <p class="text-lg font-medium leading-none text-gray-800 dark:text-white">Monitors</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-start p-2 bg-white dark:bg-gray-900">
                    <div class="relative">
                        <a href="/test1/views/pc-menu/mouse.view.php">
                        <img class="hidden lg:block" src="https://gamer-shop.s3.eu-north-1.amazonaws.com/pc/pc+menu/Mouse.jpg" alt="Mouse" />
                        </a>

                        <div class="flex justify-between mt-4">
                            <div>
                                <p class="text-lg font-medium leading-none text-gray-800 dark:text-white">Mouse</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-start p-2 bg-white dark:bg-gray-900">
                    <div class="relative">
                        <a href="/test1/views/pc-menu/keybored.view.php">
                        <img class="hidden lg:block" src="https://gamer-shop.s3.eu-north-1.amazonaws.com/pc/pc+menu/keyboard.jpg" alt="Keybored" />
                        </a>

                        <div class="flex justify-between mt-4">
                            <div>
                                <p class="text-lg font-medium leading-none text-gray-800 dark:text-white">Keybored</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-start p-2 bg-white dark:bg-gray-900">
                    <div class="relative">
                        <a href="/test1/views/pc-menu/headset.view.php">
                        <img class="hidden lg:block" src="https://gamer-shop.s3.eu-north-1.amazonaws.com/pc/pc+menu/headset.jpg" alt="headset" />
                        </a>

                        <div class="flex justify-between mt-4">
                            <div>
                                <p class="text-lg font-medium leading-none text-gray-800 dark:text-white">Headset</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-start p-2 bg-white dark:bg-gray-900">
                    <div class="relative">
                        <a href="/test1/views/pc-menu/case.view.php">
                        <img class="hidden lg:block" src="https://gamer-shop.s3.eu-north-1.amazonaws.com/pc/pc+menu/Case.jpg" alt="case" />
                        </a>
                        <div class="flex justify-between mt-4">
                            <div>
                                <p class="text-lg font-medium leading-none text-gray-800 dark:text-white">Case</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-start p-2 bg-white dark:bg-gray-900">
                    <div class="relative">
                        <a href="/test1/views/pc-menu/speakers.view.php">
                        <img class="lg:block hidden" src="https://gamer-shop.s3.eu-north-1.amazonaws.com/pc/pc+menu/speakers.jpg" alt="speakers" />
                        </a>
                        <div class="flex justify-between mt-4">
                            <div>
                                <p class="text-lg font-medium leading-none text-gray-800 dark:text-white">speakers</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php require(__DIR__ . "views/partials/footer.php"); ?>
