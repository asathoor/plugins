<?php
/*
* Plugin Name: PETJ Block Patterns
* Description: For a historical project
* Version: 1.0
* Author: Per Thykjær Jensen
* Author URI: https://github.com/asathoor/plugins/tree/master/historic-project
*/

/**
 * I) Register one or more Block Pattern Categories.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'petj_patterns',
		array( 'label' => esc_html__( 'PETJ: History Project', 'petj_patterns' ) )
	);

}

/**
 * II) Register Blocks
 **/

  // sample: Tycho Brahe
  $tychoBrahe = '<div class="wp-block-columns"><div class="wp-block-column" style="flex-basis: 33.33%;"> <figure class="wp-block-image size-large is-style-default"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Tycho_Brahe.JPG/440px-Tycho_Brahe.JPG" alt="" /> <figcaption>Tycho Brahe wearing the Order of the Golden Vlees.</figcaption></figure></div><div class="wp-block-column" style="flex-basis: 66.66%;"> <figure class="wp-block-table"><table><tbody><tr><td>Born</td><td>1546</td></tr><tr><td>Dies</td><td>1601</td></tr></tbody></table> </figure><h2>Astrologer and Alchemist</h2> Tycho Brahe was ...</div></div>';

  register_block_pattern( // add new block pattern
  		'petj_patterns/portrait-description',
  		array(
  			'title'         => esc_html__( 'L: Portrait R: Description', 'petj_patterns' ),
  			'categories'    => array( 'petj_patterns' ),
  			'viewportWidth' => 1440,
  			'description'   => esc_html_x( 'On the left an image, to the right the text and a table for born / died data.', 'Block pattern description', 'petj_patterns' ),
  			'content'       => $tychoBrahe,
  		)
  );

  // sample: Sophia Brahe
  $lTextRimg = '<div class="wp-block-columns"><div class="wp-block-column" style="flex-basis: 66.66%;"> <figure class="wp-block-table"><table><tbody><tr><td>From</td><td>1559</td></tr><tr><td>To</td><td>1643</td></tr></tbody></table><h3>Alchemista and horticulture</h3><p>Tycho wrote that he had trained Sophia in horticulture and chemistry, but he initially discouraged her from studying astronomy. Instead, Sophia learned astronomy on her own, studying books in German, and having Latin books translated with her own money so that she could read them as well.<sup><a href="https://en.wikipedia.org/wiki/Sophia_Brahe#cite_note-9">[9]</a></sup><sup><a href="https://en.wikipedia.org/wiki/Sophia_Brahe#cite_note-10">[10]</a></sup> Later in both of their careers, Tycho began to discourage her from continuing her research into astronomy because he believed it to be too complex for the talents ....</p> </figure></div><div class="wp-block-column" style="flex-basis: 33.33%;"> <figure class="wp-block-image size-large"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Sophie_Brahe_portrait.jpg" alt="" /> <figcaption><br />Sophia Brahe</figcaption> </figure></div></div><p> </p>';

  register_block_pattern( // add new block pattern
      'petj_patterns/description-protrait',
      array(
        'title'         => esc_html__( 'L: description R: text', 'petj_patterns' ),
        'categories'    => array( 'petj_patterns' ),
        'viewportWidth' => 1440,
        'description'   => esc_html_x( 'On the left a text, to the right a portrait.', 'Block pattern description', 'petj_patterns' ),
        'content'       => $lTextRimg,
      )
  );

