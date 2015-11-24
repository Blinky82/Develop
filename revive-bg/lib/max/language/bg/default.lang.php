<?php

/*
  +---------------------------------------------------------------------------+
  | Revive Adserver                                                           |
  | http://www.revive-adserver.com                                            |
  |                                                                           |
  | Copyright: See the COPYRIGHT.txt file.                                    |
  | License: GPLv2 or later, see the LICENSE.txt file.                        |
  +---------------------------------------------------------------------------+
 */

// Set text direction and characterset
$GLOBALS['phpAds_TextDirection'] = "ltr";
$GLOBALS['phpAds_TextAlignRight'] = "дясно";
$GLOBALS['phpAds_TextAlignLeft'] = "ляво";
$GLOBALS['phpAds_CharSet'] = "UTF-8";

$GLOBALS['phpAds_DecimalPoint'] = ".";
$GLOBALS['phpAds_ThousandsSeperator'] = ",";

// Date & time configuration
$GLOBALS['date_format'] = "%d-%m-%Y";
$GLOBALS['time_format'] = "%H:%M:%S";
$GLOBALS['minute_format'] = "%H:%M";
$GLOBALS['month_format'] = "%m-%Y";
$GLOBALS['day_format'] = "%d-%m";
$GLOBALS['week_format'] = "%W-%Y";
$GLOBALS['weekiso_format'] = "%V-%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting'] = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting'] = "#,##0.000;-#,##0.000;-";

/* ------------------------------------------------------- */
/* Translations                                          */
/* ------------------------------------------------------- */

$GLOBALS['strHome'] = "Начало";
$GLOBALS['strHelp'] = "Помощ";
$GLOBALS['strStartOver'] = "Отначало";
$GLOBALS['strShortcuts'] = "Бързи клавиши";
$GLOBALS['strActions'] = "Действие";
$GLOBALS['strAdminstration'] = "Инвентар";
$GLOBALS['strMaintenance'] = "Поддръжка";
$GLOBALS['strProbability'] = "Вероятност";
$GLOBALS['strInvocationcode'] = "Извикващ код";
$GLOBALS['strBasicInformation'] = "Основна информация";
$GLOBALS['strAppendTrackerCode'] = "Добавяне на проследяващ код";
$GLOBALS['strOverview'] = "Преглед";
$GLOBALS['strSearch'] = "<u>Т</u>ърсене";
$GLOBALS['strDetails'] = "Детайли";
$GLOBALS['strCompact'] = "Компактен";
$GLOBALS['strUser'] = "Потребител";
$GLOBALS['strDuplicate'] = "Дублиране";
$GLOBALS['strMoveTo'] = "Преместване в";
$GLOBALS['strDelete'] = "Изтриване";
$GLOBALS['strActivate'] = "Активиране";
$GLOBALS['strConvert'] = "Конвертиране";
$GLOBALS['strRefresh'] = "Презареждане";
$GLOBALS['strSaveChanges'] = "Запис на промените";
$GLOBALS['strUp'] = "Нагоре";
$GLOBALS['strDown'] = "Надолу";
$GLOBALS['strSave'] = "Запис";
$GLOBALS['strCancel'] = "Отказ";
$GLOBALS['strPrevious'] = "Предишна";
$GLOBALS['strNext'] = "Следваща";
$GLOBALS['strYes'] = "Да";
$GLOBALS['strNo'] = "Не";
$GLOBALS['strNone'] = "Никоя";
$GLOBALS['strCustom'] = "По желание";
$GLOBALS['strDefault'] = "По подразбиране";
$GLOBALS['strUnlimited'] = "Неограничен";
$GLOBALS['strUntitled'] = "Неозаглавен";
$GLOBALS['strAverage'] = "Средно";
$GLOBALS['strOverall'] = "Общо";
$GLOBALS['strTotal'] = "Всичко";
$GLOBALS['strTo'] = "до";
$GLOBALS['strLinkedTo'] = "свързана към";
$GLOBALS['strDaysLeft'] = "Оставащи дни";
$GLOBALS['strCheckAllNone'] = "Избери всичко/нищо";
$GLOBALS['strKiloByte'] = "КБ";
$GLOBALS['strExpandAll'] = "<u>О</u>тваряне на всички";
$GLOBALS['strCollapseAll'] = "<u>З</u>атваряне на всички";
$GLOBALS['strShowAll'] = "Показване на всички";
$GLOBALS['strNoAdminInterface'] = "Администраторския панел е затворен за подръжка. Това не се отразява върху доставката на вашите кампании";
$GLOBALS['strFieldContainsErrors'] = "Следните полета съдържат грешки:";
$GLOBALS['strFieldFixBeforeContinue1'] = "Преди да продължите трябва да";
$GLOBALS['strFieldFixBeforeContinue2'] = "поправите тези грешки";
$GLOBALS['strMiscellaneous'] = "Разни";
$GLOBALS['strCollectedAllStats'] = "Всички статистики";
$GLOBALS['strCollectedToday'] = "Днес";
$GLOBALS['strCollectedYesterday'] = "Вчера";
$GLOBALS['strCollectedThisWeek'] = "Тази седмица";
$GLOBALS['strCollectedLastWeek'] = "Миналата седмица";
$GLOBALS['strCollectedThisMonth'] = "Този месец";
$GLOBALS['strCollectedLastMonth'] = "Миналия месец";
$GLOBALS['strCollectedLast7Days'] = "Последните 7 дни";
$GLOBALS['strCollectedSpecificDates'] = "Определени дати";
$GLOBALS['strWarning'] = "Предупреждение";
$GLOBALS['strNotice'] = "Бележка";

// Dashboard
$GLOBALS['strDashboardCantBeDisplayed'] = "Таблото не може да бъде показано";
$GLOBALS['strNoCheckForUpdates'] = "Таблото не може да бъде показано освен ако<br />не са активирани настройките за обновления.";
$GLOBALS['strEnableCheckForUpdates'] = "Моля, активирайте <a href='account-settings-update.php' target='_top'>проверката за обновления</a> в настройките<br/>страницата <a href='account-settings-update.php' target='_top'>'обнови настойките'</a>.";

// Dashboard Errors
$GLOBALS['strDashboardErrorCode'] = "код";
$GLOBALS['strDashboardSystemMessage'] = "Системни съобщения";
$GLOBALS['strDashboardErrorHelp'] = "Ако тази грешка се повтаря, моля опишете проблема си в детайли и го публикувайте в <a href='http://forum.revive-adserver.com/'>forum.revive-adserver.com/</a>.";

// Priority
$GLOBALS['strPriority'] = "Приоритет";
$GLOBALS['strPriorityLevel'] = "Ниво на приоритет";
$GLOBALS['strLimitations'] = "Ограничения";
$GLOBALS['strNoLimitations'] = "Без ограничения";
$GLOBALS['strCapping'] = "Ограничи броя реклами показвани на потребител";
$GLOBALS['strOverrideAds'] = "Реклами на Отменена кампания";
$GLOBALS['strHighAds'] = "Реклами на Съкратена кампания";
$GLOBALS['strECPMAds'] = "Реклами на CPM кампания";
$GLOBALS['strLowAds'] = "Реклами на Показваща се кампания";


// Properties
$GLOBALS['strName'] = "Име";
$GLOBALS['strSize'] = "Големина";
$GLOBALS['strWidth'] = "Широчина";
$GLOBALS['strHeight'] = "Височина";
$GLOBALS['strTarget'] = "Цел";
$GLOBALS['strLanguage'] = "Език";
$GLOBALS['strDescription'] = "Описание";
$GLOBALS['strVariables'] = "Променливи";
$GLOBALS['strComments'] = "Коментари";

// User access
$GLOBALS['strLinkUserHelpUser'] = "Потребителско име";
$GLOBALS['strWorkingAs'] = "Оперирате като";
$GLOBALS['strWorkingAs_Key'] = "<u>О</u>перирате като";
$GLOBALS['strWorkingAs'] = "Оперирате като";
$GLOBALS['strSwitchTo'] = "Преминете към";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Използвате търсачаката, за да намерите повече акаунти";
$GLOBALS['strWorkingFor'] = "%s за...";
$GLOBALS['strNoAccountWithXInNameFound'] = "Няма намерени акаунти с \"%s\" в името";
$GLOBALS['strRecentlyUsed'] = "Използвано напоследък";
$GLOBALS['strLinkUser'] = "Добавете потребител";
$GLOBALS['strLinkUser_Key'] = "Добавете <u>п</u>отребител";
$GLOBALS['strUsernameToLink'] = "Потребителско име на потребителя за добавяне";
$GLOBALS['strNewUserWillBeCreated'] = "Ще бъде създаден нов потребител";
$GLOBALS['strToLinkProvideEmail'] = "За да добавите потребител, осигурете потребителски email";
$GLOBALS['strToLinkProvideUsername'] = "За да добавите потребител, осигурете потребителко име";
$GLOBALS['strUserLinkedToAccount'] = "Потребителят е добавен към акаунта";
$GLOBALS['strUserAccountUpdated'] = "Потребителският акаунт е обновен";
$GLOBALS['strUserUnlinkedFromAccount'] = "Потребителят е премахнат от акаунта";
$GLOBALS['strUserWasDeleted'] = "Потребтелят е изтрит";
$GLOBALS['strUserNotLinkedWithAccount'] = "Такъв потребител не е вързан към акаунт";
$GLOBALS['strCantDeleteOneAdminUser'] = "Не можете да изтриете потребителя. Поне един потребител трябва да е вързан с административен акаунт.";
$GLOBALS['strLinkUserHelp'] = "За да добавите <b>съществуващ потребител</b>, напишете %1\$s и натиснете %2\$s <br />. За да добавите <b>нов потребител</b>, напишете желания от вас %1\$s и натиснете %2\$s";
$GLOBALS['strLinkUserHelpEmail'] = "email адрес";
$GLOBALS['strLastLoggedIn'] = "Последно влезнал в";
$GLOBALS['strDateLinked'] = "Свързана дата";

