<?php
include('assets/includes/config.php');

$selectedGroup = $_GET['group'] ?? ''; // Retrieve the selected group from the URL parameter

$cards = array(
    array(
        'group' => 'Marketing',
        'image' => 'dm.jpg',
        'course' => 'CID1'
    ),
    array(
        'group' => 'AI-ML',
        'image' => 'ml.jpg',
        'course' => 'CID2'
    ),
    array(
        'group' => 'WEB',
        'image' => 'fs.jpg',
        'course' => 'CID3'
    ),
    array(
        'group' => 'AI-ML',
        'image' => 'ds.jpg',
        'course' => 'CID4'
    ),
    array(
        'group' => 'AI-ML',
        'image' => 'gd.jpg',
        'course' => 'CID5'
    ),
    array(
        'group' => 'AI-ML',
        'image' => 'ad.jpg',
        'course' => 'CID6'
    )
);

// Create an array of unique groups from the cards
$groups = array_unique(array_column($cards, 'group'));

// Filter the cards based on the selected group
if ($selectedGroup && $selectedGroup !== 'ALL') {
    $filteredCards = array_filter($cards, function($card) use ($selectedGroup) {
        return $card['group'] === $selectedGroup;
    });
} else {
    $filteredCards = $cards;
}

echo '
<main class="justify-content-center">
  <div class="container p-5">
    <div class="text-center mb-3">
      <a href="?group=ALL" class="btn text-white bg-black my-3' . ($selectedGroup === 'ALL' ? 'active' : '') . '" style="width: 200px; font-size: 30px;">ALL</a>';

// Display the filter buttons
foreach ($groups as $group) {
    echo '
      <a href="?group=' . $group . '" class="btn bg-black text-white my-3' . ($selectedGroup === $group ? 'active' : '') . '" style="width: 200px;font-size: 30px;">' . $group . '</a>';
}

echo '
    </div>';

// Display the filtered cards
foreach ($filteredCards as $card) {
    echo '
    <div class="card m-5">
      <a href="videoPage.php?course=' . $card['course'] . '" class="card-link">
        <img src="assets/img/' . $card['image'] . '" alt="Clickable Image" id="' . $card['group'] . '" class="card-image">
      </a>
    </div>';
}

echo '
  </div>
</main>

<footer class="navbar navbar-expand-md navbar-dark fixed-bottom bg-black">
  <p class="text-center mb-0 custom-footer">
    &copy; 2023 All Rights Reserved. Design by <a href="https://portfolio-of-krish-ujeniya.000webhostapp.com" target="_blank" class="m-2 text-decoration-none text-white">AI DRAGO Team</a>
  </p>
</footer>
</body>
</html>
';
