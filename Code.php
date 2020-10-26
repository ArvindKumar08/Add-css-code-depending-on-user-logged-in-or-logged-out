This code is to be added in THEME EDITOR > FUNCTIONS.PHP

Make sure you have a back up of your wordpress site first.

This code is great for menu's showing different menus for logged in or logged out users. With the aid of css classes in your APPEARANCE > MENU section, you may control which menu appears when logged in or logged out. For example: you want to show the my account page menu only for logged in users.

This code will work perfectly for 


add_action('wp_head', 'add_css_head');
function add_css_head() {
if ( is_user_logged_in() ) {
?>
<style>
    YOUR CODE HERE FOR LOGGED IN USERS
</style>
<?php
} else {
?>
<style>
    YOUR CODE HERE LOGGED OUT USERS
</style>
<?php
}
}
