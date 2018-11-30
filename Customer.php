<?php
//Page creation by: James Sharpe and Yosuke Saito
	class Customer
	{
		private $CustomerId;
		private $CustFirstName;
		private $CustLastName;
		private $CustAddress;
		private $CustCity;
		private $CustProv;
		private $CustPostal;
		private $CustCountry;
		private $CustHomePhone;
		private $CustBusPhone;
		private $CustEmail;
		private $AgentId;
		private $CustUserId;
		private $CustPassword;
		
		public function __construct($custarray)
		{
			if (isset($custarray['AgentId'])) {
				$this->CustomerId = $custarray[0];
				$this->CustFirstName = $custarray[1];
				$this->CustLastName = $custarray[2];
				$this->CustAddress = $custarray[3];
				$this->CustCity = $custarray[4];
				$this->CustProv = $custarray[5];
				$this->CustPostal = $custarray[6];
				$this->CustCountry = $custarray[7];
				$this->CustHomePhone = $custarray[8];
				$this->CustBusPhone = $custarray[9];
				$this->CustEmail = $custarray[10];
				$this->AgentId = $custarray[11];
				$this->CustUserId = $custarray[12];
				$this->CustPassword = $custarray[13];
			}			
			elseif (!isset($custarray['CustomerId']) && !isset($custarray['CustCountry']) && !isset($custarray['AgentId'])) {
				$this->CustFirstName = $custarray['CustFirstName'];
				$this->CustLastName = $custarray['CustLastName'];
				$this->CustAddress = $custarray['CustAddress'];
				$this->CustCity = $custarray['CustCity'];
				$this->CustProv = $custarray['CustProv'];
				$this->CustPostal = $custarray['CustPostal'];
				$this->CustHomePhone = $custarray['CustHomePhone'];
				$this->CustBusPhone = $custarray['CustBusPhone'];
				$this->CustEmail = $custarray['CustEmail'];
				$this->CustUserId = $custarray['CustUserId'];
				$this->CustPassword = $custarray['CustPassword'];
			}
			elseif (isset($custarray['CustUserId']) && isset($custarray['CustPassword']) && isset($custarray['CustomerId'])) {
				$this->CustomerId = $custarray[0];
				$this->CustUserId = $custarray[1];
				$this->CustPassword = $custarray[2];
			}
			else{
				$this->CustomerId = "TEST";
				$this->CustUserId = "TEST";
				$this->CustPassword = "TEST";
			}
		}
		
		public function getCustomerId()
		{
			return $this->CustomerId;
		}
		public function setCustomerId($CustomerId)
		{
			$this->CustomerId = $CustomerId;
		}
		
		public function getCustFirstName()
		{
			return $this->CustFirstName;
		}
		public function setCustFirstName($CustFirstName)
		{
			$this->CustFirstName = $CustFirstName;
		}
		
		public function getCustLastName()
		{
			return $this->CustLastName;
		}
		public function setCustLastName($CustLastName)
		{
			$this->CustLastName = $CustLastName;
		}
		
		public function getCustAddress()
		{
			return $this->CustAddress;
		}
		public function setCustAddress($CustAddress)
		{
			$this->CustAddress = $CustAddress;
		}
		
		public function getCustCity()
		{
			return $this->CustCity;
		}
		public function setCustCity($CustCity)
		{
			$this->CustCity = $CustCity;
		}
		
		public function getCustProv()
		{
			return $this->CustProv;
		}
		public function setCustProv($CustProv)
		{
			$this->CustProv = $CustProv;
		}
		
		public function getCustPostal()
		{
			return $this->CustPostal;
		}
		public function setCustPostal($CustPostal)
		{
			$this->CustPostal = $CustPostal;
		}
		
		public function getCustCountry()
		{
			return $this->CustCountry;
		}
		public function setCustCountry($CustCountry)
		{
			$this->CustCountry = $CustCountry;
		}
		
		public function getCustHomePhone()
		{
			return $this->CustHomePhone;
		}
		public function setCustHomePhone($CustHomePhone)
		{
			$this->CustHomePhone = $CustHomePhone;
		}
		
		public function getCustBusPhone()
		{
			return $this->CustBusPhone;
		}
		public function setCustBusPhone($CustBusPhone)
		{
			$this->CustBusPhone = $CustBusPhone;
		}
		
		public function getCustEmail()
		{
			return $this->CustEmail;
		}
		public function setCustEmail($CustEmail)
		{
			$this->CustEmail = $CustEmail;
		}
		
		public function getAgentId()
		{
			return $this->AgentId;
		}
		public function setAgentId($AgentId)
		{
			$this->AgentId = $AgentId;
		}
		
		public function getCustUserId()
		{
			return $this->CustUserId;
		}
		public function setCustUserId($CustUserId)
		{
			$this->CustUserId = $CustUserId;
		}
		
		public function getCustPassword()
		{
			return $this->CustPassword;
		}
		public function setCustPassword($CustPassword)
		{
			$this->CustPassword = $CustPassword;
		}
	}
?>