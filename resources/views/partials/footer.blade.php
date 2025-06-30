<footer>
    <div class="lg:border-y border-white/20">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row gap-x-19 px-3">
                <div class="logo relative">
                    <picture>
                        <source srcset="{{ asset('images/logo-f.webp') }}" media="(min-width: 768px)">
                        <img src="{{ asset('images/logo-f-m.webp') }}" alt="логотип" class="w-full h-auto">
                    </picture>
                </div>
                <div class="py-8 hidden lg:block">
                    <p class="font-medium text-lg mb-6">Оптика Будущего</p>
                    <nav class="absolute left-10 bottom-14 lg:bottom-0 lg:left-0 lg:relative" data-da=".logo,1024,1">
                        <ul class="flex flex-col font-semibold lg:font-normal gap-y-1 lg:gap-y-2">
                            <li><a href="#" class="text-white/70 hover:text-white transition-colors">О конференции</a>
                            </li>
                            <li><a href="#" class="text-white/70 hover:text-white transition-colors">Программа</a></li>
                            <li><a href="#" class="text-white/70 hover:text-white transition-colors">Спикеры</a></li>
                            <li><a href="#" class="text-white/70 hover:text-white transition-colors">Регистрация</a>
                            </li>
                            <li><a href="#" class="text-white/70 hover:text-white transition-colors">Партнеры</a></li>
                            <li><a href="#" class="text-white/70 hover:text-white transition-colors">Место и
                                    контакты</a></li>
                            <li><a href="#" class="text-white/70 hover:text-white transition-colors">Как это было</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="flex-auto py-8">
                    <div class="flex w-full relative">
                        <div class="w-full lg:max-w-md">
                            <p class="font-medium text-lg text-center lg:text-left">Присоединяйсь к нашему сообществу в&nbsp;Telegram</p>
                            <a href="#"
                               class="flex items-center justify-center lg:max-w-75 h-15 lg:h-12.5 mt-6 circle-gr relative rounded-full bg-linear-(--blue-gr) before:bg-linear-(--white-gr) before:p-[2px] before:rounded-full hover:bg-sky-700 transition-colors">Наш
                                Telegram</a>
                        </div>
                        <img src="{{ asset('images/folders.webp') }}" alt="Иконка папки" width="98" height="93"
                             class="absolute w-40 lg:w-auto h-auto right-full top-2 lg:top-0 lg:right-0" data-da=".bottom-footer,1024,1">
                    </div>
                    <div class="flex flex-col lg:flex-row gap-6.5 mt-6 lg:mt-20">
                        <button type="button"
                                data-modal-target="form1"
                                class="open-modal-btn btn-gr-pink w-full h-15 col-span-1 rounded-full before:rounded-full before:p-0.5 cursor-pointer backdrop-blur-lg font-secondary text-xl">
                            Стать спикером
                            <span class="bg-gr"></span>
                        </button>
                        <button type="button"
                                data-modal-target="form2"
                                class="open-modal-btn btn-gr-pink w-full h-15 col-span-1 rounded-full before:rounded-full before:p-0.5 cursor-pointer backdrop-blur-lg font-secondary text-xl">
                            Стать партнёром
                            <span class="bg-gr"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer relative py-6 lg:py-10 pr-3 pl-6 lg:px-0 w-full max-w-2/3 float-right lg:max-w-full lg:float-none">
        <div class="flex flex-col gap-5 lg:gap-0 lg:flex-row justify-between mx-auto lg:max-w-234">
            <div class="flex items-center lg:justify-center gap-2 flex-auto">
                <img src="{{ asset('images/map.svg') }}" alt="Иконка метки на карте" width="32" height="32">
                <a href="#" class="hover:text-pink transition-colors">ул. Вильгельма Пика, д.16, Москва</a>
            </div>
            <div class="flex items-center lg:justify-center gap-2 flex-auto">
                <img src="{{ asset('images/email.svg') }}" alt="Иконка конверт" width="32" height="32">
                <a href="mailto:support@norch.ai" class="hover:text-pink transition-colors">support@norch.ai</a>
            </div>
            <div class="flex items-center lg:justify-center gap-2 flex-auto">
                <img src="{{ asset('images/call.svg') }}" alt="Иконка телефон" width="32" height="32">
                <a href="tel:80001234567" class="hover:text-pink transition-colors">+8 (000) 123-4567</a>
            </div>
        </div>
    </div>
