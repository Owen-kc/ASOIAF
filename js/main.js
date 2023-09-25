// The root URL for the RESTful services
var rootURL = "http://localhost/WebDevelopment/ASOIAF/api/characters";

var currentCharacter;

//findAll, gets all characters and on success calls the renderList method
var findAll = function () {
	console.log('findAll');
	$.ajax({
		type: 'GET',
		url: rootURL,
		dataType: "json", // data type of response
		success: renderList
	});
};

//find characters by ID, ajax req, append success to "data" and use this to display info
var findById = function (id) {
	console.log('findById: ' + id);
	//alert("findbyid");
	$.ajax({
		type: 'GET',
		url: rootURL + '/' + id,
		dataType: "json",
		success: function (data) {
			console.log('findById success: ' + data.character);
			currentCharacter = data;
			renderDetails(data);
		}
	});
};

//this is for the more info modals, htmlStr is used to display info
var renderDetails = function (character) {
	var htmlStr = '<h2>' + character.name + '</h2><h2>' + 'Born ' + character.born + '</h2><P>' + character.description + '<BR><HR>' + 'Height: ' + character.height + '<BR><HR>' + 'Weight: ' + character.weight + '<BR><HR>' + 'Spouse: ' + character.spouse + '<BR><HR>' + 'Culture: ' + character.culture + '<BR><HR>' + 'Alignment: ' + character.alignment + '<BR><HR>' + 'Equipment: ' + character.equipment;
	$("#contents").html(htmlStr);
	$('#myModal').modal('show');
};

//this is used to display characters information on the character table view
var renderList = function (data) {
	console.log(data.Character);
	list = data.Character;
	console.log("response");
	$.each(list, function (index, character) {
		$('#table_body').append('<tr><td>' + character.name + '</td><td>' +
			character.born + '</td><td>' + character.allegiance + '</td><td>' + character.alignment +
			'</td><td id="' + character.id + '"><a href="#">More Info</a></td></tr>');
	});
	$('#table_id').DataTable();
};

//Retrieve the character list when the DOM is ready
$(document).ready(function () {
	findAll();
	$(document).on("click", '#table_body td', function () { findById(this.id); });

	//call this when dom is ready
	getData();

	//add to list, unused as of right now
	const users = [];
	username = localStorage.getItem("username");
	users.push(username);

	//hide button, unused as of right now
	$(document).ready(function () {
		$('btnCreate').click(function () {
			$('.alert').show()
		})
	});
});

//imagemodal, used to create modal of books covers on homepage
$(function () {
	$('.pop').on('click', function () {
		$('.imagepreview').attr('src', $(this).find('img').attr('src'));
		$('#imagemodal').modal('show');
	});
});

//function to alert character has been deleted
function charAlert() {
	alert("Latest Character has been Deleted");
}

//function to reset the text fields to null string
function clearFields() {
	document.getElementById("name").value = "";
	document.getElementById("born").value = "";
	document.getElementById("allegiance").value = "";
	document.getElementById("title").value = "";
	document.getElementById("height").value = "";
	document.getElementById("weight").value = "";
	document.getElementById("spouse").value = "";
	document.getElementById("culture").value = "";
	document.getElementById("alignment").value = "";
	document.getElementById("equipment").value = "";
	document.getElementById("description").value = "";
}

//function which gets the data from localstorage & logs it in console
function getData() {
	let username = localStorage.getItem("username");
	let userimage = localStorage.getItem("userimage")
	console.log(username);
	console.log(userimage);
}

//set data which sets currentUser as the currently logged in user for the user details page
function setData() {
	let username = localStorage.getItem("username");
	console.log(username);
	document.getElementById("currentUser").innerHTML = username;
	var clockElement = document.getElementById('clock');

	//clock for user detailspage
	function clock() {
		clockElement.textContent = new Date().toString();
	}

	//set interval of clock
	setInterval(clock, 1000);
}

//fucntion to add new users to the user list on userDetails page
function addNew() {
	var addButton = document.getElementById("addUser");
	var userInput = document.getElementById("newUser");
	var ul = document.getElementById("userList");

	var li = document.createElement("li");
	li.className = 'list-group-item';
	li.textContent = userInput.value;
	ul.appendChild(li);

}





