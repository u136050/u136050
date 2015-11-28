<?
global $MESS;
$PathInstall = str_replace("\\", "/", __FILE__);
$PathInstall = substr($PathInstall, 0, strlen($PathInstall)-strlen("/index.php"));
IncludeModuleLangFile($PathInstall."/install.php");

if(class_exists("dev_module")) return;

Class dev_module extends CModule
{
    var $MODULE_ID = "dev_module";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_GROUP_RIGHTS = "Y";

    function dev_module()
    {
        $this->MODULE_VERSION = '0.1';
        $this->MODULE_VERSION_DATE = '2011-1-27';
        $this->MODULE_NAME = "dev_module – модуль с компонентом";
        $this->MODULE_DESCRIPTION = 'После установки вы сможете пользоваться компонентом user:elements';
    }

    function DoInstall()
    {
        global $DOCUMENT_ROOT, $APPLICATION;
        $this->InstallFiles();
        RegisterModule("dev_module");
        $APPLICATION->IncludeAdminFile("Установка модуля dev_module", $DOCUMENT_ROOT."/bitrix/modules/dev_module/install/step1.php");
    }

    function InstallFiles($arParams = array())
    {
        CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/dev_module/install/components", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components/user/", true, true);
        return true;
    }
    function UnInstallFiles()
    {
        DeleteDirFilesEx("/bitrix/components/user/elements/");
        return true;
    }

    function DoUninstall()
    {
        global $DOCUMENT_ROOT, $APPLICATION;
        $this->UnInstallFiles();
        UnRegisterModule("dev_module");
        $APPLICATION->IncludeAdminFile("Деинсталляция модуля dev_module", $DOCUMENT_ROOT."/bitrix/modules/dev_module/install/unstep1.php");
    }
}
?>