// Login & Permissions
$GLOBALS['strUserProperties'] = "Настройки на тракерите";
$GLOBALS['strAuthentification'] = "Идентифициране";
$GLOBALS['strWelcomeTo'] = "Добре дошъл в";
$GLOBALS['strEnterUsername'] = "Въведете вашето потребителско име и парола";
$GLOBALS['strEnterBoth'] = "Моля, въведете потребителско име и парола";
$GLOBALS['strLogin'] = "Вход";
$GLOBALS['strLogout'] = "Изход";
$GLOBALS['strUsername'] = "Потребителско име";
$GLOBALS['strPassword'] = "Парола";
$GLOBALS['strPasswordRepeat'] = "Повторете паролата";
$GLOBALS['strAccessDenied'] = "Достъпът забранен";
$GLOBALS['strUsernameOrPasswordWrong'] = "Потребителското име и/или паролата са грешни. Моля опитайте отново.";
$GLOBALS['strPasswordWrong'] = "Грешна парола";
$GLOBALS['strDuplicateClientName'] = "Потребителското име вече съществува, моля изберете друго.";
$GLOBALS['strInvalidPassword'] = "Новата парола е невалидна, моля използвайте различна.";
$GLOBALS['strNotSamePasswords'] = "Двете пароли, които написахте не съвпадат.";
$GLOBALS['strRepeatPassword'] = "Повторете паролата";
$GLOBALS['strUserAccess'] = "Потребителски достъп";
$GLOBALS['strAdminAccess'] = "Административен достъп";
$GLOBALS['strPermissions'] = "Разрешения";
$GLOBALS['strEnableCookies'] = "Трябва да позволите бискитките преди да използвате {$PRODUCT_NAME}";
$GLOBALS['strSessionIDNotMatch'] = "Грешка при сесията, моля влезте отново";
$GLOBALS['strNotAdmin'] = "Вашият акаунт няма права да използва тази опция, можете да влезете с друг акаунт, за да я използвате.";
$GLOBALS['strInvalidEmail'] = "E-mail не е в правилен форма, моля поставете вашия email правилно.";
$GLOBALS['strNotSamePasswords'] = "Двете пароли, които предоставихте не съвпадат";
$GLOBALS['strDeadLink'] = "Връзката ви е невалидна.";
$GLOBALS['strNoPlacement'] = "Избраната кампания не съществува. Опитайте чрез тази <a href='{link}'>връзки</a>";
$GLOBALS['strNoAdvertiser'] = "Избрания рекламодател не съществува. Опитайте чрез тази <a href='{link}'>връзки</a>";

// General advertising
$GLOBALS['strRequests'] = "Запитвания";
$GLOBALS['strImpressions'] = "Импресии";
$GLOBALS['strClicks'] = "Кликове";
$GLOBALS['strConversions'] = "Конверсии";
$GLOBALS['strCTR'] = "CTR";
$GLOBALS['strTotalClicks'] = "Общо брой кликове";
$GLOBALS['strTotalConversions'] = "Общо конверсии";
$GLOBALS['strDateTime'] = "Дата време";
$GLOBALS['strTrackerID'] = "Тракер ID";
$GLOBALS['strTrackerName'] = "Име на тракер";
$GLOBALS['strTrackerImageTag'] = "Етикет на изображението";
$GLOBALS['strTrackerJsTag'] = "Javascript етикет";
$GLOBALS['strTrackerAlwaysAppend'] = "Винаги показвай приложения код, дори ако не са записани конверсии от тракера?";
$GLOBALS['strCampaigns'] = "Кампания";
$GLOBALS['strCampaignID'] = "Кампания ID";
$GLOBALS['strCampaignName'] = "Име на кампания";
$GLOBALS['strCountry'] = "Страна";
$GLOBALS['strStatsAction'] = "Действие";
$GLOBALS['strWindowDelay'] = "Забавяне на прозореца";
$GLOBALS['strStatsVariables'] = "Променливи";
$GLOBALS['strBanners'] = "Банери";
$GLOBALS['strCNVRShort'] = "SR";

// Finance
$GLOBALS['strFinanceMT'] = "Месечни наеми";
$GLOBALS['strFinanceCPM'] = "CPM";
$GLOBALS['strFinanceCPC'] = "CPC";
$GLOBALS['strFinanceCPA'] = "CPA";
$GLOBALS['strFinanceCTR'] = "CTR";
$GLOBALS['strFinanceCR'] = "CR";

// Time and date related
$GLOBALS['strDate'] = "Дата";
$GLOBALS['strDay'] = "Ден";
$GLOBALS['strDays'] = "Дни";
$GLOBALS['strWeek'] = "Седмица";
$GLOBALS['strWeeks'] = "Седмици";
$GLOBALS['strSingleMonth'] = "Месец";
$GLOBALS['strMonths'] = "Месеци";
$GLOBALS['strDayOfWeek'] = "Ден от седмицата";


$GLOBALS['strDayFullNames'] = array();
$GLOBALS['strDayFullNames'][0] = 'Неделя';
$GLOBALS['strDayFullNames'][1] = 'Понеделник';
$GLOBALS['strDayFullNames'][2] = 'Вторник';
$GLOBALS['strDayFullNames'][3] = 'Сряда';
$GLOBALS['strDayFullNames'][4] = 'Четвъртък';
$GLOBALS['strDayFullNames'][5] = 'Петък';
$GLOBALS['strDayFullNames'][6] = 'Събота';

$GLOBALS['strDayShortCuts'] = array();
$GLOBALS['strDayShortCuts'][0] = 'Нед';
$GLOBALS['strDayShortCuts'][1] = 'По';
$GLOBALS['strDayShortCuts'][2] = 'Вт';
$GLOBALS['strDayShortCuts'][3] = 'Ср';
$GLOBALS['strDayShortCuts'][4] = 'Чет';
$GLOBALS['strDayShortCuts'][5] = 'Пет';
$GLOBALS['strDayShortCuts'][6] = 'Съб';

$GLOBALS['strHour'] = "Час";
$GLOBALS['strSeconds'] = "секунди";
$GLOBALS['strMinutes'] = "минути";
$GLOBALS['strHours'] = "часове";

// Advertiser
$GLOBALS['strClient'] = "Рекламодател";
$GLOBALS['strClients'] = "Рекламодатели";
$GLOBALS['strClientsAndCampaigns'] = "Рекламодатели & Кампании";
$GLOBALS['strAddClient'] = "Добави нов рекламодател";
$GLOBALS['strClientProperties'] = "Данни за рекламодател";
$GLOBALS['strClientHistory'] = "История на рекламодател";
$GLOBALS['strNoClients'] = "Няма посочени рекламодатели. За да създадете кампания първо <a href='advertiser-edit.php'>добавете нов рекламодател</a>.";
$GLOBALS['strConfirmDeleteClient'] = "Наистина ли искате да изтриете този рекламодател";
$GLOBALS['strConfirmDeleteClients'] = "Наистина ли искате да изтриете този рекламодател";
$GLOBALS['strHideInactive'] = "Скрий неактивните";
$GLOBALS['strInactiveAdvertisersHidden'] = "неактивния рекламодател(и) са скрити";
$GLOBALS['strAdvertiserCampaigns'] = "Рекламодатели & Кампании";

// Advertisers properties
$GLOBALS['strContact'] = "За контакти";
$GLOBALS['strContactName'] = "Име за контакти";
$GLOBALS['strEMail'] = "Е-майл";
$GLOBALS['strSendAdvertisingReport'] = "Изпращане на доклади за кампанията по е-майл";
$GLOBALS['strNoDaysBetweenReports'] = "Брой дни между изпращаните доклади за кампаниите";
$GLOBALS['strSendDeactivationWarning'] = "Автоматично изпращане на е-майл при активиране/деактивиране на кампания";
$GLOBALS['strAllowClientModifyBanner'] = "Разреши на потребителя да променя банерите си";
$GLOBALS['strAllowClientDisableBanner'] = "Разреши на потребителя да деактивира банерите си";
$GLOBALS['strAllowClientActivateBanner'] = "Разреши на потребителя да активира банерите си";
$GLOBALS['strAllowCreateAccounts'] = "Позволи на този потребител да създава нови акаунти";
$GLOBALS['strAdvertiserLimitation'] = "Покажи само един банер за този рекламодател на уеб страницата";
$GLOBALS['strAllowAuditTrailAccess'] = "Позволи на този потребител да достъпва audit trail";

// Campaign
$GLOBALS['strCampaign'] = "Кампания";
$GLOBALS['strCampaigns'] = "Кампания";
$GLOBALS['strAddCampaign'] = "Добави нова кампания";
$GLOBALS['strAddCampaign_Key'] = "Добави <u>н</u>ова кампания";
$GLOBALS['strLinkedCampaigns'] = "Свържи кампаниите";
$GLOBALS['strCampaignProperties'] = "Детайли за кампаниите";
$GLOBALS['strCampaignOverview'] = "Преглед на кампаниите";
$GLOBALS['strCampaignHistory'] = "История на кампаниите";
$GLOBALS['strConfirmDeleteCampaign'] = "Наистина ли искате да изтриете тази кампания?";
$GLOBALS['strConfirmDeleteCampaigns'] = "Наистина ли искате да изтриете тази кампания?";
$GLOBALS['strShowParentAdvertisers'] = "Покажи по-горните рекламодатели";
$GLOBALS['strHideParentAdvertisers'] = "Скрий по-горните рекламодатели";
$GLOBALS['strHideInactiveCampaigns'] = "Скрий неактивните кампании";
$GLOBALS['strInactiveCampaignsHidden'] = "неактивната кампания(и) е скрита";
$GLOBALS['strPriorityInformation'] = "Приоритет спрямо други кампании";
$GLOBALS['strHiddenCampaign'] = "Кампания";
$GLOBALS['strHiddenAd'] = "Реклама";
$GLOBALS['strHiddenAdvertiser'] = "Рекламодател";
$GLOBALS['strHiddenTracker'] = "Тракер";
$GLOBALS['strHiddenWebsite'] = "Уебсайт";
$GLOBALS['strHiddenZone'] = "Зона";
$GLOBALS['strCompanionPositioning'] = "Позициониране на кампанията";
$GLOBALS['strSelectUnselectAll'] = "Избери / Откажи всички";
$GLOBALS['strCampaignForAdvertiser'] = "за рекламодателя";
$GLOBALS['strNoCampaigns'] = "Няма налични кампании за този рекламодател.";
$GLOBALS['strNoCampaignsAddAdvertiser'] = "Няма налични кампании, защото няма намерени рекламодатели. За да създадете кампания, първо <a href='advertiser-edit.php'>добавете нов рекламодател</a>.";
$GLOBALS['strShowParentAdvertisers'] = "Покажи рекламодатели (родители)";
$GLOBALS['strHideParentAdvertisers'] = "Скрии рекламодатели (родители)";
$GLOBALS['strHideInactiveCampaigns'] = "Скрии некативните кампании";
$GLOBALS['strInactiveCampaignsHidden'] = "неактивните кампании са скрити";
$GLOBALS['strPriorityInformation'] = "Приоритет във връзка с други кампании";
$GLOBALS['strECPMInformation'] = "eCPM приоритетност";
$GLOBALS['strRemnantEcpmDescription'] = "eCPM е автоматично калкулиран, базирайки се на представянето на кампанията.<br />Ще бъде използвано при приоритизиране на остатъчни кампании, сходни една с друга.";
$GLOBALS['strEcpmMinImpsDescription'] = "Задайте вашият желан минимум, базиран върху това, което се eCPM кампанията калкулира.";
$GLOBALS['strHiddenCampaign'] = "Кампания";
$GLOBALS['strCampaignDelivery'] = "Сервиране на кампания";
$GLOBALS['strCampaignsOfAdvertiser'] = "на"; // това се добавя между името на страниците и името на рекламодателя, например: Кампания Х на Рекламодател У'
$GLOBALS['strShowCappedNoCookie'] = "Покажи горната граница на рекламите, ако бизквитките са изключени.";

