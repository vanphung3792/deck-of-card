<?php
  /**
   * Task 1: Create a deck of cards
   * Create 2 arrays: ranks and suits
   * Loop over suits
   *  Loop over ranks
   *    Out the HTML for a card
   */
  
  $suits = ['clubs', 'diamonds', 'hearts', 'spades'];
  $ranks = [2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A'];

  /**
   * Task 2: Creating 52 random cards
   * Use arrays from task 1
   * Loop that loops 52 times
   *  Use rand() to get a number 0 to count(suits) - 1
   *    Use random number to retrieve value from suits array
   *  Use rand() to get a number 0 to count(ranks) - 1
   *    Use random number to retrieve value from ranks array
   */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deck of Cards</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="deck" id="deck">
    <?php foreach ($suits as $suit) { ?>
      <?php foreach ($ranks as $rank) { ?>
        <div class="card">
          <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div>
          <div class="suit"><img src="images/<?php echo $suit; ?>.png"></div>
          <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div>
        </div>
      <?php } ?>
    <?php } ?>
  </div>
  
  <div class="deck" id="deck">
    <?php for ($i = 0; $i < 52; $i++) : ?>
      <?php
        $suit = $suits[rand(0, count($suits) -1 )];
        $rank = $ranks[rand(0, count($ranks) -1 )];
      ?>
        <div class="card">
          <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div>
          <div class="suit"><img src="images/<?php echo $suit; ?>.png"></div>
          <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div>
        </div>
    <?php endfor; ?>
  </div>
</body>
</html>