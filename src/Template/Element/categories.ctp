 <!-- Categories Widget -->
  <div class="card my-4">
    <h5 class="card-header">Categories</h5>
    <div class="card-body">
      <div class="row">
        <?php
        foreach ($categories as $key => $category):
        ?>
        <div class="col-lg-6">
          <ul class="list-unstyled mb-0">
            <li>
              <a href="?search=<?=$category?>"><?=$category?></a>
            </li>
           
          </ul>
        </div>
        <?php
        endforeach;
        ?>
       
      </div>
    </div>
  </div>