// Campaign-zone linking page
$GLOBALS['strCalculatedForAllCampaigns'] = "Изчислено за всички кампании";
$GLOBALS['strCalculatedForThisCampaign'] = "Изчислено за тази кампания";
$GLOBALS['strLinkingZonesProblem'] = "Възникна проблем при връзването на зони";
$GLOBALS['strUnlinkingZonesProblem'] = "Възникна проблем при отвръзването на зони";
$GLOBALS['strZonesLinked'] = "зоната(ите) са вързани";
$GLOBALS['strZonesUnlinked'] = "зоната(ите) са отвързани";
$GLOBALS['strZonesSearch'] = "Търси";
$GLOBALS['strZonesSearchTitle'] = "Търси зони и уебсайтове по име";
$GLOBALS['strNoWebsitesAndZones'] = "Няма намерени уебсайтове и зони";
$GLOBALS['strNoWebsitesAndZonesText'] = "с \"%s\" в името";
$GLOBALS['strToLink'] = "за връзване";
$GLOBALS['strToUnlink'] = "аза отвръзване";
$GLOBALS['strLinked'] = "Вързан";
$GLOBALS['strAvailable'] = "Наличен";
$GLOBALS['strShowing'] = "Показване";
$GLOBALS['strEditZone'] = "Редактирай зона";
$GLOBALS['strEditWebsite'] = "Редактирай уебсайт";

// Campaign properties
$GLOBALS['strDontExpire'] = "Не изтичат";
$GLOBALS['strActivateNow'] = "Започнете незабавно";
$GLOBALS['strSetSpecificDate'] = "Задайте конкретна дата";
$GLOBALS['strLow'] = "Нисък";
$GLOBALS['strHigh'] = "Висок";
$GLOBALS['strExpirationDateComment'] = "Кампания ще приключи в края на този ден";
$GLOBALS['strActivationDateComment'] = "Кампанията ще започне в началото на този ден";
$GLOBALS['strImpressionsRemaining'] = "Оставащи импресии";
$GLOBALS['strClicksRemaining'] = "Оставащи кликове";
$GLOBALS['strConversionsRemaining'] = "Оставащи конверсии";
$GLOBALS['strImpressionsBooked'] = "Запазени импресии";
$GLOBALS['strClicksBooked'] = "Запазени кликове";
$GLOBALS['strConversionsBooked'] = "Запазени конверсии";
$GLOBALS['strAnonymous'] = "Скрий рекламодателя и уебсайта от тази кампания.";
$GLOBALS['strTargetPerDay'] = "на ден.";
$GLOBALS['strCampaignStatusInactive'] = "активен";
$GLOBALS['strCampaignStatusDeleted'] = "Изтрий";
$GLOBALS['strType'] = "Вид";
$GLOBALS['strCampaignType'] = "Име на кампания";
$GLOBALS['strContract'] = "За контакти";
$GLOBALS['strStandardContract'] = "За контакти";
$GLOBALS['strExpirationDate'] = "Крайна дата";
$GLOBALS['strActivationDate'] = "Начална дата";
$GLOBALS['strCampaignWeight'] = "Задайте големината на кампанията";

$GLOBALS['strCampaignWarningRemnantNoWeight'] = "Видът на кампанията е зададен като остатъчен,
но големината и е зададена до нула или е 
уточнена. Това ще деактивира кампанията
и нейните банерите няма да се сервират, 
докато големината и не получи вадини стойности.

Сигурни ли сте, че искате да продължите?";
$GLOBALS['strCampaignWarningEcpmNoRevenue'] = "Кампанията използва eCPM оптимизация,
но 'прихода' е заложен нула или не е уточнен.
Това ще деактивира кампанията и
нейните банерите няма да се сервират, 
докато големината и не получи вадини стойности.

Сигурни ли сте, че искате да продължите?";
$GLOBALS['strCampaignWarningOverrideNoWeight'] = "Този вид кампания е зададена като Отменена,
но големината и е зададена до нула или е 
уточнена. Tова ще деактивира кампанията и
нейните банерите няма да се сервират, 
докато големината и не получи вадини стойности.

Сигурни ли сте, че искате да продължите?";
$GLOBALS['strCampaignWarningNoTarget'] = "Този вид кампания е зададена като Съкратена,
но лимита на ден не уточнен.
Tова ще деактивира кампанията и
нейните банерите няма да се сервират, 
докато големината и не получи вадини стойности.

Сигурни ли сте, че искате да продължите?";
$GLOBALS['strCampaignStatusPending'] = "Изчакваща";
$GLOBALS['strCampaignStatusRunning'] = "Течаща";
$GLOBALS['strCampaignStatusPaused'] = "Паузирана";
$GLOBALS['strCampaignStatusAwaiting'] = "Чакача";
$GLOBALS['strCampaignStatusExpired'] = "Изпълнена";
$GLOBALS['strCampaignStatusApproval'] = "Чакаща удобрение »";
$GLOBALS['strCampaignStatusRejected'] = "Отхвърлена";
$GLOBALS['strCampaignStatusAdded'] = "Добавена";
$GLOBALS['strCampaignStatusStarted'] = "Започната";
$GLOBALS['strCampaignStatusRestarted'] = "Рестартирана";
$GLOBALS['strOverride'] = "Отменена";
$GLOBALS['strOverrideInfo'] = "Отменените кампании са специален тип камапнии, специално отнемащи 
    (т.нап. визамащи приоритет над) Оставащите и Съкратените кампании. Отменените кампании се използват най-вече с
    специално таргетиране/или праила за горна граница, за да е сигурно, че банерите им ще се показват винаги на посоченото  
    място, на посочените потребители, и може би посочения брой пъти, като част от специфична промоция. (Този тип кампания
    е позната ще като 'Съкратена (Изключителна)'.)";
$GLOBALS['strStandardContractInfo'] = "Съкратените кампании са за плавно сервиране на импресии,
    задължени да достигнат точно времово представяне. Съкратените кампании се използват когато 
    даден рекламодател е платил за определен брой импресии, кликове и/или реализации, за да 
    се изпълнят в рамките на две дати, или за един ден.";
$GLOBALS['strRemnant'] = "Остатъчно";
$GLOBALS['strRemnantInfo'] = "Вид по подразбиране. Остатъчните кампании имат много опции за 
    сервиране, и е добра практика да имате винаги поне една Остатъчна кампания, вързана към всяка зона, за да сте сигурни, 
    че винаги ще има нещо да се показва. Използвайте Остатъчните кампании, за да покажете банери, банери на рекламна мрежа, или дори
    директна реклама, която е продадена, но няма задължителни времеви ограничения.";
$GLOBALS['strECPMInfo'] = "Това е стандартна кампания, която може да бъде манипулирана или с крайна дата или с специфички лимити. 
    Базирайки се на настоящите настройки, ще бъде приоритизирана, използвайки eCPM.";
$GLOBALS['strPricing'] = "Ценообразуване";
$GLOBALS['strPricingModel'] = "Модел на ценообразуване";
$GLOBALS['strSelectPricingModel'] = "-- изберете модел --";
$GLOBALS['strRatePrice'] = "Оценка / Цена";
$GLOBALS['strMinimumImpressions'] = "Минимални дневни импресии";
$GLOBALS['strLimit'] = "Лимит";
$GLOBALS['strLowExclusiveDisabled'] = "Не можете да смените тази кампания към Остатъчна или Ексклузивна, докато крайната дата и лимитите на импресиите/кликовете/реализациите са зададени. <br>за да смените вида, трябва да премахнете датата на изтичане или да лимитите.";
$GLOBALS['strCannotSetBothDateAndLimit'] = "Не можете да иползвате крайна дата и лимити за Остатъчната или Ексклузивната кампания.<br>Ако искате да зададете крайна дата или лимити на импресии/кликове/реализации, моля използвайте не-ексклузивна Съкратена кампания.";
$GLOBALS['strWhyDisabled'] = "защо е изключено?";
$GLOBALS['strBackToCampaigns'] = "Обратно към кампаниите";
$GLOBALS['strCampaignBanners'] = "Банери на кампанията";
$GLOBALS['strCookies'] = "Бизквитки";

// Tracker
$GLOBALS['strTracker'] = "Тракер";
$GLOBALS['strTrackers'] = "Тракер";
$GLOBALS['strAddTracker'] = "Добави нов тракер";
$GLOBALS['strConfirmDeleteTrackers'] = "Наистина ли искате да изтриете този тракер?";
$GLOBALS['strConfirmDeleteTracker'] = "Наистина ли искате да изтриете този тракер?";
$GLOBALS['strTrackerProperties'] = "Настройки на тракерите";
$GLOBALS['strDefaultStatus'] = "Статус по подразбиране";
$GLOBALS['strStatus'] = "Статус";
$GLOBALS['strLinkedTrackers'] = "Свързани тракери";
$GLOBALS['strClick'] = "Кликове";
$GLOBALS['strTrackerPreferences'] = "Tracker Preferences";
$GLOBALS['strTrackerForAdvertiser'] = "for advertiser";
$GLOBALS['strNoTrackers'] = "There are currently no trackers defined for this advertiser";
$GLOBALS['strTrackerInformation'] = "Tracker Information";
$GLOBALS['strConversionWindow'] = "Conversion window";
$GLOBALS['strUniqueWindow'] = "Unique window";
$GLOBALS['strView'] = "View";
$GLOBALS['strArrival'] = "Arrival";
$GLOBALS['strManual'] = "Ръчно";
$GLOBALS['strImpression'] = "Импресия";
$GLOBALS['strConversionType'] = "Вид реализация";
$GLOBALS['strLinkCampaignsByDefault'] = "Link newly created campaigns by default";
$GLOBALS['strBackToTrackers'] = "Back to trackers";
$GLOBALS['strIPAddress'] = "IP адрес";

// Banners (General)
$GLOBALS['strBanner'] = "Банер";
$GLOBALS['strBanners'] = "Банери";
$GLOBALS['strAddBanner'] = "Добави нов банер";
$GLOBALS['strAddBanner_Key'] = "Добави <u>н</u>ов банер";
$GLOBALS['strBannerProperties'] = "Настройки на банера";
$GLOBALS['strNoBannersAddCampaign'] = "Няма посочени рекламодатели. За да създадете кампания първо <a href='advertiser-edit.php'>добавете нов рекламодател</a>.";
$GLOBALS['strNoBannersAddAdvertiser'] = "Няма посочени рекламодатели. За да създадете кампания първо <a href='advertiser-edit.php'>добавете нов рекламодател</a>.";
$GLOBALS['strConfirmDeleteBanner'] = "Наистина ли искате да изтриете този тракер?";
$GLOBALS['strConfirmDeleteBanners'] = "Наистина ли искате да изтриете този тракер?";
$GLOBALS['strInactiveBannersHidden'] = "неактивния рекламодател(и) са скрити";
$GLOBALS['strBannerToCampaign'] = "към кампания";
$GLOBALS['strShowBanner'] = "Покажи банер";
$GLOBALS['strBannerHistory'] = "История на банера";
$GLOBALS['strNoBanners'] = "Няма налични банери към тази кампания.";
$GLOBALS['strShowParentCampaigns'] = "Покажи кампаниите (родител)";
$GLOBALS['strHideParentCampaigns'] = "Скрий кампаниите (родител)";
$GLOBALS['strHideInactiveBanners'] = "Скрий неактивните кампании";
$GLOBALS['strWarningMissing'] = "Внимание, възможни липси ";
$GLOBALS['strWarningMissingClosing'] = " затварящ таг '>'";
$GLOBALS['strWarningMissingOpening'] = " отварящ таг '<'";
$GLOBALS['strSubmitAnyway'] = "Изпрати";
$GLOBALS['strBannersOfCampaign'] = "в"; // това се добавя меджу имената на страницата и името на кампанията, например: 'Банери в Кампанията на Coca Cola'


