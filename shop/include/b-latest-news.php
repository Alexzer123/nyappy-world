<div class="b-latest-news">
    <div class="container-fluid no-gutters">

        <?php $sql = "SELECT * FROM articles ORDER BY created_at DESC LIMIT 6"; ?>

        <?php if ($result = mysqli_query($mysqli, $sql)) : ?>

        <?php if (mysqli_num_rows($result) > 0) : ?>

        <div class="latest-news-slider">

            <?php while ($row = mysqli_fetch_array($result)) : ?>

            <div class="latest-news-card">
                <div class="latest-news-card-front">
                    <img class="latest-news-card-img"
                        src="img/news/<?php echo $row['img_src']; ?>"
                        alt="<?php echo $row['title']; ?>">
                </div> <!-- /.front -->

                <div class="latest-news-card-back">
                    <div class="latest-news-card-body">

                        <h4 class="latest-news-card-title">
                            <?php echo $row['title']; ?>
                        </h4> <!-- /.news-card-title -->

                        <div class="latest-news-card-text">
                            <?php echo $row['description']; ?>
                        </div> <!-- /.news-card-text -->
                            <span class="latest-news-card-detailed"> Подробнее </span>

                        <span class="latest-news-card-span">
                            Опубликована с:&#8195;<?php echo $row['created_at']; ?>
                        </span> <!-- /.news-card-span -->
                    </div> <!-- /.news-card-body -->
                </div> <!-- /.back -->
            </div> <!-- /.news-card -->

            <?php endwhile; ?>

        </div> <!-- /.latest-news-slider -->
    </div> <!-- /.container-fluid -->

    <?php elseif (mysqli_num_rows($result) == 0) : ?>

    <div class="warning"> На данный момент, товаров, в данной категории, нет. </div> <!-- /.warning -->

    <?php endif; ?>

    <?php endif; ?>

</div> <!-- /.b-news -->