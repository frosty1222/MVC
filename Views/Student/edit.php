<h1>Edit Student Info</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name"  name="name" value="<?php echo $Student->getName();?>">
    </div>

    <div class="form-group">
        <label for="form">Form</label>
        <input type="text" class="form-control" id="form" name="form" value="<?php echo $Student->getForm();?>">
    </div>

    <div class="form-group">
        <label for="date_of_birth">Date of Birth</label>
        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="<?php echo $Student->getDate_Of_Birth();?>">
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
       
       <div class="radio">
        <label>
            <input type="radio" name="gender" id="input" value="1" checked="checked">
            male
            <input type="radio" name="gender" id="input" value="2" checked="checked">
            female
            <input type="radio" name="gender" id="input" value="3" checked="checked">
            another
        </label>
       </div>
       
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>