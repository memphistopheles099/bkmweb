<?php
    class product {
        function getProduct($page = 1){
            $from = ($page - 1) * 10 + 1;
            $to = $page * 10;
            $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            if ($conn->connect_error){
                die("Connect fail: ".$conn->connect_error);
            }
            $sql = 'SELECT `product_id`, `description`, `path` FROM `product` ORDER BY `product_id` DESC';
            $data = $conn->query($sql);
            if ($data->num_rows > 0){
                $result = array();
                $i = 1;
                while ($row = $data->fetch_assoc()) {
                    if ($i >= $from && $i <= $to)
                        array_push($result, array($row["product_id"], $row["description"], $row["path"]));
                    $i++;
                }
                $conn->close();
                return $result;
            }
            else {
                $conn->close();
                return NULL;
            }
        }
    }
?>
