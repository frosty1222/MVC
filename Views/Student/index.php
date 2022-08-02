<h1>Student</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/Student/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Students</a>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Form</th>
            <th>Date Of Birth</th>
            <th>Gender</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        $n=1;
        // echo "<pre>";
        //  var_dump($Student);
        foreach ($Student as $std)
        {
            // echo "<pre>";
            //  print_r($Student);
            echo '<tr>';
            echo "<td>" . $n++ . "</td>";
            echo "<td>" . $std->getName() . "</td>";
            echo "<td>" . $std->getForm() . "</td>";
            echo "<td>" . $std->getDate_Of_Birth() . "</td>";
            if($std->getGender() == 1){
                echo "<td>" .'Male'. "</td>";
            }elseif($std->getGender() == 2){
                echo "<td>" .'FeMale'. "</td>";
            }else{
                echo "<td>" .'LGBT'. "</td>";
            }
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/Student/edit/" . $std->getId() . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/Student/delete/" . $std->getId(). "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a><a href='/mvc/Student/show/" . $std->getId(). "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Show</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>