<?php
namespace Craft;

class PThumbPlugin extends BasePlugin {
  public function getName() {
    return Craft::t('PThumb');
  }

  public function getVersion() {
    return '0.1';
  }

  public function getDeveloper() {
    return 'Carnes Media';
  }

  public function getDeveloperUrl() {
    return 'http://carnesmedia.com';
  }

  protected function defineSettings() {
    return array(
      'storage_path' => array(AttributeType::String, 'required' => true),
      'base_url' => array(AttributeType::String, 'required' => true),
    );
  }

  public function getSettingsHtml() {
    return craft()->templates->render('pthumb/_settings', array(
      'settings' => $this->getSettings()
    ));
  }

}
