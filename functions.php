<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function makeBeer($type) {
  if ($type == 'ipa') {
    $valid = true;
    $description = 'A type of copper-colored beer similar to bitter, typically with a higher than average alcohol and hop content (my personal favorite).';
  } else if ($type == 'stout') {
    $valid = true;
    $description = 'A dark beer made using roasted malt or roasted barley, hops, water and yeast. Stouts were traditionally the generic term for the strongest or stoutest porters, typically 7% or 8%, produced by a brewery.';
  } else if ($type == 'pilsner') {
    $valid = true;
    $description = 'A type of pale lager which accounts for more than two-thirds of the beer produced in the world.';
  } else if ($type == 'sour') {
    $valid = true;
    $description = 'A beer which has an intentionally acidic, tart or sour taste. The most common sour beer styles are Belgian: lambics, gueuze and Flanders red ale.';
  } else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.titlecase($type).'</h2>
          <p class="card-text">'.$description.'</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>'.capfirst($type).'? C&rsquo;mon! </strong> Are you even trying? </p>
      </div>
    ');
  }
}