// Banner Preferences
$GLOBALS['strBannerPreferences'] = "Предпочитания за банер";
$GLOBALS['strCampaignPreferences'] = "Предпочитания за кампания";
$GLOBALS['strDefaultBanners'] = "Банери по подразбиране";
$GLOBALS['strDefaultBannerUrl'] = "Адрес на изображението по подразбиране";
$GLOBALS['strDefaultBannerDestination'] = "Уеб адрес по подразбиране";
$GLOBALS['strAllowedBannerTypes'] = "Позволени видове банери";
$GLOBALS['strTypeSqlAllow'] = "Позволи SQL локални банери";
$GLOBALS['strTypeWebAllow'] = "Позволи Webserver локални банери";
$GLOBALS['strTypeUrlAllow'] = "Позволи външни банери";
$GLOBALS['strTypeHtmlAllow'] = "Позволи HTML банери";
$GLOBALS['strTypeTxtAllow'] = "Позволи текстови реклами";

// Banner (Properties)
$GLOBALS['strWeight'] = "Височина";
$GLOBALS['strChooseBanner'] = "Моля, изберете типа банер";
$GLOBALS['strMySQLBanner'] = "Качете локален банер в базата";
$GLOBALS['strWebBanner'] = "Качи локален банер на сървъраUpload";
$GLOBALS['strURLBanner'] = "Вържете външен банер";
$GLOBALS['strHTMLBanner'] = "Създайте HTML банер";
$GLOBALS['strTextBanner'] = "Създай текстов банер";
$GLOBALS['strAlterHTML'] = "Променете HTML, за да активирате таргетирането на кликове за:";
$GLOBALS['strIframeFriendly'] = "Този банер може да безпроблемо да се показва в iframe (или не е разширяем)";
$GLOBALS['strUploadOrKeep'] = "Искате ли да запазите <br />съществуващото изображение, или <br />искате да качите ново?";
$GLOBALS['strNewBannerFile'] = "Изберете изображението, което искате <br />да използвате за този банер<br /><br />";
$GLOBALS['strNewBannerFileAlt'] = "Изберете старото изображението, което <br />искате в случай, че браузърите<br />не поддържат rich media<br /><br />";
$GLOBALS['strNewBannerURL'] = "Адрес на изображението (вкл. http://)";
$GLOBALS['strURL'] = "Уеб адрес адрес (вкл. http://)";
$GLOBALS['strKeyword'] = "Ключови думи";
$GLOBALS['strTextBelow'] = "Текст под изображението";
$GLOBALS['strAlt'] = "Алт. текст";
$GLOBALS['strStatusText'] = "Статус";
$GLOBALS['strBannerWeight'] = "Широчина";
$GLOBALS['strAdserverTypeGeneric'] = "Обширен HTML банер";
$GLOBALS['strDoNotAlterHtml'] = "Не изменяй HTML";
$GLOBALS['strGenericOutputAdServer'] = "Обширен";
$GLOBALS['strSwfTransparency'] = "Allow transparent background";
$GLOBALS['strBackToBanners'] = "Обратно към банерите";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML'] = "Винаги сравнявайте следния HTML код към този банер";
$GLOBALS['strBannerAppendHTML'] = "Винаги прибавяйте следния HTML код към този банер";

// Banner (swf)
$GLOBALS['strCheckSWF'] = "Провери за храд-коднати връзки във флаш файла";
$GLOBALS['strConvertSWFLinks'] = "Преорбазувай флаш връзките";
$GLOBALS['strHardcodedLinks'] = "Хард-коднати връзки";
$GLOBALS['strConvertSWF'] = "<br />Флаш файлът, който качихте съдържа храд-коднати уеб адреси (ulrs). {$PRODUCT_NAME} няма да може да засече жроя на кликовете на този банер, освен ако преобразувате тези храд-коднати уеб адреси (ulrs). По-долу ще видите списък с всички уеб адреси (ulrs), намиращи се във Флаш файла. Ако искате да преобразувате тези адреси, просто натиснете <b>Преобразуване</b>, или натиснете click <b>Отмяна</b>.<br /><br />Моля, забележете, че: ако натиснете  <b>Преобразуване</b>, флаш файлът, който качихте ще се преобрази физически. <br />Моля, пазете бекъп на оригиналния файл. Независимо на това коя версия е създаден банера, обработения файл, ще има нужда Flash 4 player (или по висока версия), за да се покаже коректно.<br /><br />";
$GLOBALS['strCompressSWF'] = "Компресирай SWF файла за по-бързо сваляне (Необходим е Flash 6 player)";
$GLOBALS['strOverwriteSource'] = "Пренапиши ресурс елементите";

// Display limitations
$GLOBALS['strModifyBannerAcl'] = "Варианти за доставяне";
$GLOBALS['strACL'] = "Доставяне";
$GLOBALS['strACLAdd'] = "Добавете лимити за доставяне";
$GLOBALS['strNoLimitations'] = "Без ограничения";
$GLOBALS['strApplyLimitationsTo'] = "Нанесете ограничения за";
$GLOBALS['strAllBannersInCampaign'] = "Всички банери в тази кампания";
$GLOBALS['strRemoveAllLimitations'] = "Премахнете всички лимити";
$GLOBALS['strEqualTo'] = "е еднакво с";
$GLOBALS['strDifferentFrom'] = "е различно от";
$GLOBALS['strLaterThan'] = "е по-рано от";
$GLOBALS['strLaterThanOrEqual'] = "е по-къден или еднакъв с";
$GLOBALS['strEarlierThan'] = "е по-ранен от";
$GLOBALS['strEarlierThanOrEqual'] = "е по-ранен или еднакъв с";
$GLOBALS['strContains'] = "съдържа";
$GLOBALS['strNotContains'] = "не съдържа";
$GLOBALS['strGreaterThan'] = "е по-голямо от";
$GLOBALS['strLessThan'] = "е по-малко от";
$GLOBALS['strAND'] = "И";                          // logical operator
$GLOBALS['strOR'] = "ИЛИ";                         // logical operator
$GLOBALS['strOnlyDisplayWhen'] = "Покажи този банер само ако:";
$GLOBALS['strWeekDays'] = "Уикенди";
$GLOBALS['strTime'] = "Време";
$GLOBALS['strDomain'] = "Домейн";
$GLOBALS['strSource'] = "Ресурс";
$GLOBALS['strBrowser'] = "Браузър";
$GLOBALS['strOS'] = "OS";
$GLOBALS['strDeliveryLimitations'] = "Лимити при доставянето";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = "Горна граница на показване за посетител";
$GLOBALS['strCappingBanner']['limit'] = "Лимитирайте банер показванията до:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = "Горна граница на показване за посетител";
$GLOBALS['strCappingCampaign']['limit'] = "Лимитирайте показванията на кампанията до:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = "Горна граница на показване за посетител";
$GLOBALS['strCappingZone']['limit'] = "Лимитирайте показванията на зоната до:";

// Website
$GLOBALS['strAffiliate'] = "Уебсайт";
$GLOBALS['strAffiliates'] = "Уебсайт";
$GLOBALS['strAffiliatesAndZones'] = "Уебсайтoве и зони";
$GLOBALS['strAddNewAffiliate'] = "Добави нов уебсайт";
$GLOBALS['strNoAffiliates'] = "Няма посочени рекламодатели. За да създадете кампания първо <a href='advertiser-edit.php'>добавете нов рекламодател</a>.";
$GLOBALS['strConfirmDeleteAffiliate'] = "Наистина ли искате да изтриете този рекламодател";
$GLOBALS['strConfirmDeleteAffiliates'] = "Наистина ли искате да изтриете този рекламодател";
$GLOBALS['strInactiveAffiliatesHidden'] = "неактивния рекламодател(и) са скрити";
$GLOBALS['strAffiliateProperties'] = "Настройки на уебсайта";
$GLOBALS['strAffiliateHistory'] = "История на уебсайта";
$GLOBALS['strShowParentAffiliates'] = "Покажи сайтове-родители";
$GLOBALS['strHideParentAffiliates'] = "Скрийте сайтове-родители";

// Website (properties)
$GLOBALS['strWebsite'] = "Уебсайт";
$GLOBALS['strWebsiteURL'] = "Уебсайт адрес";
$GLOBALS['strAllowAffiliateModifyZones'] = "Разреши на потребителя да променя банерите си";
$GLOBALS['strAllowAffiliateLinkBanners'] = "Разреши на потребителя да върже банерите с неговите зони";
$GLOBALS['strAllowAffiliateAddZone'] = "Разреши на потребителя да дефинира нови зони";
$GLOBALS['strAllowAffiliateDeleteZone'] = "Разреши на потребителя да изтрие съществуващи зони";
$GLOBALS['strAllowAffiliateGenerateCode'] = "Разреши на потребителя да генерира извикващ код";

// Website (properties - payment information)
$GLOBALS['strCountry'] = "Страна";
$GLOBALS['strPostcode'] = "Пощенски код";

// Website (properties - other information)
$GLOBALS['strWebsiteZones'] = "Зони на уебсайта";

