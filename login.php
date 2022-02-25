<section class="signup-form">
      <form  method="post">
        <input type="text" name="username" placeholder="Enter name/email..." />
        <input type="password" name="password" placeholder="Enter password..." />
        <button type="submit" name="submit">Submit</button>
      </form>

<?php
  if (isset($_POST['submit'])){
    /**
     * Härifrån tar vi det vi får från formulär och kontrollerar nedan
     */
    $un=$_POST['username'];
    $pw=$_POST['password'];
    if ($un=='u' && $pw=='123') { //Här så skapar vi användarnamn och lösenord
      header('location:home.html'); 
      exit();
    }
    else
    echo "invalid Username/Password";
  }
  /**
   *   $username = 'bsmith';
  *    $password = 'mysecret';
   */
?>

