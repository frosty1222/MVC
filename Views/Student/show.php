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
            <li>Id:<?php echo $Student->getId(); ?></li>
            <li>Name:<?php echo $Student->getName(); ?></li>
            <li>Date Of Birth:<?php echo $Student->getDate_Of_Birth(); ?></li>
            <?php if($Student->getGender() == 1):?>
            <li>Gender:Male</li>
            <?php elseif($Student->getGender() == 2):?>
            <li>Gender:FeMale</li>
            <?php else: ?>
            <li>Gender:LGBT</li>
            <?php endif; ?>
            <li>Form:<?php echo $Student->getForm(); ?></li>
        </ul>
    </div>
</div>