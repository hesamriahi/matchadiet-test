<x-slot:title>this is title</x-slot>
    <x-slot:header>
        <header class="w-full">
            <section class="mx-auto py-2 px-2 flex items-center">
                <button><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z">
                        </path>
                    </svg></button>
                <div class="grow flex justify-center">
                    <figure class="w-[100px]">
                        <a class="w-full" href="{{ route('home') }}"><img class="w-full"
                                src="{{ asset('images/logo.png') }}" alt="Logo"></a>
                    </figure>
                </div>
            </section>
            <div id="toolbar" class="w-[95%] mx-auto h-2 bg-[#e9ecef] rounded-lg relative overflow-hidden
            after:absolute after:h-full after:bg-green-500 after:w-[10%] after:top-0 after:right-0">

            </div>
        </header>
        </x-slot>

        <main>
            @switch($page)
            @case(1)
                <section class="container mt-8 flex flex-col gap-2 ">
                    <p class=" transition-section">
                        هوش مصنوعی تناسب‌اندام ماچا، یکی از اولین و
                        هوشمندترین <strong>هوش‌مصنوعی‌های تخصصی تناسب‌اندام</strong> در دنیاست که با استفاده از آخرین
                        تکنولوژی روز
                        دنیا، <strong>برنامه‌ی تناسب‌اندام شخصی‌سازی‌شده‌ی هر فرد</strong> رو شامل رژیم غذایی، برنامه‌ی
                        ورزشی و...
                        ارائه میده</p>

                    <video id="firstPageVideo" autoplay mute class="h-[419px] video">
                        <source src="{{ asset('videos/machine-learning.webm') }}" type="video/webm">
                    </video>

                    <p class=" transition-section">
                        همچنین، هوش مصنوعی ماچا، اولین کالری‌شمار تصویری
                        ایران و سومین <strong>کالری‌شمار تصویری هوشمند دنیا</strong> رو ارائه داده که راه رو برای رسیدن به
                        تناسب‌اندام
                        خیلی راحت کرده</p>

                    <p class=" transition-section">
                        همچنین، هوش مصنوعی ماچا، اولین کالری‌شمار تصویری
                        ایران و سومین <strong>کالری‌شمار تصویری هوشمند دنیا</strong> رو ارائه داده که راه رو برای رسیدن به تناسب‌اندام
                        خیلی راحت کرده</p>
                </section>
                <div class="container sticky bottom-[10px]">
                    <button wire:click="nextPage" class="bg-green-300 text-white rounded-lg w-full py-2">
                        بعدی
                    </button>
                </div>
                @break

            
            @case(2)
                <section class="container mt-8 transition-section">
                    <h2 class="text-center font-bold text-2xl">قدت چنده؟</h2>
                    <form class="w-[250px] mx-auto mt-6">
                        <div class="flex w-full items-center border-2 border-solid border-green-700 p-3 gap-1">
                            <span>CM</span>
                            <!-- todo: persian font for this input -->
                            <input type="text" class="grow bg-transparent w-full outline-none" dir="ltr" maxlength="3">
                        </div>
                    </form>

                    <div class="mt-6 bg-[#ebf5ff] py-4 px-3">
                        <div class="flex items-center gap-1">
                            <figure class="w-[30px]">
                                <img class="w-full" src="{{ asset('images/thumb-up.png') }}" alt="thumb-up">
                            </figure>
                            <h3 class="font-bold text-gray-700">تحلیل شرایط فیزیکی</h3>
                        </div>
                        <p class="text-xs mt-1 leading-loose text-gray-500">هوش مصنوعی ماچا به کمک این اطلاعات، میزان اضافه وزن و شرایط بدنیت رو تحلیل میکنه و بهت میگه در چه وضعیتی هستی.</p>
                        
                    </div>

                    <div class=" mt-3">
                        <!-- cursor-not-allowed && disabled for that time that it has no data in input  -->
                        <button wire:click="nextPage"  class="bg-gray-200 font-bold rounded-lg w-full py-2">
                            ثبت
                        </button>
                    </div>
                </section>
            @break

            @case(3)
                <section class="container mt-8 transition-section">
                    <h2 class="text-center font-bold text-2xl">وزنت چقدره؟ </h2>
                    <form class="w-[250px] mx-auto mt-6">
                        <div class="flex w-full items-center border-2 border-solid border-green-700 p-3 gap-1">
                            <span>KG</span>
                            <!-- todo: persian font for this input -->
                            <input type="text" class="grow bg-transparent w-full outline-none" dir="ltr" maxlength="3">
                        </div>
                    </form>


                    <!-- <div class="mt-6 bg-[#ebf5ff] py-4 px-3">
                        <div class="flex items-center gap-1">
                            <figure class="w-[30px]">
                                <img class="w-full" src="{{ asset('images/thumb-up.png') }}" alt="thumb-up">
                            </figure>
                            <h3 class="font-bold text-gray-700">تحلیل شرایط فیزیکی</h3>
                        </div>
                        <p class="text-xs mt-1 leading-loose text-gray-500">هوش مصنوعی ماچا به کمک این اطلاعات، میزان اضافه وزن و شرایط بدنیت رو تحلیل میکنه و بهت میگه در چه وضعیتی هستی.</p>
                        
                    </div> -->


                    

                    <div class=" mt-8">
                        <!-- cursor-not-allowed && disabled for that time that it has no data in input  -->
                        <button wire:click="nextPage"  class="bg-gray-200 font-bold rounded-lg w-full py-2">
                            ثبت
                        </button>
                    </div>
                </section>
            @break
            @case(4)
                <section class="container mt-8 transition-section">
                    <h2 class="text-center font-bold text-2xl">به چه وزنی می خوای برسی؟ </h2>
                    <form class="w-[250px] mx-auto mt-6">
                        <div class="flex w-full items-center border-2 border-solid border-green-700 p-3 gap-1">
                            <span>KG</span>
                            <!-- todo: persian font for this input -->
                            <input type="text" class="grow bg-transparent w-full outline-none" dir="ltr" maxlength="3">
                        </div>
                    </form>

                    <div class=" mt-8">
                        <!-- cursor-not-allowed && disabled for that time that it has no data in input  -->
                        <button wire:click="nextPage"  class="bg-gray-200 font-bold rounded-lg w-full py-2">
                            ثبت
                        </button>
                    </div>


                    <div class="py-4 px-3 bg-gray-100 mt-8 rounded-lg border border-solid border-b-gray-200">
                        <p class="text-sm md:text-base leading-loose ">
                        اگه به برنامه ماچا کاملا پایبند باشی و سبک زندگیت رو اصلاح کنی، خیلی راحت به این وزن میرسی. کاربران ماچا بطور میانگین هفته‌ای 1 تا 1.5 کیلوگرم کاهش وزن دارند. </p>
                    </div>

                    <figure class="w-[200px] sticky mt-6 top-full right-full">
                        <img src="{{ asset('images/man-thinking.png') }}" alt="">
                    </figure>
                   
                </section>
                
            @break
            @case(5)
                <section class="container mt-8 transition-section">
                    <h2 class="text-center font-bold text-2xl">وضعیت فعلی هیکلت چه جوریه؟ </h2>

                    <div class="mt-8">
                        <article class="w-full hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden px-5 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>معمولی</h4>
                        </article>
                        <article class="w-full hover:bg-yellow-100  mt-5 bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden px-5 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>معمولی</h4>
                        </article>
                        <article class="w-full hover:bg-yellow-100  mt-5 bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden px-5 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>معمولی</h4>
                        </article>
                        <article class="w-full hover:bg-yellow-100  mt-5 bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden px-5 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>معمولی</h4>
                        </article>
                    </div>

                </section>
                
            @break
            @case(6)
                <section class="container mt-8 transition-section">
                    <h2 class="text-center font-bold text-2xl">وقتی مشغول غذا خوردنی، حواست به مقدارش هست؟</h2>
                    <p class="text-sm text-gray-500 mt-6 px-10">
                    در نظر گرفتن کالری و ارزش غذایی دریافتی روزانه، در روند کاهش وزن خیلی موثره
                    </p>
                    <div class="mt-8">
                        <article class="w-full hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>آره دقیق و ریزبه‌ریز حساب میکنم</h4>
                        </article>
                        <article class="w-full hover:bg-yellow-100  mt-5 bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>همیشه دوست دارم حساب کنم اما اینقدر کار سختیه که از دستم در میره</h4>
                        </article>
                        <article class="w-full hover:bg-yellow-100  mt-5 bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>قبلا اپ کالری‌شمار داشتم اما اینقدر استفاده ازش سخت بود و طول میکشید که کنارش گذاشتم</h4>
                        </article>
                        <article class="w-full hover:bg-yellow-100  mt-5 bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>نه، حوصله حساب‌کتاب و وزن‌کردن غذا رو ندارم.</h4>
                        </article>
                    </div>

                </section>
                
            @break
            @case(7)
                <section class="container mt-8 flex flex-col gap-2 ">
                 
                        <p  class="transition-section">هوش‌مصنوعی ماچا، علاوه بر طراحی <strong>یه برنامه تناسب‌اندام ساده ولی کاربردی</strong>، یه ابزار فوق‌العاده هم بهت میده که بتونی ارزش‌غذایی و کالری هر غذایی که میخوری رو حساب کنی</p>

                    <video id="firstPageVideo" autoplay mute class="h-[419px] video">
                        <source src="{{ asset('videos/machine-learning.webm') }}" type="video/webm">
                    </video>

                
                        <p class="transition-section">فقط کافیه از غذات عکس بگیری تا <strong>هوش‌مصنوعی ماچا</strong> دقیق ثبت کنه این غذا مقدارش چقدره و چقدر کالری داره</p>
                </section>
                <div class="container mt-8">
                    <button wire:click="nextPage" class="bg-green-300 text-white rounded-lg w-full py-2">
                        بعدی
                    </button>
                </div>
                @break
                @case(8)
                <section class="container mt-8 transition-section">
                    <h2 class="text-center font-bold text-2xl">دوست داری هیکلت چه‌جوری بشه؟ </h2>

                    <div class="mt-8">
                        <article class="w-full hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden px-5 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>لاغرتر بشم</h4>
                        </article>
                        <article class="w-full hover:bg-yellow-100  mt-5 bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden px-5 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>هیکلم رو فُرم باشه</h4>
                        </article>
                        <article class="w-full hover:bg-yellow-100  mt-5 bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden px-5 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>عضلانی و بدون چربی باشم</h4>
                        </article>
                      
                    </div>

                </section>
                
            @break
            @case(9)
                <section class="container mt-8 transition-section">
                    <h2 class="text-center font-bold text-2xl">بیشتر دوست داری تمرکز رژیم و برنامه‌ت روی کدوم قسمت از بدنت باشه؟ </h2>

                    <div class="mt-8">
                        <article class="w-full hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden px-5 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>شکم </h4>
                        </article>
                        <article class="w-full hover:bg-yellow-100  mt-5 bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden px-5 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>   فیله و باسن</h4>
                        </article>
                        <article class="w-full hover:bg-yellow-100  mt-5 bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden px-5 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>سینه و سرشونه</h4>
                        </article>
                        <article class="w-full hover:bg-yellow-100  mt-5 bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden px-5 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>پاها</h4>
                        </article>
                    </div>

                </section>
                
            @break
            @case(10)
                <section class="container mt-8 flex flex-col gap-2 ">
                 
                        <p  class="transition-section">
                        در ماچا با تغییر سبک زندگی و عادات غذایی کاهش وزن بدون بازگشتی رو تجربه میکنی و هیچ‌وقت سراغ رژیم‌های سخت و محدودکننده نمیریم.
                        </p>

                    <video id="firstPageVideo" autoplay mute class="h-[419px] video">
                        <source src="{{ asset('videos/machine-learning.webm') }}" type="video/webm">
                    </video>

                    <p class="transition-section">تا کنون <strong>89٪</strong> کاربران ماچا در بازه <strong>2 ماهه</strong> به وزن ایده‌آلشون رسیدن.</>
                </section>
                <div class="container mt-8">
                    <button wire:click="nextPage" class="bg-green-300 text-white rounded-lg w-full py-2">
                        بعدی
                    </button>
                </div>
                @break
                @case(11)
                <section class="container mt-8 transition-section">
                    <h2 class="text-center font-bold text-2xl">مراسم یا اتفاق خاصی رو پیشِ‌رو داری که میخوای به خاطرش لاغر شی؟</h2>
                    <p class="text-sm text-gray-500 mt-6 px-10">
                    داشتن انگیزه در این دوران خیلی مهمه و اگه مراسم خاصی رو پیش رو داری، تو رو در رسیدن به هدفت خیلی کمک میکنه.
                    </p>
                    <div class="mt-8">
                        <article class="w-full hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>مسافرت</h4>
                        </article>
                        <article class="w-full mt-5 hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>عروسی</h4>
                        </article>
                        <article class="w-full mt-5 hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>مهمونی</h4>
                        </article>
                        <article class="w-full mt-5 hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>تولد</h4>
                        </article>
                        <article class="w-full mt-5 hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>عید نوروز</h4>
                        </article>
                        <article class="w-full mt-5 hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>سایر</h4>
                        </article>
                        <article class="w-full mt-5 hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>نه خبر خاصی نیست کلاً میخوام لاغر شم</h4>
                        </article>
                    </div>

                </section>
                
            @break
           
                @case(12)
                <section class="container mt-8 transition-section">
                    <h2 class="text-center font-bold text-2xl">تاریخ مسافرت کیه؟!</h2>
                    <p class="text-sm text-gray-500 mt-6 px-10 text-center">
                    در طراحی برنامت، حتما این تاریخ رو در نظر میگیریم.
                    </p>
                    <div class="container mt-8">
                    <button wire:click="nextPage" class="bg-green-300 text-white rounded-lg w-full py-2">
                    انتخاب تاریخ
                    </button>
                </div>

                </section>
                
            @break
            @case(13)
                <section class="container mt-8 transition-section">
                    <h2 class="text-center font-bold text-2xl">کدومیک از گزینه‌های زیر در مورد تو درست‌تره؟ </h2>
                    <p class="text-sm text-gray-500 mt-6  text-center">
                    آقایانی که در بازه سنی تو هستن، با توجه به سبک زندگی که دارن، ممکنه روش لاغری متفاوتی رو لازم داشته باشن.
                    </p>



                    <article class="py-7 hover:bg-yellow-100 px-3 bg-gray-100 mt-8 rounded-lg border border-solid border-b-gray-200" wire:click="nextPage"  onclick="clickArticle(this)">
                        <p class="text-sm md:text-base leading-loose ">
                        سبک زندگی و عادت‌های غذاییم افتضاحه و باید حسابی روش کار بشه</p>
                    </article>
                    <article class="py-7 hover:bg-yellow-100 px-3 bg-gray-100 mt-8 rounded-lg border border-solid border-b-gray-200" wire:click="nextPage"  onclick="clickArticle(this)">
                        <p class="text-sm md:text-base leading-loose ">
                        بعضی از عادات غذاییم سالمه</p>
                    </article>
                    <article class="py-7 hover:bg-yellow-100 px-3 bg-gray-100 mt-8 rounded-lg border border-solid border-b-gray-200" wire:click="nextPage"  onclick="clickArticle(this)">
                        <p class="text-sm md:text-base leading-loose ">
                        همه عادات غذاییم سالمه و فعالیت روزانه هم دارم</p>
                    </article>
                    <figure class="w-[200px] sticky mt-6 top-full right-full">
                        <img src="{{ asset('images/man-thinking.png') }}" alt="">
                    </figure>
                   
                </section>
                
            @break
            @case(14)
                <section class="container flex flex-col justify-between mt-8 h-screen transition-section">
                   <div>
                   <figure class="w-[100px] ">
                        <img class="w-full" src="{{ asset('images/tick-mark.png') }}" alt="tick-tick-mark">
                    </figure>
                    <h2 class="text-center font-bold text-2xl">این شرایط رو در طراحی برنامت در نظر میگیریم...</h2>
                    <p class="text-sm text-gray-500 mt-6 px-10 text-center">
                    در برنامت اهداف کوچیک و دستیافتنی قرار میدیم، تا کم کم سبک زندگیت اصلاح بشه و خیلی هم اذیت نشی
                    </p>
                   </div>
                    <div class="container mt-8 sticky bottom-5">
                    <button wire:click="nextPage" class="bg-green-300 text-white rounded-lg w-full py-2">
                    بغدی 
                    </button>
                </div>

                </section>
                
            @break
            @case(15)
                <section class="container flex flex-col justify-between mt-8 h-screen transition-section">
                   <div>
                   
                    <h3 class="text-2xl">ادامه دادن رژیم لاغری میتونه سخت و حوصله سر بر باشه. اما هوش مصنوعی ماچا بهت کمک میکنه که تا انتها رژیمت رو رعایت کنی و به هدفت برسی.</h3>
                    <figure class="w-full mt-8">
                        <img class="w-full" src="{{ asset('images/2-3.png') }}" alt="tick-tick-mark">
                    </figure>
                   
                    <p class=" mt-6 ">کاربران ماچا، هر هفته <strong>1 تا 1.5 کیلوگرم</strong> لاغر میشن.</p>
                   </div>
                    <div class="container mt-8 sticky bottom-5">
                    <button wire:click="nextPage" class="bg-green-300 text-white rounded-lg w-full py-2">
                    بغدی 
                    </button>
                </div>

                </section>
                
            @break
            @case(16)
                <section class="container mt-8 transition-section">
                    <h2 class="text-center font-bold text-2xl">جمله‌ی زیر چقدر در مورد تو درسته؟</h2>
                    <p class="text-sm text-gray-500 mt-6 px-10">
                    بعد از خوردن غذا، احساس آرامش و راحتی بیشتری دارم
                    </p>
                    <div class="mt-8">
                        <article class="w-full hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>کاملاً درسته</h4>
                        </article>
                        <article class="w-full mt-5 hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>تا حدودی درسته</h4>
                        </article>
                        <article class="w-full mt-5 hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>تا حدودی غلطه</h4>
                        </article>
                        <article class="w-full mt-5 hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>کاملاً غلطه</h4>
                        </article>
                 
                    </div>

                </section>
                
            @break
            @case(17)
                <section class="container mt-8 transition-section">
                    <h2 class="text-center font-bold text-2xl">
                    جمله‌ی زیر چقدر در مورد تو درسته؟
                    </h2>
                    <p class="text-sm text-gray-500 mt-6 px-10">
                    برای 1 تا 2 هفته تونستم سبک غذایی سالمی داشته باشم اما دوباره به عادات غذایی قبلیم برگشتم.
                    </p>
                    <div class="mt-8">
                        <article class="w-full hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>کاملاً درسته</h4>
                        </article>
                        <article class="w-full mt-5 hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>تا حدودی درسته</h4>
                        </article>
                        <article class="w-full mt-5 hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>تا حدودی غلطه</h4>
                        </article>
                        <article class="w-full mt-5 hover:bg-yellow-100  bg-gray-100 rounded-lg flex items-center gap-4 overflow-hidden p-4 " wire:click="nextPage"  onclick="clickArticle(this)">
                            <figure class="w-[85px]">
                                <img class="w-full" src="{{ asset('images/fastfitb3.webp') }}" alt="">
                            </figure>
                            <h4>کاملاً غلطه</h4>
                        </article>
                 
                    </div>

                </section>
                
            @break
            @endswitch
            

            
        </main>