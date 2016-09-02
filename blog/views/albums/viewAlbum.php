<?php $this->title = 'Album-'.$this->album['album_name']; ?>
<div class="col-md-12">
    <div class=" albumCoverImage col-md-4">
        <div class="col-md-12">
           <?php

           if ($this->album['cover']!='') {
               $cover = IMAGE_ROOT.$this->album['cover'];
               echo '<img class="albumCover" src="', $cover, '" alt="', $cover, '" />';
           } else {
               $blank = IMAGE_ROOT."blank.png";
               echo '<img class="albumCover" src="', $blank, '" alt="', $blank, '" />';
           }
           ?>
        </div>
        <div style="padding: 3px" class="col-md-12">
            <strong>Album:<?php echo $this->album['album_name']?></strong>
        </div>
        <?php var_dump($this->album['id'])?>

       <?php if($_SESSION['user_id']== $this->album['user_id']): ?>

         <a href="<?=APP_ROOT.'/images/addImage/'.$this->album['id'] ?>">  <button class="btn btn-default">Add Image</button></a>
       <?php endif; ?>
        <a href="<?=APP_ROOT.'/users/profile/'.$this->album['user_id'] ?>">  <button class="btn btn-default">Bach to profile</button></a>
       </div>
    
    <div class="albumImages col-md-8">
        <?php foreach ($this->images as $image):?>
            <div class="albumImageContainer col-md-4">
             <?php

             $imagePath =IMAGE_ROOT.$image['image_name'];

                echo '<img class="albumIMg" src="',$imagePath, '" alt="', $image, '" />';
                ?>
            </div>
            
        <?php endforeach;?>
        
    </div>




    </div>
    
    
