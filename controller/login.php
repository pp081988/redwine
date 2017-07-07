<?php
require(APP_PATH."/controller/verify.php");
require(APP_PATH."/model/user.php");
require(APP_PATH."/model/email.php");

class login extends spController{

	function __construct(){
		parent::__construct();
	}

	public function loginIndex()
	{
		if(!$_SESSION['username']){
			$this -> display("login.html");
		}else{
			$this -> display("index.html");
		}
	}

	public function login()
	{
		$dirtyUsername = $_POST['username'];
		$dirtyPassword = $_POST['password'];
		$filter = spClass("filter");
		$username = $filter->filter($dirtyUsername);
		$password = $filter->filter($dirtyPassword);
		$gb = new user("site_users","create_time");
		$salt = $gb->find(Array('username'=>$username));
		$encryptPassword = md5($password.$salt['salt']);
		$conditions = [
		'username'=>$username,
		'password'=>$encryptPassword
		];
		if($gb->findAll($conditions)){
			echo "ok";
			$_SESSION['username'] = $username;
		}else{
			echo "deny";
		}
	}

	public function registerIndex()
	{
		$this -> display("register.html");
	}

	public function verifyImg(){
		$verify = spClass("Verify");
		$verify->verifyCode();
		$verifyImg = $_SESSION['verify_code'];
		$this -> display("verifyImg.html");
	}

	public function existsCheck($obj,$str){
		if(!$obj)$obj = $_POST['obj'];
		if(!$str)$str = $_POST['str'];
		
		$filter = spClass("filter");//过滤不合法关键字


		$gb = new user("site_users","create_time");
		$conditions = [$obj=>$str];
		if($obj == "emailOrPhone"){
			$conditions = "email = '".$str."' OR phone = '".$str."'";
		}
		if($gb->findAll($conditions)){
			echo "exists";
			return "exists";
		}
	}

	public function register()
	{
		$args = new spArgs();
		if(strtoupper($args->get()['verify']) == $_SESSION['verify_code']){
			if($_SESSION[$obj]){
				exit;
			}
			$filter = spClass("filter");
			$createTime = date("Y-m-d H:i:s");

			/******验证用户名合法性******/
			$username = strtolower($args->get()['username']);
			$usernameRegular = "/^[a-z\d]*$/i";
			if(strlen($username) < 6 || strlen($username) >16){echo "e11";exit;}
			if(!preg_match($usernameRegular,$username)){echo "e111";exit;}
			//$invalidName = Array("admin",);
			//$_SESSION['username'] = $username;
			/******验证用户名合法性******/
			
			/**验证邮箱或电话号码合法性**/
			$email = strtolower($args->get()['email']);
			$phone = $args->get()['phone'];
			if($email!=""){
				$emailRegular = "/\w+[@]{1}\w+[.]\w+/";
				if(!preg_match($emailRegular,$email)){echo "e12";exit;}
				$contact=$email;
			}
			if($phone!=""){
				$phoneRegular = "/^\d{8}$/";
				if(!preg_match($phoneRegular,$phone)){echo "e13";exit;}
				$contact=$phone;
			}
			/**验证邮箱或电话号码合法性**/

			/*****检查邮箱或电话存在*****/
			if($this->existsCheck("emailOrPhone",$contact) == "exists"){
				exit;
			}
			//echo $_SESSION['contact'];
			/*****检查邮箱或电话存在*****/

			/*******密码过滤后加密*******/
			$dirtyPassword = $args->get()['password'];
			$password = $filter->filter($dirtyPassword);
			//$password = $args->get()['password'];
			$salt = crypt($password);
			$md5Passwd = md5($password.$salt);
			/*******密码过滤后加密*******/

			/*******过滤性别字符串******/
			$dirtySex = $args->get()['sex'];
			$sex = $filter->filter($dirtySex);
			/*******过滤性别字符串******/

			/*****年龄段字符串重组******/
			$initialAge = $args->get()['age'];
			switch ($initialAge) {
				case '18-25':
					$age = 1;
					break;
				case '26-30':
					$age = 2;
					break;
				case '31-35':
					$age = 3;
					break;
				case '36-40':
					$age = 4;
					break;
				case '41-45':
					$age = 5;
					break;
				case '>46':
					$age = 6;
					break;
			}
			/*****年龄段字符串重组******/

			/*****酒龄段字符串重组******/
			$initialYearsOfDrinking = $args->get()['yearsOfDrinking'];
			switch ($initialYearsOfDrinking) {
				case '0-1':
					$yearsOfDrinking = 1;
					break;
				case '1-2':
					$yearsOfDrinking = 2;
					break;
				case '2-3':
					$yearsOfDrinking = 3;
					break;
				case '>3':
					$yearsOfDrinking = 4;
					break;
			}
			/*****年龄段字符串重组******/

			$condition = [
				'create_time'	=>	$createTime,
				'username'		=>	$username,
				'password'		=>	$md5Passwd,
				'salt'			=>	$salt,
				'email'			=>	$email,
				'phone'			=>	$phone,
				'sex'			=>	$sex,
				'age'			=>	$age,
				'years_of_drinking'	=> $yearsOfDrinking
			];

			//echo $username." ".$email." ".$phone." ".$md5Passwd." ".$sex." ".$age." ".$yearsOfDrinking;
			function write($condition){
				$gb = new user("site_users","create_time");
				unset($_SESSION['verify_code']);
				if(!$gb->create($condition)){
					echo "e1";
					exit;
				}
			}
			

	
			$activeTable = new user("site_activate","id");
			
			//new user("site_users","create_time");

			if($email != ""){
				write($condition);
				$activate_key = md5($md5Passwd);
				if(!$activeTable->create(Array('username'=>$username,"activate_key"=>$activate_key))){
				echo "e1";
				exit;
				}
				echo "ok";
				$activate_email = spClass("email");
				$title = "激活賬戶";
				$content = "<h1>你好,".$username."</h1><br><br>你於".date("Y-m-d H:i:s")."註冊Redwine會員賬戶，請打開以下地址或將地址複製到瀏覽器中打開，激活你的賬戶：<br>http://zxcv.gz01.bdysite.com/index.php?c=login&a=activate&id=$activate_key";
				$activate_email->send($email,$title,$content);
			}
			if($phone != ""){
				$random = new random();
				$activate_key = strtoupper($random->randStr());
				$_SESSION['activate_key'] = $activate_key;
				write($condition);
				//
				//SMS发送
				//
				$_SESSION['active_process'] = "processing";
				echo "verification";
			}
			
			$_SESSION['content'] = "歡迎，".$username."<br>激活賬戶驗證已傳送至電郵：".$contact;
		}else{
			echo "e2";
			exit;
		}
	}

