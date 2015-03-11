<?php

get_header();

?>

<div class="underslider1a">
  <div class="container">
    <div class="row">
      <h1>Homepage</h1>
    </div>
  </div>
</div>

<?php

the_post_thumbnail();

print_r($post);
print_r(the_meta());


get_footer();

?>
