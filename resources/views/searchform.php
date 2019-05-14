<div class="app-search searchform" role="search">

	<form method="get" class="app-search__search-form" action="<?php echo trailingslashit( home_url() ); ?>">
		<input class="search-text" type="search" name="s" placeholder="<?php if ( is_search() ) echo esc_attr( get_search_query() ); else esc_attr_e( 'Search this site...', 'pariscope' ); ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
		<input class="search-submit button" name="submit" type="submit" value="<?php esc_attr_e( '', 'pariscope' ); ?>" />

	</form>

</div>

