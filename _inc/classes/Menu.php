<?php

    class Menu {
        
        private $pages;

        public function __construct($pages) {
            $this->pages = $pages;
        }

        // Vygenerovať menu
        function generateMenu(): string {
            $menuItems = '';
            
            foreach($this->pages as $pageName => $pageUrl) {
                $menuItems .= '<a href="'.$pageUrl.'">'.$pageName.'</a>';
            }
        
            return $menuItems;
        }
    }
?>