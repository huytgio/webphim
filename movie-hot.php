<div id="movie-hot" class="viewport">
<div class="icon movie1"></div> <h3 class="title">Phim Hot Trong Tuần</h3>
  <div class="prev"></div>
  <ul class="listfilm overview owl-carousel owl-theme">
    <?php
      $sql = 'select * from `film` order by `num_view` DESC limit 12';
      $query = mysqli_query($link, $sql);
      while($r=mysqli_fetch_assoc($query)){
    ?>
      <li class="item"><a href="?mod=detail&film_id=<?php echo $r['id'] ?>" title="<?php echo $r['name'] ?>" class="movie-hot-link" style="background-image: url(<?php echo $r['image'] ?>);">Thời Đại Cam Hồng</a>
        <div class="overlay">
          <div class="name"><a href="?mod=detail&film_id=<?php echo $r['id'] ?>" title="<?php echo $r['name'] ?>"><?php echo $r['name'] ?></a></div>
          <div class="name2"><?php echo $r['name2'] ?></div>
        </div>
        <div class="status"><?php echo $r['status'] ?></div>
      </li>
    <?php
      }
    ?>
  </ul>
  <div class="next"></div>
</div>
<script type="text/javascript">
  $('.overview').owlCarousel({
      items:4,
      loop:true,
      autoPlay: true,
      nav: true,
      dots: true,
      slideSpeed : 5000,
      navContainer:  $(this).prev('.owl-nav-wrap').find('.owl-nav-container'),
    });
    $( ".owl-prev").html('<div class="prev"></div>');
    $( ".owl-next").html('<div class="next"></div>');
</script>
