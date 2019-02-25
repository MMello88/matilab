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
		
		if (document.getElementById('formAccounts')){
			document.getElementById('formAccounts').addEventListener('submit', function(e) {
				this.validateAccount(e.target);
				e.preventDefault();
			}.bind(this));
		}
		
		if (document.getElementById('formRegisterAccount')){
			document.getElementById('formRegisterAccount').addEventListener('submit', function(e) {
				this.registerAccount(e.target);
				e.preventDefault();
			}.bind(this));
		}

		if (document.getElementById('formForgot')){
			document.getElementById('formForgot').addEventListener('submit', function(e) {
				this.validateForgot(e.target);
				e.preventDefault();
			}.bind(this));
		}

	}
	
	validateSessionAccount(){
		$.ajax({
			url: base_url + "Accounts/validate_session_account",
			success: function(data){
				this.respJson = new ResponseJson(data);
				if (this.respJson.code == '1' && this.respJson.message == 'true')
					window.location = base_url + "Welcome";
			},
			error: function(data) {
			}
		});
	}
	
	redirectAccount(){
		if (this.respJson.code == '1' && this.respJson.message == 'true')
			window.location = base_url + "Welcome";
	}

	validateForgot(form){
		var me = this;
		$.ajax({
			type: "POST",
			url: base_url + "Accounts/validate_forgot",
			data: $(form).serialize(),
			success: function(data){
				this.respJson = new ResponseJson(data);
				document.getElementById('code').classList.add(this.respJson.alert);
				document.getElementById('code').classList.add('show');
				document.getElementById("message").innerHTML = this.respJson.message;
			},
			error: function(data) {
			}
		});
		
		return false;
	}
	
	validateAccount(form){
		var me = this;
		$.ajax({
			type: "POST",
			url: base_url + "Accounts/validate_accounts",
			data: $(form).serialize(),
			success: function(data){
				this.respJson = new ResponseJson(data);
				if (this.respJson.code !== '1'){
					document.getElementById('code').classList.add(this.respJson.alert);
					document.getElementById('code').classList.add('show');
					document.getElementById("message").innerHTML = this.respJson.message;
				} else {
					me.validateSessionAccount();
				}
			},
			error: function(data) {
			}
		});
		
		return false;
	}
	
	registerAccount(form){
		var me = this;
		$.ajax({
			type: "POST",
			url: base_url + "Accounts/register_account",
			data: $(form).serialize(),
			success: function(data){
				this.respJson = new ResponseJson(data);
				document.getElementById('code').classList.add(this.respJson.alert);
				document.getElementById('code').classList.add('show');
				document.getElementById("message").innerHTML = this.respJson.message;
				if (this.respJson.code == '1')
					me.validateSessionAccount();
			},
			error: function(data) {
			}
		});
		
		return false;
	}

}

let acc = new Acconts();

//acc.registerAccount('MATHEUS','matheus@matheus.com', '12345678', '12345678');
/*acc.registerAccount('matheus','matheus', '123', '123');
acc.registerAccount('matheus','matheus@matheus.com', '123', '123');
acc.registerAccount('matheus','matheus@matheus.com', '123', '123');*/

//acc.validateAccount('s','');
