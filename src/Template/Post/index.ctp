<div class="col-lg-8">
  <?php foreach($posts as $post):    ?>
  <!-- Title -->
  <h1 class="mt-4"><a style="color:#000" href="/post/<?=$post->friendly_link?>"><?=$post->title?></a></h1>

  <!-- Author -->
  <p class="lead">
    de Rodrigo
  </p>

  <hr>

  <!-- Date/Time -->
  <p>Postado em <?=$post->data_extenso?></p>

  <hr>

  <!-- Preview Image -->
  <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->

  <!-- <hr> -->

  <!-- Post Content -->

  <?= $post->text?>  

  

  <hr>

  <?php endforeach;?>

  

</div>
