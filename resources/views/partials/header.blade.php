<header class="circle-gr relative before:bg-linear-(--white3-gr) before:p-[3px] before:-z-10 after:-z-10 before:mix-blend-overlay lg:before:opacity-0 pb-4 lg:pb-0 rounded-b-3xl before:rounded-b-3xl">
    <span class="absolute inset-0 bg-linear-(--white2-gr) mix-blend-overlay lg:hidden rounded-b-3xl"></span>
    <div class="container mx-auto relative">
        <div class="absolute -left-20 -z-10">
            <img src="{{ asset('images/bg-hero-small-circle.webp') }}" alt="Маленький кружок">
        </div>
        <div class="relative px-2 lg:px-0 flex flex-col lg:flex-row items-center justify-between lg:py-8 xl:py-11 text-white font-secondary">

            <div class="w-full md:w-auto py-6 lg:py-0">
                <img src="{{ asset('images/logo-header.svg') }}" alt="Логотип Оптика будущего" class="w-full max-w-92 mx-auto">
            </div>
            <div class="order-3 lg:order-0 overflow-hidden max-h-0 lg:max-h-full w-full lg:w-auto transition-[max-height] duration-500 ease-in-out" id="mobile-menu">
                <nav class="circle-gr relative after:-z-10 before:-z-10 before:bg-linear-(--white3-gr) before:p-1 before:rounded-3xl before:mix-blend-overlay lg:before:opacity-0 py-3.5 px-10 lg:p-0 rounded-3xl mt-4 lg:mt-0 w-full lg:w-auto lg:relative">
                    <span class="absolute inset-0 bg-linear-(--white2-gr) mix-blend-overlay rounded-3xl -z-20 lg:hidden"></span>
                    <ul class="flex flex-col lg:flex-row lg:gap-6 xl:gap-12">
                        <li><a href="#" class="py-1.5 lg:py-4 block lg:inline-block hover:text-pink transition-colors duration-300">Программа</a></li>
                        <li><a href="#" class="py-1.5 lg:py-4 block lg:inline-block hover:text-pink transition-colors duration-300">Спикеры</a></li>
                        <li><a href="#" class="py-1.5 lg:py-4 block lg:inline-block hover:text-pink transition-colors duration-300">Регистрация</a></li>
                        <li><a href="#" class="py-1.5 lg:py-4 block lg:inline-block hover:text-pink transition-colors duration-300">Место и контакты</a></li>
                    </ul>
                </nav>
            </div>
            <div class="flex items-center w-full lg:w-auto lg:pr-0 max-h-15">
                <div class="block lg:hidden min-w-[53px] -ml-2" id="hamburger">
                    <x-hamburger></x-hamburger>
                </div>
                <button data-modal-target="form3" type="button" class="open-modal-btn btn-gr w-full h-13 lg:w-54 lg:h-12 xl:w-66 xl:h-13.5 rounded-full before:rounded-full cursor-pointer">
                    стать участником
                    <span class="bg-gr"></span>
                </button>
            </div>
        </div>
    </div>
</header>
