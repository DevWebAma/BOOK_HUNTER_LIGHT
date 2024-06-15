<div class="bg-gray-700 rounded-lg shadow-lg p-4">
          <div class="flex flex-wrap">
            <div class="w-full lg:w-1/3 px-1 lg:px-4 mb-4">
              <img
                class="w-full h-auto rounded-lg"
                src="<?php echo $author['picture']; ?>"
                alt="auteur"
              />
            </div>
            <div class="w-full lg:w-2/3 px-1 lg:px-4 mb-4">
              <h2 class="font-bold text-2xl mb-2"><?php echo $author['firstname']; ?><?php echo $author['lastname']; ?></h2>
              <p class="text-gray-300 mb-4">Biographie:</p>
              <p class="text-gray-300 mb-4">
              <?php echo $author['biography']; ?>
              </p>
              <div class="flex items-center mb-4">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                <span><?php echo $author['note']; ?></span>
              </div>
              <ul class="list-disc list-inside text-gray-300">
                <li>
                  <a
                    href="book.html"
                    class="hover:text-red-500 underline font-medium"
                    ><?php echo $author['title']; ?></a
                  >
                </li>
                <li>
                  <a
                    href="book.html"
                    class="hover:text-red-500 underline font-medium"
                    ><?php echo $author['title']; ?></a
                  >
                </li>
                <li>
                  <a
                    href="book.html"
                    class="hover:text-red-500 underline font-medium"
                    ><?php echo $author['title']; ?></a
                  >
                </li>
                <li>
                  <a
                    href="book.html"
                    class="hover:text-red-500 underline font-medium"
                    ><?php echo $author['title']; ?></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>