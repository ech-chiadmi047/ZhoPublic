<!-- SEARCH GLOBAL -->

<div class="search-bar">
    <div>
        <img src="{{url('svg/search.svg')}}" class='search-icon' />
    </div>
    <div class="search-inputs">
        <form action="{{ route('search') }}" method="GET">
            <!-- WHAT ARE YOU LOOKING FOR -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Looking for</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="post">
                    <option value="Company" selected>Company</option>
                    <option value="Catering">Catering</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Equipment">Equipment</option>
                    <option value="Place">Place</option>
                    <option value="Suggestion">Suggestion</option>
                </select>
            </div>
            <!-- SEARCH BY CITY -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">City</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="location">
                    <option value="" disabled selected hidden>Where...</option>
                    <option value="Rabat">Rabat</option>
                    <option value="Casablanca">Casablanca</option>
                    <option value="Essaouira">Essaouira</option>
                    <option value="Agadir">Agadir</option>
                    <option value="Marrakesh">Marrakesh</option>
                    <option value="Oujda">Oujda</option>
                    <option value="Dakhla">Dakhla</option>
                    <option value="Al Hoceima">Al Hoceima</option>
                    <option value="Tangier">Tangier</option>
                    <option value="Ifrane">Ifrane</option>
                </select>
            </div>
            <!-- SEARCH BY TYPE -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Type</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="type">
                    <option value="" disabled selected hidden>What...</option>
                    <option value="Sport">Sport</option>
                    <option value="Art">Art</option>
                    <option value="Party">Party</option>
                    <option value="Wedding">Wedding</option>
                    <option value="Birthday">Birthday</option>
                    <option value="Music">Music</option>
                    <option value="Worshop or Class">Worshop or Class</option>
                    <option value="Conference">Conference</option>
                    <option value="Trip">Trip</option>
                    <option value="Guided tour">Guided tour</option>
                </select>
            </div>
            <!-- SEARCH BY PRICE -->
            <div class="input-group  mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Price</span>
                </div>
                <input type="number" class="form-control" placeholder="Min price" name="min_price">
                <input type="number" class="form-control" placeholder="Max price" name="max_price">
            </div>
    </div>
    <div class="search-btn">
        <button type="submit">Search</button>
    </div>
    </form>
</div>