</footer>
<!-- Скрытые шаблоны форм -->
<template id="form1">
    <div class="circle-gr relative max-w-[488px] mx-auto bg-linear-(--violet4-gr) p-[2px] rounded-[32px] backdrop-blur-lg before:bg-linear-(--violet4-gr) before:p-1 before:rounded-[30px] before:-z-10 after:-z-10">
        <form
            class="p-6 md:py-10 md:px-20 rounded-[30px] text-white space-y-5 ">
            <!-- Заголовок -->
            <div class="flex items-start justify-between">
                <h2 class="text-5xl/9">стать<br>спикером</h2>
                <img src="{{ asset('images/logo-transparent.svg') }}" alt="логотип" class="w-19 h-19"/>
            </div>

            <!-- Поля формы -->
            <div
                class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                <input type="text" placeholder="*ФИО" required
                       class="w-full rounded-full px-6 py-3 bg-white/15 placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30"/>
            </div>

            <div
                class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                <input type="tel" placeholder="*Номер телефона" required
                       class="w-full rounded-full px-6 py-3 bg-[rgba(255,255,255,0.15)] placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30 transition"/>
            </div>
            <div
                class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                <input type="text" placeholder="Предпочтительный способ связи"
                       class="w-full rounded-full px-6 py-3 bg-[rgba(255,255,255,0.15)] placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30 transition"/>
            </div>
            <div
                class="mt-10 circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                <input type="text" placeholder="Telegram ID"
                       class="w-full rounded-full px-6 py-3 bg-[rgba(255,255,255,0.15)] placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30 transition"/>
            </div>
            <div
                class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                <input type="email" placeholder="E-mail"
                       class="w-full rounded-full px-6 py-3 bg-[rgba(255,255,255,0.15)] placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30 transition"/>
            </div>
            <!-- Подпись -->
            <p class="text-sm mt-8">
                Расскажите о своем опыте и опишите тему,<br/>
                с которой бы хотели выступить
            </p>

            <!-- Textarea -->
            <div
                class="circle-gr h-32 relative rounded-3xl before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-3xl before:-z-10 after:-z-10">
            <textarea placeholder="Начните писать..."
                      class="w-full rounded-3xl px-6 py-4 h-32 bg-[rgba(255,255,255,0.15)] placeholder-white/60 text-white outline-none resize-none focus:ring-2 focus:ring-white/30 transition"></textarea>
            </div>
                <!-- Кнопка -->
                <button type="submit"
                        class="btn-gr w-full h-13 rounded-full before:rounded-full cursor-pointer mt-5">
                    отправить заявку
                    <span class="bg-gr"></span>
                </button>

                <!-- Checkbox -->
                <label class="flex items-start space-x-3 text-[10px] mt-4 leading-snug text-white">
                    <input
                        type="checkbox"
                        class="peer sr-only"
                        required
                    />
                    <div
                        class="w-5 h-5 border border-white rounded-md flex-shrink-0 relative flex items-center justify-center transition-all duration-200 peer-checked:[&_svg]:opacity-100"
                    >
                        <!-- Галочка -->
                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="absolute w-3 h-3 text-black opacity-0  transition-opacity duration-200">
                            <path d="M1 4.99998L4.53553 8.53551L11.6058 1.46442" stroke="white" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <span>
                    Я даю согласие на обработку персональных данных<br/>
                    и соглашаюсь с <a href="#" class="underline">политикой конфиденциальности</a>
                  </span>
                </label>

        </form>
    </div>

</template>

<template id="form2">
    <div class="circle-gr relative max-w-[488px] mx-auto bg-linear-(--violet4-gr) p-[2px] rounded-[32px] backdrop-blur-lg before:bg-linear-(--violet4-gr) before:p-1 before:rounded-[30px] before:-z-10 after:-z-10">
        <form
            class="p-6 md:py-10 md:px-20 rounded-[30px] text-white space-y-5 ">
            <!-- Заголовок -->
            <div class="flex items-start justify-between">
                <h2 class="text-5xl/9">стать<br>партнером</h2>
                <img src="{{ asset('images/logo-transparent.svg') }}" alt="логотип" class="w-19 h-19"/>
            </div>

            <!-- Поля формы -->
            <div
                class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                <input type="text" placeholder="*Организация" required
                       class="w-full rounded-full px-6 py-3 bg-white/15 placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30"/>
            </div>

            <div
                class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                <input type="tel" placeholder="*ФИО" required
                       class="w-full rounded-full px-6 py-3 bg-[rgba(255,255,255,0.15)] placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30 transition"/>
            </div>
            <div
                class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                <input type="text" placeholder="*Номер телефона" required
                       class="w-full rounded-full px-6 py-3 bg-[rgba(255,255,255,0.15)] placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30 transition"/>
            </div>
            <div
                class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                <input type="email" placeholder="E-mail"
                       class="w-full rounded-full px-6 py-3 bg-[rgba(255,255,255,0.15)] placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30 transition"/>
            </div>

            <!-- Кнопка -->
            <button type="submit"
                    class="btn-gr w-full h-13 rounded-full before:rounded-full cursor-pointer mt-5">
                отправить заявку
                <span class="bg-gr"></span>
            </button>

            <!-- Checkbox -->
            <label class="flex items-start space-x-3 text-[10px] mt-4 leading-snug text-white">
                <input
                    type="checkbox"
                    class="peer sr-only"
                    required
                />
                <div
                    class="w-5 h-5 border border-white rounded-md flex-shrink-0 relative flex items-center justify-center transition-all duration-200 peer-checked:[&_svg]:opacity-100"
                >
                    <!-- Галочка -->
                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg"
                         class="absolute w-3 h-3 text-black opacity-0  transition-opacity duration-200">
                        <path d="M1 4.99998L4.53553 8.53551L11.6058 1.46442" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <span>
                    Я даю согласие на обработку персональных данных и соглашаюсь с <a href="#" class="underline">политикой конфиденциальности</a>
                  </span>
            </label>

        </form>
    </div>

