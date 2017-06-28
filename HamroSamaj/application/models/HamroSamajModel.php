<?php
class HamroSamajModel extends CI_Model
	{
		public function all()
		{
			$sql="SELECT * FROM tbl_user";
			$q=$this->db->query($sql);
			return $q;
		}
		public function signup($fName,$Email,$Username,$Password,$lvl,$contact)
		{
			$data = array(
			        'fullName' => $fName,
			        'Username' => $Username,
			        'Password' => $Password,
			        'Email' => $Email,
			        'Contact' => $contact,
			        'Role' => $lvl
			        
			);
			$sql = $this->db->set($data)->get_compiled_insert('tbl_user');
			$q=$this->db->query($sql);
			return $q;
		}
		public function complainStatus($lastID,$date,$state)
		{
			$data = array(
				'CId' => $lastID,
				'Date' => $date,
				'ComplainState' => $state 
				);
			$sql= $this->db->set($data)->get_compiled_insert('tbl_complainstate');
            $q=$this->db->query($sql);
            return $q;
		}
		public function retriveComplain($key)
		{
			$sql="SELECT * FROM `tbl_complainstate` WHERE `CId`='$key' ORDER by `Date`";
			$q=$this->db->query($sql);
			return $q;
		}
		public function retriveComplainState($key)
		{
			$sql="SELECT * FROM tbl_complainstate WHERE CId='$key'";
			$q=$this->db->query($sql);
			return $q;
		}
		public function complainReg($cName,$vName,$Email,$Contact,$date,$Complain,$ip,$lonlat_info)
			{
			    $data = array(
			        'cName' => $cName,
			        'vName' => $vName,
			        'Email' => $Email, 
			        'Contact' => $Contact,
			        'Date' => $date,
			        'Complain' => $Complain,
			        'ip' => $ip,
			        'lonlat_info'=> $lonlat_info
			    );

			    $this->db->insert('tbl_complain', $data);
			    $lastID = $this->db->insert_id();
			    return $lastID;
			}
		public function blog_post()
		{
			$sql="SELECT * FROM blog_post";
			$q=$this->db->query($sql);
			return $q;
		}
		public function blog_comment()
		{
			$sql="SELECT * FROM blog_comment";
			$q=$this->db->query($sql);
			return $q;
		}
		public function complain()
		{
			$sql="SELECT * FROM tbl_complain";
			$q=$this->db->query($sql);
			return $q;
		}
		// public function complainReg($cName,$vName,$Email,$Contact,$date,$Complain,$ip)
		// {
		// 	$data = array(
		// 		'cName' => $cName,
		// 		'vName' => $vName,
		// 		'Email' => $Email, 
		// 		'Contact' => $Contact,
		// 		'Date' => $date,
		// 		'Complain' => $Complain,
		// 		'ip' => $ip
		// 		);
		// 	$sql= $this->db->set($data)->get_compiled_insert('tbl_complain');
		// 	$q=$this->db->query($sql);
		// 	return $q;
		// }
		public function deleteData($id)
		{
			$sql="DELETE FROM tbl_user WHERE UserId='$id'";
			$q=$this->db->query($sql);
			return $q;
		}
		public function changePassword($id,$Password)
		{
			//escape used for security only filter the data ".$this->db->escape($Password)."
			$sql="UPDATE tbl_user set Password=".$this->db->escape($Password)." WHERE userID=".$this->db->escape($id)."";
			$q=$this->db->query($sql);
			return $q;
		}
		
		public function update($id,$fName,$lName,$username,$dob)
		{
			$sql="UPDATE tbl_user set fName='$fName',lName='$lName',username='$username',DOB='$dob' WHERE userID='$id'";
			$q=$this->db->query($sql);
			return $q;
		}
		public function checkDuplicateEmail($key)
		{
			$sql="SELECT * from tbl_user WHERE Email='$key'";
			$q=$this->db->query($sql);
			$num=$q->num_rows();
			return $num;
		}
		public function checkDuplicateUsername($key)
		{
			$sql="SELECT * from tbl_user WHERE Username='$key'";
			$q=$this->db->query($sql);
			$num=$q->num_rows();
			return $num;

			// $this->db->where('Email', $key)
			// $query = $this->db->get('tbl_user');
			// if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }
		}
		public function logIn($logInPass,$Email,$Uname)
		{
			$sql="SELECT * FROM `tbl_user` WHERE `Password`='$logInPass' AND (`Email`='$Email' OR `Username`='$Uname')";
			return $q=$this->db->query($sql);
			// $num=$q->num_rows();
			// return $num;
		}
		public function uploadImage($imagepath)
		{
			$id = $this->session->userdata('userID');
			//$this->db->where('userID',$id)
			//$this->db->update('mytable', $data, array('userID' => $id)); 
			// $this->db->set('image', $imagepath);
			// $this->db->where('userID', $id);
			// $sql=$this->db->update('user_info');
			$sql="UPDATE `user_info` SET image='$imagepath' WHERE userID='$id'";
			$q=$this->db->query($sql);
			return $q;
		}
	}
?>