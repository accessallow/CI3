<html>
    <head>
        <title>Student Home</title>
    </head>
    <body>
        <h3><?php echo $pageTitle; ?></h3>
        <hr/>
        <p>student info will be displayed here...</p>
        <p>
            <a href="<?php echo site_url('Student/addStudent'); ?>">Add student</a>
        </p>
        <table border="2">
            <thead>
                <tr style="background:black;color:white;">
                    <td>ID</td>
                    <td>NAME</td>
                    <td>ADDRESS</td>
                    <td>CLASS</td>
                    <td>PHONE</td>
                    <td>MARKS</td>
                    <td>ACTION</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($students as $s) { ?>
    
                <tr>
                    <td><?php echo $s->id; ?></td>
                    <td><?php echo $s->name; ?></td>
                    <td><?php echo $s->address; ?></td>
                    <td><?php echo $s->class; ?></td>
                    <td><?php echo $s->phone; ?></td>
                    <td><?php echo $s->marks; ?></td>
                    <td>
                        <a href="<?php echo site_url('Student/editStudent/'.$s->id); ?>">Edit</a>
                        <a href="<?php echo site_url('Student/deleteStudent/'.$s->id); ?>">Delete</a>
                    </td>
                </tr>
                
            <?php } ?>
            </tbody>
        </table>
    </body>
</html>


