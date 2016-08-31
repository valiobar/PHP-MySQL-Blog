<?php $this->title =htmlspecialchars($this->user['username']." Profile") ;?>


<main>
    <div class="pofile-container col-md-8">
    <div class="image-container col-md-6">
        <?php

        if ($this->user['image']!=null){
            $image = IMAGE_ROOT.$this->user['image'];
            echo '<img class="profilePicture" src="',$image, '"  />';
        }
        else {
            $avatar = IMAGE_ROOT.'avatar.png';
            echo '<img class="profilePicture" src="',$avatar, '"  />';       }
        ?>
    </div>
    <div class="col-md-6">
        <h3>User Profile</h3>
        <p><strong>User name:</strong>&nbsp;<?php echo htmlspecialchars( $this->user['username']);?></p><br><br>
        <p><strong>Full name:</strong>&nbsp;<?php if($this->user['full_name']!=null){
            echo htmlspecialchars($this->user['full_name']);
        }else {
            echo "Anonymous User";
        }
            ;?>
        <p><strong>About me:</strong>&nbsp;<?php if($this->user['description']!=null){
                echo htmlspecialchars($this->user['description']);
            }else {
                echo "I am too shy :) ";
            }
            ;?>

    </div>


    </div>


</main>