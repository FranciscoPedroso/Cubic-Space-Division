<div id="container-outer">
  <div id="container">
    <div id="inner-container">
      <div class="define-angle-container">
        <?php
          for($a = 0; $a <= 3; $a++):
            $left_value =  468;

            for($i = 0; $i <= 3; $i++):
              $top_value = 468;
              ?>
                <div class="cubes-row" style="top: <?php echo $top_value*$i; ?>%; left: -<?php echo $left_value*$a; ?>%; z-index: <?php echo 99999-$i-(($left_value/4)*$a); ?>;">
                  <?php
                    for($c = 0; $c <= 7; $c++):
                      $trans_z = 720;
                        ?>
                          <div class="cube cube-<?php echo $c; ?>" style="transform: translateZ(-<?php echo $trans_z*$c; ?>px);">
                            <div class="face face-front">
                              <div class="bar-base"></div>
                            </div>
                            <div class="face face-top">
                              <div class="bar-base"></div>
                            </div>
                            <div class="face face-side">
                              <div class="bar-base"></div>
                            </div>
                          </div>
                        <?php
                    endfor;
                  ?>
                </div>
              <?php
            endfor;
          endfor;
        ?>
      </div>
    </div>
  </div>
</div>