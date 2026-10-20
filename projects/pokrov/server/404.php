<?php get_header(); ?>
	<section class="notFound">
		<div class="container">
			<div class="notFound__body">
				<h1 class="title title--h2 notFound__title">
					<span>404</span> 
					<?php 
						switch ($lang) {
						    case 'ua':
						        echo "сторінку не знайдено";
						        break;
						    case 'en':
						        echo "page not found";
						        break;
						    case 'cz':
						        echo "stránka nebyla nalezena";
						        break;
						    default:
						       echo "страница не найдена";
						        break;
						}
					?>
				</h1>
				<p class="notFound__caption">
					<?php 
						switch ($lang) {
						    case 'ua':
						        echo "неправильно набрана адреса або такої сторінки не існує";
						        break;
						    case 'en':
						        echo "the address is typed incorrectly or there is no such page";
						        break;
						    case 'cz':
						        echo "nesprávně zadaná adresa nebo taková stránka neexistuje";
						        break;
						    default:
						       echo "неправильно набран адрес или такой страницы не существует";
						        break;
						}
					?>
				</p>
				<a href="/" class="button notFound__button">
					<?php 
						switch ($lang) {
						    case 'ua':
						        echo "Перейти на головну";
						        break;
						    case 'en':
						        echo "Go to the main page";
						        break;
						    case 'cz':
						        echo "Přejít na hlavní";
						        break;
						    default:
						       echo "Перейти на главную";
						        break;
						}
					?>
				</a>
			</div>
		</div>
	</section>
<?php get_footer(); ?>