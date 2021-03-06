<div class="well well-small">
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="row-fluid carousel-inner">
                <?php $c = 0; ?>
                <?php while($c < count($carousel)): ?>
                <div class="item <?php echo ($c == 1)? 'active' : ''; $c++; ?>">
                    <?php foreach($carousel as $object): ?>
                    <div class="span2">
                        <a href='<?=$object->url?>'><img src="<?=$object->image;?>" alt="<?=$object->name;?>" /></a>
                    </div>
                    <?php endforeach; if($c == 3) break; ?>
                </div>
                <?php endwhile; ?>
            </div>
            <!-- Carousel nav -->

            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>
</div>