	public function resultIndex(){
		// if($_GET['id']){
		// 	$this->content = "";
		// }else{
			$this->content = $_SESSION['content'];
		//}
		$this->display("result.html");
		unset($_SESSION['register']);
		unset($_SESSION['content']);
	}

	// private function send($email, $uid)
 //    {
 //    	//date_default_timezone_set('Etc/UTC');

	// 	require APP_PATH . '/master/PHPMailerAutoload.php';
	// 	$body = "{$email} 您好, 以下是您的會員帳戶啟動資料註冊日期: 2017-5-27 ID: {$email} 請點擊下方啟動網址 或 將連結網址剪貼至瀏覽器的網址，以啟動帳戶。".SERVER . spUrl('login', 'check', array('md5_email' => md5($email), 'uid' => $uid))."   當您啟動帳戶完成後，日後登入時，用回您申請時所填的 ID 和 PW 即可。如有任何問題，歡迎電郵給我們查詢 webmaster@websitename.com謝謝您的支持!";
	// 	// echo $body;exit;
	// 	//Create a new PHPMailer instance
	// 	$mail = new PHPMailer;
	// 	//Tell PHPMailer to use SMTP
	// 	$mail->isSMTP();
	// 	//Enable SMTP debugging
	// 	// 0 = off (for production use)
	// 	// 1 = client messages
	// 	// 2 = client and server messages
	// 	$mail->SMTPDebug = 2;
	// 	//Ask for HTML-friendly debug output
	// 	$mail->Debugoutput = '';
	// 	//Set the hostname of the mail server
	// 	$mail->Host = "smtp.qq.com";
	// 	//Set the SMTP port number - likely to be 25, 465 or 587
	// 	$mail->Port = 25;
	// 	//Whether to use SMTP authentication
	// 	$mail->SMTPAuth = true;
	// 	//Username to use for SMTP authentication
	// 	$mail->Username = "215745767@qq.com";
	// 	//Password to use for SMTP authentication
	// 	$mail->Password = "tghfbgjxtqoubhdj";
	// 	//Set who the message is to be sent from
	// 	$mail->setFrom('215745767@qq.com', 'First Last');
	// 	//Set an alternative reply-to address
	// 	$mail->addReplyTo('215745767@qq.com', 'First Last');
	// 	//Set who the message is to be sent to
	// 	$mail->addAddress($email, 'John Doe');
	// 	//Set the subject line
	// 	$mail->Subject = '欢迎注册';
	// 	//Read an HTML message body from an external file, convert referenced images to embedded,
	// 	//convert HTML into a basic plain-text alternative body
	// 	$mail->msgHTML($body, dirname(__FILE__));
	// 	//Replace the plain text body with one created manually
	// 	$mail->AltBody = $body;
	// 	//Attach an image file
	// 	//$mail->addAttachment('images/phpmailer_mini.png');
	// 	$mail->send();
	// 	// exit;
	// 	ob_clean();
	// 	// exit;
 //    }

	public function cpIndex()
	{
		if(!$_SESSION['username']){
			$this->title = "請輸入帳戶及註冊時的電郵或電話 : ";
			$this->account = '<li class="pdt0"><input name="" type="text" class="usertext username" placeholder="帳戶號"></li>';
		}else{
			$this->title = "請輸入註冊時的電郵或電話 : ";
		}
		$this->display("cp.html");
	}

