<section class="relative z-10 md:z-0">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4 items-baseline relative">
            <div class="absolute left-100 -top-50 w-150 h-150 rounded-full bg-purple blur-[150px] -z-10"></div>
            <div class="absolute left-80 top-30 w-100 h-100 rounded-full bg-my-dark-blue blur-[150px] -z-10"></div>
            <div class="w-full">
                <h2 class="font-secondary text-center md:text-left text-5xl md:text-[64px]">О конференции</h2>
                <div class="text-sm/5 italic -ml-1 -mr-1 lg:ml-0 lg:mr-0 mt-6 circle-gr relative py-7 px-3 lg:px-10 bg-white/5 md:rounded-3xl before:absolute before:bg-linear-(--violet-gr) before:p-0.5 md:before:rounded-3xl before:-z-10 backdrop-blur-lg">
                    <p>“<b>Третья конференция — особенная.</b> Мы собираем тех, кто готов строить бизнес завтрашнего дня.
                        Системное управление, работа с показателями, масштабирование без потери качества, вывод новых продуктов — обо всём этом честно и с цифрами.</p><br>
                    <p>Делимся реальным опытом создания эффективной системы.Конференция откроет новый этап и для нас.</p><br>
                    <p>Присоединяйтесь!“</p>
                    <p class="absolute bottom-7 right-10 text-base">Анна Кочкина</p>
                </div>
            </div>
            <div class="flex w-full flex-col h-full px-3">
                <h3 class="relative text-center mt-10 mb-5 lg:m-0 lg:text-left text-5xl lg:text-[40px] lg:pl-11">
                    <span class="hidden lg:block absolute -left-20 top-0">
                        <img src="{{ asset('images/speackers-icon.webp') }}" alt="Иконка сообщение, лайк, пользователь" width="107" height="73">
                    </span>
                    спикеры
                </h3>
                <div class="lg:w-full lg:h-auto lg:flex-initial lg:mt-8 lg:px-11 lg:relative">
                    <!-- Контейнер -->
                    <div class="swiper speakers md:w-full h-46 lg:h-58 rounded-4xl">
                        <!-- Обертка слайдов -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="relative circle-gr overflow-hidden w-full h-full bg-linear-(--white2-gr) before:bg-linear-(--white-gr) rounded-4xl before:rounded-4xl before:p-1 before:-z-10 flex mix-blend-overlay after:-z-10">
                                    <div class="absolute w-200 h-127 left-1/2 top-1/2 -translate-y-2/4 -translate-x-2/5 -z-10">
                                        <img src="{{ asset('images/bg-slide-speacker.svg') }}" alt="Фон карточки спикера" width="1080" height="668" class="w-full h-full">
                                    </div>
                                    <img src="{{ asset('images/logo-transparent.svg') }}" alt="Логотип прозрачный" width="210" height="210" class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 mix-blend-overlay -z-10">
                                    <button type="button" data-modal-target="form1" class="open-modal-btn flex items-center justify-center w-full h-full text-2xl lg:text-4xl font-secondary cursor-pointer">Стать спикером</button>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative circle-gr overflow-hidden w-full h-full bg-linear-(--white2-gr) before:bg-linear-(--white-gr) rounded-4xl before:rounded-4xl before:p-1 before:-z-10 flex mix-blend-overlay after:-z-10">
                                    <div class="absolute w-200 h-127 left-1/2 top-1/2 -translate-y-2/4 -translate-x-2/5 -z-10">
                                        <img src="{{ asset('images/bg-slide-speacker.svg') }}" alt="Фон карточки спикера" width="1080" height="668" class="w-full h-full">
                                    </div>
                                    <img src="{{ asset('images/logo-transparent.svg') }}" alt="Логотип прозрачный" width="87" height="85" class="absolute bottom-5 right-7">
                                    <div class="circle-gr overflow-hidden w-full max-w-29 lg:max-w-37 h-full before:max-w-29 lg:before:max-w-37 before:bg-linear-(--white-gr) rounded-4xl before:rounded-4xl before:p-2 before:mix-blend-overlay">
                                        <img src="{{ asset('images/speacker-1.webp') }}" alt="Фото спикера 1" class="w-full h-full object-cover">
                                    </div>
                                    <div class="py-4 px-6">
                                        <p class="text-2xl xl:text-4xl font-bold tracking-tighter">Анна Кочкина</p>
                                        <div class="text-xs xl:text-[15px]/4.5 mt-2 [&_p]:mb-2 [&_b]:block">
                                            <p><b>Основатель и генеральный директор</b> холдинга Оптика Будущего</p>
                                            <p><b>Президент Национального фонда</b> защиты детского зрения</p>
                                        </div>
                                        <div class="mt-1 hidden">
                                            <div class="circle-gr relative bg-linear-(--violet-gr) before:bg-linear-(--violet-gr) before:p-[1.5px] rounded-lg before:rounded-lg py-1 px-3 font-secondary text-xl z-20">тема:</div>
                                            <div class="circle-gr relative -top-1.5 bg-linear-(--white2-gr) before:bg-linear-(--white2-gr) before:p-[1.5px] rounded-b-lg before:rounded-b-lg p-3 text-[10px] italic mix-blend-overlay">“Тренды медицинского рынка 2025.”</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Навигация -->
                    <div class="flex justify-center gap-10 mt-8">
                        <div class="speakers-button-prev relative bg-white/10 hover:bg-white/20 transition-colors inline-flex items-center justify-center w-9.5 h-9.5 rounded-full cursor-pointer">
                            <x-icons.arrow-left></x-icons.arrow-left>
                        </div>
                        <div class="speakers-button-next relative bg-white/10 hover:bg-white/20 transition-colors inline-flex items-center justify-center w-9.5 h-9.5 rounded-full cursor-pointer rotate-180">
                            <x-icons.arrow-left></x-icons.arrow-left>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