// Zone
$GLOBALS['strZone'] = "Зона";
$GLOBALS['strZones'] = "Зони";
$GLOBALS['strAddNewZone'] = "Добави нова зона";
$GLOBALS['strAddNewZone_Key'] = "Добави <u>н</u>ов тракер";
$GLOBALS['strZoneProperties'] = "Настройки на тракерите";
$GLOBALS['strNoZonesAddWebsite'] = "Няма посочени рекламодатели. За да създадете кампания първо <a href='advertiser-edit.php'>добавете нов рекламодател</a>.";
$GLOBALS['strConfirmDeleteZone'] = "Наистина ли искате да изтриете този тракер?";
$GLOBALS['strConfirmDeleteZones'] = "Наистина ли искате да изтриете този тракер?";
$GLOBALS['strInactiveZonesHidden'] = "неактивния рекламодател(и) са скрити";
$GLOBALS['strZoneToWebsite'] = "към уебсайта";
$GLOBALS['strLinkedZones'] = "Вързани зони";
$GLOBALS['strAvailableZones'] = "Свободни зони";
$GLOBALS['strLinkingNotSuccess'] = "Свръзването не бе успешно, моля опитайте отново";
$GLOBALS['strZoneHistory'] = "Изстория на зоната";
$GLOBALS['strNoZones'] = "Няма налични зони, дефинирани за този уебсайт.";
$GLOBALS['strConfirmDeleteZoneLinkActive'] = "Все още има кампании вързани към тази зона, ако я изтриете, няма да можете да я стартирате и няма да ви се плати за нея.";
$GLOBALS['strZoneType'] = "Вид зона";
$GLOBALS['strBannerButtonRectangle'] = "Банер, бутон или Правоъгълник";
$GLOBALS['strInterstitial'] = "Interstitial or Floating DHTML";
$GLOBALS['strPopup'] = "Popup";
$GLOBALS['strTextAdZone'] = "Ткстова реклама";
$GLOBALS['strEmailAdZone'] = "Email/Бюлетин зона";
$GLOBALS['strZoneVideoInstream'] = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay'] = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners'] = "Покажи съвпадащи банери";
$GLOBALS['strHideMatchingBanners'] = "Скрий съвпадащи банери";
$GLOBALS['strBannerLinkedAds'] = "Банери вързани към зона";
$GLOBALS['strCampaignLinkedAds'] = "Кампании вързани към зона";
$GLOBALS['strWarnChangeZoneType'] = "Сменяйки вида на зоната към текстова или email, ще отвържете всички банери/кампании в следствие на рестрикциите на тези видове зони
                                                <ul>
                                                    <li>Текстови зони могат да се вържат само към текстови реклами</li>
                                                    <li>Зони на Email камапнии могат да имат само един активен банер за момента</li>
                                                </ul>";
$GLOBALS['strWarnChangeZoneSize'] = 'Сменяйки размерите на зоната, вие ще отвържете всички банери, които не са с тези размери, и ще добавите всички банери от свъраните кампании, които са с новите размери.';
$GLOBALS['strWarnChangeBannerSize'] = 'Сменяйки размерите на банера, вие ще отвържете този банер от всички зони, които не са с новите размери, и ако този банер/и или/или кампания са свързани към зоната с новите размери, банерът ще бъде автомитично свързан.';
$GLOBALS['strWarnBannerReadonly'] = 'Този банер е с права само за четене, защото разширенията са деактивирани. Свържете се със системния администратор за повече инофрмация.';
$GLOBALS['strZonesOfWebsite'] = 'в'; // това ще се появи между името на страницата и името на уебсайта, например: 'Зони в www.example.com'
$GLOBALS['strBackToZones'] = "Обратно към зоните";

$GLOBALS['strIab']['IAB_FullBanner(468x60)'] = "IAB Full Banner (468 x 60)";
$GLOBALS['strIab']['IAB_Skyscraper(120x600)'] = "IAB Skyscraper (120 x 600)";
$GLOBALS['strIab']['IAB_Leaderboard(728x90)'] = "IAB Leaderboard (728 x 90)";
$GLOBALS['strIab']['IAB_Button1(120x90)'] = "IAB Button 1 (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)'] = "IAB Button 2 (120 x 60)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)'] = "IAB Half Banner (234 x 60)";
$GLOBALS['strIab']['IAB_MicroBar(88x31)'] = "IAB Micro Bar (88 x 31)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)'] = "IAB Square Button (125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*'] = "IAB Rectangle (180 x 150)";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)'] = "IAB Square Pop-up (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)'] = "IAB Vertical Banner (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*'] = "IAB Medium Rectangle (300 x 250)";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)'] = "IAB Large Rectangle (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB Vertical Rectangle (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*'] = "IAB Wide Skyscraper (160 x 600)";
$GLOBALS['strIab']['IAB_Pop-Under(720x300)'] = "IAB Pop-Under (720 x 300)";
$GLOBALS['strIab']['IAB_3:1Rectangle(300x100)'] = "IAB 3:1 Rectangle (300 x 100)";

// Advanced zone settings
$GLOBALS['strAdvanced'] = "Разширени";
$GLOBALS['strChainSettings'] = "Свързани настройки";
$GLOBALS['strZoneNoDelivery'] = "Ако банерите от тази зона <br />не могат да се доставят, опитайте това...";
$GLOBALS['strZoneStopDelivery'] = "Спри доставката и не показвайте банера";
$GLOBALS['strZoneOtherZone'] = "Посочете избраната зона вместо";
$GLOBALS['strZoneAppend'] = "Винаги добайте следния HTML код, за да покажете банерите от тази зона";
$GLOBALS['strAppendSettings'] = "Добавете и сравнете настройките";
$GLOBALS['strZonePrependHTML'] = "Винаги сравнявайте следния HTML код с банерите, показващи се от тази зона";
$GLOBALS['strZoneAppendNoBanner'] = "Прикрепете / добавете дори ако няма доставен банер";
$GLOBALS['strZoneAppendHTMLCode'] = "HTML код";
$GLOBALS['strZoneAppendZoneSelection'] = "Popup или интерстициална";

// Zone probability
$GLOBALS['strZoneProbListChain'] = "Всички банери вързани към избраната зона не са кативни в момента. <br />Това е веригата на зоната, която се следва:";
$GLOBALS['strZoneProbNullPri'] = "Няма активни банери, вързнаи към тази зона.";
$GLOBALS['strZoneProbListChainLoop'] = "Следвайки веригата на зоната ще предивиза кръгова линия. Delivery for this zone is halted.";

// Linked banners/campaigns/trackers
$GLOBALS['strWithXBanners'] = "%d банер(и)";
$GLOBALS['strStatusDuplicate'] = "Дублиране";
$GLOBALS['strSelectZoneType'] = "Моля, изберете какво да бъде вързано към тази зона";
$GLOBALS['strLinkedBanners'] = "Вържете индивидуални банери";
$GLOBALS['strCampaignDefaults'] = "Вържете банери по кампания-родител";
$GLOBALS['strLinkedCategories'] = "Вържете банери по категория";
$GLOBALS['strRawQueryString'] = "Кл. дума";
$GLOBALS['strIncludedBanners'] = "Свързани банери";
$GLOBALS['strMatchingBanners'] = "{count} съвпадащи банери";
$GLOBALS['strNoCampaignsToLink'] = "В момента няма налични кампании, които да са вързани към тази зона";
$GLOBALS['strNoTrackersToLink'] = "В момента няма налични тракери, които да са вързани към тази кампания";
$GLOBALS['strNoZonesToLinkToCampaign'] = "Няма свободни зони, към които тази кампания да се върже";
$GLOBALS['strSelectBannerToLink'] = "Изберете банера, който искате да бъде вързан към тази зона:";
$GLOBALS['strSelectCampaignToLink'] = "Изберете кампанията, която искате да бъде вързана към тази зона:";
$GLOBALS['strSelectAdvertiser'] = "Изберете рекламодател";
$GLOBALS['strSelectPlacement'] = "Изберете кампания";
$GLOBALS['strSelectAd'] = "Изберете банер";
$GLOBALS['strSelectPublisher'] = "Изберете уебсайт";
$GLOBALS['strSelectZone'] = "Изберете зона";
$GLOBALS['strConnectionType'] = "Вид";
$GLOBALS['strStatusPending'] = "Изчакване";
$GLOBALS['strStatusApproved'] = "Одобри";
$GLOBALS['strStatusDisapproved'] = "Неодобрен";
$GLOBALS['strStatusOnHold'] = "Задържан";
$GLOBALS['strStatusIgnore'] = "Отхвърлен";
$GLOBALS['strConnectionType'] = "Вид";
$GLOBALS['strConnTypeSale'] = "Продажба";
$GLOBALS['strConnTypeLead'] = "Следа";
$GLOBALS['strConnTypeSignUp'] = "Записване";
$GLOBALS['strShortcutEditStatuses'] = "Редактирай статуси";
$GLOBALS['strShortcutShowStatuses'] = "Покажи статуси";

// Statistics
$GLOBALS['strStats'] = "Статистики";
$GLOBALS['strDailyStats'] = "Всички статистики";
$GLOBALS['strBreakdownByDay'] = "Ден";
$GLOBALS['strBreakdownByWeek'] = "Седмица";
$GLOBALS['strBreakdownByMonth'] = "Месец";
$GLOBALS['strBreakdownByDow'] = "Ден от седмицата";
$GLOBALS['strBreakdownByHour'] = "Час";
$GLOBALS['strNoStats'] = "Няма налични статистики";
$GLOBALS['strNoStatsForPeriod'] = "Няма налични статистики за приода от %s до %s";
$GLOBALS['strGlobalHistory'] = "Цялостна история";
$GLOBALS['strDailyHistory'] = "Дневна история";
$GLOBALS['strWeeklyHistory'] = "Седмична история";
$GLOBALS['strMonthlyHistory'] = "Месечна история";
$GLOBALS['strTotalThisPeriod'] = "Общо за периода";
$GLOBALS['strPublisherDistribution'] = "Разпределени на уебсайта";
$GLOBALS['strCampaignDistribution'] = "Разпределени на кампанията";
$GLOBALS['strViewBreakdown'] = "Виж по";
$GLOBALS['strBreakdownByDay'] = "Ден";
$GLOBALS['strBreakdownByWeek'] = "Седмица";
$GLOBALS['strBreakdownByMonth'] = "месец";
$GLOBALS['strBreakdownByDow'] = "Day of week";
$GLOBALS['strBreakdownByHour'] = "Час";
$GLOBALS['strItemsPerPage'] = "Атрибути на страница";
$GLOBALS['strDistributionHistoryCampaign'] = "История на разпределението (Кампания)";
$GLOBALS['strDistributionHistoryBanner'] = "История на разпределението (Банер)";
$GLOBALS['strDistributionHistoryWebsite'] = "История на разпределението (Уебсайт)";
$GLOBALS['strDistributionHistoryZone'] = "История на разпределението (Зона)";
$GLOBALS['strShowGraphOfStatistics'] = "Покажи <u>Г</u>рафика на статистиките";
$GLOBALS['strExportStatisticsToExcel'] = "<u>Е</u>кспортирай статистиките в Excel";
$GLOBALS['strGDnotEnabled'] = "Трябва да имате активиран GD в PHP, за да покажете графиките. <br />Моля, вижте <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> за повече информация, включително и как се инсталира GD на вашия сървър.";
$GLOBALS['strStatsArea'] = "Област";

// Expiration
$GLOBALS['strCampaignStop'] = "История на кампаниите";
$GLOBALS['strNoExpiration'] = "Не е заложена дата на изтичане";
$GLOBALS['strEstimated'] = "Очаквана дата на изтичане";
$GLOBALS['strNoExpirationEstimation'] = "Няма очаквано изтичане все още";
$GLOBALS['strDaysAgo'] = "дни";

