# Will add jQuery to WordPress

The plugin will add jQuery and Animate.css to your theme. Then you may add all sorts of effects, like this:

**Important: Run jQuery in protected mode**

Sample script, add this in a custom HTML field:

~~~~
<script>
/**
 * jQuery in protected mode
 */
( function( $ ) {
	// hello world variant
	$('h1').text('I\'m a poor lonesome cowboy');
	$('h1').hover( function(){
		$(this).addClass('animated swing');
	} );
} )( jQuery ); // jquery end
</script>
~~~~

# Use jQuery

Try this in a post or page, as a proof of concept (note the position:relative style on the image tag):

~~~~
<img
  id="mouse"
  src="https://multimusen.dk/wp-content/uploads/cropped-cropped-cropped-multimusen-150-150-1.png"
  style="position:relative">

<script>
/**
 * In WordPress run jQuery in protected mode
 */
( function( $ ) { // protected mode start

   $( document ).ready(function() { // DOM ready
    console.log( "ready!" );

   ////
     $('#mouse').click( function(){
          $('#mouse').animate({left: '250px'}, 400)
          $('#mouse').hide(300)
     } )
   ////

   })

} )( jQuery ); // protected mode end
</script>
~~~~

# Animate css

Try to add a class when the user clicks an element. Then use Animate CSS accorting to the instructions on the site. I did not try this out, but in theory it *should* work.
