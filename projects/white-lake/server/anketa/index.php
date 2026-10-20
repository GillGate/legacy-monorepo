<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Анкета");
?>

<section class="section section--review page">
    <div class="container">
        <div class="anketa__head">
            <h1 class="section__title">Анкета обратной связи</h1>
            <p class="text">
                Уважаемые гости! Пожалуйста, уделите нам пару минут Вашего времени и оцените работу нашей команды. Это позволит повысить качество обслуживания и учесть Ваши пожелания в дальнейшей работе.
            </p>
        </div>
        <div class="anketa__wrapper">
            <aside class="anketa__aside">
                <div class="anketa__img">
                    <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/page/anketa-aside-1.jpg" alt="">
                </div>
                <div class="anketa__img">
                    <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/page/anketa-aside-2.jpg" alt="">
                </div>
            </aside>
            <form class="anketa__form">
                <h2 class="vh">Анкета</h2>
                <div class="estimate__item">
                    <h3 class="estimate__title">Когда вы у нас отдыхали?<span>*</span></h3>
                    <select class="estimate__input estimate__select estimate__select--short" name="year">
                        <option value="" selected disabled>Год</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                    </select>
                    <select class="estimate__input estimate__select estimate__select--short" name="month">
                        <option value="" selected disabled>Месяц</option>
                        <option value="Январь">Январь</option>
                        <option value="Февраль">Февраль</option>
                        <option value="Март">Март</option>
                        <option value="Апрель">Апрель</option>
                        <option value="Май">Май</option>
                        <option value="Июнь">Июнь</option>
                        <option value="Июль">Июль</option>
                        <option value="Август">Август</option>
                        <option value="Сентябрь">Сентябрь</option>
                        <option value="Октябрь">Октябрь</option>
                        <option value="Ноябрь">Ноябрь</option>
                        <option value="Декабрь">Декабрь</option>
                    </select>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">Пожалуйста, укажите санаторий<span>*</span></h3>
                    <select class="estimate__input estimate__select" name="sanatory">
                        <option value="Детский санаторий им.Т. Г. Шевченко">Детский санаторий им.Т. Г. Шевченко</option>
                        <option value="Санаторий Звенигород">Санаторий Звенигород</option>
                        <option value="Санаторий Озеро Белое">Санаторий Озеро Белое</option>
                        <option value="Санаторий Литвиново">Санаторий Литвиново</option>
                        <option value="Санаторий Волна">Санаторий Волна</option>
                        <option value="Пансионат Изумруд">Пансионат Изумруд</option>
                        <option value="База отдыха Адлер">База отдыха Адлер</option>
                        <option value="Санаторий Первомайский">Санаторий Первомайский</option>
                    </select>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">3. Сколько времени Вы ожидали заселения?<span>*</span></h3>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-3-1" name="anketa-q-3" value="Быстро оформили">
                        <label for="anketa-q-3-1" class="estimate__radioLabel">
                            Быстро оформили
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-3-2" name="anketa-q-3" value="15 мин">
                        <label for="anketa-q-3-2" class="estimate__radioLabel">
                            15 мин
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-3-3" name="anketa-q-3" value="30 мин" >
                        <label for="anketa-q-3-3" class="estimate__radioLabel">
                            30 мин
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-3-4" name="anketa-q-3" value="45 мин">
                        <label for="anketa-q-3-4" class="estimate__radioLabel">
                            45 мин
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-3-5" name="anketa-q-3" value="1 час">
                        <label for="anketa-q-3-5" class="estimate__radioLabel">
                            1 час
                        </label>
                    </div>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">4. Впечатление о работе администратора (доброжелательность)<span>*</span></h3>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-4-1" name="anketa-q-4" value="5 баллов">
                        <label for="anketa-q-4-1" class="estimate__radioLabel">
                            5 баллов
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-4-2" name="anketa-q-4" value="4 балла">
                        <label for="anketa-q-4-2" class="estimate__radioLabel">
                            4 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-4-3" name="anketa-q-4" value="3 балла">
                        <label for="anketa-q-4-3" class="estimate__radioLabel">
                            3 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-4-4" name="anketa-q-4" value="2 балла">
                        <label for="anketa-q-4-4" class="estimate__radioLabel">
                            2 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-4-5" name="anketa-q-4" value="1 балл">
                        <label for="anketa-q-4-5" class="estimate__radioLabel">
                            1 балл
                        </label>
                    </div>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">5. Вам предлагали дополнительные платные услуги?<span>*</span></h3>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-5-1" name="anketa-q-5" value="да">
                        <label for="anketa-q-5-1" class="estimate__radioLabel">
                            да
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-5-2" name="anketa-q-5" value="нет">
                        <label for="anketa-q-5-2" class="estimate__radioLabel">
                            нет
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-5-3" name="anketa-q-5" value="не помню">
                        <label for="anketa-q-5-3" class="estimate__radioLabel">
                            не помню
                        </label>
                    </div>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">6. Насколько довольны спектром дополнительных медицинских услуг?</h3>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-6-1" name="anketa-q-6" value="5 баллов">
                        <label for="anketa-q-6-1" class="estimate__radioLabel">
                            5 баллов
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-6-2" name="anketa-q-6" value="4 балла">
                        <label for="anketa-q-6-2" class="estimate__radioLabel">
                            4 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-6-3" name="anketa-q-6" value="3 балла">
                        <label for="anketa-q-6-3" class="estimate__radioLabel">
                            3 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-6-4" name="anketa-q-6" value="2 балла">
                        <label for="anketa-q-6-4" class="estimate__radioLabel">
                            2 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-6-5" name="anketa-q-6" value="1 балл">
                        <label for="anketa-q-6-5" class="estimate__radioLabel">
                            1 балл
                        </label>
                    </div>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">7. Удовлетворены ли Вы компетентностью медицинских работников медицинской организации?</h3>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-7-1" name="anketa-q-7" value="5 баллов">
                        <label for="anketa-q-7-1" class="estimate__radioLabel">
                            5 баллов
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-7-2" name="anketa-q-7" value="4 балла">
                        <label for="anketa-q-7-2" class="estimate__radioLabel">
                            4 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-7-3" name="anketa-q-7" value="3 балла">
                        <label for="anketa-q-7-3" class="estimate__radioLabel">
                            3 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-7-4" name="anketa-q-7" value="2 балла">
                        <label for="anketa-q-7-4" class="estimate__radioLabel">
                            2 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-7-5" name="anketa-q-7" value="1 балл">
                        <label for="anketa-q-7-5" class="estimate__radioLabel">
                            1 балл
                        </label>
                    </div>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">8. Впечатление о работе медсестры процедурного кабинета (если сдавали анализы)</h3>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-8-1" name="anketa-q-8" value="5 баллов">
                        <label for="anketa-q-8-1" class="estimate__radioLabel">
                            5 баллов
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-8-2" name="anketa-q-8" value="4 балла">
                        <label for="anketa-q-8-2" class="estimate__radioLabel">
                            4 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-8-3" name="anketa-q-8" value="3 балла">
                        <label for="anketa-q-8-3" class="estimate__radioLabel">
                            3 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-8-4" name="anketa-q-8" value="2 балла">
                        <label for="anketa-q-8-4" class="estimate__radioLabel">
                            2 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-8-5" name="anketa-q-8" value="1 балл">
                        <label for="anketa-q-8-5" class="estimate__radioLabel">
                            1 балл
                        </label>
                    </div>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">9. Комфорт и удобство клиентской зоны во время ожидания приема</h3>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-9-1" name="anketa-q-9" value="5 баллов">
                        <label for="anketa-q-9-1" class="estimate__radioLabel">
                            5 баллов
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-9-2" name="anketa-q-9" value="4 балла">
                        <label for="anketa-q-9-2" class="estimate__radioLabel">
                            4 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-9-3" name="anketa-q-9" value="3 балла">
                        <label for="anketa-q-9-3" class="estimate__radioLabel">
                            3 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-9-4" name="anketa-q-9" value="2 балла">
                        <label for="anketa-q-9-4" class="estimate__radioLabel">
                            2 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-9-5" name="anketa-q-9" value="1 балл">
                        <label for="anketa-q-9-5" class="estimate__radioLabel">
                            1 балл
                        </label>
                    </div>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">10. Оцените, пожалуйста, качество питания<span>*</span></h3>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-10-1" name="anketa-q-10" value="5 баллов">
                        <label for="anketa-q-10-1" class="estimate__radioLabel">
                            5 баллов
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-10-2" name="anketa-q-10" value="4 балла">
                        <label for="anketa-q-10-2" class="estimate__radioLabel">
                            4 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-10-3" name="anketa-q-10" value="3 балла">
                        <label for="anketa-q-10-3" class="estimate__radioLabel">
                            3 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-10-4" name="anketa-q-10" value="2 балла">
                        <label for="anketa-q-10-4" class="estimate__radioLabel">
                            2 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-10-5" name="anketa-q-10" value="1 балл">
                        <label for="anketa-q-10-5" class="estimate__radioLabel">
                            1 балл
                        </label>
                    </div>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">11. Оцените, пожалуйста, качество уборки номера<span>*</span></h3>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-11-1" name="anketa-q-11" value="5 баллов">
                        <label for="anketa-q-11-1" class="estimate__radioLabel">
                            5 баллов
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-11-2" name="anketa-q-11" value="4 балла">
                        <label for="anketa-q-11-2" class="estimate__radioLabel">
                            4 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-11-3" name="anketa-q-11" value="3 балла">
                        <label for="anketa-q-11-3" class="estimate__radioLabel">
                            3 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-11-4" name="anketa-q-11" value="2 балла">
                        <label for="anketa-q-11-4" class="estimate__radioLabel">
                            2 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-11-5" name="anketa-q-11" value="1 балл">
                        <label for="anketa-q-11-5" class="estimate__radioLabel">
                            1 балл
                        </label>
                    </div>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">12. Удовлетворены ли Вы состоянием прилегающей территории и объектов инфраструктуры санатория?<span>*</span></h3>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-12-1" name="anketa-q-12" value="5 баллов">
                        <label for="anketa-q-12-1" class="estimate__radioLabel">
                            5 баллов
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-12-2" name="anketa-q-12" value="4 балла">
                        <label for="anketa-q-12-2" class="estimate__radioLabel">
                            4 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-12-3" name="anketa-q-12" value="3 балла">
                        <label for="anketa-q-12-3" class="estimate__radioLabel">
                            3 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-12-4" name="anketa-q-12" value="2 балла">
                        <label for="anketa-q-12-4" class="estimate__radioLabel">
                            2 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-12-5" name="anketa-q-12" value="1 балл">
                        <label for="anketa-q-12-5" class="estimate__radioLabel">
                            1 балл
                        </label>
                    </div>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">13. Удовлетворены ли Вы условиями пребывания в санатории?<span>*</span></h3>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-13-1" name="anketa-q-13" value="5 баллов">
                        <label for="anketa-q-13-1" class="estimate__radioLabel">
                            5 баллов
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-13-2" name="anketa-q-13" value="4 балла">
                        <label for="anketa-q-13-2" class="estimate__radioLabel">
                            4 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-13-3" name="anketa-q-13" value="3 балла">
                        <label for="anketa-q-13-3" class="estimate__radioLabel">
                            3 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-13-4" name="anketa-q-13" value="2 балла">
                        <label for="anketa-q-13-4" class="estimate__radioLabel">
                            2 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-13-5" name="anketa-q-13" value="1 балл">
                        <label for="anketa-q-13-5" class="estimate__radioLabel">
                            1 балл
                        </label>
                    </div>
                </div>
                <div class="estimate__item">
                    <h3 class="estimate__title">14. Рекомендовали бы Вы наш санаторий для получения медицинской помощи/реабилитации?<span>*</span></h3>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-14-1" name="anketa-q-14" value="5 баллов">
                        <label for="anketa-q-14-1" class="estimate__radioLabel">
                            5 баллов
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-14-2" name="anketa-q-14" value="4 балла">
                        <label for="anketa-q-14-2" class="estimate__radioLabel">
                            4 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-14-3" name="anketa-q-14" value="3 балла">
                        <label for="anketa-q-14-3" class="estimate__radioLabel">
                            3 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-14-4" name="anketa-q-14" value="2 балла">
                        <label for="anketa-q-14-4" class="estimate__radioLabel">
                            2 балла
                        </label>
                    </div>
                    <div class="estimate__radioItem">
                        <input type="radio" class="vh estimate__radio" id="anketa-q-14-5" name="anketa-q-14" value="1 балл">
                        <label for="anketa-q-14-5" class="estimate__radioLabel">
                            1 балл
                        </label>
                    </div>
                </div>
                <div class="estimate__item estimate__confirm">
                    <div class="estimate__send">
                        <button class="button estimate__submit" id="anketaSubmit">Отправить</button>
                        <p class="estimate__result estimate__result--show"></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>