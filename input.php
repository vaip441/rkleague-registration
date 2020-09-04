$host="192.168.1.202"; // Host name
$username="rkleague"; // Mysql username
$password="Rkleague1"; // Mysql password
$db_name="reg"; // Database name
// Connect to server and select databse.
$dbconn = mysqli_connect($host, $username, $password)or die("cannot connect");
mysqli_select_db($dbconn, $db_name)or die("cannot select DB");

<body>
$participant[name] = $_POST['participant[name]'];
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$discord = $_POST['discord'];
$email = $_POST['email'];

$query = "INSERT into `info`(`infoTeamName`, `infoName1`, `infoName2`,
`infoDiscord`, `infoEmail`) VALUES (  '$participant[name]', '$name1','$name2', '$discord', '$email' )";


mysqli_query($dbconn, $query);

<hr>

</body>