// Reports
$GLOBALS['strPeriod'] = "Период";
$GLOBALS['strAdvancedReports'] = "Детайлни отчети";
$GLOBALS['strLimitations'] = "Ограничения";
$GLOBALS['strStartDate'] = "Начална дата";
$GLOBALS['strEndDate'] = "Крайна дата";
$GLOBALS['strWorksheets'] = "Работни листове";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers'] = "Общо рекламодатели";
$GLOBALS['strAnonAdvertisers'] = "Анонимни рекламодатели";
$GLOBALS['strAllPublishers'] = "Всички уебсайтове";
$GLOBALS['strAnonPublishers'] = "Амонимни уебсайтове";
$GLOBALS['strAllAvailZones'] = "Всички налични зони";

// Userlog
$GLOBALS['strAction'] = "Действие";
$GLOBALS['strUserLog'] = "Потребителско влизане";
$GLOBALS['strUserLogDetails'] = "Детайли на потребителя";
$GLOBALS['strDeleteLog'] = "Изтрийте влизането";
$GLOBALS['strNoActionsLogged'] = "Няма действия за влизане";

// Code generation
$GLOBALS['strGenerateBannercode'] = "Директен подбор";
$GLOBALS['strChooseInvocationType'] = "Моля, изберете вида на викане на банера";
$GLOBALS['strGenerate'] = "Генерирайте";
$GLOBALS['strParameters'] = "Настройкинна етикетите";
$GLOBALS['strFrameSize'] = "Размери на рамка";
$GLOBALS['strBannercode'] = "Код на банера";
$GLOBALS['strTrackercode'] = "Код на тракера";
$GLOBALS['strBackToTheList'] = "Върнете се към списъка с отчети";
$GLOBALS['strCharset'] = "Набор от знаци";
$GLOBALS['strAutoDetect'] = "Авто-засечено";
$GLOBALS['strCacheBusterComment'] = "  * Заместете всички истанции на {random} с
  * произволна генерирана цифра (или клеймо).
  *";
$GLOBALS['strSSLBackupComment'] = "
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";
$GLOBALS['strSSLDeliveryComment'] = "
  * This tag has been generated for use on a non-SSL page. If this tag
  * is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";

$GLOBALS['strThirdPartyComment'] = "
  * Don't forget to replace the '{clickurl}' text with
  * the click tracking URL if this ad is to be delivered through a 3rd
  * party (non-Max) adserver.";

// Errors
$GLOBALS['strErrorDatabaseConnetion'] = "Грешка пр връзката с базата данни.";
$GLOBALS['strErrorCantConnectToDatabase'] = "Възникна грешка %s и не можете да се свърже с базата данни. Поради  
                                                   тази причина не е възможно да използвате административния панел. Доставянето 
                                                   на банери вероятно е засегнато. Възможни причини за този проблем са:
                                                   <ul>
                                                     <li>Базата данни на сървъра не функционира в момента</li>
                                                     <li>Местоположението на базата данни е сменено</li>
                                                     <li>Потребителското име и паролата за връзка с базата данни не са правилни</li>
                                                     <li>PHP не зарежда MySQL разширението</li>
                                                   </ul>";
$GLOBALS['strNoMatchesFound'] = "Няма намерени съвпадения";
$GLOBALS['strErrorOccurred'] = "Възникна грешка";
$GLOBALS['strErrorDBPlain'] = "Възникна грешка при достъп към базата данни";
$GLOBALS['strErrorDBSerious'] = "Сериозен проблем с базата данни бе установен";
$GLOBALS['strErrorDBNoDataPlain'] = "Поради проблем с базата данни {$PRODUCT_NAME} данните не могат да се изтеглят и съхранят. ";
$GLOBALS['strErrorDBNoDataSerious'] = "Поради сериозен проблем с базата данни, {$PRODUCT_NAME} данните не могат да се изтеглят";
$GLOBALS['strErrorDBCorrupt'] = "Таблиците на базата данни са вероятно повредени и имат нужда да бъдат поправени. За повече информация отностно поправянето на таблиците, моля пишете в секция <i>Troubleshooting</i> в <i>Административната част</i>.";
$GLOBALS['strErrorDBContact'] = "Моля, свържете се с администратора на сървъра и го уведомете за проблема.";
$GLOBALS['strErrorDBSubmitBug'] = "Ако проблемът се появява отново, това може да се дължи на бъг в {$PRODUCT_NAME}. Моля, споменете тази информация с авторите на  {$PRODUCT_NAME}. Също така, опитайте се да опишете действията, които са довели до тази грешка възможно най-точно и ясно.";
$GLOBALS['strMaintenanceNotActive'] = "Поддържащият скрипт не е бил включван в последните 24 часа.
За да може приложението да оперира правилно, трябва да се включва на всеки час.

Моля, прочетете административната документация за повече информация
отностно конфигуриране на поддържащия скрипт.";
$GLOBALS['strErrorLinkingBanner'] = "Не е възможно да се върже този банер към зоната, защото:";
$GLOBALS['strUnableToLinkBanner'] = "Не е възможно да се върне банера: ";
$GLOBALS['strErrorEditingCampaignRevenue'] = "неправилен форма на цифрата в полето Revenue Information";
$GLOBALS['strErrorEditingCampaignECPM'] = "неправилен форма на цифрата в полето CPM Information";
$GLOBALS['strErrorEditingZone'] = "Грешка при обновяването на зоната:";
$GLOBALS['strUnableToChangeZone'] = "Не може да приложи тази промяна, защото:";
$GLOBALS['strDatesConflict'] = "Датите на кампанията, които се опитвате да вържете се застъпване с датите на кампанията, която вече е вързана ";
$GLOBALS['strEmailNoDates'] = "Кампаниите вързани към Email зоните имат вече остановена начална и крайна дата. {$PRODUCT_NAME} гарантира, че на дадената дата, само активния банер е вързан към Email зоната. Моля, уверете се, че кампанията е вече вързана към зоната, която няма застъпени дати с кампанията, която се опитвате да вържете.";
$GLOBALS['strWarningInaccurateStats'] = "Някой от тези статистики са влезли в не-UTC времевата зона и може да не се покаже в правилата вреева зона.";
$GLOBALS['strWarningInaccurateReadMore'] = "Прочетете повече за това";
$GLOBALS['strWarningInaccurateReport'] = "Някой от тези статистики в отчета са влезли в не-UTC времевата зона и може да не се покаже в правилата вреева зона";

//Validation
$GLOBALS['strRequiredFieldLegend'] = "отбелязаните полета са задължителни";
$GLOBALS['strFormContainsErrors'] = "Формата съдържа грешки, моля, поправете маркираните полета отдолу.";
$GLOBALS['strXRequiredField'] = "%s е задължително";
$GLOBALS['strEmailField'] = "Моля, въведете валиден email";
$GLOBALS['strNumericField'] = "Моля, въведете число (само числа са позволени)";
$GLOBALS['strGreaterThanZeroField'] = "Трябва да е по-голямо от 0";
$GLOBALS['strXGreaterThanZeroField'] = "%s трябва да е по-голямо от 0";
$GLOBALS['strXPositiveWholeNumberField'] = "%s трябва да положително цяло число";
$GLOBALS['strInvalidWebsiteURL'] = "Невалиден уеб адрес (URL)";

// Email
$GLOBALS['strSirMadam'] = "Сър/Мадам";
$GLOBALS['strMailSubject'] = "Отчет на рекламодателя";
$GLOBALS['strMailHeader'] = "Скъпи, {contact},";
$GLOBALS['strMailBannerStats'] = "По-долу са банер статистиките за {clientname}:";
$GLOBALS['strMailBannerActivatedSubject'] = "Кампанията е активиране";
$GLOBALS['strMailBannerDeactivatedSubject'] = "Кампанията е деактивирана";
$GLOBALS['strMailBannerActivated'] = "Вашата кампания, която се показва по-долу е активирана, защото
началната дата е дошла.";
$GLOBALS['strMailBannerDeactivated'] = "Вашата кампания по-долу бе деактивирана, защото";
$GLOBALS['strMailFooter'] = "Поздрави,
   {adminfullname}";
$GLOBALS['strClientDeactivated'] = "Тази кампания не е активна, защото";
$GLOBALS['strBeforeActivate'] = "началната дата не е дошла";
$GLOBALS['strAfterExpire'] = "крайната дата е дошла";
$GLOBALS['strNoMoreImpressions'] = "няма отставишни импресии (показвания)";
$GLOBALS['strNoMoreClicks'] = "няма оставащи кликове";
$GLOBALS['strNoMoreConversions'] = "няма оставащи продажби";
$GLOBALS['strWeightIsNull'] = "големината е заложена до нула";
$GLOBALS['strRevenueIsNull'] = "дохода е заложен до нула";
$GLOBALS['strTargetIsNull'] = "лимита за ден и заложен нула - трябва да уточните и двете - крайна дата и лимит, или да заложите лимити за ден.";
$GLOBALS['strNoViewLoggedInInterval'] = "Няма импресии през този участък в отчета";
$GLOBALS['strNoClickLoggedInInterval'] = "Няма кликове през този участък в отчета";
$GLOBALS['strNoConversionLoggedInInterval'] = "Няма реализации през този участък в отчета";
$GLOBALS['strMailReportPeriod'] = "Този отчет включва статистики от {startdate} до {enddate}.";
$GLOBALS['strMailReportPeriodAll'] = "Този отчет включва всики статистики до {enddate}.";
$GLOBALS['strNoStatsForCampaign'] = "Няма налични статистики за тази кампания";
$GLOBALS['strImpendingCampaignExpiry'] = "Неизбежно изтичане на кампанията";
$GLOBALS['strYourCampaign'] = "Вашата кампания";
$GLOBALS['strTheCampiaignBelongingTo'] = "Кампанията пренадлежи към";
$GLOBALS['strImpendingCampaignExpiryDateBody'] = "{clientname} показано по-долу е в следствие на края в {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody'] = "{clientname} показано по-долу има по-малко от {limit} оставащи импресии.";
$GLOBALS['strImpendingCampaignExpiryBody'] = "Като резултат, кампанията ще скоро ще бъде автоматично деактивирана, и банерите ще в кампанияща също:";

// Priority
$GLOBALS['strPriority'] = "Приоритет";
$GLOBALS['strSourceEdit'] = "Редактирай източника";

// Preferences
$GLOBALS['strPreferences'] = "Предпочитания";
$GLOBALS['strUserPreferences'] = "Потребителски предпочитания";
$GLOBALS['strChangePassword'] = "Смени паролата";
$GLOBALS['strChangeEmail'] = "Смени E-mail";
$GLOBALS['strCurrentPassword'] = "Настояща парола";
$GLOBALS['strChooseNewPassword'] = "Избери нова парола";
$GLOBALS['strReenterNewPassword'] = "Вкарай отново новата парола";
$GLOBALS['strNameLanguage'] = "Име & Език";
$GLOBALS['strAccountPreferences'] = "Предпочитания за акаунта ";
$GLOBALS['strCampaignEmailReportsPreferences'] = "Предпочитания за репортите на email кампанията";
$GLOBALS['strTimezonePreferences'] = "Предпочитания за времевата зона";
$GLOBALS['strAdminEmailWarnings'] = "System administrator email Warnings";
$GLOBALS['strAgencyEmailWarnings'] = "Предупреждения за email акаунта";
$GLOBALS['strAdveEmailWarnings'] = "Предупреждения за email рекламодателя";
$GLOBALS['strFullName'] = "Цяло име";
$GLOBALS['strEmailAddress'] = "Email адрес";
$GLOBALS['strUserDetails'] = "Детайли на потребителя";
$GLOBALS['strUserInterfacePreferences'] = "Предпочитания за потребителския изглед";
$GLOBALS['strPluginPreferences'] = "Предпочитания за разширение";
$GLOBALS['strColumnName'] = "Име на колона";
$GLOBALS['strShowColumn'] = "Покажи колона";
$GLOBALS['strCustomColumnName'] = "Собствено име на колона";
$GLOBALS['strColumnRank'] = "Ранк на колона";

