<?php
require_once("config.php");
require_once("header.php");

?>


    <?php
        if(isset($_REQUEST["currentUser"])){
            echo ' <a href="profile.php"> </a> ';
        }

    ?>

<main>

    <div class="container">
        <h2> My self </h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic libero ipsa, natus consequuntur velit quasi repellendus provident harum laborum quaerat dignissimos aperiam praesentium minus nostrum animi reiciendis deleniti sed esse iusto! Eveniet placeat, aliquid nam consequatur aperiam labore reiciendis delectus vitae repellendus doloribus vero error repellat reprehenderit voluptatum consectetur officiis nemo iusto ab obcaecati ea quidem explicabo. Dolorum natus sunt beatae nam quod laborum nesciunt vero libero ipsa dolorem recusandae architecto autem officiis totam qui debitis, ipsum quisquam, reiciendis nulla veritatis quidem. Possimus saepe excepturi eaque necessitatibus laudantium, sed consequatur qui. Veniam, ducimus. Saepe deserunt repudiandae fugiat distinctio provident iste!</p>
    </div>

</main>

<?php
require_once("footer.php");
?>