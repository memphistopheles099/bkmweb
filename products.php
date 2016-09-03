<!doctype html>
<html>
    <?php include 'module/initial.php'?>
    <body>
        <?php include 'module/header.php'; ?>
        <?php include 'module/slider.php'; ?>
        <?php include 'module/model.php';?>
        <div class="col-md-12">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="big_container">
            <div class="col-md-12" style="border-bottom: 5px ridge grey; margin-bottom: 5px;">
                <h1>Sản phẩm </h1>
            </div>

            <div class="col-md-12">
                <a href="index.php"><span class="tag">Hello Goodbye</span></a>
            </div>
            <?php
                $prd = new product();
                $data = $prd->getProduct();
                foreach ($data as $d){
            ?>
            <div class="col-md-3 thumbnail" id="thumb" style="height:200px;">
                <img src="<?php echo $d[2] ?>" >
                <p align="center"><?php echo $d[1] ?></p>
            </div>
            <?php } ?>
        </div>
        <div class="col-md-2"></div>
        </div>

        <?php include 'module/footer.php'?>
        <script type="text/javascript">
            (function(){
                var img = document.getElementById("thumb").firstChild;
                img.onload = function(){
                    if (img.height > img.width){
                        img.height = '100%';
                        img.width = 'auto';
                    }
                };
            }());
        </script>
    </body>
</html>
