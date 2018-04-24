<div class="searchbar">
    <form $FormAttributes action="#" class="searchbar">
        <div class="input-group">
            <input id="SearchForm_SearchForm_Search"
                   aria-label="<%t CWP_Search.Button "Search" %>"
                   type="text"
                   name="Search"
                   class="text form-control searchfield input-lg"
                   value="$SearchQuery.ATT"
                   placeholder="<%t CWP_Search.Placeholder "Search here..." %>"/>
            <label class="sr-only" for="SearchForm_SearchForm_Search"><%t CWP_Search.Button "Search" %></label>
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>

    </form>
</div>
