<?php

    class Catalog extends DB
    {
        protected function get_products()
        {
            $sql = "SELECT * FROM products";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $query = $stmt->get_result();
            return $this->get_Data($query);
        }

        protected function insert($sku, $name, $price, $type, $details)
        {
            $sql = "INSERT INTO products (sku, name, type, price, details) VALUES (?,?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bind_param('sssss', $sku, $name, $price, $type, $details);

            if ($stmt->execute()) {
                return true;
            } else {
                echo "Error: " . $stmt->error;
            }
            return false;
        }

        protected function delete_product($sn)
        {
            $sql = "DELETE FROM products WHERE sn = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bind_param('s', $sn);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }

        protected function confirm_sku($input)
        {
            $sql = "SELECT * FROM products WHERE sku = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bind_param('s', $input);
            $stmt->execute();

            $response = $stmt->get_result();
            $result = array();
            while ($res = $response->fetch_array()) {
                $result[] = $res;
            }

            if (count($result) > 0) {
                return true;
            }

            return false;
        }


        private function get_Data($result)
        {
            if (!$result) {
                die('Error in query: ');
            }
            $data= array();
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $data[]=$row;
            }
            return $data;
        }
    }
