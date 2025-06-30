<div class="relative overflow-hidden max-w-90 rounded-(--radius-40) top-12 left-8 md:absolute md:left-72 rotate-6 md:rotate-11 backdrop-blur-lg">
    <div class="w-full md:w-83 h-144">
        <div class="circle-gr w-full h-full bg-linear-(--white2-gr) before:bg-linear-(--white2-gr) mix-blend-overlay before:p-1 rounded-(--radius-40) before:rounded-(--radius-40) "></div>
    </div>
    <div class="absolute inset-0 py-4 px-5">
        <div class="flex items-center justify-between">
            <span>9:41</span>
            <span>
                <img src="{{ asset('images/right-side.svg') }}" alt="Верхняя панель смартфона">
            </span>
        </div>
        <div class="relative h-72.5 mt-2">
            <span class="absolute vertical-white-gr before:p-0.5 bg-linear-(--white-vertical-gr) mix-blend-overlay rounded-2xl before:rounded-2xl inset-0 -z-10"></span>
            <a href="#" class="flex items-center justify-start gap-6 px-5 rounded-2xl bg-white/40 border border-white w-full h-15 text-sm text-white font-semibold">
                <img src="{{ asset('images/icon-tg.svg') }}" alt="Иконка открытый конверт" width="40" height="40">
                Оптика Будущего
            </a>
            <div class="hidden flex items-center justify-between text-sm font-semibold mt-5 px-3">
                <div class="btn-gr flex items-center justify-center w-13 h-13 rounded-xl before:rounded-xl">
                    <img src="{{ asset('images/mail-open.svg') }}" alt="Иконка открытый конверт" width="24" height="24">
                </div>
                @OpticaFuture
                <div class="btn-gr flex items-center justify-center w-13 h-13 rounded-xl before:rounded-xl">
                    <img src="{{ asset('images/share-ios-export.svg') }}" alt="Иконка экспорт" width="24" height="24">
                </div>
            </div>
            <div class="mt-12">
                <x-timer></x-timer>
            </div>
            <div class="flex justify-between mt-12 px-3 text-xl">
                <div class="flex items-center font-secondary">
                    <img src="{{ asset('images/map.svg') }}" alt="Иконка метка на карте">
                    <p>Москва</p>
                </div>
                <div class="flex items-center font-medium">
                    <img src="{{ asset('images/calendar.svg') }}" alt="Иконка календарь">
                    <p>21/09/25</p>
                </div>
            </div>
        </div>
        <div class="relative flex items-center gap-4 rounded-full circle-gr bg-linear-(--white-gr) before:bg-linear-(--white-gr) before:p-0.5 before:rounded-full p-[2px] mt-2.5">
            <div class="bg-linear-(--violet-gr) opacity-70 text-xs font-bold rounded-full h-full py-1 px-2">-20%</div>
            <p class="text-xs font-semibold">специальная цена до 1 августа</p>
        </div>
        <button type="button"
                data-modal-target="form3"
                class="open-modal-btn btn-gr w-full h-15 text-xl font-secondary col-span-full rounded-full before:rounded-full cursor-pointer backdrop-blur-lg mt-4.5">
            Зарегистрироваться
            <span class="bg-gr"></span>
        </button>
        <button type="button"
                data-modal-target="form1"
                class="open-modal-btn btn-gr w-full h-15 text-xl font-secondary col-span-1 rounded-full before:rounded-full cursor-pointer backdrop-blur-lg mt-4.5">
            Стать спикером
            <span class="bg-gr"></span>
        </button>
        <div class="w-33.5 h-1.5 bg-white rounded-full mx-auto mt-4.5"></div>
    </div>
</div>
