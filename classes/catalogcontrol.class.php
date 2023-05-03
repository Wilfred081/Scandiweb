<?php

    class CatalogControl extends Catalog
    {
        private $name;
        private $productType;
        private $price;
        private $details;
        private $sku;

        public function __construct($sku, $name, $productType, $price, $details)
        {
            $this->details = $details;
            $this->price = $price;
            $this->productType = $productType;
            $this->name = $name;
            $this->sku = $sku;
        }

        public function add_product()
        {
            $add =parent::insert($this->sku, $this->name, $this->productType, $this->price, $this->details);
        }

        private function generate_sku()
        {
            $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $pass = array();
            $alphaLength = strlen($alphabet) - 1;
            for ($i = 0; $i < 5; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass); //turn the array into a string
        }

        public function checkSku($sku)
        {
            return parent::confirm_sku($sku);
        }

        public function mass_delete()
        {
            $arr = parent::get_products();
            if (sizeof($arr) > 0) {
                for ($i = 0; $i < sizeof($arr); $i++) {
                    if (isset($_POST[$arr[$i]['sn']])) {
                        if ($_POST[$arr[$i]['sn']] == 'on') {
                            $this->delete_product($arr[$i]['sn']);
                        }
                    }
                }
            }
        }
    }
