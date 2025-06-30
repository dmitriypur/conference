<div class="grid grid-cols-4 gap-x-3 px-3 mt-4" id="countdown"
     data-deadline="2025-09-25T23:59:00" >
    <div>
        <div class="flex items-center justify-center w-14.5 h-11.5" style="background: url({{ asset('images/timer-item.svg') }}) no-repeat center;">
            <span class="text-[32px] font-bold" id="months">00</span>
        </div>
        <div class="circle-gr relative mt-0.5 bg-linear-(--white2-gr) rounded-sm before:rounded-sm before:bg-linear-(--white-gr) before:p-[1px] w-full py-0.5 text-xs text-center font-medium">месяца</div>
    </div>

    <div>
        <div class="flex items-center justify-center w-14.5 h-11.5" style="background: url({{ asset('images/timer-item.svg') }}) no-repeat center;">
            <span class="text-[32px] font-bold" id="days">00</span>
        </div>
        <div class="circle-gr relative mt-0.5 bg-linear-(--white2-gr) rounded-sm before:rounded-sm before:bg-linear-(--white-gr) before:p-[1px] w-full py-0.5 text-xs text-center font-medium">дней</div>
    </div>

    <div>
        <div class="flex items-center justify-center w-14.5 h-11.5" style="background: url({{ asset('images/timer-item.svg') }}) no-repeat center;">
            <span class="text-[32px] font-bold" id="hours">00</span>
        </div>
        <div class="circle-gr relative mt-0.5 bg-linear-(--white2-gr) rounded-sm before:rounded-sm before:bg-linear-(--white-gr) before:p-[1px] w-full py-0.5 text-xs text-center font-medium">часов</div>
    </div>

    <div>
        <div class="flex items-center justify-center w-14.5 h-11.5" style="background: url({{ asset('images/timer-item.svg') }}) no-repeat center;">
            <span class="text-[32px] font-bold" id="minutes">00</span>
        </div>
        <div class="circle-gr relative mt-0.5 bg-linear-(--white2-gr) rounded-sm before:rounded-sm before:bg-linear-(--white-gr) before:p-[1px] w-full py-0.5 text-xs text-center font-medium">минут</div>
    </div>

</div>
