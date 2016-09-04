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

            <!-- Hash tag -->
            <div class="col-md-12">
                <a href="<?php echo URL?>/products.php?type=printted&page=1"><span class="tag">Ấn phẩm</span></a>
                <a href="<?php echo URL?>/products.php?type=video&page=1"><span class="tag">Video</span></a>
                <a href="<?php echo URL?>/products.php?type=photo&page=1"><span class="tag">Nhiếp ảnh</span></a>
            </div>

            <!-- GET AND SHOW IMAGE PATH -->
            <div class="col-md-12" style="margin-top: 10px;">
                <?php
                    // NUMBER OF PRODUCTS PER PAGE
                    $numProduct = 10;
                    $prd = new product($numProduct);
                    if (empty($_GET))
                        $datas = $prd->getProduct(NULL,1);
                    else{
                        if (empty($_GET['type'])) $t = NULL;
                        else $t = $_GET['type'];
                        if (empty($_GET['page'])) $p = 1;
                        else $p = $_GET['page'];
                        $datas = $prd->getProduct($t, $p);
                    }
                    $data = $datas['data'];
                    if (count($data) < 1) echo "Chưa có ảnh mục này.";
                    else
                    foreach ($data as $d){
                ?>
                <div class="col-md-3 thumbnail" id="thumb" style="height:200px;">
                    <a href="#image-viewer-<?php echo $d[0] ?>"><img src="<?php echo $d[2] ?>" ></a>
                    <p align="center"><?php echo $d[1] ?></p>
                </div>
                <a href="javascript:history.go(-1)" class="JesterBox" name="image-viewer">
                    <div id="image-viewer-<?php echo $d[0] ?>"> <img src="<?php echo $d[2] ?>"></div>
                </a>

            <?php } ?>
            </div>

            <!-- NEXT + PREVIOUS BUTTON -->
            <div class="col-md-12" >
                <?php
                if(empty($_GET)||empty($_GET['type'])) $t = '';
                else $t = 'type='.$_GET['type'].'&';
                if(empty($_GET)||empty($_GET['page'])) $p = 1;
                else $p = $_GET['page'];
                ?>

                <?php if ($datas['before']&&$datas['after']) {
                ?>
                <a href="<?php echo URL.'/products.php?'.$t.'page='.($p - 1) ?>">
                    <button class="btn-block btn-primary" style="margin-left: 30%;"
                            formaction="<?php echo URL.'/products.php?'.$t.'page='.($p - 1) ?>">TRANG TRƯỚC</button>
                </a>
                <a href="<?php echo URL.'/products.php?'.$t.'page='.($p + 1) ?>">
                    <button class="btn-block btn-primary">TRANG SAU</button>
                </a>
                <?php }
                else if ($datas['before']) { ?>
                <a href="<?php echo URL.'/products.php?'.$t.'page='.($p - 1) ?>">
                <button class="btn-block btn-primary" style="margin-left: 40%">TRANG TRƯỚC</button>
                </a>
                <?php }
                else if ($datas['after']){ ?>
                <a href="<?php echo URL.'/products.php?'.$t.'page='.($p + 1) ?>">
                    <button class="btn-block btn-primary" style="margin-left: 40%">TRANG SAU</button>
                </a>
                <?php } ?>
            </div>
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
