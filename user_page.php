
<style>
/* Your general styles go here */
body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  margin: 0;
  padding: 0;
}

/* Center the header content */
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #333;
  color: #fff;
  padding: 10px;
}

.heading {
  font-size: 32px;
  margin: 0;
}

.logout-btn form {
  display: inline;
}

.logout-btn input[type="submit"] {
  background-color: #337ab7;
  color: #fff;
  border: none;
  padding: 8px 16px;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
}

.logout-btn input[type="submit"]:hover {
  background-color: #23527c;
  
}
/* Add your custom CSS styles here */
body {
   font-family: Arial, sans-serif;
   line-height: 1.6;
   background-color: #f2f2f2;
   margin: 0;
   padding: 0;
}

.features-section {
   text-align: center;
   padding: 40px 0;
}

.features-section h2 {
   font-size: 32px;
   margin-bottom: 20px;
   color: #333;
}

.feature-box {
   display: inline-block; /* Use display: inline-block to align elements horizontally */
   margin: 0 10px; /* Add some horizontal spacing between the feature-boxes */
}

.course-card {
   border: 1px solid #ddd;
   border-radius: 8px;
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
   max-width: 320px;
   padding: 20px;
   background-color: #fff;
   transition: opacity 0.2s ease-in-out; /* Add the transition effect */
}

.course-card h3 {
   font-size: 24px;
   margin-bottom: 10px;
   color: #333;
}

.course-card p {
   font-size: 16px;
   color: #666;
   margin-bottom: 0;
}

.course-card a {
   text-decoration: none;
   color: #333;
}

.course-card a:hover {
   color: #007BFF;
}

.feature-box:hover .course-card {
   opacity: 0.8; /* Lower the opacity on hover for the fade-out effect */
}



/* Rest of your custom styles go here */

</style>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>USER ACCESS</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header>
<h1>LITSURE ACADEMY</h1>

    <div class="logout-btn">
      <form action="logout.php" method="post">
        <input type="submit" value="Logout">
      </form>
    </div>

  </header>
  <section class="features-section">
  <h2>Select Courses</h2>
  <div class="feature-box">
    <a href="https://youtu.be/Tn7DgCk1PwE">
      <div class="course-card">
        <h3>SET ENGLISH PAPER 2 COACHING PART-1</h3>
        <p>Join our coaching to excel in SET General Paper 2.</p>
      </div>
    </a>
  </div>

  <div class="feature-box">
    <a href="https://youtu.be/3l25RdqDzpE">
      <div class="course-card">
        <h3>SET GENERAL PAPER 2 COACHING PART-2</h3>
        <p>Join our coaching to excel in SET General Paper 2.</p>
      </div>
    </a>
  </div>
  
  
  <div class="feature-box">
    <a href="https://youtu.be/cjFn1U1O3CE">
      <div class="course-card">
        <h3>SET GENERAL PAPER 2 COACHING PART-3</h3>
        <p>Join our coaching to excel in SET General Paper 2.</p>
      </div>
    </a>
  </div>
  
  
  <div class="feature-box">
    <a href="https://youtu.be/HK5-ckNIt7c">
      <div class="course-card">
        <h3>SET GENERAL PAPER 2 COACHING PART-4</h3>
        <p>Join our coaching to excel in SET General Paper 2.</p>
      </div>
    </a>
  </div>
  

 <div class="feature-box">

    <a href="https://youtu.be/QTvMopWiO6Y">
      <div class="course-card">
        <h3>SET GENERAL PAPER 2 COACHING PART-5</h3>
        <p>Join our coaching to excel in SET General Paper 2.</p>
      </div>
    </a>
  </div>
</section>

</body>
</html>