</template>

<template id="form3">
    <div class="circle-gr relative max-w-[488px] mx-auto bg-linear-(--violet4-gr) p-[2px] rounded-[32px] backdrop-blur-lg before:bg-linear-(--violet4-gr) before:p-1 before:rounded-[30px] before:-z-10 after:-z-10">
        <form
            class="p-6 md:py-10 md:px-20 rounded-[30px] text-white space-y-5">
            <!-- Заголовок -->
            <div class="flex items-start justify-between">
                <h2 class="text-5xl/9">стать<br>участником</h2>
                <img src="{{ asset('images/logo-transparent.svg') }}" alt="логотип" class="w-19 h-19"/>
            </div>


            <div
                class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                <input type="text" placeholder="*Город" required
                       class="w-full rounded-full px-6 py-3 bg-white/15 placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30"/>
            </div>
            <div
                class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                <input type="text" placeholder="*Организация" required
                       class="w-full rounded-full px-6 py-3 bg-white/15 placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30"/>
            </div>
            <div
                class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                <input type="text" placeholder="*Брэнд" required
                       class="w-full rounded-full px-6 py-3 bg-white/15 placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30"/>
            </div>




            <div class="user-data mt-10 space-y-5">
                <div
                    class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                    <input type="text" placeholder="*ФИО" required name="fio[]"
                           class="w-full rounded-full px-6 py-3 bg-[rgba(255,255,255,0.15)] placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30 transition"/>
                </div>
                <div
                    class="phone circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                    <input type="tel" placeholder="*Номер телефона" required name="phone[]"
                           class="w-full rounded-full px-6 py-3 bg-[rgba(255,255,255,0.15)] placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30 transition"/>
                </div>
                <div
                    class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                    <input type="text" placeholder="Telegram ID" name="telegram[]"
                           class="w-full rounded-full px-6 py-3 bg-[rgba(255,255,255,0.15)] placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30 transition"/>
                </div>
                <div
                    class="circle-gr relative rounded-full before:bg-linear-(--violet-gr) before:p-[1px] before:rounded-[30px] before:-z-10 after:-z-10">
                    <input type="email" placeholder="E-mail" name="email[]"
                           class="w-full rounded-full px-6 py-3 bg-[rgba(255,255,255,0.15)] placeholder-white/70 text-white outline-none focus:ring-2 focus:ring-white/30 transition"/>
                </div>
            </div>

            <button type="button" id="add-user" class="add-user circle-gr text-sm mt-8 relative w-full py-2 px-5 flex items-center justify-center gap-x-3 rounded-full [&_svg]:w-3 before:rounded-full before:bg-linear-(--white-gr) before:p-[1px] cursor-pointer">
                <x-icons.plus></x-icons.plus>
                Добавить ещё одного участника
                <span class="absolute rounded-full inset-0 bg-linear-(--white-gr) mix-blend-overlay"></span>
                <span class="circle-gr top-8 absolute overflow-hidden bg-linear-(--pink-gr) w-auto py-1 px-2  rounded-full [&_svg]:w-3 before:rounded-full before:bg-linear-(--white2-gr) before:p-0.5 z-20">- 5 000 руб.</span>
            </button>

            <!-- Кнопка -->
            <button type="submit"
                    class="btn-gr w-full h-13 rounded-full before:rounded-full cursor-pointer mt-7">
                отправить заявку
                <span class="bg-gr"></span>
            </button>

            <!-- Checkbox -->
            <label class="flex items-start space-x-3 text-[10px] mt-4 leading-snug text-white">
                <input
                    type="checkbox"
                    class="peer sr-only"
                    checked
                    required
                />
                <div
                    class="w-5 h-5 border border-white rounded-md flex-shrink-0 relative flex items-center justify-center transition-all duration-200 peer-checked:[&_svg]:opacity-100"
                >
                    <!-- Галочка -->
                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg"
                         class="absolute w-3 h-3 text-black opacity-0  transition-opacity duration-200">
                        <path d="M1 4.99998L4.53553 8.53551L11.6058 1.46442" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <span>
                    Я даю согласие на обработку персональных данных и соглашаюсь с <a href="#" class="underline">политикой конфиденциальности</a>
                  </span>
            </label>

        </form>
    </div>

</template>

<template id="video">
    <div class="px-2">
        <div class="relative w-full max-w-3xl bg-black rounded-xl lg:rounded-3xl overflow-hidden">
            <video id="html5Video" class="w-full h-auto" controls>
                <source src="{{ asset('files/video.mp4') }}" type="video/mp4" />
                Ваш браузер не поддерживает HTML5 видео.
            </video>
        </div>
    </div>
</template>

<div id="modal" class="fixed overflow-auto inset-0 z-50 bg-black/50 flex items-start justify-center hidden">
    <div class="relative my-10">
        <button id="modal-close" class="absolute top-2 right-2 opacity-0">✖</button>
        <div id="modal-content"></div>
    </div>
</div>
