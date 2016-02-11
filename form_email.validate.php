<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<style>
.control-label { font-size:20px; }
</style>
<form name="form" ng-app>
<div class="control-groupp" ng-class="{true: 'error'}[submitted && form.email.$invalid][submitted && form.user.$invalid][submitted && form.gender.$invalid][submitted && form.gender_check.$invalid][submitted && form.opt.$invalid]">
        <label class="control-label" for="email">Your email address</label>
        <div class="controls">
            <input type="email" name="email" ng-model="email" required />
            <span class="helpp-inline" ng-show="submitted && form.email.$error.required">Please enter email id</span>
            <span class="helpp-inline" ng-show="submitted && form.email.$error.email">Invalid email</span>
        </div>
		<label class="control-label" for="email">Username</label>
		<div class="controls">
            <input type="text" name="user" ng-model="user" required />
            <span class="helpp-inline" ng-show="submitted && form.user.$error.required">Please enter User name</span>
            <span class="helpp-inline" ng-show="submitted && form.user.$error.user">Invalid username</span>
        </div>
		<label class="control-label" for="email">Gender</label>
		<div class="controls">
            <input type="radio" name="gender" ng-model="gender" required  value="M"/>Male
			<input type="radio" name="gender" ng-model="gender" required value="F" />Female
            <span class="helpp-inline" ng-show="submitted && form.gender.$error.required">Please enter Gender</span>
            <span class="helpp-inline" ng-show="submitted && form.gender.$error.gender">Invalid gender</span>
        </div>
		<label class="control-label" for="email">Gender Check</label>
		<div class="controls">
            <input type="checkbox" name="gender_check" ng-model="gender_check" required  value="M"/>Male
			<input type="checkbox" name="gender_check" ng-model="gender_check" required value="F" />Female
            <span class="helpp-inline" ng-show="submitted && form.gender_check.$error.required">Please enter Gender</span>
            <span class="helpp-inline" ng-show="submitted && form.gender_check.$error.gender_check">Invalid gender</span>
        </div>
		<label class="control-label" for="email">Select Data</label>
		<div class="controls">
            Select Data:<select name="opt" ng-model="opt" required>
				<option value="">Select Data</option>
				<option value="1">1</option>
			</select>
            <span class="helpp-inline" ng-show="submitted && form.opt.$error.required">Please enter Gender</span>
            <span class="helpp-inline" ng-show="submitted && form.opt.$error.opt">Invalid gender</span>
        </div>
    </div>   
    <button type="submit" class="btn btn-primary btn-large" ng-click="submitted=true">Submit</button>
</form>