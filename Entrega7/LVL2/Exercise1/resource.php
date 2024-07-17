<?php
    
    require 'theme.php';
    require 'content.php';

    class Resource {
        private $name;
        private Theme $theme;
        private $url;
        private Content $content;

        //CONSTRUCT
        public function __construct(string $name, Theme $theme, String $url, Content $content){
           $this->name =  $name;
           $this->theme = $theme;
           $this->url = $url;
           $this->content = $content;
        }
        //GETTERS
        public function getName() {
            return $this->name;
        }
        public function getTheme() {
            return $this->theme;
        }
        public function getUrl(){
            return $this->url;
        }
        public function getContent() {
            return $this->content;
        }

        //SETTERS
        public function setName(String $name) {
            $this->name = $name;
        }
        public function setTheme(Theme $theme) {
            $this->theme = $theme;
        }
        public function setUrl(String $url) {
            $this->url = $url;
        }
        public function setContent(Content $content) {
            $this->content = $content;
        }
    }