<?php

abstract class Button {
    protected $_html;

    public function getHtml()
    {
        return $this->_html;
    }
}

class ImageButton extends Button {
    protected $_html = "1..."; // HTML-код кнопки-картинки
}

class InputButton extends Button {
    protected $_html = "2..."; // HTML-код обычной кнопки
}

class FlashButton extends Button {
    protected $_html = "3..."; // HTML-код Flash-кнопки
}


class ButtonFactory
{
    public static function createButton($type)
    {
        $baseClass = 'Button';
        $targetClass = ucfirst($type) . $baseClass;

        if (class_exists($targetClass) && is_subclass_of($targetClass, $baseClass)) {
            return new $targetClass;
        } else {
            throw new Exception("The button type '$type' is not recognized.");
        }
    }
}


$buttons = array('image','input','flash');
foreach($buttons as $b) {
    echo ButtonFactory::createButton($b)->getHtml();
}
