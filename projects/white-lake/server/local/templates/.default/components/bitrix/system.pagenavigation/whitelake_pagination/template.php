<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

$colorSchemes = array(
	"green" => "bx-green",
	"yellow" => "bx-yellow",
	"red" => "bx-red",
	"blue" => "bx-blue",
);
if(isset($colorSchemes[$arParams["TEMPLATE_THEME"]]))
{
	$colorScheme = $colorSchemes[$arParams["TEMPLATE_THEME"]];
}
else
{
	$colorScheme = "";
}
?>

<div class="bx-pagination <?=$colorScheme?>">
	<div class="bx-pagination-container">
		<ul>
<?if($arResult["bDescPageNumbering"] === true):?>

	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
			<li class="bx-pag-prev">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
					<svg width="23" height="12" viewBox="0 0 23 12" fill="#FEA800" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.263512 7.06566C0.263781 7.06593 0.264006 7.06624 0.26432 7.06651L4.95884 11.7384C5.31053 12.0884 5.87938 12.0871 6.22945 11.7353C6.57948 11.3836 6.57813 10.8148 6.22644 10.4648L3.07454 7.32813L22.1016 7.32813C22.5978 7.32813 23 6.9259 23 6.4297C23 5.93349 22.5978 5.53126 22.1016 5.53126L3.07459 5.53126L6.2264 2.39464C6.57809 2.04461 6.57944 1.47577 6.22941 1.12407C5.87933 0.772289 5.31044 0.771077 4.95879 1.12102L0.264275 5.79289C0.264006 5.79316 0.263781 5.79347 0.263466 5.79374C-0.0884075 6.14494 -0.0872841 6.71563 0.263512 7.06566Z"/>
					</svg>
				</a>
			</li>
			<li class="">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
					<span>1</span>
				</a>
			</li>
		<?else:?>
			<?if (($arResult["NavPageNomer"]+1) == $arResult["NavPageCount"]):?>
				<li class="bx-pag-prev">
					<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
						<svg width="23" height="12" viewBox="0 0 23 12" fill="#FEA800" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.263512 7.06566C0.263781 7.06593 0.264006 7.06624 0.26432 7.06651L4.95884 11.7384C5.31053 12.0884 5.87938 12.0871 6.22945 11.7353C6.57948 11.3836 6.57813 10.8148 6.22644 10.4648L3.07454 7.32813L22.1016 7.32813C22.5978 7.32813 23 6.9259 23 6.4297C23 5.93349 22.5978 5.53126 22.1016 5.53126L3.07459 5.53126L6.2264 2.39464C6.57809 2.04461 6.57944 1.47577 6.22941 1.12407C5.87933 0.772289 5.31044 0.771077 4.95879 1.12102L0.264275 5.79289C0.264006 5.79316 0.263781 5.79347 0.263466 5.79374C-0.0884075 6.14494 -0.0872841 6.71563 0.263512 7.06566Z"/>
						</svg>
					</a>
				</li>
			<?else:?>
				<li class="bx-pag-prev">
					<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
						<svg width="23" height="12" viewBox="0 0 23 12" fill="#FEA800" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.263512 7.06566C0.263781 7.06593 0.264006 7.06624 0.26432 7.06651L4.95884 11.7384C5.31053 12.0884 5.87938 12.0871 6.22945 11.7353C6.57948 11.3836 6.57813 10.8148 6.22644 10.4648L3.07454 7.32813L22.1016 7.32813C22.5978 7.32813 23 6.9259 23 6.4297C23 5.93349 22.5978 5.53126 22.1016 5.53126L3.07459 5.53126L6.2264 2.39464C6.57809 2.04461 6.57944 1.47577 6.22941 1.12407C5.87933 0.772289 5.31044 0.771077 4.95879 1.12102L0.264275 5.79289C0.264006 5.79316 0.263781 5.79347 0.263466 5.79374C-0.0884075 6.14494 -0.0872841 6.71563 0.263512 7.06566Z"/>
						</svg>
					</a>
				</li>
			<?endif?>
			<li class="">
				<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
					<span>1</span>
				</a>
			</li>
		<?endif?>
	<?else:?>
			<li class="bx-pag-prev">
				<svg width="23" height="12" viewBox="0 0 23 12" fill="#FEA800" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.263512 7.06566C0.263781 7.06593 0.264006 7.06624 0.26432 7.06651L4.95884 11.7384C5.31053 12.0884 5.87938 12.0871 6.22945 11.7353C6.57948 11.3836 6.57813 10.8148 6.22644 10.4648L3.07454 7.32813L22.1016 7.32813C22.5978 7.32813 23 6.9259 23 6.4297C23 5.93349 22.5978 5.53126 22.1016 5.53126L3.07459 5.53126L6.2264 2.39464C6.57809 2.04461 6.57944 1.47577 6.22941 1.12407C5.87933 0.772289 5.31044 0.771077 4.95879 1.12102L0.264275 5.79289C0.264006 5.79316 0.263781 5.79347 0.263466 5.79374C-0.0884075 6.14494 -0.0872841 6.71563 0.263512 7.06566Z"/>
				</svg>
			</li>
			<li class="bx-active">
				<span>1</span>
			</li>
	<?endif?>

	<?
	$arResult["nStartPage"]--;
	while($arResult["nStartPage"] >= $arResult["nEndPage"]+1):
	?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<li class="bx-active"><span><?=$NavRecordGroupPrint?></span></li>
		<?else:?>
			<li class="">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>">
					<span><?=$NavRecordGroupPrint?></span>
				</a>
			</li>
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>

	<?if ($arResult["NavPageNomer"] > 1):?>
		<?if($arResult["NavPageCount"] > 1):?>
			<li class="">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1">
					<span><?=$arResult["NavPageCount"]?></span>
				</a>
			</li>
		<?endif?>
			<li class="bx-pag-next">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
					<svg width="23" height="12" viewBox="0 0 23 12" fill="#FEA800" xmlns="http://www.w3.org/2000/svg">
						<path d="M22.7365 4.93434C22.7362 4.93407 22.736 4.93376 22.7357 4.93349L18.0412 0.261622C17.6895 -0.0883641 17.1206 -0.0870617 16.7705 0.264676C16.4205 0.616369 16.4219 1.18521 16.7736 1.53524L19.9255 4.67187H0.898438C0.402231 4.67187 0 5.0741 0 5.5703C0 6.06651 0.402231 6.46874 0.898438 6.46874H19.9254L16.7736 9.60536C16.4219 9.95539 16.4206 10.5242 16.7706 10.8759C17.1207 11.2277 17.6896 11.2289 18.0412 10.879L22.7357 6.20711C22.736 6.20684 22.7362 6.20653 22.7365 6.20626C23.0884 5.85506 23.0873 5.28437 22.7365 4.93434Z"/>
					</svg>
				</a>
			</li>
	<?else:?>
		<?if($arResult["NavPageCount"] > 1):?>
			<li class="bx-active"><span><?=$arResult["NavPageCount"]?></span></li>
		<?endif?>
			<li class="bx-pag-next">
				<svg width="23" height="12" viewBox="0 0 23 12" fill="#C4C4C4" xmlns="http://www.w3.org/2000/svg">
					<path d="M22.7365 4.93434C22.7362 4.93407 22.736 4.93376 22.7357 4.93349L18.0412 0.261622C17.6895 -0.0883641 17.1206 -0.0870617 16.7705 0.264676C16.4205 0.616369 16.4219 1.18521 16.7736 1.53524L19.9255 4.67187H0.898438C0.402231 4.67187 0 5.0741 0 5.5703C0 6.06651 0.402231 6.46874 0.898438 6.46874H19.9254L16.7736 9.60536C16.4219 9.95539 16.4206 10.5242 16.7706 10.8759C17.1207 11.2277 17.6896 11.2289 18.0412 10.879L22.7357 6.20711C22.736 6.20684 22.7362 6.20653 22.7365 6.20626C23.0884 5.85506 23.0873 5.28437 22.7365 4.93434Z"/>
				</svg>
			</li>
	<?endif?>

