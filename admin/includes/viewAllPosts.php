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
                        echo"<td>{$row['post_category_id']}</td>";
                        echo"<td>{$row['post_status']}</td>";
                        echo"<td><img width='100' src='../images/{$row['post_image']}'></td>";
                        echo"<td>{$row['post_tags']}</td>";
                        echo"<td>{$row['post_comment_count']}</td>";
                        echo"<td>{$row['post_date']}</td>";
                        echo"</tr>";              
        }
?>                       
                       
                    
                </tbody>
                </table>
                
                