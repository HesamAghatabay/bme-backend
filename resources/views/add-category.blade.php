@extends('layouts.master')
@section('content')
    <h1 class="text-center mt-5 pt-5">صفحه افزودن دسته جدید</h1>
    <section class="text-start mt-130 bg-add-article py-5">
        <div class="container">

            <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center align-items-start">
                    <div class="col-10 col-md-10">
                        <label for="title" class="form-label">عنوان</label>
                        <input type="text" class="form-control mb-2" name="title" id="title" placeholder="عنوان">
                        @error('title')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="image" class="form-label">تصویر</label>
                        <input type="file" class="form-control mb-2" name="image" id="image"
                            placeholder="بارگذاری عکس ">
                        @error('image')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="info" class="form-label"> بدنه و توضیحات </label>
                        <textarea name="info" id="info" class="form-control" placeholder="توضیحات مختصر در مورد دسته" rows="15"
                            cols="30"></textarea>
                        @error('info')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror

                        {{-- ///////////////////////////////////////////////////// --}}
                        <div class="header-wrapper">
                            <h1>Wproofreader editor</h1>
                        </div>
                        <div class="editor-wrapper">
                            <div id="cke5-spellchecker-demo">
                                <h2>Start testing the ultimate WProofreader!</h2>
                                <p>
                                    Warsaw is the capital adn largest city of Poland. The metropolis
                                    stands on the Vistula River in east-central Poland and its population
                                    is officially estimatd at 1.8 million residents within a greater
                                    metropolitan area of 3.1 million residents, which makes Warsaw the 7th
                                    most-populous capital city in the European Union. Warsaw is an
                                    alpha-global city, a major international tourist destination, and a
                                    significaant cultural, political, and economic hub. Its historical Old
                                    Town was designated a UNESCO World Heritage Site.
                                </p>
                                <p>
                                    Warschau ist seit 1596 die Hauptstadt Polens und die flächenmäßig
                                    größte sowie mit über 1,75 Mio. Einwonern bevölkerungsreichste Staddt
                                    des Landes. Als eines der wichtigsten Verkehrs-, wirtschaftlichen und
                                    Handelszentren Mittel- und Osteeuropas genießt Warschau große
                                    politische und kulturelle Bedetung. In der Stadt befinden sich
                                    zahlreiche Institutionen, Universitäten, Theater, Museen und
                                    Baudenkmäler.
                                </p>
                                <p>
                                    Варшава є столицею та найбільшим містом Польщі. Мегаполіс розташований
                                    на річції Вісла у східно-центральній Польщі, а його населення офіційно
                                    оцінюється в 1,8 мільйона жителів у більшій агломерації з 3,1 мільйона
                                    жителів, що робить Варшаву 7-ю за чисєльністю населення столицею в
                                    Європейському Союзі. Варшава є альфа-глобальним містом, ґоловним
                                    міжнародним туристичним центром і значним культурним, політичним та
                                    економічним центром. Його історичне Старе місто було визнано обьєктом
                                    Всесвітньої спадщини ЮНЕСКО.
                                </p>
                                <p>&nbsp;</p>
                            </div>
                        </div>


                        {{-- ///////////////////////////////////////////////////////// --}}


                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-3 text-start my-4">
                        <button type="submit" class="btn btn-info m-4">ثبت دسته</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