<?else:?>

	<?if ($arResult["NavPageNomer"] > 1):?>
		<?if($arResult["bSavePage"]):?>
			<li class="bx-pag-prev">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
					<svg width="23" height="12" viewBox="0 0 23 12" fill="#FEA800" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.263512 7.06566C0.263781 7.06593 0.264006 7.06624 0.26432 7.06651L4.95884 11.7384C5.31053 12.0884 5.87938 12.0871 6.22945 11.7353C6.57948 11.3836 6.57813 10.8148 6.22644 10.4648L3.07454 7.32813L22.1016 7.32813C22.5978 7.32813 23 6.9259 23 6.4297C23 5.93349 22.5978 5.53126 22.1016 5.53126L3.07459 5.53126L6.2264 2.39464C6.57809 2.04461 6.57944 1.47577 6.22941 1.12407C5.87933 0.772289 5.31044 0.771077 4.95879 1.12102L0.264275 5.79289C0.264006 5.79316 0.263781 5.79347 0.263466 5.79374C-0.0884075 6.14494 -0.0872841 6.71563 0.263512 7.06566Z"/>
					</svg>
				</a>
			</li>
			<li class="">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1">
					<span>1</span>
				</a>
			</li>
		<?else:?>
			<?if ($arResult["NavPageNomer"] > 2):?>
				<li class="bx-pag-prev">
					<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
					<svg width="23" height="12" viewBox="0 0 23 12" fill="#FEA800" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.263512 7.06566C0.263781 7.06593 0.264006 7.06624 0.26432 7.06651L4.95884 11.7384C5.31053 12.0884 5.87938 12.0871 6.22945 11.7353C6.57948 11.3836 6.57813 10.8148 6.22644 10.4648L3.07454 7.32813L22.1016 7.32813C22.5978 7.32813 23 6.9259 23 6.4297C23 5.93349 22.5978 5.53126 22.1016 5.53126L3.07459 5.53126L6.2264 2.39464C6.57809 2.04461 6.57944 1.47577 6.22941 1.12407C5.87933 0.772289 5.31044 0.771077 4.95879 1.12102L0.264275 5.79289C0.264006 5.79316 0.263781 5.79347 0.263466 5.79374C-0.0884075 6.14494 -0.0872841 6.71563 0.263512 7.06566Z"/>
					</svg>
					</a>
				</li>
			<?else:?>
				<li class="bx-pag-prev">
					<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
						<svg width="23" height="12" viewBox="0 0 23 12" fill="#FEA800" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.263512 7.06566C0.263781 7.06593 0.264006 7.06624 0.26432 7.06651L4.95884 11.7384C5.31053 12.0884 5.87938 12.0871 6.22945 11.7353C6.57948 11.3836 6.57813 10.8148 6.22644 10.4648L3.07454 7.32813L22.1016 7.32813C22.5978 7.32813 23 6.9259 23 6.4297C23 5.93349 22.5978 5.53126 22.1016 5.53126L3.07459 5.53126L6.2264 2.39464C6.57809 2.04461 6.57944 1.47577 6.22941 1.12407C5.87933 0.772289 5.31044 0.771077 4.95879 1.12102L0.264275 5.79289C0.264006 5.79316 0.263781 5.79347 0.263466 5.79374C-0.0884075 6.14494 -0.0872841 6.71563 0.263512 7.06566Z"/>
						</svg>
					</a>
				</li>
			<?endif?>
			<li class="">
				<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
					<span>1</span>
				</a>
			</li>
		<?endif?>
	<?else:?>
			<li class="bx-pag-prev">
				<svg width="23" height="12" viewBox="0 0 23 12" fill="#C4C4C4" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.263512 7.06566C0.263781 7.06593 0.264006 7.06624 0.26432 7.06651L4.95884 11.7384C5.31053 12.0884 5.87938 12.0871 6.22945 11.7353C6.57948 11.3836 6.57813 10.8148 6.22644 10.4648L3.07454 7.32813L22.1016 7.32813C22.5978 7.32813 23 6.9259 23 6.4297C23 5.93349 22.5978 5.53126 22.1016 5.53126L3.07459 5.53126L6.2264 2.39464C6.57809 2.04461 6.57944 1.47577 6.22941 1.12407C5.87933 0.772289 5.31044 0.771077 4.95879 1.12102L0.264275 5.79289C0.264006 5.79316 0.263781 5.79347 0.263466 5.79374C-0.0884075 6.14494 -0.0872841 6.71563 0.263512 7.06566Z"/>
				</svg>
			</li>
			<li class="bx-active"><span>1</span></li>
	<?endif?>

	<?
	$arResult["nStartPage"]++;
	while($arResult["nStartPage"] <= $arResult["nEndPage"]-1):
	?>
		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<li class="bx-active"><span><?=$arResult["nStartPage"]?></span></li>
		<?else:?>
			<li class="">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>">
					<span><?=$arResult["nStartPage"]?></span>
				</a>
			</li>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["NavPageCount"] > 1):?>
			<li class="">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>">
					<span><?=$arResult["NavPageCount"]?></span>
				</a>
			</li>
		<?endif?>
			<li class="bx-pag-next">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
					<svg width="23" height="12" viewBox="0 0 23 12" fill="#FEA800" xmlns="http://www.w3.org/2000/svg">
						<path d="M22.7365 4.93434C22.7362 4.93407 22.736 4.93376 22.7357 4.93349L18.0412 0.261622C17.6895 -0.0883641 17.1206 -0.0870617 16.7705 0.264676C16.4205 0.616369 16.4219 1.18521 16.7736 1.53524L19.9255 4.67187H0.898438C0.402231 4.67187 0 5.0741 0 5.5703C0 6.06651 0.402231 6.46874 0.898438 6.46874H19.9254L16.7736 9.60536C16.4219 9.95539 16.4206 10.5242 16.7706 10.8759C17.1207 11.2277 17.6896 11.2289 18.0412 10.879L22.7357 6.20711C22.736 6.20684 22.7362 6.20653 22.7365 6.20626C23.0884 5.85506 23.0873 5.28437 22.7365 4.93434Z"/>
					</svg>
				</a>
			</li>
	<?else:?>
		<?if($arResult["NavPageCount"] > 1):?>
			<li class="bx-active"><span><?=$arResult["NavPageCount"]?></span></li>
		<?endif?>
			<li class="bx-pag-next">
				<svg width="23" height="12" viewBox="0 0 23 12" fill="#C4C4C4" xmlns="http://www.w3.org/2000/svg">
					<path d="M22.7365 4.93434C22.7362 4.93407 22.736 4.93376 22.7357 4.93349L18.0412 0.261622C17.6895 -0.0883641 17.1206 -0.0870617 16.7705 0.264676C16.4205 0.616369 16.4219 1.18521 16.7736 1.53524L19.9255 4.67187H0.898438C0.402231 4.67187 0 5.0741 0 5.5703C0 6.06651 0.402231 6.46874 0.898438 6.46874H19.9254L16.7736 9.60536C16.4219 9.95539 16.4206 10.5242 16.7706 10.8759C17.1207 11.2277 17.6896 11.2289 18.0412 10.879L22.7357 6.20711C22.736 6.20684 22.7362 6.20653 22.7365 6.20626C23.0884 5.85506 23.0873 5.28437 22.7365 4.93434Z"/>
				</svg>
			</li>
	<?endif?>
<?endif?>

<?if ($arResult["bShowAll"]):?>
	<?if ($arResult["NavShowAll"]):?>
			<li class="bx-pag-all">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0" rel="nofollow">
					<span><?echo GetMessage("round_nav_pages")?></span>
				</a>
			</li>
	<?else:?>
			<li class="bx-pag-all">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1" rel="nofollow">
					<span><?echo GetMessage("round_nav_all")?></span>
				</a>
			</li>
	<?endif?>
<?endif?>
		</ul>
		<div style="clear:both"></div>
	</div>
</div>
