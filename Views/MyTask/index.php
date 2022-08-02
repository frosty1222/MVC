<h1>Tasks</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/MyTask/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new task</a>
        <tr>
            <th>No.</th>
            <th>Task</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        $n=1;
        // echo "<pre>";
        //  var_dump($myTask);
        foreach ($myTask as $task)
        {
            // echo "<pre>";
            //  print_r($myTask);
            echo '<tr>';
            echo "<td>" . $n++ . "</td>";
            echo "<td>" . $task->getTitle() . "</td>";
            echo "<td>" . $task->getDescription() . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/MyTask/edit/" . $task->getId() . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/MyTask/delete/" . $task->getId(). "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a><a href='/mvc/MyTask/show/" . $task->getId(). "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Show</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>