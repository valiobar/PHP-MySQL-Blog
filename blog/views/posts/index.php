<?php $this->title = 'Posts';?>


<?php foreach ($this->posts as $post):?>
<a class="post-link" href="<?=APP_ROOT?>/home/view/<?= $post['id']?>">   <div class="post-container col-md-12">
       <div class="post-elemnts col-md-3 ">
           Title:<br>
          <strong> <?=htmlspecialchars($post['title'])?></strong>

       </div>
       <div class="post-elemnts col-md-7 ">
           Content:<br>
           <?=htmlspecialchars(cutLongText($post['content']))?>

       </div>
       <div class="post-elemnts col-md-2 ">
           Posted on:<br>
           <?=htmlspecialchars($post['date'])?>
       </div>
   </div></a>
<?php endforeach;?>

