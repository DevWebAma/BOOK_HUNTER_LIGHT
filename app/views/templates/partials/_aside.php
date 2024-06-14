    
        <div class="bg-gray-700 rounded-lg shadow-lg p-4">
          <!--categories-->
          <?php include_once '../app/views/categories/_index.php'; ?>
        </div>

        <div class="bg-gray-700 rounded-lg shadow-lg p-4 mt-4">
          <h2 class="font-bold text-lg mb-4">Tags</h2>
          <div class="tag-cloud">
            <?php 
            include_once '../app/models/tagsModel.php';
            $tags = \App\Models\TagsModel\findAll($connexion);
            foreach($tags as $tag): 
            ?>
            <a class="text-gray-300 hover:text-white text-sm" href="#">
              <?php echo $tag['name']; ?>
            </a>
            <?php endforeach; ?>
          </div>
        </div>
    