<?php $this->title = 'Create Album'; ?>

<h1 style="margin-left: 40%" xmlns="http://www.w3.org/1999/html"><?= htmlspecialchars($this->title) ?></h1>
<div class="pofile-container col-md-8">
<div >
    <form method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2" for="Album name">Album Name:</label>
            <div class="col-sm-10">
                <input type="text" name="album_name" class="form-control" id="name" placeholder="Enter Name">
            </div>
        </div>
       <div class="">
          <label  class="control-label col-sm-2" for="image">Cover Image:</label>
           <div  class="fileUpload btn btn-primary">
               <span>Upload Image</span>
               <input id ="image" name="image"  type="file" class="upload" />

           </div>
           <input id="uploadFile" placeholder="Choose File" disabled="disabled" />

       </div>
        <div style="float: left;margin-left: 20%;" class="form-group">
            <div >
                <div class="checkbox">
                    <label><input name="private" value="1" type="checkbox"> Private</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button value="Create" type="submit" class="btn btn-default">Create</button>
            </div>
        </div>
    </form>
</div>
    </div>
<script>
    document.getElementById("image").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };
</script>