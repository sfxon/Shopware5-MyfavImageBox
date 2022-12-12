<?php

namespace MyfavImageBox\Bootstrap;

use Shopware\Components\Emotion\ComponentInstaller;

class EmotionElementInstaller
{
    /**
     * @var ComponentInstaller
     */
    private $emotionComponentInstaller;

    /**
     * @var string
     */
    private $pluginName;

    /**
     * @param string $pluginName
     * @param ComponentInstaller $emotionComponentInstaller
     */
    public function __construct($pluginName, ComponentInstaller $emotionComponentInstaller)
    {
        $this->emotionComponentInstaller = $emotionComponentInstaller;
        $this->pluginName = $pluginName;
    }

    public function install()
    {
        $boxElement = $this->emotionComponentInstaller->createOrUpdate(
            $this->pluginName,
            'mvImageBox',
            [
                'name' => 'Image-Box',
                'xtype' => 'emotion-components-myfavimagebox',
                'template' => 'myfavimagebox',
                'cls' => 'emotion-myfavimagebox-element',
                'description' => 'Mindfavs Image-Box für Einkaufswelten.'
            ]
        );

        $boxElement = $this->createMainFields($boxElement);
    }

    /**
    * Haupt-Felder erstellen.
    */
    private function createMainFields($boxElement) {
        $allowBlank = true;
                
        $boxElement->createTextField([
            'name' => 'title_box',
            'fieldLabel' => 'Boxen-Titel ',
            'supportText' => 'Titeltext der Box',
            'allowBlank' => $allowBlank
        ]);
                
        $boxElement->createMediaField([
            'name' => 'image_big',
            'fieldLabel' => 'Bild Groß',
            'supportText' => 'Bild',
            'allowBlank' => $allowBlank
        ]);

        $boxElement->createTextField([
            'name' => 'box_text',
            'fieldLabel' => 'Text',
            'supportText' => 'Text in der Box',
            'allowBlank' => $allowBlank
        ]);
                
        $boxElement->createTextField([
            'name' => 'dst_url',
            'fieldLabel' => 'Ziel-URL',
            'supportText' => 'URL, die aufgerufen werden soll, wenn der Kunde den Titeltext anklickt.',
            'allowBlank' => $allowBlank
        ]);
                
        $boxElement->createTextField([
            'name' => 'text_color',
            'fieldLabel' => 'Text-Farbe ',
            'supportText' => 'Text Farbe der Box',
            'allowBlank' => $allowBlank
        ]);
                
        $boxElement->createTextField([
            'name' => 'text_background_color',
            'fieldLabel' => 'Text-Hintergrund-Farbe ',
            'supportText' => 'Hintergrund Farbe des Textes in der Box.',
            'allowBlank' => $allowBlank
        ]);
                
        return $boxElement;
    }
}