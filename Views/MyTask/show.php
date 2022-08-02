<h1>Show</h1>
<style>
    li{
        list-style: none;
    }
</style>
<div class="col-md-12">
    <div class="col-md-9 text-left">
        <?php  
        //  echo "<pre>";
        //  var_dump($myTask);
         ?>
        <ul>
            <li>Id:<?php echo$myTask->getId(); ?></li>
            <li>Title:<?php echo$myTask->getTitle(); ?></li>
            <li>Description:<?php echo$myTask->getDescription(); ?></li>
            <li>Created_at:<?php echo$myTask->getCreated_at(); ?></li>
            <li>Updated_at:<?php echo$myTask->getUpdated_at(); ?></li>
        </ul>
    </div>
</div>