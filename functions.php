// First action 
function dire_bonjour(){
	echo '<p class="hello"> Bonjour tout le monde !</p>';
}
add_action( 'init', 'dire_bonjour');
