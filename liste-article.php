<?php 
include './header.php';
include './config.php';

try {
    $stmt = $conn->prepare("SELECT * FROM article");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<div class="flex gap-8 m-8 items-stretch justify -center">';
    foreach($result as $a) {?> 
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="<?= $a['image'] ?>" alt="">
        <div class="px-6 py-4">
          <h2 class="font-bold text-xl mb-2"><?= $a['titre'] ?></h2>
          <p class="text-gray-700 text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><?= $a['date'] ?></span>
        </div>
      </div>
    <?php }

    echo '</div>';
    
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }


include './footer.php';
?>
