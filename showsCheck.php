	<div class="container Show">
		<div class="row">
			<label class="search col-md-6 col-md-offset-3">Search:<input id="searchBox" type="text" ng-model="searchText" placeholder="Narrow it down"></label>
		</div>
		<div class="row A">
			<div  ng-repeat="sets in data">
				<div class="col-md-12 showRepeat" ng-repeat="set in sets | filter:searchText:strict">
						<span id="showVenue" class="col-md-3 col-md-offset-3">-Venue:  {{set.venue['@name']}}</span> <span id="showDate" class="col-md-3"> Date:  {{set['@eventDate']}}</span> <input id="showCheckbox" ng-model="idSet" ng-change="getId('{{set['@id']}}')" type="checkbox" ng-checked="inSetlist('{{set['@id']}}')">
				</div>
				
			</div>
		</div>
	</div>