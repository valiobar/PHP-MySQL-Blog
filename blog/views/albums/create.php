<?php $this->title = 'Create Album'; ?>

<h1 xmlns="http://www.w3.org/1999/html"><?= htmlspecialchars($this->title) ?></h1>
<div class="col-md-4">
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Album Name:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter Name">
            </div>
        </div>
       <div class="coverImg ">
           <div><label for="image">Avatar:</label> </div>
           <input class="btn btn-info btn-lg" id ="image" type="file" name="image"/>
       </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
<form method="post">
    <div>Title:</div>
    <input type="text" name="post_title"/>
    <div>Content:</div>
    <textarea rows=10 name="post_content"></textarea>
    <div><input type="submit" value="Create"/></div>
    <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>
</form>