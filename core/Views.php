<?php

namespace core;

class Views {

    /**
     * Название шаблона
     * @var string 
     */
    public $template = 'main.php';

    /**
     * Контент для отображения
     * @var string 
     */
    public $content_view;

    public function show() {
        include_once 'template/'. $this->template;
    }

}
