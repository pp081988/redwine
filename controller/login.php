<?php
require(APP_PATH."/controller/verify.php");
require(APP_PATH."/model/user.php");

class login extends spController{

	function __construct(){
		parent::__construct();
	}

	public function loginIndex()
	{
		$this -> display("login.html");
	}

	public function login()
	{
		$dirtyUsername = $_POST['username'];
		$dirtyPassword = $_POST['password'];
		$filter = spClass("filter");
		$username = $filter->filter($dirtyUsername);
		$password = $filter->filter($dirtyPassword);
		$gb = spClass("user");
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


		$gb = spClass("user");
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
			$username = $args->get()['username'];
			$usernameRegular = "/^[a-z\d]*$/i";
			if(strlen($username) < 6 || strlen($username) >16){echo "e11";exit;}
			if(!preg_match($usernameRegular,$username)){echo "e111";exit;}
			//$_SESSION['username'] = $username;
			/******验证用户名合法性******/
			
			/**验证邮箱或电话号码合法性**/
			$email = $args->get()['email'];
			$phone = $args->get()['phone'];
			if($email!=""){
				$emailRegular = "/\w+[@]{1}\w+[.]\w+/";
				if(!preg_match($emailRegular,$email)){echo "e12";exit;}
				$_SESSION['contact']=$email;
			}
			if($phone!=""){
				$phoneRegular = "/^\d{8}$/";
				if(!preg_match($phoneRegular,$phone)){echo "e13";exit;}
				$_SESSION['contact']=$phone;
			}
			/**验证邮箱或电话号码合法性**/

			/*****检查邮箱或电话存在*****/
			if($this->existsCheck("emailOrPhone",$_SESSION['contact']) == "exists"){
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
			$gb = spClass("user");
			unset($_SESSION['verify_code']);
			if(!$gb->create($condition)){
				echo "e1";
				echo mysql_error();
				exit;
			}
			$_SESSION['username'] = $username;
		}else{
			echo "e2";
			exit;
		}
	}

	public function resultIndex(){
		$this->username = $_SESSION['username'];
		$this->contact = $_SESSION['contact'];
		$this->display("result.html");
	}

	private function send($email, $uid)
    {
    	//date_default_timezone_set('Etc/UTC');

		require APP_PATH . '/master/PHPMailerAutoload.php';
		$body = "{$email} 您好, 以下是您的會員帳戶啟動資料註冊日期: 2017-5-27 ID: {$email} 請點擊下方啟動網址 或 將連結網址剪貼至瀏覽器的網址，以啟動帳戶。".SERVER . spUrl('login', 'check', array('md5_email' => md5($email), 'uid' => $uid))."   當您啟動帳戶完成後，日後登入時，用回您申請時所填的 ID 和 PW 即可。如有任何問題，歡迎電郵給我們查詢 webmaster@websitename.com謝謝您的支持!";
		// echo $body;exit;
		//Create a new PHPMailer instance
		$mail = new PHPMailer;
		//Tell PHPMailer to use SMTP
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 2;
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = '';
		//Set the hostname of the mail server
		$mail->Host = "smtp.qq.com";
		//Set the SMTP port number - likely to be 25, 465 or 587
		$mail->Port = 25;
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication
		$mail->Username = "215745767@qq.com";
		//Password to use for SMTP authentication
		$mail->Password = "tghfbgjxtqoubhdj";
		//Set who the message is to be sent from
		$mail->setFrom('215745767@qq.com', 'First Last');
		//Set an alternative reply-to address
		$mail->addReplyTo('215745767@qq.com', 'First Last');
		//Set who the message is to be sent to
		$mail->addAddress($email, 'John Doe');
		//Set the subject line
		$mail->Subject = '欢迎注册';
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML($body, dirname(__FILE__));
		//Replace the plain text body with one created manually
		$mail->AltBody = $body;
		//Attach an image file
		//$mail->addAttachment('images/phpmailer_mini.png');
		$mail->send();
		// exit;
		ob_clean();
		// exit;
    }

    public function logout()
    {
    	unset($_SESSION['username']);
    	unset($_SESSION['contact']);
    	$this->display("index.html");
    }
}