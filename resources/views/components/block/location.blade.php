<section class="relative py-8">
    <div class="hidden lg:block absolute left-1/2 -top-200 -translate-x-1/2 w-820 -z-10">
        <img src="{{ asset('images/bg-bottom.svg') }}" alt="Фоновое изображение разноцветное облако" width="3276" height="4500">
    </div>
    <div class="lg:hidden absolute left-1/2 -top-40 -translate-x-1/2 w-528 -z-10">
        <img src="{{ asset('images/bg-mobile-location.svg') }}" alt="Фоновое изображение разноцветное облако" width="2114" height="2347">
    </div>
    <div class="container mx-auto">
        <div class="lg:flex px-3 lg:px-0">
            <div class="">
                <h2 class="relative text-center max-w-90 mx-auto lg:max-w-full lg:text-left text-[40px]/9 lg:text-[64px]/20 pb-20 lg:pb-0 lg:pl-24">
                    место проведения
                    <span class="absolute w-35 lg:w-50 h-auto top-10 lg:top-20 right-full translate-x-full lg:translate-x-0 lg:-right-18 lg:-translate-y-2">
                        <img src="{{ asset('images/circle-pointer.svg') }}" alt="Указатель на картинку" width="200" height="74">
                    </span>
                    <span class="w-16.5 lg:w-auto absolute left-1/2 -translate-x-1/2 lg:translate-x-0 top-16 lg:top-0 lg:left-0">
                        <img src="{{ asset('images/map-marker.webp') }}" alt="Иконка метка на карте" width="77" height="79" class="w-full">
                    </span>
                </h2>
                <div class="mt-10 lg:mt-20">
                    <div class="flex justify-center lg:justify-start lg:gap-x-7">
                        <div data-da=".locations,1024,1" class="circle-gr relative w-full lg:max-w-44 h-auto overflow-hidden rounded-4xl before:rounded-4xl before:bg-linear-(--white2-gr) before:p-1">
                            <img src="{{ asset('images/location-1.webp') }}" alt="Конференц зал" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col items-center lg:block">
                            <img src="{{ asset('images/rating-stars.svg') }}" alt="Звездный рейтинг" width="117" height="29" class="order-2 mt-2 lg:mt-0">
                            <p class="text-3xl text-center font-bold mt-2 order-1">SOLUXE HOTEL MOSCOW</p>
                            <span class="block w-full h-[1px] bg-linear-(--white-vertical2-gr) mt-7.5 order-3"></span>
                            <p class="mt-5 text-xl lg:text-2xl tracking-tight order-4">ул. Вильгельма Пика, д.16, Москва</p>
                        </div>
                    </div>
                    <div class="w-full h-auto mt-6 relative lg:hidden">
                        <img src="{{ asset('images/hotel-m.webp') }}" alt="Отель" width="370" height="307" class="w-full">
                        <a href="tel:74951392020" class="absolute left-4 bottom-2 font-semibold">+7 495 139 20 20</a>
                    </div>
                    <div class="locations grid grid-cols-2 lg:flex gap-4 lg:gap-x-7 mt-6 lg:mt-16 lg:pr-6">
                        <div class="circle-gr relative w-full lg:max-w-44 h-auto overflow-hidden rounded-4xl before:rounded-4xl before:bg-linear-(--white2-gr) before:p-1">
                            <img src="{{ asset('images/location-2.webp') }}" alt="Конференц зал" class="w-full h-full object-cover">
                        </div>
                        <div class="col-span-2 w-full flex flex-col gap-8 lg:gap-0">
                            <div class="grid grid-cols-2 gap-x-4 lg:gap-x-7.5">
                                <a href="#" class="btn-gr flex items-center justify-center w-full h-14 rounded-full before:rounded-full font-secondary text-sm">
                                    открыть карту
                                    <span class="bg-gr"></span>
                                </a>
                                <a href="#" class="btn-gr flex items-center justify-center w-full h-14 rounded-full before:rounded-full font-secondary text-sm">
                                    Заказать такси
                                    <span class="bg-gr"></span>
                                </a>
                            </div>
                            <div class="flex gap-2 items-center justify-between mt-auto">
                                <a href="#" class="circle-gr overflow-hidden relative bg-linear-(--white3-gr) py-1.5 px-7 flex items-center justify-center rounded-full before:bg-linear-(--white2-gr) before:p-0.5 before:rounded-full underline hover:no-underline hover:[&_span]:opacity-100">
                                    <span class="absolute inset-0 bg-linear-(--violet-gr) z-10 mix-blend-overlay opacity-0 transition-opacity"></span>
                                    VK
                                </a>
                                <a href="#" class="circle-gr overflow-hidden relative bg-linear-(--white3-gr) py-1.5 px-7 flex items-center justify-center rounded-full before:bg-linear-(--white2-gr) before:p-0.5 before:rounded-full underline hover:no-underline hover:[&_span]:opacity-100">
                                    <span class="absolute inset-0 bg-linear-(--violet-gr) z-10 mix-blend-overlay opacity-0 transition-opacity"></span>
                                    WhatsApp
                                </a>
                                <a href="#" class="circle-gr overflow-hidden relative bg-linear-(--white3-gr) py-1.5 px-7 flex items-center justify-center rounded-full before:bg-linear-(--white2-gr) before:p-0.5 before:rounded-full underline hover:no-underline hover:[&_span]:opacity-100">
                                    <span class="absolute inset-0 bg-linear-(--violet-gr) z-10 mix-blend-overlay opacity-0 transition-opacity"></span>
                                    Telegram
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative hidden lg:block relative flex-auto z-10">
                <div class="lg:absolute inset-0 mt-9 w-full h-full">
                    <img src="{{ asset('images/hotel.webp') }}" alt="Отель" width="608" height="493">
                    <a href="tel:74951392020" class="absolute left-20 bottom-15">+7 495 139 20 20</a>
                </div>
            </div>
        </div>
    </div>
</section>