	public function cp()
	{
		$verify = $_POST['verify'];
		if(strtoupper($verify) == $_SESSION['verify_code']){
			$dirtyEmail = $_POST['email'];
			$dirtyPhone = $_POST['phone'];
			$filter = spClass("filter");
			if(!$_SESSION['username']){
				$dirtyUsername = $_POST['username'];
				$username = $filter->filter($dirtyUsername);
				$_SESSION['tmpUsername'] = $username;
			}else{
				$username = $_SESSION['username'];
			}
			$dirtyContact = $dirtyEmail != "" ? $dirtyEmail : $dirtyPhone;
			$contact = $filter->filter($dirtyContact);
			$gb = new user("site_users","create_time");
			$result = $gb->find("username = '".$username."' AND (email = '".$contact."' OR phone = '".$contact."')");
			
			$activeTable = new user("site_forgot","id");
			if($result){
				$random = new random();
				$cp_key = strtoupper($random->randStr());
				$_SESSION['cp_key'] = $cp_key;
				if($result['email'] != ""){
					//$cp_key = md5($result['password']);
					// if(!$activeTable->create(Array('username'=>$username,"cp_key"=>$cp_key,"create_time"=>date("Y-m-d H:i:s")))){
					// 	echo "e1";
					// 	exit;
					// }
					$email = spClass("email");
					$title = "找回密碼";
					$content = "<h1>你好,".$result['username']."</h1><br><br>你的".date("Y-m-d H:i:s")."	驗證碼是<h2>".$cp_key."</h2>，請返回申請頁面輸入驗證碼進行下一步。";
					$email->send($result['email'],$title,$content);

				}
				if($result['phone'] != ""){
					
					//
					//SMS发送
					//
					
				}

				echo "verification";

				//$_SESSION['content'] = "重置密碼驗證已傳送至你的聯繫方式，請查看。";
				
			}else{
				echo "error";
			}
		}else{
			echo "e1";
			exit;
		}
	}

	public function pageNotFound(){
		$this->display("404.html");
	}

	public function activate()
	{
		$dirty_activate_key = $_GET['id'];
		if(strlen($dirty_activate_key) != 32){
			exit;
		}
		$filter = spClass("filter");
		$activate_key = $filter->filter($dirty_activate_key);
		$gb = new user("site_activate","id");
		$result = $gb->find(Array("activate_key"=>$activate_key,"is_vaild"=>0));
		if($result){
			$update = $gb->update(Array("username"=>$result['username']),Array("is_vaild"=>1));
			if($update){
				$_SESSION['content'] = "賬戶已激活。";
				$this->resultIndex();
			}
		}else{
			$this->pageNotFound();
		}
	}

	public function verificationIndex()
	{
		if($_SESSION['cp_process'] == "processing" || $_SESSION['active_process'] == "processing"){
			$this->display("verification.html");
		}
	}

	public function verification()
	{
		if($_POST['verification_key']){
			$dirtyVerification_key = $_POST['verification_key'];
			$filter = spClass("filter");
			$verification_key = $filter->filter($dirtyVerification_key);
			if($verification_key == $_SESSION['cp_key']){
				$_SESSION['cp_process'] = "processing";
				echo "ok";
			}else{
				echo "error";
			}
			if($verification_key == $_SESSION['activate_key']){
				$gb = spClass("user");
				
			}
		}
	}

	public function changePasswordIndex()
	{
		if($_SESSION['cp_process']){
			$this->display("changepassword.html");
		}
	}

	public function changePassword()
	{
		$verify = $_POST['verify'];
		if($_SESSION['cp_process'] == "processing"){
			unset($_SESSION['verify_code']);
			if(!$_SESSION['username']){
				$username = $_SESSION['tmpUsername'];
			}else{
				$username = $_SESSION['username'];
			}
			$filter = spClass("filter");
			//$dirtyOldPw = $_POST['oldPw'];
			$dirtyNewPw = $_POST['newPw'];
			//$oldPw = $filter->filter($dirtyOldPw);
			$newPw = $filter->filter($dirtyNewPw);
			if(strlen($newPw) < 8 || strlen($newPw) > 20){echo "pwerror";exit;}
			$gb = new user("site_users","create_time");
			$result = $gb->find(Array("username"=>$username));
			if(!$result){
				echo "notfound";
				exit;
			}
			// if($result['password'] != md5($oldPw.$result['salt'])){
			// 	echo "error";
			// 	exit;
			// }
			$conditions = Array("username"=>$username);
			$row = Array("password"=>md5($newPw.$result['salt']));
			$write = $gb->update($conditions,$row);
			if(!$write){
				echo "cannotup";
				exit;
			}
			$_SESSION['content'] = "修改完成";
			echo "ok";
			unset($_SESSION['cp_process']);
		}else{
			echo "e1";
			exit;
		}
		
	}

    public function logout()
    {
    	unset($_SESSION['username']);
    	unset($_SESSION['contact']);
    	//$this->display("index.html");
    	$this->jump(spUrl('main', 'index'));
    }
}