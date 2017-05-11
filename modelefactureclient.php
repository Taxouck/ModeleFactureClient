<?php

class Client{
	
	//données membres 
	private $_id;
	private $_nom;
	private $_prenom;
	private $_adresse;
	private $_codepostal;
	private $_ville;
	private $_telephone;
	private $_mail;
	public $_collectionfacture;
	
	//méthodes membres
	public function __construct($mid,$mnom,$mprenom, $madresse, $mcodep, $mville, $mtel, $mmail){
	
		//echo "voici le constructeur";
		$this->_id=$mid;
		$this->_nom=$mnom;
		$this->_prenom=$mprenom;
		$this->_adresse=$madresse;
		$this->_codepostal=$mcodep;
		$this->_ville=$mville;
		$this->_telephone=$mtel;
		$this->_mail=$mmail;
		$this->_collectionfacture=array();
	}
	
	function getID(){
		
		return $this->_id;
		
	}
	
	function setID($mid){
		
		$this->_id=$mid;
		
	}
	
	function getNom(){
		
		return $this->_nom;
		
	}
	
	function setNom($mnom){
		
		$this->_nom=$mnom;
		
	}
	
	function getPrenom(){
		
		return $this->_prenom;
		
	}
	
	function setPrenom($mprenom){
		
		$this->_prenom=$mprenom;
		
	}
	
	function getAdresse(){
		
		return $this->_adresse;
		
	}
	
	function setAdresse($madresse){
		
		$this->_adresse=$madresse;
		
	}
	
	function getCodep(){
		
		return $this->_codepostal;
		
	}
	
	function setCodep($mcodep){
		
		$this->_codepostal=$mcodep;
		
	}
	
	function getVille(){
		
		return $this->_ville;
		
	}
	
	function setVille($mville){
		
		$this->_ville=$mville;
		
	}
	
	function getTel(){
		
		return $this->_telephone;
		
	}
	
	function setTel($mtel){
		
		$this->_telephone=$mtel;
		
	}
	
	function getMail(){
		
		return $this->_mail;
		
	}
	
	function setMail($mmail){
		
		$this->_mail=$mmail;
		
	}
	
	function getCollection(){
		
		return $this->_collectionfacture;
		
	}
	
	function setCollection($mcollection){
		
		$this->_collectionfacture=$mcollection;
		
	}
	
	function AddtoCollection($mfacture){
		if (in_array($mfacture,$this->_collectionfacture)){
		}else{
			$mfacture->_client=$this;
			$this->_collectionfacture[]=$mfacture;
			/*var_dump($this->_collectionfacture);
			var_dump($mfacture->_client);*/
		}
	}
}

class Facture{
	
	//données membres 
	private $_id;
	private $_date;
	private $_reglement;
	public $_client;
	public $_collectiondetails;
	public $_collectionproduits;
	
	//méthodes membres
	public function __construct($mid,$mdate,$mreglement){
	
		//echo "voici le constructeur";
		$this->_id=$mid;
		$this->_date=$mdate;
		$this->_reglement=$mreglement;
		$this->_collectiondetails=array();
		$this->_collectionproduits=array();
	}
	
	function getID(){
		
		return $this->_id;
		
	}
	
	function setID($mid){
		
		$this->_id=$mid;
		
	}
	
	function getDatef(){
		
		return $this->_date;
		
	}
	
	function setDate($mdate){
		
		$this->_date=$mdate;
		
	}
	
	function getReglement(){
		
		return $this->_reglement;
		
	}
	
	function setReglement($mreglement){
		
		$this->_reglement=$mreglement;
		
	}
	
	function getClient(){
		
		return $this->_client;
		
	}
	
	function setClient($mclient){
		
		$this->_client=$mclient;
		
	}
	
	function addClient($mclient){
		if ($mclient != null){
			if (in_array($this,$mclient->_collectionfacture)){
			}else{
				if ($this->_client != null){$this->_client=null;}
				this.setClient($mclient);
				$this->_client.AddtoCollection($this);
			}
		}
	}
	
	function getCollDetails(){
		
		return $this->_collectiondetails;
		
	}
	
	function setCollDetails($mcollection){
		
		$this->_collectiondetails=$mcollection;
		
	}
	
	function AddtoCollDetails($mdetail){
		if (in_array($mdetail,$this->_collectiondetails)){
		}else{
			$this->_collectiondetails[]=$mdetail;
			/*var_dump($this->_collectiondetails);*/	
		}
	}
	
	function getCollProduits(){
		
		return $this->_collectionproduits;
		
	}
	
	function setCollProduits($mcollection){
		
		$this->_collectionproduits=$mcollection;
		
	}
	
	function AddtoCollProduits($mproduit){
		if (in_array($mproduit,$this->_collectionproduits)){
		}else{
			$this->_collectionproduits[]=$mproduit;
			/*var_dump($this->_collectionproduits);*/
		}
	}
}

class Produit{
	
	//données membres 
	private $_id;
	private $_nom;
	private $_description;
	private $_prixuht;
	
	//méthodes membres
	public function __construct($mid,$mnom,$mdescription, $mprix){
	
		//echo "voici le constructeur";
		$this->_id=$mid;
		$this->_nom=$mnom;
		$this->_description=$mdescription;
		$this->_prixuht=$mprix;
	}
	
	function getID(){
		
		return $this->_id;
		
	}
	
	function setID($mid){
		
		$this->_id=$mid;
		
	}
	
	function getNom(){
		
		return $this->_nom;
		
	}
	
	function setNom($mnom){
		
		$this->_nom=$mnom;
		
	}
	
	function getDescription(){
		
		return $this->_description;
		
	}
	
	function setDescription($mdescription){
		
		$this->_description=$mdescription;
		
	}
	
	function getPrix(){
		
		return $this->_prixuht;
		
	}
	
	function setPrix($mprix){
		
		$this->_prixuht=$mprix;
		
	}
}

class detailfacture{
	
	//données membres 
	private $_quantite;
	
	//méthodes membres
	public function __construct($mquantite){
	
		//echo "voici le constructeur";
		$this->_quantite=$mquantite;
	}
	
	function getQuantite(){
		
		return $this->_quantite;
		
	}
	
	function setQuantite($mquantite){
		
		$this->_quantite=$mquantite;
		
	}
}


$mClient= new Client(18,"Jules","Vernes","Rue quelque part",98500,"Ville",0766664243,"m.d@mail.mail");
$mFacture= new Facture(27,19051999,"Carte Bancaire");
$mProduit= new Produit(6,"Fauteuil","Fauteuil en cuir de vache",269.99);
$mdetail= new detailfacture(1);
$mClient->AddtoCollection($mFacture);
$mFacture->AddtoCollDetails($mdetail);
$mFacture->AddtoCollProduits($mProduit);
?>