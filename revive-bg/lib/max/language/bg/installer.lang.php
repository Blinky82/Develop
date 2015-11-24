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

/** status messages * */
$GLOBALS['strInstallStatusRecovery'] = 'Възстановяване на Revive Adserver %s';
$GLOBALS['strInstallStatusInstall'] = 'Инсталиране на Revive Adserver %s';
$GLOBALS['strInstallStatusUpgrade'] = 'Обновяване на Revive Adserver %s';
$GLOBALS['strInstallStatusUpToDate'] = 'Изтриване на Revive Adserver %s';

/** welcome step * */
$GLOBALS['strWelcomeTitle'] = "Добре дошли в {$PRODUCT_NAME}";
$GLOBALS['strInstallIntro'] = "Благодарим ви, че избрахте {$PRODUCT_NAME}. Този чудесен продукт ще ви доведе през процеса на исталиране на {$PRODUCT_NAME} .";
$GLOBALS['strUpgradeIntro'] = "Благодарим ви, че избрахте {$PRODUCT_NAME}. Този чудесен продукт ще ви доведе през процеса на обновяване на {$PRODUCT_NAME}.";
$GLOBALS['strInstallerHelpIntro'] = "За да ви помогнем с инсталационния процес на {$PRODUCT_NAME}, моля вижте <a href='{$PRODUCT_DOCSURL}' target='_blank'>Документацията</a>.";
$GLOBALS['strTermsIntro'] = "{$PRODUCT_NAME} е дистрибутиран свободно под Open Source лиценз, GNU General Public лиценз. Моля, разгледайте и приемете нашите документи, за да продължите с инсталацията.";

/** check step * */
$GLOBALS['strSystemCheck'] = "Проверка на системата";
$GLOBALS['strSystemCheckIntro'] = "В момента върви проверка на вашия уеб сървър, за да се уверим, че иснталационния процес ще мине успешно.
                                                  <br>Моля, проверете всички подчертани проблеми, за да завършим инсталационния процес.";
$GLOBALS['strFixErrorsBeforeContinuing'] = "Конфигурацията на вашия уеб сървър не отговаря на изискванията на {$PRODUCT_NAME}.
                                                   <br>За да продължим с инсталацията, моля поправете всички грешки.
                                                   За помощ, моля вижте нашата <a href='{$PRODUCT_DOCSURL}'>документация</a> and <a href='http://{$PRODUCT_URL}/faq'>FAQs</a>";

$GLOBALS['strAppCheckErrors'] = "Бяха намерени грешки при засичане на стара инсталация на {$PRODUCT_NAME}";
$GLOBALS['strAppCheckDbIntegrityError'] = "Намерихме грешки с вашата база данни. Това означава, че оформлението на вашата база данни
                                                   се различава от очакваното. Това е причина от персонализирането на вашата база данни.";

$GLOBALS['strSyscheckProgressMessage'] = "Проверка на състемните параметри...";
$GLOBALS['strError'] = "Грешка";
$GLOBALS['strOK'] = "OK";
$GLOBALS['strSyscheckName'] = "Име";
$GLOBALS['strSyscheckValue'] = "Стойност";
$GLOBALS['strSyscheckSeeFullReport'] = "Покажи детайлната системна проверка";
$GLOBALS['strSyscheckSeeShortReport'] = "Покажи само грешките и предупрежденията";
$GLOBALS['strBrowserCookies'] = 'Бизквитки в браузъра';
$GLOBALS['strPHPConfiguration'] = 'PHP конфигурация';
$GLOBALS['strCheckError'] = 'грешка';
$GLOBALS['strCheckErrors'] = 'грешки';
$GLOBALS['strCheckWarning'] = 'предупреждение';
$GLOBALS['strCheckWarnings'] = 'предупреждения';
$GLOBALS['strWarning'] = "Предупреждение";
$GLOBALS['strSyscheckStatus'] = "Статус";

/** admin login step * */
$GLOBALS['strAdminLoginTitle'] = "Моля, влезте като {$PRODUCT_NAME} администратор";
$GLOBALS['strAdminLoginIntro'] = "За да продължите, моля напишете вашата информация като системен администратор в акаунта към {$PRODUCT_NAME}.";
$GLOBALS['strLoginProgressMessage'] = 'Влизане в системата...';

/** database step * */
$GLOBALS['strAdminLoginTitle'] = "Моля, влезте като администратор на {$PRODUCT_NAME}";
$GLOBALS['strAdminLoginIntro'] = "За да продължите, моля напишете вашата информация като системен администратор в акаунта към {$PRODUCT_NAME}.";
$GLOBALS['strLoginProgressMessage'] = 'Влизане в системата...';

/** database step * */
$GLOBALS['strDbSetupTitle'] = "Осигуряване вашата база данни";
$GLOBALS['strDbSetupIntro'] = "Осигуряване детайли за да се върже към вашата база данни на {$PRODUCT_NAME}.";
$GLOBALS['strDbUpgradeTitle'] = "Вашата база данни бе засечена";
$GLOBALS['strDbUpgradeIntro'] = "Следната база данни бе засечена за тази инсталация на {$PRODUCT_NAME}.
                                                   Моля, уверете се, че това е правилно и натиснете \"Продължи\", за да продължите напред.";
