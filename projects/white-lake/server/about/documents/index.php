<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Документы");
?>

<section class="section page single about">
    <div class="container">
        <h2 class="section__title">
            Документы
        </h2>
        <div class="about__wrapper">
            <div class="about__nav">
                <a href="/about/" class="about__link">О компании</a>
                <a href="/about/reviews/" class="about__link">Отзывы</a>
                <a class="about__link about__link--active">Документы</a>
                <a href="/about/faq/" class="about__link">Частые вопросы</a>
                <a href="/about/gallery/" class="about__link">Фотогалерея</a>
            </div>
            <div class="about__content">
                <div class="about__contentItem">
                    <h3 class="about__title">Свидетельства соответствия</h3>
                    <p class="text">
                        Нормативно-правовые документы о соответствии санитарным и пожарным правилам используемой территории, здания, строений, оборудований и транспортных средств
                    </p>
                    <div class="about__imgWrapper">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/about/documents-license-1.jpg" alt="">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/about/documents-license-2.jpg" alt="">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/about/documents-license-3.jpg" alt="">
                    </div>
                </div>
                <div class="about__contentItem">
                    <h3 class="about__title">Лицензии на осуществление деятельности</h3>
                    <p class="text">
                        Документы, подтверждающие соответствие заявленных услуг нормативам, установленным законодательством или иными правовыми актами. А также разрешающие осуществлять указанные виды деятельности:
                    </p>
                    <div class="about__imgWrapper">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/about/documents-certificate-1.jpg" alt="">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/about/documents-certificate-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>