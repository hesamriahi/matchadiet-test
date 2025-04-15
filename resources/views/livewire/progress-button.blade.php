<div class="@if($isSticky) container sticky bottom-[10px] @else mt-3 @endif">
    <button wire:click="nextStep"
            class="
                @if($isSticky) bg-[#3AD7AC] text-white rounded-lg w-full py-3
                @else bg-[#f5f5f5] font-bold rounded-lg w-full py-2 @endif
            ">
        {{ $buttonText }}
    </button>
</div>