// Long names
$GLOBALS['strERPM'] = "CPM";
$GLOBALS['strERPC'] = "CPC";
$GLOBALS['strERPS'] = "CPM";
$GLOBALS['strEIPM'] = "CPM";
$GLOBALS['strEIPC'] = "CPC";
$GLOBALS['strEIPS'] = "CPM";
$GLOBALS['strECPM'] = "CPM";
$GLOBALS['strECPC'] = "CPC";
$GLOBALS['strECPS'] = "CPM";
$GLOBALS['strImpressionSR'] = "Импресия";
$GLOBALS['strRevenue'] = "Приход";
$GLOBALS['strNumberOfItems'] = "Брой на артикулите";
$GLOBALS['strRevenueCPC'] = "CPC Приход";
$GLOBALS['strPendingConversions'] = "Изчакващи реализации";
$GLOBALS['strClickSR'] = "Клик";

// Short names
$GLOBALS['strRevenue_short'] = "Rev.";
$GLOBALS['strBasketValue_short'] = "BV";
$GLOBALS['strNumberOfItems_short'] = "Num. Items";
$GLOBALS['strRevenueCPC_short'] = "Rev. CPC";
$GLOBALS['strERPM_short'] = "CPM";
$GLOBALS['strERPC_short'] = "CPC";
$GLOBALS['strERPS_short'] = "CPM";
$GLOBALS['strEIPM_short'] = "CPM";
$GLOBALS['strEIPC_short'] = "CPC";
$GLOBALS['strEIPS_short'] = "CPM";
$GLOBALS['strECPM_short'] = "CPM";
$GLOBALS['strECPC_short'] = "CPC";
$GLOBALS['strECPS_short'] = "CPM";
$GLOBALS['strClicks_short'] = "Кликове";
$GLOBALS['strID_short'] = "ID";
$GLOBALS['strRequests_short'] = "Заявка";
$GLOBALS['strImpressions_short'] = "Импр.";
$GLOBALS['strCTR_short'] = "CTR";
$GLOBALS['strConversions_short'] = "Реал.";
$GLOBALS['strPendingConversions_short'] = "Изч. реал.";
$GLOBALS['strImpressionSR_short'] = "Импр.";
$GLOBALS['strClickSR_short'] = "Клинк";

// Global Settings
$GLOBALS['strConfiguration'] = "Конфигурация";
$GLOBALS['strGlobalSettings'] = "Общи настройки";
$GLOBALS['strGeneralSettings'] = "Основни настройки";
$GLOBALS['strMainSettings'] = "Главни настройки";
$GLOBALS['strPlugins'] = "Разширения";
$GLOBALS['strChooseSection'] = "Избери секция";

// Product Updates
$GLOBALS['strProductUpdates'] = "Обновления на продукта";
$GLOBALS['strViewPastUpdates'] = "Управление на минали обновления and бекъпи";
$GLOBALS['strFromVersion'] = "От версия";
$GLOBALS['strToVersion'] = "До версия";
$GLOBALS['strToggleDataBackupDetails'] = "Превключете детайлите на бекъпа на базата данни";
$GLOBALS['strClickViewBackupDetails'] = "натиснете, за да видите детайлите на бекъпа";
$GLOBALS['strClickHideBackupDetails'] = "натиснете, за да скриете детайлите на бекъпа";
$GLOBALS['strShowBackupDetails'] = "Покажи детайли на датата на бекъпа";
$GLOBALS['strHideBackupDetails'] = "Скрий детайли на датата на бекъпа";
$GLOBALS['strBackupDeleteConfirm'] = "Искате ли да изтриете всички създадени бекъпи от това обновление?";
$GLOBALS['strDeleteArtifacts'] = "Изтрий артефакти";
$GLOBALS['strArtifacts'] = "Абстракция";
$GLOBALS['strBackupDbTables'] = "Бекъп на таблиците на базата данни";
$GLOBALS['strLogFiles'] = "Log файлове";
$GLOBALS['strConfigBackups'] = "Конф. бекъпи";
$GLOBALS['strUpdatedDbVersionStamp'] = "Отпечатък на обновените версии на базата дании";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE'] = "ИЗПЪЛНЕНО ОБНОВЛЕНИЕ";
$GLOBALS['aProductStatus']['UPGRADE_FAILED'] = "НЕУСПЕШНО ОБНОВЛЕНИЕ";

// Agency
$GLOBALS['strAddAgency_Key'] = "Добави <u>н</u>ов тракер";
$GLOBALS['strNoAgencies'] = "Няма определени акаунти";
$GLOBALS['strConfirmDeleteAgency'] = "Наистина ли искате да изтриете този акаунт?";
$GLOBALS['strInactiveAgenciesHidden'] = "неактивният рекламодател(и) са скрити";
$GLOBALS['strAgencyManagement'] = "Упавление на акаунт";
$GLOBALS['strAgency'] = "Акаунт";
$GLOBALS['strAddAgency'] = "Добави нов акаунт";
$GLOBALS['strTotalAgencies'] = "Общо акаунти";
$GLOBALS['strAgencyProperties'] = "Опции на акаунта";
$GLOBALS['strHideInactiveAgencies'] = "Скрий некативните акаунти";
$GLOBALS['strSwitchAccount'] = "Преминете към този акаунт";

// Channels
$GLOBALS['strNoChannelsAddWebsite'] = "Няма посочени рекламодатели. За да създадете кампания първо <a href='advertiser-edit.php'>добавете нов рекламодател</a>.";
$GLOBALS['strConfirmDeleteChannel'] = "Наистина ли искате да изтриете този тракер?";
$GLOBALS['strConfirmDeleteChannels'] = "Наистина ли искате да изтриете този тракер?";
$GLOBALS['strChannel'] = "Целеви канал";
$GLOBALS['strChannels'] = "Целеви канали";
$GLOBALS['strChannelManagement'] = "Управление на целеви канал";
$GLOBALS['strAddNewChannel'] = "Добави нов целеви канал";
$GLOBALS['strAddNewChannel_Key'] = "Добави <u>н</u>ов целеви канал";
$GLOBALS['strChannelToWebsite'] = "към уебсайта";
$GLOBALS['strNoChannels'] = "Няма налични целеви канали";
$GLOBALS['strEditChannelLimitations'] = "Редактирайте лимитите на целивия канал";
$GLOBALS['strChannelProperties'] = "Настройки на целевия канал";
$GLOBALS['strChannelLimitations'] = "Опции за доставяне";
$GLOBALS['strChannelsOfWebsite'] = 'в'; // това се добавя между името на страницата и името на сайта, например: 'Целеви канали в www.example.com'


// Tracker Variables
$GLOBALS['strVariableName'] = "Име";
$GLOBALS['strVariableDescription'] = "Описание";
$GLOBALS['strTrackerType'] = "Име на тракер";
$GLOBALS['strVariablePurpose'] = "Предназначение";
$GLOBALS['strGeneric'] = "Общо";
$GLOBALS['strBasketValue'] = "Стойност на кошницата";
$GLOBALS['strNumItems'] = "Брой predmeti";
$GLOBALS['strVariableIsUnique'] = "Dedup реализации?";
$GLOBALS['strNumber'] = "Номер";
$GLOBALS['strString'] = "Стринг";
$GLOBALS['strTrackFollowingVars'] = "Проследете следните променливи";
$GLOBALS['strAddVariable'] = "Добете променлива";
$GLOBALS['strNoVarsToTrack'] = "Няма променливи за проследяване.";
$GLOBALS['strVariableRejectEmpty'] = "Откажете ако е празно?";
$GLOBALS['strTrackingSettings'] = "Следящи настройки";
$GLOBALS['strTrackerType'] = "Вид тракер";
$GLOBALS['strTrackerTypeJS'] = "Проследяващи JavaScript променливи";
$GLOBALS['strTrackerTypeDefault'] = "Проследяващи JavaScript променливи (обратно съвместими, избягването им е необходимо)";
$GLOBALS['strTrackerTypeDOM'] = "Проследете HTML елемент, използвайки DOM";
$GLOBALS['strTrackerTypeCustom'] = "Собствен JS код";
$GLOBALS['strVariableCode'] = "Javascript проследяващ код";

// Password recovery
$GLOBALS['strForgotPassword'] = "Забравена парола?";
$GLOBALS['strPasswordRecovery'] = "Възстановяване на парола";
$GLOBALS['strEmailRequired'] = "Email е задължително поле";
$GLOBALS['strPwdRecEmailNotFound'] = "Email адресът не е намерен";
$GLOBALS['strPwdRecWrongId'] = "Грешно ID";
$GLOBALS['strPwdRecEnterEmail'] = "Въведете вашия email адрес долу";
$GLOBALS['strPwdRecEnterPassword'] = "Въведете вашата парола долу";
$GLOBALS['strPwdRecResetLink'] = "Връзка за възтановяване на паролата";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s възтановяване на паролата";
$GLOBALS['strProceed'] = "Proceed >";
$GLOBALS['strNotifyPageMessage'] = "E-mail бе пратен до вас, включващ връзка, с която ще можете да
                                         възтановите вашата парола и да влезете. <br />Моля, изчакайте няколко минути, докато e-mail пристигне.<br />
                                         Ако не получите e-mail, моля проверете спам папката си.<br />
                                         <a href=\"index.php\">Върнете се към началната страца за вход.</a>";

// Audit
$GLOBALS['strAdditionalItems'] = "и добавете допълнителни предмети";
$GLOBALS['strFor'] = "за";
$GLOBALS['strHas'] = "има";
$GLOBALS['strBinaryData'] = "Двоични данни";
$GLOBALS['strAuditTrailDisabled'] = "Audit Trail е деактивиран от администратора на системата. Няма други събития, влизали и показани в Audit Trail списък.";

// Widget - Audit
$GLOBALS['strAuditNoData'] = "Няма записана потребителска активност през избрания от вас период.";
$GLOBALS['strAuditTrail'] = "Audit Trail";
$GLOBALS['strAuditTrailSetup'] = "Настройте Audit Trail днес";
$GLOBALS['strAuditTrailGoTo'] = "Отидете на Audit Trail сраницата";
$GLOBALS['strAuditTrailNotEnabled'] = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within {$PRODUCT_NAME}</li>
        <li>Виждате това съобщение, защото сте активирали Audit Trail</li>
        <li>Искате да научите повече? Прочетете <a href='{$PRODUCT_DOCSURL}/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail докоментацията</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo'] = "Отидете на страницата за кампании";
