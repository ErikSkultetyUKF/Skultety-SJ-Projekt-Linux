<?php

    class Page {

        private $pageName;

        public function __construct($pageName) {
            $this->pageName = $pageName;
        }

        function addStylesheets() {
            echo('<link rel="stylesheet" href="../assets/css/style.css">');
            echo('<link rel="stylesheet" href="../assets/css/topnav.css">');
            echo('<link rel="stylesheet" href="../assets/css/desktop.css">');
            echo('<link rel="stylesheet" href="../assets/css/mobile.css">');

            switch($this->pageName) {
            case 'home':
                echo('<link rel="stylesheet" href="../assets/css/slider.css">');
                break;
            case 'linux':
                echo('<link rel="stylesheet" href="../assets/css/accordion.css">');
                break; 
            case 'distributions':
                echo('<link rel="stylesheet" href="../assets/css/accordion.css">');
                break; 
            case 'community':
                echo('<link rel="stylesheet" href="../assets/css/gallery.css">');
                break; 
            case 'contact':
                echo('<link rel="stylesheet" href="../assets/css/form.css">');
                break; 
            case 'contact-update':
                echo('<link rel="stylesheet" href="../assets/css/form.css">');
                break; 
            case 'login':
                echo('<link rel="stylesheet" href="../assets/css/form.css">');
                break;  
            case 'register':
                echo('<link rel="stylesheet" href="../assets/css/form.css">');
                break; 
            case 'admin':
                echo('<link rel="stylesheet" href="../assets/css/form.css">');
                break; 
            } 
        }

        function addScripts() {
            echo('<script src="../assets/js/script.js"></script>');

            switch($this->pageName) {
            case 'home':
                echo('<script src="../assets/js/slider.js"></script>');
                break;
            case 'linux':
                echo('<script src="../assets/js/accordion.js"></script>');
                break;  
            case 'distributions':
                echo('<script src="../assets/js/accordion.js"></script>');
                break;  
            } 
        }
    }
?>