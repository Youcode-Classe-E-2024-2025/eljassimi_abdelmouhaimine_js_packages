<?php include('database.php'); ?>
<?php include('header.php'); ?>

  <main class="max-w-4xl mx-auto mt-8 p-4 bg-white shadow rounded">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-xl font-semibold">ALL PACKAGES</h2>
      <button id="openModal" class="bg-[#FF823E] text-white px-4 py-2 rounded hover:bg-[#F99E40]">ADD PACKAGE</button>
    </div>

    
    <div class="overflow-x-auto">
      <table class="min-w-full table-auto border-collapse border border-gray-300">
        <thead class="bg-gray-200">
          <tr>
            <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Package name</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Autor name</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Version</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Update</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Delete</th>
          </tr>
        </thead>
        <tbody  class="bg-gray-200">

              <?php
              $query = "select * from `packages`";
              $result = mysqli_query(mysql: $connection, query : $query);


              if(!$result){
                die("query failed".mysqli_error());
              }else{
                while($row = mysqli_fetch_assoc(result: $result)){
                ?>
                <tr>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['package_id']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['name']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['author_name'];?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['version']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><a href="update.php?id=<?php echo $row['package_id'];?>"><button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Update</button></a></td>
                <td class="border border-gray-300 px-4 py-2"><a href="delete.php?id=<?php echo $row['package_id'];?>"><button name="deleteSrudent" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button></a></td>
                </tr>
                <?php
                }
              }
              ?>
          </tbody>
      </table>
    </div>
  </main>

  <div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white w-96 rounded-lg shadow-lg p-6">

      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">Add Package</h2>
        <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
      </div>
      
      <form id="addPackageForm" class="space-y-4" action = "add.php" method ="POST">
        <div>
          <label for="packageName" class="block text-sm font-medium text-gray-700">Package Name</label>
          <input type="text" id="packageName" name="packageName" class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
        </div>
        <div>
          <label for="AuthorName" class="block text-sm font-medium text-gray-700">Author Name</label>
           <select name="AuthorName" class="w-full text-black" id="AuthorName">
            <?php 

             $query = "select * from `Authors`";
             $result = mysqli_query(mysql: $connection, query : $query);
             if(!$result){
              die("query failed".mysqli_error());
            }else{
              while($row = mysqli_fetch_assoc(result: $result)){
              ?>
              <option value="<?php echo $row['author_name']; ?>" class="w-full text-black"><?php echo $row['author_name'];?></option>
              <?php
              }
            }
            ?>
           </select>
        </div>
        <div>
          <label for="version" class="block text-sm font-medium text-gray-700">Version</label>
          <input type="text" id="version" name="version" class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
        </div>
        <div>
          <label for="descritpion" class="block text-sm font-medium text-gray-700">Description</label>
          <textarea id='description' name="description" class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200" id="description"></textarea>
        </div>

        <div class="flex justify-end space-x-2">
          <button type="button" id="closeModalFooter" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Close</button>
          <input type="submit" name="addPackage" class="bg-[#FF823E] text-white px-4 py-2 rounded hover:bg-[#FD904B]"></input>
        </div>
      </form>
    </div>
  </div>


<script src="main.js"></script>t
</body>
</html>
