<div class="b-random-products">
    <div class="container-fluid">

        <?php $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 6"; ?>

        <?php if ($result = mysqli_query($mysqli, $sql)): ?>

        <?php if (mysqli_num_rows($result) > 0) : ?>

        <div class="row row-cols-5">

            <?php while ($row = mysqli_fetch_array($result)): ?>

            <div class="product-random-card">
                <a class="produсt-random-card-link" href="">

                    <div class="produсt-random-card-layer"></div> <!-- /.produсt-random-card-layer -->

                    <div class="product-random-card-content">
                        <img class="product-random-card-img-top"
                            src="img/products/<?php echo $row['img_src']; ?>"
                            alt="<?php echo $row['name']; ?>">

                        <div class="product-random-card-body">
                            <span class="product-random-card-title">
                                <?php echo $row['name']; ?>
                            </span> <!-- /.product-random-card-title -->

                            <span class="product-random-card-price">
                                <?php echo $row['price']; ?>
                                руб.
                            </span> <!-- /.product-random-card-price -->
                        </div> <!-- /.product-random-card-body -->
                    </div> <!-- /.product-random-card-content -->

                </a> <!-- /.produсt-random-card-link -->
            </div> <!-- /.product-random-card -->

            <?php endwhile; ?>

        </div> <!-- /.row row-cols-4 -->

        <?php elseif (mysqli_num_rows($result) == 0) : ?>

        <div class="warning"> На данный момент, товаров, в данной категории, нет. </div> <!-- /.warning -->

        <?php endif; ?>

        <?php endif; ?>

    </div> <!-- /.container-fluid -->
</div> <!-- /.b-random-products -->