$GLOBALS['strCampaignSetUp'] = "Започнете кампанията днес";
$GLOBALS['strCampaignNoRecords'] = "<li>Кампаниите ви позволяват да групирате заедно чрез всеки брой банер реклами, размер, като споделяте обичайните рекламни изисквания</li>
        <li>Запазете времето чрез група от банерси с кампанията и не дефинирайте промени в настройките за всяка реклама по отделно</li>
        <li>Проверете <a class='site-link' target='help' href='{$PRODUCT_DOCSURL}/user/inventory/advertisersAndCampaigns/campaigns'>Документацията за кампаниите</a>!</li>";
$GLOBALS['strCampaignNoRecordsAdmin'] = "<li>Ням активни кампании за показване.</li>";

$GLOBALS['strCampaignNoDataTimeSpan'] = "Няма стартирани или приключили кампании през периода, който сте избрали";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>За да видите кампаниите, които са запознали или приключили през периода, който сте избрали, Audit Trail трябва да е активиран</li>
        <li>Вие виждае това съобщение, защото не сте кативирали Audit Trail</li>";
$GLOBALS['strCampaignAuditTrailSetup'] = "Активирайте Audit Trail, за да започнете да виждате кампаниите";

$GLOBALS['strUnsavedChanges'] = "Не сте запазили промените на страницата. Уверете се, че сте натиснали &quot;Save Changes&quot; , когато приключите!";
$GLOBALS['strDeliveryLimitationsDisagree'] = "ВНИМАНИЕ: Лимитите на двигателя за доставка <strong>НЕ СЕ СЪГЛАСЯВАТ</strong> с лимитите, показани по-долу.<br />Моля, запазете промените, за да обновят правилата на двигателя за доставка";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Някои от лимитите за доставка отбелязват некоректни стойности:";


//confirmation messages
$GLOBALS['strYouAreNowWorkingAsX'] = "Оперирате като <b>%s</b>";
$GLOBALS['strYouDontHaveAccess'] = "Нямате достъп то тази страница. Бяхте препратени.";

$GLOBALS['strAdvertiserHasBeenAdded'] = "Рекламодател <a href='%s'>%s</a> бе добавен, <a href='%s'>добавете нова кампания</a>";
$GLOBALS['strAdvertiserHasBeenUpdated'] = "Рекламодател <a href='%s'>%s</a> бе обновен";
$GLOBALS['strAdvertiserHasBeenDeleted'] = "Рекламодател <b>%s</b> бе изтрит";
$GLOBALS['strAdvertisersHaveBeenDeleted'] = "Всички рекламодатели са изтрити";

$GLOBALS['strTrackerHasBeenAdded'] = "Тракерът <a href='%s'>%s</a> е добавен";
$GLOBALS['strTrackerHasBeenUpdated'] = "Тракерът <a href='%s'>%s</a> е обновен";
$GLOBALS['strTrackerVarsHaveBeenUpdated'] = "Вариантите на тракера of tracker <a href='%s'>%s</a> бяха обновени";
$GLOBALS['strTrackerCampaignsHaveBeenUpdated'] = "Вързаните кампании на тракер <a href='%s'>%s</a> бяха обновени";
$GLOBALS['strTrackerAppendHasBeenUpdated'] = "Добавеният тракер код на тракер <a href='%s'>%s</a> бе обновен";
$GLOBALS['strTrackerHasBeenDeleted'] = "Тракерът <b>%s</b> бе изтрит";
$GLOBALS['strTrackersHaveBeenDeleted'] = "Всички ибрани тракери бяха изтрити";
$GLOBALS['strTrackerHasBeenDuplicated'] = "Тракерът <a href='%s'>%s</a> бе копирран в <a href='%s'>%s</a>";
$GLOBALS['strTrackerHasBeenMoved'] = "Тракерът <b>%s</b> бе преместен към рекламодател <b>%s</b>";

$GLOBALS['strCampaignHasBeenAdded'] = "Кампанията <a href='%s'>%s</a> бе добавена, <a href='%s'>добавете банер</a>";
$GLOBALS['strCampaignHasBeenUpdated'] = "Кампанията <a href='%s'>%s</a> бе обновена";
$GLOBALS['strCampaignTrackersHaveBeenUpdated'] = "Вързаните тракери на кампания <a href='%s'>%s</a> бяха обновени";
$GLOBALS['strCampaignHasBeenDeleted'] = "Кампанията <b>%s</b> бе изтрита";
$GLOBALS['strCampaignsHaveBeenDeleted'] = "Всички избрани кампании бяха изтрити";
$GLOBALS['strCampaignHasBeenDuplicated'] = "Кампанията <a href='%s'>%s</a> бе копирана в <a href='%s'>%s</a>";
$GLOBALS['strCampaignHasBeenMoved'] = "Кампанията <b>%s</b> бе преместена към рекламодател <b>%s</b>";

$GLOBALS['strBannerHasBeenAdded'] = "Банерът <a href='%s'>%s</a> е добавен";
$GLOBALS['strBannerHasBeenUpdated'] = "Банерът <a href='%s'>%s</a> е обновен";
$GLOBALS['strBannerAdvancedHasBeenUpdated'] = "Разширените настройки за банер <a href='%s'>%s</a> са обновени";
$GLOBALS['strBannerAclHasBeenUpdated'] = "Вариантите за доставяне на банер <a href='%s'>%s</a> са обновени";
$GLOBALS['strBannerAclHasBeenAppliedTo'] = "Вариантите за доставяне на банер <a href='%s'>%s</a> са приложени към %d банери";
$GLOBALS['strBannerHasBeenDeleted'] = "Банерът <b>%s</b> е изтрит";
$GLOBALS['strBannersHaveBeenDeleted'] = "Всички банери са изтрити";
$GLOBALS['strBannerHasBeenDuplicated'] = "Банерът <a href='%s'>%s</a> е копиран в <a href='%s'>%s</a>";
$GLOBALS['strBannerHasBeenMoved'] = "Банерът <b>%s</b> е преместен към кампания <b>%s</b>";
$GLOBALS['strBannerHasBeenActivated'] = "Банерът <a href='%s'>%s</a> е активиран";
$GLOBALS['strBannerHasBeenDeactivated'] = "Банерът <a href='%s'>%s</a> е деактивиран";

$GLOBALS['strXZonesLinked'] = "вързани са <b>%s</b> зона(и)";
$GLOBALS['strXZonesUnlinked'] = "отвързани са <b>%s</b> зона(и)";

$GLOBALS['strWebsiteHasBeenAdded'] = "Уебсайтът <a href='%s'>%s</a> е добавен, <a href='%s'>добавете нова зона</a>";
$GLOBALS['strWebsiteHasBeenUpdated'] = "Уебсайтът <a href='%s'>%s</a> е обновен";
$GLOBALS['strWebsiteHasBeenDeleted'] = "Уебсайтът <b>%s</b> е изтрит";
$GLOBALS['strWebsitesHaveBeenDeleted'] = "Всички уебсайтове са изтрити";

$GLOBALS['strZoneHasBeenAdded'] = "Зона <a href='%s'>%s</a> бе добавена";
$GLOBALS['strZoneHasBeenUpdated'] = "Зона <a href='%s'>%s</a> бе обновена";
$GLOBALS['strZoneAdvancedHasBeenUpdated'] = "Разширените настройки за зона <a href='%s'>%s</a> са обновени";
$GLOBALS['strZoneHasBeenDeleted'] = "Зона <b>%s</b> бе изтрита";
$GLOBALS['strZonesHaveBeenDeleted'] = "Всички избрани зони са изтрити";
$GLOBALS['strZoneHasBeenDuplicated'] = "Зона <a href='%s'>%s</a> бе копирана в <a href='%s'>%s</a>";
$GLOBALS['strZoneHasBeenMoved'] = "Зона <b>%s</b> бе преместена в уебсайт <b>%s</b>";
$GLOBALS['strZoneLinkedBanner'] = "Банерът е вързан към зона <a href='%s'>%s</a>";
$GLOBALS['strZoneLinkedCampaign'] = "Кампанията е вързана към зона <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedBanner'] = "Банерът е отвързан от зона <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedCampaign'] = "Кампанията е отвързана от зона <a href='%s'>%s</a>";

$GLOBALS['strChannelHasBeenAdded'] = "Целевият канал <a href='%s'>%s</a> е добавен, <a href='%s'>сменете възможностите за поставка</a>";
$GLOBALS['strChannelHasBeenUpdated'] = "Целевият канал <a href='%s'>%s</a> бе обновен";
$GLOBALS['strChannelAclHasBeenUpdated'] = "Възможностите за поставка за целеия канал <a href='%s'>%s</a> бяха обновени";
$GLOBALS['strChannelHasBeenDeleted'] = "Целевият канал <b>%s</b> е изтрит";
$GLOBALS['strChannelsHaveBeenDeleted'] = "Всички избрани целеви канали са изтрити";
$GLOBALS['strChannelHasBeenDuplicated'] = "Целевият канал <a href='%s'>%s</a> е копиран в <a href='%s'>%s</a>";

$GLOBALS['strUserPreferencesUpdated'] = "Вашите <b>%s</b> предпочитания бяха обновени";
$GLOBALS['strEmailChanged'] = "Вашият E-mail бе променен";
$GLOBALS['strPasswordChanged'] = "Вашата парла бе обновена";
$GLOBALS['strXPreferencesHaveBeenUpdated'] = "<b>%s</b> е обновено";
$GLOBALS['strXSettingsHaveBeenUpdated'] = "<b>%s</b> бяха обновени";
$GLOBALS['strTZPreferencesWarning'] = "Активацията и изтичането на кампанията не са обновени, или са с времево-ограничени банер лимити. Трябва да ги обновите ръчно, ако искате да използват новата времева зона";

// Report error messages
$GLOBALS['strReportErrorMissingSheets'] = "Не е избран работен ли за отчет";
$GLOBALS['strReportErrorUnknownCode'] = "Непознат код за грешки #";

/* ------------------------------------------------------- */
/* Keyboard shortcut assignments                           */
/* ------------------------------------------------------- */

// Reserved keys
// Do not change these unless absolutely needed
$GLOBALS['keyHome'] = "н";
$GLOBALS['keyUp'] = "г";
$GLOBALS['keyNextItem'] = ".";
$GLOBALS['keyPreviousItem'] = ",";
$GLOBALS['keyList'] = "л";

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch'] = "т";
$GLOBALS['keyCollapseAll'] = "з";
$GLOBALS['keyExpandAll'] = "р";
$GLOBALS['keyAddNew'] = "н";
$GLOBALS['keyNext'] = "н";
$GLOBALS['keyPrevious'] = "п";
$GLOBALS['keyLinkUser'] = "п";
$GLOBALS['keyWorkingAs'] = "о";
