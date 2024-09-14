                   						UNIVERSITY RANKING PREDICTOR
		   					=========================


INTRODUCTION :
~~~~~~~~~~~~~

    Everyone of us come across a phase in life where we have to choose right thing among many options available.
    when it comes to education its even more crucial to choose the right careerpath and excel in it.
    Students who just got passout from their college would be in a dilemma to choose which university 
    is good  for them.So here we come up with a solution to choose the univeristy for them based on
    their rankings mainly based on education.

INSTRUCTIONS :
~~~~~~~~~~~~

  1.First download the .zip file and extract it into htdocs folder and run the XAMPP server.
  2.Create a database with name 'login_db' in your phpmyadmin and deploy the database.
  3.Import the user.sql file which is present in the extracted folder
  4.Go to any browser and go to localhost/<roll no directory/Final Project>
  5.Click on Home.html where you can see sign up and login options as you were not registered in database first you you should sign and create your account and it will redirect directly to login page.
  6.You can check all the features of our website by logging.

FEATURES :
~~~~~~~~

  1.After running the localhost we will redirect to Home.html page where we can see two options, sign-in and login.In case the user is not registered,he/she should signup after which the webpage gets redirected to login.php.   
  2.In login.php,the user should enter the credentials if she/he enters the incorrect credentials,an alertbox gets displayed saying that you have entered wrong credentials. 
  3.After logging-in,the webpage gets redirected to "action_page.html" where the user gets to choose among two options displayed as "images".
  4.In the action_page.html page,if the user chooses streamlit icon,then the webpage will redirect to streamlit app.
  5.In streamlit app you can choose two options,first option provides the user to select an university and predict its rank and it will display 2 tabular columns.The first tabular column is about the "INFORMATION REGARDING THE UNIVERSITY BASED ON THE USER SEARCH" and the second tabular column will display "INFORMATION REGARDING ALL THE UNIVERSITIES LISTED IN THE SEARCH BAR". 
  6.Second option provides the user to select the criterion based on which he/she could choose the university based on rank indicators such as research,teaching,male-female ratio etc.
  7.In the action_page.html page,if the user clicks on "Rankings graph" icon,then the webpage will redirect to Book4.htm .If the user clicks on "Streamlit icon",it will redirect to the "Rank predictor"
  8.In Book4.htm page the user can see Rankings for the past 5 years of all the universities.
  9.After redirecting to the "Rank predictor" webpage,the user can choose "The Name of University" .Now the data related to that particular university is displayed.
 10.If a user wants data related only to a specific citerion,he can choose the the "criterion" from the "SELECT THE CRITERION" select box.When the user chooses a criterion,analysis is provided in both graphical and tablular format.


AUTHORS :
~~~~~~~~
 
This website is designed by students of undergradute from IITDH,

   GROUP MEMBERS :
    *SAHITYA CHINTA
    *REVANTH PALAPARTHI
    *PUSHPA PARVATHI BATTINA
    *HAMSINI PILLI
    *SAKEENA SADHIKA DODDA



