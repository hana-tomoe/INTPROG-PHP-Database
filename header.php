<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" href="Assets/logo.jpg" type="image/png">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
 <link rel="stylesheet" href="grp2.css">
 <title>Group 2</title>
 <script>
 function showAlert(event) {
  event.preventDefault();
  alert("Successfully sent");
  document.getElementById("contactFormElement").submit();

 }

 function confirmLogout(event) {
  event.preventDefault();
  const confirmation = confirm("Are you sure you want to log out?");
  if (confirmation) {
   window.location.href = 'logout.php';
  }
 }
 </script>
</head>

<body>
 <div class="logo-container">
  <img src="Assets/logo.jpg" alt="Group Logo" class="logo">
 </div>

 <div class="button-container">
  <button id="contactBtn" class="contactBtn">Contact Us</button>
  <a href="#" class="logoutBtn" onclick="confirmLogout(event)">Logout</a> <!-- Modified to use JavaScript -->
 </div>

 <div id="contactForm" class="contactForm hidden">
  <div class="form-content">
   <span class="close" id="closeBtn">&times;</span>
   <h2>Contact Us</h2>
   <form id="contactFormElement" action="submit.php" method="post" onsubmit="showAlert(event)">
    <label for="name">Name:</label>
    <input class="name" type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input class="email" type="email" id="email" name="email" required><br>

    <label for="message">Message:</label><br>
    <textarea class="message" id="message" name="message" rows="5" required></textarea><br>

    <button type="submit">Send</button>
   </form>
  </div>
 </div>
</body>

</html>