<?php
    class product {
        private $img_per_page = 1;
        public function __construct($ipp){
            $this->img_per_page = $ipp;
        }
        public function getProduct($type, $page){
            $from = ($page - 1) * $this->img_per_page + 1;
            $to = $page * $this->img_per_page;
            $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            if ($conn->connect_error){
                die("Connect fail: ".$conn->connect_error);
            }
            if ($type == NULL)
                $sql = 'SELECT `product_id`, `description`, `path` FROM `product` ORDER BY `product_id` DESC';
            else
                $sql = "SELECT `product_id`, `description`, `path` FROM `product` WHERE `tag` IN( SELECT `id` FROM `tag` WHERE value = '$type')";
            $data = $conn->query($sql);
            if ($data->num_rows > 0){
                $result = array('data'=>array(), 'before' => false, 'after' => false);
                $i = 0;
                while ($row = $data->fetch_assoc()) {
                    $i++;
                    if ($i >= $from && $i <= $to)
                        array_push($result['data'], array($row["product_id"], $row["description"], $row["path"]));
                }
                $conn->close();
                if ($page<>NULL && $page <> 1) $result['before'] = true;
                if ($i > $to) $result['after'] = true;
                return $result;
            }
            else {
                $conn->close();
                return NULL;
            }
        }
    }
?>
