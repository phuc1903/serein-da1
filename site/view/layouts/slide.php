<div class="container-fluid bg-dark p-0 mb-5">
    <div class="wow fadeIn" data-wow-delay="0.5s">
        <div class="owl-carousel header-carousel">
            <?php
            foreach ($slides as $slide) {
                $id = $slide['id'];
                $img = $slide['img'];
                $positon = $slide['position'];
                echo "
            <div class = 'owl-carousel-item'>
                <img class='img-fluid' src='$img' alt='thumbnail$id'/>
            </div>
            ";
            }
            ?>
        </div>
    </div>
</div>