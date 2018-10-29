<div class="app-search searchform" role="search">

	<svg class="app-search__search-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21">
  <path d="M19.8623114,18.8115815 L14.8234949,13.772765 C14.7336556,13.6829256 14.6164738,13.6360529 14.4914799,13.6360529 L14.0891558,13.6360529 C15.4289341,12.1869049 16.2492066,10.2534056 16.2492066,8.12460329 C16.2492066,3.63654118 12.6126654,0 8.12460329,0 C3.63654118,0 0,3.63654118 0,8.12460329 C0,12.6126654 3.63654118,16.2492066 8.12460329,16.2492066 C10.2534056,16.2492066 12.1869049,15.4289341 13.6360529,14.0930619 L13.6360529,14.4914799 C13.6360529,14.6164738 13.6868317,14.7336556 13.772765,14.8234949 L18.8115815,19.8623114 C18.9951663,20.0458962 19.2920268,20.0458962 19.4756115,19.8623114 L19.8623114,19.4756115 C20.0458962,19.2920268 20.0458962,18.9951663 19.8623114,18.8115815 Z M8.12460329,14.9992676 C4.32400762,14.9992676 1.24993897,11.925199 1.24993897,8.12460329 C1.24993897,4.32400762 4.32400762,1.24993897 8.12460329,1.24993897 C11.925199,1.24993897 14.9992676,4.32400762 14.9992676,8.12460329 C14.9992676,11.925199 11.925199,14.9992676 8.12460329,14.9992676 Z" transform="translate(.031 .205)"/>
</svg>


	<form method="get" class="app-search__search-form" action="<?php echo trailingslashit( home_url() ); ?>">
		<input class="search-text" type="search" name="s" placeholder="<?php if ( is_search() ) echo esc_attr( get_search_query() ); else esc_attr_e( 'Search this site...', 'pariscopews' ); ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
		<input class="search-submit button" name="submit" type="submit" value="<?php esc_attr_e( '', 'pariscopews' ); ?>" />

		<span class="app-search__close"></span>

	</form>

</div>
