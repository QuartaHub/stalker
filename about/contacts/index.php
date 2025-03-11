<? require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php" );
$APPLICATION->SetTitle("Задайте вопрос");
$APPLICATION->SetTitle( "Задайте вопрос" );
?><div class="main">
 <section class="contacts">
	<div class="container">
		<div class="section__title">
			 Контакты
		</div>
		<div class="contacts-block">
			<div class="contacts-element">
				<div class="contacts-row">
					<div class="contacts-item">
<!--						<div class="contacts-item__title">Связаться</div>-->
						<div class="contacts-info">
							<div class="contacts-info__title">
								Телефон
							</div>
							 <?$APPLICATION->IncludeFile('/_includes/contacts/phones.php', false, ['MODE'=> 'text']);?>
						</div>
                        <div class="contacts-info">
                            <div class="contacts-info__title">
                                Адрес
                            </div>
                            <div class="contacts-info__text">
                                <?$APPLICATION->IncludeFile('/_includes/contacts/address.php', false, ['MODE'=> 'text']);?>
                            </div>
                            <div class="contacts-info__text">
                                <br>
                                <?$APPLICATION->IncludeFile('/_includes/contacts/work_time.php', false, ['MODE'=> 'text']);?>
                            </div>
                        </div>
					</div>
					<div class="contacts-item">
<!--						<div class="contacts-item__title">Адрес магазина:</div>-->
                        <div class="contacts-info">
                            <div class="contacts-info__title">
                                E-mail
                            </div>
                            <div class="contacts-info__text">
                                <div class="contacts-info__text_list">
                                <?$APPLICATION->IncludeFile('/_includes/contacts/email.php', false, ['MODE'=> 'text']);?>
                                    <br>
                                </div>
                            </div>
                        </div>
						<div class="contacts-info">
							<div class="contacts-info__title">
                                Социальные сети
							</div>
							<div class="contacts-info__text">
                                <?$APPLICATION->IncludeFile('/_includes/contacts/social.php', false, ['MODE'=> 'text']);?>
							</div>
						</div>
					</div>
				</div>
				<div class="contacts-social">
<!--					<div class="contacts-social__title">-->
<!--						Мы в соцсетях-->
<!--					</div>-->
					 <?/*$APPLICATION->IncludeComponent(
	"spro:widget",
	"social",
Array(),
false,
Array(
	'HIDE_ICONS' => 'Y'
)
);*/?>
                    <?/*$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "standard.php",
                            "PATH" => "/include/social_icons.php",
                        ]
                    );*/?>
				</div>
 <button class="ui-button ui-button--border contacts-button" type="button" data-modal-open="feedback">Связаться с нами</button>
			</div>
			<div class="contacts-map">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:59.845314924935835;s:10:\"yandex_lon\";d:30.322703432055732;s:12:\"yandex_scale\";i:17;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:30.322703432055757;s:3:\"LAT\";d:59.845314924944816;s:4:\"TEXT\";s:40:\"Quarta Оружейный Квартал\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		)
	),
	false,
	array(
		"HIDE_ICONS" => "N"
	)
);?>
			</div>
		</div>
	</div>
 </section>
</div><? require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php" ) ?>