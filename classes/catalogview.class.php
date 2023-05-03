<?php

    class CatalogView extends Catalog
    {
        public function display_products()
        {
            $arr = $this->get_products();
            if (sizeof($arr) > 0) {
                for ($i = 0; $i < sizeof($arr); $i++) {
                    echo "<div class=row><div class=col><div class=card>
            <div class=card-title d-flex justify-content-center>
            <div class=form-check>
            <input type=checkbox class=form-check-input name=".$arr[$i]['sn']." id=dropdownCheck>
           
            </div>
            </div>
            <div class=card-body>
			<p>".$arr[$i] ['sku']."</p>
            <p>".$arr[$i]['name']."</p>
            <p> $".$arr[$i]['price']."</p>
            <p>".$arr[$i]['details']."</p>
            </div>
            </div></div></div>";
                }
            }
        }
    }
