<form action="<?=home_url('/')?>" method="get" >
    <input type="text" 
    	id="query" 
    	name="s" 
    	value="<?=get_search_query() == '' ? 'Busca' : get_search_query()?>" 
    	onfocus="if(this.value == 'Busca'){ 
    				this.value = ''; 
    	}" 
    	onblur="if(this.value == ''){ 
    				this.value = 'Busca' 
    	}"
    	required>
</form>