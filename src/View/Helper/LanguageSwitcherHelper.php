<?php
namespace LanguageSwitcher\View\Helper;

use Cake\Core\Configure;
use Cake\Core\InstanceConfigTrait;
use Cake\Routing\Router;
use Cake\Utility\Text;
use Cake\View\Helper;
use Cake\View\View;

/**
 * LanguageSwitcher helper
 */
class LanguageSwitcherHelper extends Helper
{

    use InstanceConfigTrait;

    protected $_defaultConfig = [
        'availableLanguages' => [
            'en_US'
        ],
        'displayNames' => [
            'en_US' => 'English'
        ],
        'imageMapping' => [
            'en_US' => 'United-States'
        ]
    ];

    /**
     * Constructor.
     *
     * @param array $config config
     */
    public function initialize(array $config = [])
    {
        $this->configShallow($config);
    }

    /**
     * Renders language switcher dropdown
     *
     * @return element
     */
    public function renderLanguageSwitcher()
    {
        return $this->_View->element('LanguageSwitcher.language_switcher', [
            'availableLanguages' => $this->config('availableLanguages'),
            'displayNames' => $this->config('displayNames'),
            'imageMapping' => $this->config('imageMapping')
        ]);
    }
}