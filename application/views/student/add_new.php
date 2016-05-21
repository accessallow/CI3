<html>
    <head>
        <title>Student Home</title>
    </head>
    <body>
        <h3>Add new student</h3>
        <hr/>
        <form action="<?php echo site_url('Student/addStudent'); ?>" method="post">
            
            Name: <input type="text" name="name"/><br/><br/>
            Address: <input type="text" name="address"/><br/><br/>
            Class: <input type="text" name="class"/><br/><br/>
            Phone: <input type="text" name="phone"/><br/><br/>
            Marks: <input type="text" name="marks"/><br/><br/><br/>
            
            <input type="submit" value="Add Student"/>
            <a href="<?php echo $back_url; ?>">Cancel</a>
            
        </form>
        
    </body>
</html>


