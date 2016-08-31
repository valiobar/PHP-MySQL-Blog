<?php $this->title = 'Posts';?>

<h1><?=htmlspecialchars($this->title)?></h1>

(d
   <table>
       <tr>
           <th>ID</th>
           <th>Title</th>
           <th>Content</th>
           <th>Date</th>
           <th>Author ID</th>
           <th>Action</th>
       </tr>
       <tr>

           <?php foreach ($this->posts as $post):?>
           <td><?=$post['id']?></td>
           <td><?=htmlspecialchars($post['title'])?></td>
           <td><?=cutLongText($post['content'])?></td>
           <td><?=htmlspecialchars($post['date'])?></td>
           <td><?=$post['user_id']?></td>
           <td><a href="<?=APP_ROOT?>/posts/edit/<?=$post['id']?>">[Edit]</a>
               <a href="<?=APP_ROOT?>/posts/delete/<?=$post['id']?>">[Delete]</a></td>
       </tr>
       <?php endforeach;?>
   </table>

