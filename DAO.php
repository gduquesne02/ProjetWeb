<?php
class DAO
{
	public function __construct()
	{
	}
	public function connexion()
	{
		$pdo = new PDO('mysql:host=mysql-alpageweb.alwaysdata.net;dbname=alpageweb_iut', 'alpageweb', 'Z@X4w3SgSmgEhLQ');
		return $pdo;
	}

	//tester la connexion à la base de donnée
	/*try{
    $dbh = new pdo( 'mysql:host=mysql-alpageweb.alwaysdata.net;dbname=alpageweb_iut', 'alpageweb', 'Z@X4w3SgSmgEhLQ',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    die(json_encode(array('outcome' => true)));
}
catch(PDOException $ex){
    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}*/




	public function NumberOfMembers()
	{
		$con = mysqli_connect('mysql-alpageweb.alwaysdata.net;dbname=alpageweb_iut', 'alpageweb', 'Z@X4w3SgSmgEhLQ', 'alpageweb_iut');
		mysqli_select_db($con, "alpageweb_iut");
		$sql = "select distinct count(id) from users";
		$query = mysqli_query($con, $sql);
		$result = mysqli_fetch_assoc($query);
		$resultstring = $result['count(id)'];
		mysqli_close($con);
		return $resultstring;
	}

	public function getUserPassword()
	{
		$con = mysqli_connect('mysql-alpageweb.alwaysdata.net;dbname=alpageweb_iut', 'alpageweb', 'Z@X4w3SgSmgEhLQ', 'alpageweb_iut');
		mysqli_select_db($con, "alpageweb_iut");
		$sql = "select password from users";
		$query = mysqli_query($con, $sql);
		$result = mysqli_fetch_assoc($query);
		$resultstring = $result['password'];
		mysqli_close($con);
		return $resultstring;
	}


