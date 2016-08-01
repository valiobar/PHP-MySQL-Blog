<?php $this->title = $this->post['title'] ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<main>
    <h2 class="title"><?=htmlentities($this->post['title']) ?></h2>
    <div class="date"><i>Posted on</i>
        <?=(new DateTime($this->post['date']))->format('d-M-Y') ?>
        <i>by </i><?=htmlentities($this->post['full_name']) ?>
    </div>
    <p class="content"><?=($this->post['content']) ?></p>
</main>