$GLOBALS['strDbProgressMessageInstall'] = 'Базата данни се инсталира...';
$GLOBALS['strDbProgressMessageUpgrade'] = 'Базата данни се обновява...';
$GLOBALS['strDbSeeMoreFields'] = 'Вижте още полета на базата данни...';
$GLOBALS['strDbTimeZoneWarning'] = "<p>Тази версия на {$PRODUCT_NAME} запазва датите в UTC време, отколкото във времето на сървъра.</p>
                                                   <p>Ако искате статистики да се показват с правилната времева зона, обновете данните си ръчно.  Научете повече <a target='help' href='%s'>тук</a>.
                                                      Вашите стойности на статистиките ще останат точни дори ако оставите вашите данни недокоснати
                                                   </p>";
$GLOBALS['strDbTimeZoneNoWarnings'] = "Не показвайте предупреждения на времевата зона в бъдеще";
$GLOBALS['strDBInstallSuccess'] = "Създаването на базата данни бе успешно";
$GLOBALS['strDBUpgradeSuccess'] = "Обновлението на базата данни бе успешно";

$GLOBALS['strDetectedVersion'] = "Засечена е {$PRODUCT_NAME} версия";

/** config step * */
$GLOBALS['strConfigureInstallTitle'] = "Конфигурирайте вашия локален {$PRODUCT_NAME} акаунт като системен администратор";
$GLOBALS['strConfigureInstallIntro'] = "Моля, предоставете нужната информация за влизане във вашия локален {$PRODUCT_NAME} акаунт като системен администратор.";
$GLOBALS['strConfigureUpgradeTitle'] = "Настройки на конфигурацията";
$GLOBALS['strConfigureUpgradeIntro'] = "Предоставете пътя до вашата предишна инсталация на {$PRODUCT_NAME}.";
$GLOBALS['strConfigSeeMoreFields'] = "Вижте повече полета за конфигурация...";
$GLOBALS['strPreviousInstallTitle'] = "Предишна инсталация";
$GLOBALS['strPathToPrevious'] = "Път към предишната инсталация на {$PRODUCT_NAME}";
$GLOBALS['strPathToPreviousError'] = "Един или повече файлове на разширението не могат да се намеря. Моля, проверете файлът install.log за повече информация";
$GLOBALS['strConfigureProgressMessage'] = "Конфигиране на {$PRODUCT_NAME}...";

/** jobs step * */
$GLOBALS['strJobsInstallTitle'] = "Извършване на инсталационни дейности";
$GLOBALS['strJobsInstallIntro'] = "Инсталатора в момента извършва финални инсталационни задачи.";
$GLOBALS['strJobsUpgradeTitle'] = "Извършване на задачи по обновлението";
$GLOBALS['strJobsUpgradeIntro'] = "Инсталатора в момента извършва финални задачи по обновлението.";
$GLOBALS['strJobsProgressInstallMessage'] = "Извършване на инсталационни задачи...";
$GLOBALS['strJobsProgressUpgradeMessage'] = "Извършване на задачи по обновлението...";

$GLOBALS['strPluginTaskChecking'] = "Проверка за разширение за {$PRODUCT_NAME}";
$GLOBALS['strPluginTaskInstalling'] = "Инсталиране на разширение за {$PRODUCT_NAME}";
$GLOBALS['strPostInstallTaskRunning'] = "Работещи задача";

/** finish step * */
$GLOBALS['strFinishInstallTitle'] = "Вашата инсталация на {$PRODUCT_NAME} е завършена.";
$GLOBALS['strFinishUpgradeWithErrorsTitle'] = "Вашето обновление на {$PRODUCT_NAME} е завършено. Моля, проверете подчертаниете грешки.";
$GLOBALS['strFinishUpgradeTitle'] = "Вашето обновление на {$PRODUCT_NAME} е завършено.";
$GLOBALS['strFinishInstallWithErrorsTitle'] = "Вашата инсталация на {$PRODUCT_NAME} е завършена. Моля, проверете подчертаниете грешки.";
$GLOBALS['strDetailedTaskErrorList'] = "Намерен е детайлен списък с грешки";
$GLOBALS['strPluginInstallFailed'] = "Инсталацията на разширението \"%s\" не успя:";
$GLOBALS['strTaskInstallFailed'] = "Възникна грешка при изпълениет на инсталационната задача \"%s\":";
$GLOBALS['strContinueToLogin'] = "Натиснете \"Продължи\", за да влезете във вашия панел на {$PRODUCT_NAME}.";

$GLOBALS['strUnableCreateConfFile'] = "We are unable to create your configuration file. Please re-check the permissions of the {$PRODUCT_NAME} var folder.";
$GLOBALS['strUnableUpdateConfFile'] = "We are unable to update your configuration file. Please re-check the permissions of the {$PRODUCT_NAME} var folder, and also check the permissions of the previous install's config file that you copied into this folder.";
$GLOBALS['strUnableToCreateAdmin'] = "We are unable to create a system administrator account, is your database accessible?";
$GLOBALS['strTimezoneLocal'] = "{$PRODUCT_NAME} has detected that your PHP installation is returning \"System/Localtime\" as the timezone
of your server. This is because of a patch to PHP applied by some Linux distributions.
Unfortunately, this is not a valid PHP timezone. Please edit your php.ini file and set the \"date.timezone\"property to the correct value for your server.";