	public function getFirstNameAndLastName($idUser)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("SELECT * from users where id= ?");
		$reponse->execute([$idUser]);
		$a = $reponse->fetch();
		$b=$a[1];
		$c=$a[2];
		return "$b $c";
	}


	public function authentificationUser($email, $password)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("SELECT * from users where email= ? and password = ?");
		$reponse->execute([$email, $password]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}

	public function addUserEvent($idUser, $idEvent)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("INSERT INTO `participants`(`idUser`, `idEvent`) VALUES (?,?)");
		$reponse->execute([$idUser, $idEvent]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}

	public function listUsers()
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("SELECT * from users ");
		$reponse->execute([]);
		$lst = [];
		while ($ligne = $reponse->fetch()) {
			$lst[] = [$ligne[0], $ligne[1], $ligne[2], $ligne[3], $ligne[4], $ligne[5], $ligne[6]];
		}
		$reponse->closeCursor();
		return $lst;
	}


	public function EditUser($Nom, $prenom, $email, $iut, $idUser)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("UPDATE users set firstName=?,lastName=?,email=?,iut=? where id=?");
		$reponse->execute([$prenom, $Nom, $email, $iut, $idUser]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}

	public function insertUser($email, $password, $firstName, $lastName, $iut, $status)
	{

		$bdd = $this->connexion();
		$reponse = $bdd->prepare("INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `iut`, `status`) VALUES (?,?,?,?,?,?)");
		$reponse->execute([$firstName, $lastName, $email, $password, $iut, $status]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}

	public function getEtab()
	{

		$bdd = $this->connexion();
		$reponse = $bdd->prepare("SELECT DISTINCT iut from users");
		$reponse->execute([]);
		$lst = [];
		while ($ligne = $reponse->fetch()) {
			$lst[] = [$ligne[0]];
		}
		$reponse->closeCursor();
		return $lst;
	}

	public function deleteUser($id)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("DELETE from users where id=?");
		$reponse->execute([$id]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}


	public function AddUser($nom, $prenom, $email, $iut, $status, $password)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("INSERT INTO users(lastName,firstName,email,iut,status,password) values(?,?,?,?,?,?)");
		$reponse->execute([$nom, $prenom, $email, $iut, $status, $password]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}

	public function deleteAllUser()
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("DELETE FROM users");
		if ($reponse->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function listEvents()
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("SELECT * from events ORDER BY dateEvent DESC");
		$reponse->execute([]);
		$lst = [];
		while ($ligne = $reponse->fetch()) {
			$lst[] = [$ligne[0], $ligne[1], $ligne[2], $ligne[3], $ligne[4], $ligne[5], $ligne[6], $ligne[7], $ligne[8], $ligne[9], $ligne[10], $ligne[11], $ligne[12], $ligne[13], $ligne[14], $ligne[15], $ligne[16], $ligne[17]];
		}
		$reponse->closeCursor();
		return $lst;
	}

	public function EventById($id)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("SELECT * from events where id= ?");
		$reponse->execute([$id]);
		$lst = [];
		while ($ligne = $reponse->fetch()) {
			$lst[] = [$ligne[0], $ligne[1], $ligne[2], $ligne[3], $ligne[4], $ligne[5], $ligne[6], $ligne[7], $ligne[8], $ligne[9], $ligne[10], $ligne[11], $ligne[12], $ligne[13], $ligne[14], $ligne[15], $ligne[16]];
		}
		$reponse->closeCursor();
		return $lst;
	}

	public function AddEvent($name, $description, $dateEvent, $registrationEndDate, $location, $latitude, $longitude, $workshop, $goodies, $coffeeBreak, $lunchBreak, $numberMember, $maxMember, $hotel_prix, $hotel_name, $hotel_address)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("INSERT INTO events(name,description,dateEvent,registrationEndDate,location,latitude,longitude,workshop,goodies,coffeeBreak,lunchBreak,numberMember,maxMember, hotel_prix, hotel_name, hotel_address) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$reponse->execute([$name, $description, $dateEvent, $registrationEndDate, $location, $latitude, $longitude, $workshop, $goodies, $coffeeBreak, $lunchBreak, $numberMember, $maxMember, $hotel_prix, $hotel_name, $hotel_address]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}

	public function UpdateEvent($name, $description, $dateEvent, $registrationEndDate, $location, $latitude, $longitude, $workshop, $goodies, $coffeeBreak, $lunchBreak, $numberMember, $maxMember, $hotel_prix, $hotel_name, $hotel_address)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("UPDATE events set name=?,description=?,dateEvent=?,registrationEndDate=?,location=?,latitude=?,longitude=?,workshop=?,goodies=?,coffeeBreak=?,lunchBreak=?,numberMember=?,maxMember=?, hotel_prix=?, hotel_name=?, hotel_address=? where id=?");
		$reponse->execute([$name, $description, $dateEvent, $registrationEndDate, $location, $latitude, $longitude, $workshop, $goodies, $coffeeBreak, $lunchBreak, $numberMember, $maxMember, $hotel_prix, $hotel_name, $hotel_address]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}

	public function deleteEvent($id)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("DELETE from events where id=?");
		$reponse->execute([$id]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}

	public function getNameAndLastName($id)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("SELECT firstname,lastname from users where id= ?");
		$reponse->execute([$id]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}

	public function addParticipant($iduser, $idEvent)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("INSERT INTO participants(idUser,idEvent) values(?,?)");
		$reponse->execute([$iduser, $idEvent]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}

	public function listParticipant()
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("SELECT * from participants");
		$reponse->execute([]);
		$lst = [];
		while ($ligne = $reponse->fetch()) {
			$lst[] = [$ligne[0], $ligne[1]];
		}
		$reponse->closeCursor();
		return $lst;
	}

	public function listeParticipants($eventId)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("SELECT users.id,users.firstName,users.lastName, 
		users.email,users.phoneNumber from users,events,participants 
		where users.id = participants.id and events.id=participants.id 
		and participants.id = ?");
		$reponse->execute([$eventId]);
		$lst = [];
		while ($ligne = $reponse->fetch()) {
			$lst[] = [$ligne[0], $ligne[1], $ligne[2], $ligne[3], $ligne[4]];
		}
		$reponse->closeCursor();
		return $lst;
	}

	public function removeParticipant($iduser, $idEvent)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("SELECT * from participants where idUser=$iduser and idEvent=$idEvent");
		$reponse->execute([$iduser, $idEvent]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}

	public function deleteParticipant($iduser, $idEvent)
	{
		$bdd = $this->connexion();
		$reponse = $bdd->prepare("DELETE * from participants where idUser=? and idEvent=?");
		$reponse->execute([$iduser, $idEvent]);
		if ($ligne = $reponse->fetch()) return true;
		else return false;
	}
}
