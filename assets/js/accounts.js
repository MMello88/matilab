"use strict";
class ResponseJson {
	constructor(dataResponse){
		var data = JSON.parse(dataResponse);
		this.allData = data;
		this.code = data.code;
		this.message = data.message
	}
	
	get allData(){
		return this._data;
	}
	
	set allData(value){
		this._data = value;
	}
	
	get code(){
		return this._code;
	}
	
	set code(value){
		this._code = value;
	}
	
	get message(){
		return this._message;
	}
	
	set message(value){
		this._message = value;
	}
	
	get alert(){
		if(this._code == '1')
			return 'alert-success';
		if(this._code == '2')
			return 'alert-info';
		if(this._code == '3')
			return 'alert-warning';
		if(this._code == '4')
			return 'alert-danger';
	}
}

class Acconts {
	constructor(){
		this.respJson = null;
		
		document.getElementById('formAccounts').addEventListener('submit', function(e) {
			this.validateAccount();
			e.preventDefault();
		}.bind(this));
		
		document.getElementById('close').addEventListener('click', function(e) {
			document.getElementById('message').classList.add('hidden');
			document.getElementById('message').classList.remove('show');
			e.preventDefault();
		}.bind(this));
	}
	
	validateSessionAccount(){
		return $.ajax({
			url: base_url + "Accounts/validate_session_account",
			success: function(data){
				this.respJson = new ResponseJson(data);
				if (this.respJson.code == '1' && this.respJson.message == 'true')
					window.location = base_url + "Welcome";
			},
			error: function(data) {
				alert(data.responseText);
			}
		});
	}
	
	redirectAccount(){
		if (this.respJson.code == '1' && this.respJson.message == 'true')
			window.location = base_url + "Welcome";
	}
	
	validateAccount(email, password){
		this.email = email;
		this.pass = password;
		
		$.ajax({
			type: "POST",
			url: base_url + "Accounts/validate_accounts",
			data: {"email":this.email, "senha":this.pass},
			success: function(data){
				this.respJson = new ResponseJson(data);
				alert(this.respJson.message);
				//document.getElementById('message').classList.add(this.respJson.alert);
				//document.getElementById('message').classList.add('show');
			},
			error: function(data) {
				alert(data.responseText);
			}
		});
		
		return false;
	}
	
	get respJson(){
		return this._respJson;
	}
	
	set respJson(value){
		this._respJson = value;
	}	
}

let acc = new Acconts();

acc.validateAccount('matheusnarciso@hotmail.com','1231');

acc.validateSessionAccount();
