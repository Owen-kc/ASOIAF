create database ASOIAF;

DROP TABLE IF EXISTS `characters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `characters` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `born` varchar(45) DEFAULT NULL,
  `allegiance` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `height` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `spouse` varchar(45) DEFAULT NULL,
  `culture` varchar(45) DEFAULT NULL,
  `alignment` varchar(45) DEFAULT NULL,
  `equipment` varchar(45) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

select * from characters;

LOCK TABLES `characters` WRITE;
/*!40000 ALTER TABLE `characters` DISABLE KEYS */;
INSERT INTO `characters` VALUES ('1', 'Daemon Targaryen','81 A.C','House Targaryen, Blacks','Prince, Ser, Commander of the City Watch', '185cm', '90kg', 'Rhaeneyra Targaryen','Valyrian', 'Chaotic Neutral', 'Dark Sister (Sword), Caraxes (Dragon)','Daemon Targaryen, The Rogue Prince, was a member of House Targaryen, being a younger son of Prince Baelon Targaryen and a brother of King Viserys I Targaryen.')
, ('2', 'Rhaeneyra Targaryen', '97 A.C', 'House Targaryen', 'Princess of Dragonstone', '173cm', '65kg', 'Daemon Targaryen', 'Valyrian', 'Neutral Good', 'Syrax (Dragon)', 'Princess Rhaeneyra was the firstborn child of King Viserys Targaryen, and heir apparent to the Iron Throne')
, ('3', 'Corlys Velaryon',  '53 A.C', 'House Velaryon, Blacks', 'Lord of the Tides', '192cm', '96kg','Rhaenys Targaryen', 'Valyrian', 'Lawful Good', 'Biggest Naval Fleet', 'Corlys Velaryon, known as the Sea Snake, was a fabled Lord of the Tides, Master of Driftmark, and head of House Velaryon. He was the husband of Princess Rhaenys Targaryen.')
, ('4', 'Alicent Hightower', '88 A.C', 'House Hightower, Greens', 'Queen', '171cm', '59kg', 'Viserys I Targaryen', 'Reachman', 'Lawful Evil', 'Valyrian Steel Dagger', 'Alicent Hightower was a member of House Hightower who became the second wife to King Viserys I Targaryen. She was the daughter of Ser Otto Hightower, who had been Hand of the King to Jaehaerys I')
, ('5', 'Ser Criston Cole', '82 A.C', 'House Cole, Greens', 'Ser, Lord Commander', '182cm', '82kg', 'Never Married', 'Dornish', 'Neutral Evil', 'Kingsguard Armour','Ser Criston Cole was a knight from House Cole who rose to become Lord Commander of the Kingsguard for Viserys I Targaryen.')  
, ('6', 'Viserys I Targaryen', '77 A.C', 'House Targaryen', 'King', '183cm', '70kg', 'Alicent Hightower', 'Valyrian', 'Lawful Good', 'Blackfyre (Valyrian Steel Sword)','Viserys I Targaryen was the fifth Targaryen king to sit the Iron Throne, ruling from 103 AC to 129 AC. He succeeded his grandfather, the Old King Jaehaerys I.') 
, ('7', 'Jon Snow', '281 A.C', 'House Stark', 'Lord Commander', '183cm', '82kg', 'None', 'Northman/Valyrian', 'Lawful Good', 'Longclaw (Valyrian Steel Sword)','Jon Snow, born Aegon Targaryen, is the son of Lyanna Stark and Rhaegar Targaryen. He became the 998th Lord Commander of the Nightswatch and was vital in the battle against the White Walkers') 
, ('8', 'Jaime Lannister', '266 A.C', 'House Lannister', 'Lord Commander, Ser', '185cm', '88kg', 'None', 'Westerman', 'Neutral Evil', 'Gilded Armour','Ser Jaime Lannister, also known as the Kingslayer, is an anointed knight of House Lannister, and serves as a member of the Kingsguard for King Aerys II Targaryen and later King Robert I Baratheon') 
, ('9', 'Robert Baratheon', '262 A.C', 'House Baratheon', 'King', '201cm', '104kg', 'Cersei Lannister', 'Stormlander', 'Neutral Good', 'Roberts Warhammer','Robert I Baratheon is the King of the Andals, the Rhoynar, and the First Men. Robert was crowned king after King Aerys II Targaryen, his first cousin once removed, was killed during Roberts Rebellion.') 
, ('10', 'Tyrion Lannister', '273 A.C', 'House Lannister', 'Hand of the King', '134cm', '50kg', 'Sansa Stark', 'Westerman', 'Chaotic Good', 'Tyrions Dagger','Tyrion Lannister is a member of House Lannister and is the third and youngest child of Lord Tywin Lannister and the late Lady Joanna Lannister. His older siblings are Cersei Lannister, and Ser Jaime Lannister') 
, ('11', 'Sansa Stark', '286 A.C', 'House Stark', 'Princess', '165cm', '52kg', 'Tyrion Lannister', 'Northman', 'Lawful Good', 'Sansas Gown','Sansa Stark is a member of House Stark and is the elder daughter of Lady Catelyn and Lord Eddard Stark. She has three brothers: Robb, Bran and Rickon; a younger sister: Arya; and a half-brother: Jon Snow.') 
, ('12', 'Eddard Stark' , '263 A.C', 'House Stark', 'Lord of Winterfell', '187cm', '84kg', 'Catelyn Tully', 'Northman', 'True Good', 'Ice (Valyrian Steel Sword)','Eddard Stark, also called "Ned", is the head of House Stark, Lord of Winterfell, and Warden of the North. He is a close friend to King Robert I Baratheon, with whom he was raised.') 


