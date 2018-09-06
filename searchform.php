<div id="search-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
	  <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
      <div class="modal-header">
        <h5 class="modal-title">Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		   <input type="search" value="<?php the_search_query(); ?>" placeholder="Enter text…" class="form-control input-lg search-query" name="s" id="s" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" id="searchsubmit" class="btn btn-primary search-submit" />Start Search</button>
      </div>
     </form>	
    </div>
  </div>
</div>