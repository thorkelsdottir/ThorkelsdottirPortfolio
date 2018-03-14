<!-- Boðskort á útskriftarsýningu Vefskólans -->
<?php while ( $webschool_event ):?>
  <?php if( $you_wanna_have_fun ):?>
    <div class="fun">
      <h1>Útskriftarsýning Vefskólans!</h1>
      <h2>18. maí kl. 18:00 í Bíó Paradís</h2>
      <p style="background-color: '.$skolablar.'; color: white;">
        Okkur væri sönn ánægja að bjóða þér eða fulltrúum frá þínu fyrirtæki á sýningu útskrftaverka Vefskólans sem haldin er í Bíó Paradís þann 18. maí kl. 18:00
        <span style="font-weight: bold;">Léttar veitingar í boði.</span>
      </p>
    </div>
  <?php elseif($you_are_busy):?>
    <div class="no_fun">
      <h3>Kíktu endilega á <a href="www.vefskoli.is">Vefskólavefinn</a> til að skoða verkefnin okkar</h3>
    </div>
  <?php endif; ?>
<?php endwhile; ?>
