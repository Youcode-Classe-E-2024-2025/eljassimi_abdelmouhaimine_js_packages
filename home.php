<?php include('database.php'); ?>
<?php include('header.php'); ?>
<body>
    <div class="p-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    
             <?php
                  $query = "select * from `packages`";
                  $result = mysqli_query(mysql: $connection, query : $query);
                  if(!$result){
                    die("query failed".mysqli_error());
                  }else{
                    while($row = mysqli_fetch_assoc(result: $result)){
                    ?>
            <div class="bg-[#121212] shadow-md rounded-lg p-6">
            <h2 class="text-lg font-semibold text-[#FF823E]"><?php echo $row['name']; ?></h2>
            <p class="text-sm text-white mt-2"><?php echo $row['author_name']; ?></p>
            <p class="text-sm text-white mt-1"><?php echo $row['version']; ?></p>
            <p class="text-white mt-4"><?php echo $row['description']; ?></p>
            </div>
            <?php 
            }
            }
            ?>
      </div>
    </div>
    <script src="main.js"></script>
</body>