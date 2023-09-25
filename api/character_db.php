<?php

//get characters ordered by ID
function getCharacters() {
	$query = "select * FROM characters ORDER BY id";
	try {
	global $db;
		$characters = $db->query($query);  
		$characters = $characters->fetchAll(PDO::FETCH_ASSOC);
		header("Content-Type: application/json", true);
		echo '{"Character": ' . json_encode($characters) . '}';
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

//get character for a specific id
function getCharacter($id) {
	$query = "SELECT * FROM characters WHERE id = '$id'";
    try {
		global $db;
		$characters = $db->query($query);  
		$character = $characters->fetch(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
		//echo $query;
        echo json_encode($character);
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}

//get character by name
function findByName($name) {
$query = "SELECT * FROM characters WHERE UPPER(name) LIKE ". '"%'.$name.'%"'." ORDER BY name";
    try {
		global $db;
		$characters = $db->query($query);  
		$character = $characters->fetch(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
        echo json_encode($character);
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}

//add character
function addCharacter() {
    global $app;
	$request = $app->request();
	$character = json_decode($request->getBody());
	$name = $character->name;
	$born = $character->born;
	$allegiance = $character->allegiance;
	$title = $character->title;
	$height = $character->height;
	$weight = $character->weight;
	$spouse = $character->spouse;
	$culture = $character->culture;
	$alignment = $character->alignment;
	$equipment = $character->equipment;
	$description = $character->description;
	$query= "INSERT INTO characters
                 (name, born, allegiance, title, height, weight, spouse, culture, alignment, equipment, description)
              VALUES
                 ('$name', '$born', '$allegiance', '$title', '$height', '$weight', '$spouse', '$culture', '$alignment', '$equipment', '$description')";
	try {
		global $db;
		$db->exec($query);
		$character->id = $db->lastInsertId();
		echo json_encode($character); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

//delete character
function deleteCharacter() {
	$sql = "DELETE FROM characters WHERE id=(SELECT MAX(id) FROM characters)";
	try {
		global $db;
		$db->exec($query);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

//update character
function updateCharacter($id) {
	global $app;
	$request = $app->request();
	$character = json_decode($request->getBody());
	$name = $character->name;
	$born = $character->born;
	$allegiance = $character->allegiance;
	$title = $character->title;
	$height = $character->height;
	$weight = $character->weight;
	$spouse = $character->spouse;
	$culture = $character->culture;
	$alignment = $character->alignment;
	$equipment = $character->equipment;
	$description = $character->description;
	$sql = "UPDATE characters SET name='$name', born='$born', allegiance='$allegiance', title='$title', height='$height', weight='$weight', spouse='$spouse', culture='$culture', alignment='$alignment', equipment='$equipment', description='$description' WHERE id='$id'";
	try {
		global $db;
		 $db->exec($query); 
		 echo json_encode($characters);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

?>