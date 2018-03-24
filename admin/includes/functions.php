<?php 
function insert_categories()
{   global $connection;
    if(isset($_POST['submit']))
{
    
    $cat_title=$_POST['cat_title'];
    if($cat_title==""|| empty($cat_title))
    {
        echo "This field should not be empty";
    }
    else{
        $query="INSERT INTO categories(cat_title) VALUES('{$cat_title}')";
        $create_cat_query=mysqli_query($connection,$query);
        if(!$create_cat_query)
        {
            die('Query Failed'.mysqli_error($connection));
        }
    }
}
}

function findAllCategories()
{   global $connection;
     $query="SELECT * FROM categories";
    $select_all_categories=mysqli_query($connection,$query); while($row=mysqli_fetch_assoc($select_all_categories))
        {
            $cat_id=$row['cat_id'];
            $cat_title=$row['cat_title'];
            
            echo"<tr>";
            echo "<td>{$cat_id}</td>";
            echo"<td>{$cat_title}</td>";
            echo"<td><a href='categories.php?delete={$cat_id}'>Delete</td>";
            echo"<td><a href='categories.php?edit={$cat_id}'>Edit</td>";
        //categories.php? that when u click on the link we want to pass some parameters which will make a key in the assoc array of get super global
            echo"</tr>";
        }
}

function delete_categories()
{   global $connection;
    if(isset($_GET['delete']))
        {
            $get_cat_id=$_GET['delete'];
            $query="DELETE FROM categories WHERE cat_id={$get_cat_id}";
            mysqli_query($connection,$query);
            header("Location: categories.php");
            
        }
}
?>
