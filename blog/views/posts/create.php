<?php $this->title = 'Create Posts'; ?>

<h1 xmlns="http://www.w3.org/1999/html"><?= htmlspecialchars($this->title) ?></h1>
<div class="post-create col-md-6">
<form class="post-form col-md-8"  method="post">
    <div>Title:</div>
    <input type="text" name="post_title"/>
    <div><strong>Content:</strong></div>
    <textarea rows=10 name="post_content"></textarea>
    <div><input class="submit-post " type="submit" value="Create"/></div>
    <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>
</form>
</div>
