
<div id="search-form" class="clearfix">
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <input type="text" name="s" id="s" onblur="if (this.value == '') {this.value = 'Szukaj...';}" onfocus="if (this.value == 'Szukaj...') {this.value = '';}" value="Szukaj..."/>
        <input type="submit" value="Szukaj" id="searchsubmit">
</form>
</div>