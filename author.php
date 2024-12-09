<?php include('database.php'); ?>
<?php include('header.php'); ?>

<main class="max-w-4xl mx-auto mt-8 p-4 bg-white shadow rounded">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-xl font-semibold">ALL AUTHORS</h2>
      <button id="openModal" class="bg-[#FF823E] text-white px-4 py-2 rounded hover:bg-[#F99E40]">ADD AUTHOR</button>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full table-auto border-collapse border border-gray-300">
        <thead class="bg-gray-200">
          <tr>
            <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Author name</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Author Email</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Update</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Delete</th>
          </tr>
        </thead>
        <tbody  class="bg-gray-200">

              <?php
              $query = "select * from `authors`";
              $result = mysqli_query(mysql: $connection, query : $query);


              if(!$result){
                die("query failed".mysqli_error());
              }else{
                while($row = mysqli_fetch_assoc(result: $result)){
                ?>
                <tr>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['author_id']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['author_name']; ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo $row['email'];?></td>
                <td class="border border-gray-300 px-4 py-2"><a href="update.php>"><button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Update</button></a></td>
                <td class="border border-gray-300 px-4 py-2"><a href="delete.php>"><button name="deleteSrudent" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button></a></td>
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
        <h2 class="text-xl font-semibold">Add Author</h2>
        <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
      </div>
      
      <form id="addAuthorForm" class="space-y-4" action = "addauthor.php" method ="POST">
        <div>
          <label for="authorName" class="block text-sm font-medium text-gray-700">Author Name</label>
          <input type="text" id="authorName" name="authorName" class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
        </div>
        <div>
          <label for="authorEmail" class="block text-sm font-medium text-gray-700">Author Email</label>
          <input type="email" id="authorEmail" name="authorEmail" class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
        </div>
        <div class="flex justify-end space-x-2">
          <button type="button" id="closeModalFooter" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Close</button>
          <input type="submit" name="addAuthor" class="bg-[#FF823E] text-white px-4 py-2 rounded hover:bg-[#FD904B]"></input>
        </div>
      </form>
    </div>
  </div>


<script src="main.js"></script>t
</body>
</html>

