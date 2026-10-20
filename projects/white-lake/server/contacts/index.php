<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><section class="section section--page page">
<div class="container">
	<h1 class="section__title">Контакты</h1>
	<div class="page__box contact__wrapper">
		<div class="contact__item">
			<h2 class="contact__title contact__title--phone">Телефон</h2>
			<div class="contact__info">
 <a href="tel:+886222460169" class="contact__phone">+8 (862) 246-01-69</a> - отдел бронирования
 <a href="tel:+886222460172" class="contact__phone">+ 7 (862) 246-01-72</a> - служба размещения
			</div>
		</div>
		<div class="contact__item">
			<h2 class="contact__title contact__title--period">Работаем</h2>
			<div class="contact__info">
				 с ПН по ПТ:<br>
				 с 8.00 до 20.00
			</div>
		</div>
		<div class="contact__item">
			<h2 class="contact__title contact__title--location">Адрес</h2>
			<div class="contact__info">
 				<address>
				354340, <br>
				 Краснодарский край, г. Сочи, <br>
				 Адлерский район, ул. Ленина, <br>
				 д. 278а </address>
			</div>
		</div>
		<div class="contact__item">
			<h2 class="contact__title contact__title--mail">Почта</h2>
			<div class="contact__info">
 <a href="mailto:izumrud@gupmc.ru">izumrud@gupmc.ru</a>
			</div>
		</div>
	</div>
	<div class="page__item" id="contact">
		<h2 class="section__title">
		Оставьте своё обращение! </h2>
		<div class="estimate estimate--contacts">
 <button href="#" class="button estimate__open">Оставить отзыв</button>
		</div>
		<form class="estimate__form estimate__form--contacts">
			<div class="estimate__wrapper">
				<p class="estimate__caption">
					 Пожалуйста, заполните форму<br>
					 Поля, отмеченные * обязательны к заполнению
				</p>
				<div class="estimate__item">
					<h3 class="estimate__title">1. Заявитель:</h3>
					<div class="estimate__radioItem">
 <input type="radio" class="vh estimate__radio" id="face-individual" name="requester" value="Физическое лицо"> <label for="face-individual" class="estimate__radioLabel">
						Физическое лицо </label>
					</div>
					<div class="estimate__radioItem">
 <input type="radio" class="vh estimate__radio" id="face-legal" name="requester" value="Физическое лицо"> <label for="face-legal" class="estimate__radioLabel">
						Юридическое лицо </label>
					</div>
				</div>
				<div class="estimate__item">
					<h3 class="estimate__title">2. Параметры обращения:</h3>
 <label class="estimate__label estimate__label--select">
					<p>
						 Тип обращения*
					</p>
					<select class="estimate__input estimate__select" name="type">
						<option value="" selected="" disabled="">Текст название обращения</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
 </label> <label class="estimate__label estimate__label--select">
					<p>
						 Тематика*
					</p>
					<select class="estimate__input estimate__select" name="theme">
						<option value="" selected="" disabled="">Текст тематики обращения</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
 </label> <label class="estimate__label estimate__label--select">
					<p>
						 Уточните тематику
					</p>
					<select class="estimate__input estimate__select" name="theme_current">
						<option value="" selected="" disabled="">Уточните тематику</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
 </label>
				</div>
				<div class="estimate__item">
					<h3 class="estimate__title">3. Информация об объекте обращения:</h3>
 <label class="estimate__label">
					<p>
						 Краткое описание*
					</p>
 <textarea class="estimate__input estimate__input--textarea estimate__input--short" name="short_desc" placeholder="Начите вводить текст" maxlength="255"></textarea> </label>
					<p class="estimate__counter estimate__counter--short_desc">
						 Вы можете ввести не более 255 символов (осталось <span>255</span>)
					</p>
					<div class="estimate__attach">
						<p>
							 Вложения
						</p>
 <label class="estimate__attachLabel">
						Выберите файл <input type="file" class="vh" name="attachments" multiple="" accept=".txt, .doc, .docx, .rtf, .xls, .pps, .ppt, .png, .tif, .gif, .bmp, .jpg, .jpeg, .pdf"> </label>
						<p class="estimate__attachCaption">
							 Максимальный размер файла 2 МБ, не более 10 файлов. Форматы: txt, doc, rtf, xls, pps, ppt, png, tif, gif, bmp, jpeg, pdf.
						</p>
					</div>
				</div>
				<div class="estimate__item">
					<h3 class="estimate__title">4. Описание ситуации / контекста</h3>
 <label class="estimate__label"> <textarea class="estimate__input estimate__input--textarea" name="desc" placeholder="Начите вводить текст" maxlength="1500"></textarea> </label>
					<p class="estimate__counter estimate__counter--desc">
						 Осталось символов <span>1 500</span>
					</p>
				</div>
				<div class="estimate__item">
					<h3 class="estimate__title">Контактная информация</h3>
 <label class="estimate__label">
					<p>
						 Фамилия*
					</p>
 <input type="text" name="sec_name" class="estimate__input" placeholder="Фамилия"> </label> <label class="estimate__label">
					<p>
						 Имя*
					</p>
 <input type="text" name="name" class="estimate__input" placeholder="Имя"> </label> <label class="estimate__label">
					<p>
						 Отчество*
					</p>
 <input type="text" name="fatherhood" class="estimate__input" placeholder="Отчество"> </label> <label class="estimate__label">
					<p>
						 Контактный телефон*
					</p>
 <input type="phone" name="phone" class="estimate__input" placeholder="(___) __ __"> </label> <label class="estimate__label">
					<p>
						 Электронная почта для обратной связи*
					</p>
 <input type="email" name="email" class="estimate__input" placeholder="Email"> </label>
				</div>
				<div class="estimate__item estimate__confirm">
					<div class="estimate__checkboxItem">
 <input type="checkbox" class="vh estimate__checkbox" id="confirm" name="confirm"> <label for="confirm" class="estimate__checkboxLabel">
						Я ознакомлен и принимаю правила приёма и обработки обращений граждан в Государственное унитарное предприятие города Москвы «Медицинский центр Управления делами Мэра и Правительства Москвы» </label>
					</div>
				</div>
			</div>
			<div class="estimate__send">
 <button class="button estimate__submit" id="recourseSubmit">Оставить обращение</button>
				<p class="estimate__result estimate__result--show">
					 Ваше обращение отправлено!
				</p>
			</div>
		</form>
	</div>
	<div class="page__item page__item--double">
		<div class="page__img page__img--aside">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/page/contacts-aside.jpg" alt="">
		</div>
		<div class="page__box">
			<h3 class="page__title">
			Проезд до санатория </h3>
			<div class="page__text">
				<p class="text">
 <b>Общественным транспортом</b>
				</p>
				<p>
					 Для приезжающих и прилетающих из других регионов рекомендуем ориентироваться на городской транспорт, выезжающий от железнодорожного вокзала Адлер. От аэровокзала Сочи к железнодорожному вокзалу следует электропоезд «Ласточка» (~15 минут в пути) (~30 минут), маршрутное такси. Есть возможность взять такси или арендовать автомобиль.
				</p>
				<p>
					 От железнодорожного вокзала рекомендуем выбрать автобусы, следующие до остановки Совхоз Россия. Эта остановка ближе всего в базе. Обратите внимание, что остановки городского транспорта, следующего в сторону базы находятся в разных местах вокзала, и вариантов проезда до ул.Цимлянская, д.1 поселок Веселое много. Предлагаем выбрать автобусы 125 и 54, маршрутные такси 57, 100, 50, 126.
				</p>
				<p>
 <b>Автотранспортом</b>
				</p>
				<p>
					 Проезд на автотранспорте от аэропорта занимает 30 минут. От центра Сочи 50 минут. Рассчитывайте движение с учетом пробок в городе. Основные трассы Курортный проспект Сочи, улица Ленина, Каспийская улица или трасса Адлер-Веселое. Обратите, пожалуйста, внимание, что около первых домов на улице Цимлянская одностороннее движение, от Таврической улицы.
				</p>
				<p>
 <b>Общественным транспортом:</b><br>
				</p>
				<p>
					 •&nbsp;&nbsp;&nbsp; Широта –&nbsp;43.38945617980702
				</p>
				<p>
				</p>
				<p>
					 •&nbsp;&nbsp;&nbsp; Долгота – 39.98365759849549
				</p>
			</div>
		</div>
	</div>
</div>
 </section>
<div class="contact">
	<div class="contact__map">
		 <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A691ff50f794288daa5f2a3ead9cf4dc30884d92f192d5c905b746539926892b5&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
	</div>
	<div class="container">
		<div class="contact__social contact__social--page">
			<h3 class="contact__title contact__title--social">
			Подписывайтесь на нас в соц. сетях! </h3>
 <a href="https://vk.com/gupmc" target="_blank" rel="noopener" class="contact__socialLink contact__socialLink--vk">
			vk.com/Sanatory </a> <a href="https://www.facebook.com/gup_mc-103809921634409" target="_blank" rel="noopener" class="contact__socialLink contact__socialLink--fb">
			facebook.com/Sanator... </a> <a href="https://www.instagram.com/gup_mc/" target="_blank" rel="noopener" class="contact__socialLink contact__socialLink--in">
			Sanatory_instagram </a> <a href="https://www.youtube.com/channel/UCcqEvB1iGpEVryDlq60bpWQ/videos" target="_blank" rel="noopener" class="contact__socialLink contact__socialLink--yt">
			youtube.com/Sanator.. </a>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>