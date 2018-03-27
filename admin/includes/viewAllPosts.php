 <table class="table table-bordered table-hover">
                <thead>
                    <th>Id</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Tags</th>
                    <th>Comments</th>
                    <th>Date</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                   
<?php 
        $query="SELECT * FROM posts";
        $all_selected_posts=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($all_selected_posts)){
                        echo"<tr>";        
                        echo"<td>{$row['post_id']}</td>";
                        echo"<td>{$row['post_author']}</td>";    
                        echo"<td>{$row['post_title']}</td>";
            
            
                   $query="SELECT * FROM categories WHERE cat_id={$row['post_category_id']}";
                   $select_all_categories=mysqli_query($connection,$query);
                    while($row1=mysqli_fetch_assoc($select_all_categories))
                   {
                            $cat_id=$row1['cat_id'];
                            $cat_title=$row1['cat_title'];         
                    }
                       echo"<td>{$cat_title}</td>";
                       echo"<td>{$row['post_status']}</td>";
                        echo"<td><img width='100' src='../images/{$row['post_image']}'></td>";
                        echo"<td>{$row['post_tags']}</td>";
                        echo"<td>{$row['post_comment_count']}</td>";
                        echo"<td>{$row['post_date']}</td>";
                        echo"<td><a href='posts.php?source=edit_post&p_id={$row['post_id']}'>EDIT</a></td>";
                        echo"<td><a href='posts.php?delete={$row['post_id']}'>DELETE</a></td>";
                        echo"</tr>";              
        }
?>                       
<?php if(isset($_GET['delete']))
{
    $post_id=$_GET['delete'];
    $query="DELETE FROM posts WHERE post_id={$post_id}";
    $delete_query=mysqli_query($connection,$query);
    header("Location: posts.php");
}
?>
                    
                
                    
                </tbody>
                </table>
                
                