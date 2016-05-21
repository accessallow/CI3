<html>
    <head>
        <title>Student Home</title>
    </head>
    <body>
        <h3>Edit student</h3>
        <hr/>
        <form action="<?php echo site_url('Student/editStudent/'.$student->id); ?>" method="post">
            
            <input type="hidden" name="id" value="<?php echo $student->id;?>"/>
            Name: <input type="text" name="name" value="<?php echo $student->name;?>"/><br/><br/>
            Address: <input type="text" name="address" value="<?php echo $student->address; ?>"/><br/><br/>
            Class: <input type="text" name="class" value="<?php echo $student->class; ?>"/><br/><br/>
            Phone: <input type="text" name="phone" value="<?php echo $student->phone; ?>" /><br/><br/>
            Marks: <input type="text" name="marks" value="<?php echo $student->marks; ?>"/><br/><br/><br/>
            
            <input type="submit" value="Update Student"/>
            <a href="<?php echo $back_url; ?>">Cancel</a>
            
        </form>
        
    </body>
</html>


