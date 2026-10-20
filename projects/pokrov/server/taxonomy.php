<?php get_header(); ?>
<?php 
	$url = $_SERVER['REQUEST_URI'];
	$url = explode('?', $url);
	$url = $url[0];

	$lang = '';

	if(strpos($url, 'ua')) {
		$lang = 'ua';
	} else if (strpos($url, 'cz')) {
		$lang = 'cz';
	} else if (strpos($url, 'en')) {
		$lang = 'en';
	} else {
		$lang = 'ru';
	}

	$context_lang = $lang === 'ru' ? "" : "/$lang";
?>
	<section class="vakancies vakancies--all" id="vakancy">
		<div class="container">
			<h2 class="title title--h2 vakancies__title">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "Актуальні вакансії";
					        break;
					    case 'en':
					        echo "Current vacancies";
					        break;
					    case 'cz':
					        echo "Aktuální pracovní pozice";
					        break;
					    default:
					       echo "Актуальные вакансии";
					        break;
					}
				?>
			</h2>
			<?php 
				$professions = get_terms(['taxonomy' => 'profession']);
				$post_id = get_the_ID();
				$current_profession = wp_get_object_terms($post_id, 'profession')[0];
				$vakancies = getVakancies($current_profession->slug);
			?>
			<div class="vakancies__options">
				<a class="vakancies__option" href="<?php echo $context_lang; ?>/vakancy/">
					<?php 
						switch ($lang) {
						    case 'ua':
						        echo "Всі";
						        break;
						    case 'en':
						        echo "All";
						        break;
						    case 'cz':
						        echo "Všechny";
						        break;
						    default:
						       echo "Все";
						        break;
						}
					?>
				</a>
				<?php foreach($professions as $profession) { ?>
					<?php if($profession->slug === $current_profession->slug) { ?>
						<a class="vakancies__option vakancies__option--current"><?php echo "$profession->name"; ?></a>
					<?php } else { ?>
					<a class="vakancies__option" href="<?php echo $context_lang; ?>/profession/<?php echo "$profession->slug"; ?>"><?php echo "$profession->name"; ?></a>
					<?php } ?>
				<?php } ?>
			</div>
			<div class="vakancies__length">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "Всього вакансій: ";
					        break;
					    case 'en':
					        echo "Total vacancies: ";
					        break;
					    case 'cz':
					        echo "Celkem volných míst: ";
					        break;
					    default:
					       echo "Всего вакансий: ";
					        break;
					}
				?>
				<?php echo count($vakancies); ?>
			</div>
			<div class="vakancies__list">
				<?php foreach($vakancies as $vakancy) { ?>
					<article class="vakancies__item vakancy" data-name="<?php echo $vakancy['title']; ?>">
						<div class="vakancy__header" style="background-image: url(<?php echo $vakancy['img']; ?>);">
							<h3 class="title title--h3 vakancy__title"><?php echo $vakancy['title']; ?></h3>
						</div>
						<div class="vakancy__body">
							<div class="vakancy__bodyTop">
								<p class="vakancy__salary">
									<span>
										<?php 
											switch ($lang) {
											    case 'ua':
											        echo "Заробітна платня:";
											        break;
											    case 'en':
											        echo "Sallary:";
											        break;
											    case 'cz':
											        echo "Mzda:";
											        break;
											    default:
											       echo "Заработная плата:";
											        break;
											}
										?>
									</span>
									<strong><?php echo $vakancy['salary']; ?></strong> 
									<?php 
										switch ($lang) {
										    case 'ua':
										        echo "Kč / год";
										        break;
										    case 'en':
										        echo "Kč / hour";
										        break;
										    case 'cz':
										        echo "Kč / hod";
										        break;
										    default:
										       echo "Kč / час";
										        break;
										}
									?>
								</p>
							</div>
							<div class="vakancy__details">
								<span class="vakancy__location"><?php echo $vakancy['location']; ?></span>
								<ul class="vakancy__conditions">
									<?php foreach($vakancy['conditions'] as $condition) { ?>
										<li><?php echo get_term($condition)->name; ?></li>
									<?php } ?>
								</ul>
								<div class="vakancy__description">
									<?php echo wpautop($vakancy['text']); ?>
								</div>
								<button class="button vakancy__reserve">
									<?php 
										switch ($lang) {
										    case 'ua':
										        echo "Забронювати вакансію";
										        break;
										    case 'en':
										        echo "Book a vacancy";
										        break;
										    case 'cz':
										        echo "Rezervovat volné místo";
										        break;
										    default:
										       echo "Забронировать вакансию";
										        break;
										}
									?>
								</button>
							</div>
						</div>
					</article>
				<?php } ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>