<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
    {
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('Favicon'), _t('输入favicon的链接，请带上http或https'));
    $form->addInput($favicon);

    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('Logo'), _t('输入首页头像的链接，请带上http或https'));
    $form->addInput($logo);

    $github = new Typecho_Widget_Helper_Form_Element_Text('github', NULL, NULL, _t('github地址'), _t('在这里填入你github 首页地址'));
    $form->addInput($github);
 
}

}