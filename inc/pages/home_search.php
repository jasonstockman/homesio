<h3>Search</h3>

<form class="form-inline well" role="form" id="search">
<div class="form-group">
  <label for="home-search-location">Location (City, State, or ZIP)</label>
  <input type="text" class="form-control" placeholder="Search" name="location" id="home-search-location">
</div>
<div class="form-group">
  <label for="home-search-beds">Beds</label>
  <select class=" form-control" name="beds" id="home-search-beds">
    <option value="">Any</option>
    <option value="1">1 +</option>
    <option value="2">2 +</option>
    <option value="3">3 +</option>
    <option value="4">4 +</option>
  </select>
</div>
<div class="form-group"> 
  <label for="home-search-baths">Baths</label>
  <select class=" form-control" name="baths" id="home-search-baths">
    <option value="">Any</option>
    <option value="1">1 +</option>
    <option value="2">2 +</option>
    <option value="3">3 +</option>
    <option value="4">4 +</option> 
  </select>
</div>
<div class="form-group">
  <label id="home-search-price">Price (Max)</label><br>
  <select name="min" tabindex="2" title="Minimum price" class="form-control" id="home-search-price">
    <option selected="selected" value="">No max</option>
    <option value="50000">$50,000</option>
    <option value="75000">$75,000</option>
    <option value="100000">$100,000</option>
    <option value="125000">$125,000</option>
    <option value="150000">$150,000</option>
    <option value="175000">$175,000</option>
    <option value="200000">$200,000</option>
    <option value="225000">$225,000</option>

    <option value="250000">$250,000</option>
    <option value="275000">$275,000</option>
    <option value="300000">$300,000</option>
    <option value="325000">$325,000</option>
    <option value="350000">$350,000</option>
    <option value="375000">$375,000</option>

    <option value="400000">$400,000</option>
    <option value="425000">$425,000</option>
    <option value="450000">$450,000</option>
    <option value="475000">$475,000</option>
    <option value="500000">$500,000</option>
    <option value="550000">$550,000</option>

    <option value="600000">$600,000</option>
    <option value="650000">$650,000</option>
    <option value="700000">$700,000</option>
    <option value="750000">$750,000</option>
    <option value="800000">$800,000</option>
    <option value="850000">$850,000</option>

    <option value="900000">$900,000</option>
    <option value="950000">$950,000</option>
    <option value="1000000">$1,000,000</option>
    <option value="1250000">$1,250,000</option>
    <option value="1500000">$1,500,000</option>
    <option value="1750000">$1,750,000</option>

    <option value="2000000">$2,000,000</option>
    <option value="2250000">$2,250,000</option>
    <option value="2500000">$2,500,000</option>
    <option value="2750000">$2,750,000</option>
    <option value="3000000">$3,000,000</option>
    <option value="3250000">$3,250,000</option>

    <option value="3500000">$3,500,000</option>
    <option value="3750000">$3,750,000</option>
    <option value="4000000">$4,000,000</option>
    <option value="4250000">$4,250,000</option>
    <option value="4500000">$4,500,000</option>
    <option value="4750000">$4,750,000</option>

    <option value="5000000">$5,000,000</option>
    <option value="6000000">$6,000,000</option>
    <option value="7000000">$7,000,000</option>
    <option value="8000000">$8,000,000</option>
    <option value="9000000">$9,000,000</option>
    <option value="10000000">$10,000,000</option>
 </select>
</div>

<div class="form-group">
  <label>&nbsp;</label><br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button id="home-search-adv" class="btn btn-default" data-toggle="button">Advanced Search</button>
</div>

<div id="home-search-more">
    <hr>
    <div class="form-group">
      <label for="home-search-location">Property Type</label><br>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-default">
            <input type="checkbox" checked name="propType" id="option1"> All
          </label>
          <label class="btn btn-default">
            <input type="checkbox" name="propType" id="option2"> Townhome
          </label>
          <label class="btn btn-default">
            <input type="checkbox" name="propType" id="option3"> Loft
          </label>
          <label class="btn btn-default">
            <input type="checkbox" name="propType" id="option1"> Coop
          </label>
          <label class="btn btn-default">
            <input type="checkbox" name="propType" id="option2"> Apartment
          </label>
          <label class="btn btn-default">
            <input type="checkbox" name="propType" id="option3"> Condo
          </label>
          <label class="btn btn-default">
            <input type="checkbox" name="propType" id="option1"> Income/Investment
          </label>
          <label class="btn btn-default">
            <input type="checkbox" name="propType" id="option2"> Lot/Land
          </label>
          <label class="btn btn-default">
            <input type="checkbox" name="propType" id="option3"> Mobile/Manufactured
          </label>                    
        </div>      
    </div>
    <div class="form-group">
            <br>
          <div class="form-group">
            <label for="min_sqft" class="as_label" id="sqft_label">Structure size (square feet)</label><br>
            <span>
              <input type="text" style="width:135px;" value="" size="12" id="min_sqft" name="min_sqft">
              <span class="padr5 padl5 padt20 f12">
              to
              </span>
              <input type="text" style="width:135px;" value="" size="12" id="max_sqft" name="max_sqft">  
            </span>
          </div>
          <div class="form-group margin-left">
            <label for="min_lotsize" class="as_label" id="lotsize_label">Lot size (acres)</label><br>
            <span>
              <input type="text" style="width:93px;" value="" size="12" id="min_lotsize" name="min_lotsize">
              <span class="padr5 padl5 padt20 f12">
              to
              </span>
              <input type="text" style="width:93px;" value="" size="12" id="max_lotsize" name="max_lotsize">  
            </span>
          </div>
          <div class="form-group margin-left">
            <label for="min_built" class="as_label" id="built_label">Year built</label><br>
            <span>
              <input type="text" style="width:93px;" value="" size="12" id="min_built" name="min_built">
              <span class="padr5 padl5 padt20 f12">
              to
              </span>
              <input type="text" style="width:93px;" value="" size="12" id="max_built" name="max_built">  
            </span>
          </div>

    </div>        
</div>

</form>

<script type="text/javascript">
$.get("http://ipinfo.io", function(response) {
$('input[name="location"]').val(response.city+', '+response.region);
}, "jsonp");
</script> 