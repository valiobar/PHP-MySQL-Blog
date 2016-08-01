<?php $this->title = 'Create Posts'; ?>

<h1 xmlns="http://www.w3.org/1999/html"><?= htmlspecialchars($this->title) ?></h1>

<form method="post">
    <div>Title:</div>
    <input type="text" name="post_title"/>
    <div>Content:</div>
    <textarea rows=10 name="post_content"></textarea>
    <div><input type="submit" value="Create"/></div>
    <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>
</form>