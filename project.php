<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: projectlogin.php");
}


?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="animate.css-main\source\animate.css">
    <link rel="stylesheet" type="text/css" href="projectstyle.css">
    <link rel="stylesheet" type="text/css" href="query-ani.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/b18ba080f0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
        rel="stylesheet">
    <title>Healthifyyoursnack</title>

<body>
    <header>
        <nav>
            <div class="row">
                <img src="images\logo.png" alt="Healthifyyoursnack logo" class="logo">
                <ul class="main-navi js--main-nav">
                    <li>
                        <a href="project.php">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a class="js--scroll-to-bonus" href="#">Bonus Recipe</a>
                    </li>
                    <li>
                        <a href="todolist.html">Make a List</a>
                    </li>
                    <li id="user">
                        <a href="#"><img src="https://img.icons8.com/ios-filled/50/26e07f/user.png"><?php echo "Welcome ". $_SESSION['username']?></a>
                    </li>
                </ul>
                <a class="mobile-nav-icon js--nav-icon"><i class="fas fa-bars"></i></a>
            </div>
        </nav>
        <div class="textbox">
            <h1> A guide to healthy snacks with easily available ingredients. </h1>
            <a class="btn btn-b" href="projectlogout.php">Logout</a>
        </div>
    </header>
    <section class="features js--section-features">
        <div class="row">
            <h2>Cook your own meals &mdash; Healthy and tasty! </h2>
            <p class="longtext">
                Hello, we are Healthifyyoursnack, your guide to the most healthiest snack options for people
                with very busy lifestyles who are not able keep a balance in their lives but still keep trying to
                have a healthy lifestyle.The dishes are easy to cook and are according to indian diet,if you follow the
                steps as is then it would
                give you great results.
            </p>
        </div>
        <br><br>
        <div class="row js--wp-1">
            <div class="col span-1-of-4">
                <i class="far fa-calendar-check icon"></i>
                CALORIES
                <br><br>
                You can keep a check on the calories you intake as each recipe would be provided with the no.of
                calories it contains.
            </div>
            <div class="col span-1-of-4">
                <i class="fas fa-carrot icon"></i> INGREDIENTS <br><br>
                List of Ingredients would help you in making the recipe and the shopping list.
            </div>
            <div class="col span-1-of-4">
                <i class="fas fa-utensils icon"></i> RECIPE <br><br>
                Detailed recipe would help you get the best output if you follow it sstep by step.
            </div>
            <div class="col span-1-of-4">
                <i class="fas fa-clock icon"></i> TOTAL TIME <br><br>
                It would hep you manage your time so that you can cook according to your work schedule.
            </div>

        </div>
    </section>

    <section class="meals">
        <div class="span-1-of-2 js--wp-2"><b>1.Peanut Butter Toast</b>
            <img src="images\peanutbutter.jpg" alt="Peanut Butter sandwich">
        </div>
        <div class="span-1-of-2">
            <i class="far fa-calendar-check icon"></i>Calories : 210 cal<br><br>
            <i class="fas fa-clock icon"></i> Total Time : 5 mins<br><br>
            <i class="fas fa-carrot icon"></i> Ingredients : Bread, Banana and Peanut Butter <br><br>
            <i class="fas fa-utensils icon"></i> Recipe :- <br>

            1. Spread 2 tablespoons peanut butter on 1 side of each toasted bread slice. <br>
            2. Top with desired toppings.

        </div>
        <div class="span-1-of-2 js--wp-3"><b>2. Vegetable Besan Chilla </b>
            <img src="images\besan.jpeg" alt="Besan Chilla">
        </div>
        <div class="span-1-of-2">
            <i class="far fa-calendar-check icon"></i>Calories : 132.5 cal(1 chilla)
            &nbsp &nbsp &nbsp &nbsp
            <i class="fas fa-clock icon"></i> Total Time : 25 mins<br><br>
            <i class="fas fa-carrot icon"></i> Ingredients : 1 Cup besan, 1 cup water, 2 tsp salt, 1 cup sliced veggies (onion,tomato,capsicum), 1 tsp chilli powder, 1 tsp ajwain, 1 Green chilli and 4 tsp oil.(3 servings) <br><br>
            <i class="fas fa-utensils icon"></i> Recipe :- <br>
            1.Mix all the ingredients, except oil, to a thick pouring consistency, adding the water a little at a time. Keeping the heat high pour some batter in the center of the pan, spreading it out a little.<br>
            2.Lower the heat and let cook till the edges brown a little and can be lifted easily.<br>
            3.Dribble a little oil around it, Flip it over to cook slightly on the other side and before serving it hot with a green chutney.

        </div>
        <div class="span-1-of-2 js--wp-4"><b>3. Sauteed Veggies</b>
            <img src="images\veggie.jpg" alt="Saute veggies">
        </div>
        <div class="span-1-of-2">
            <i class="far fa-calendar-check icon"></i>Calories : 270 cal<br><br>
            <i class="fas fa-clock icon"></i> Total Time : 10 mins<br><br>
            <i class="fas fa-carrot icon"></i> Ingredients : 1/4 tsp paprika
            1 tsp garlic, 1 tbsp soy sauce, 1 tbsp olive oil,1 cup chopped cabbage,1 cup chopped broccoli, 1 tsp ginger,
            1 cup pieces or slices mushrooms and1 cup chopped onion <br><br>
            <i class="fas fa-utensils icon"></i> Recipe :- <br>

            1.Heat up the oil, stir in the onions, garlic and ginger. <br>
            2.When the onions are glassy, add cabbage and the other ingredients. <br>
            3.Cook for a few minutes to desired vegetable crunchiness. <br>

        </div>
        <div class="span-1-of-2 js--wp-5"><b>4.Curd Sandwich</b>
            <img src="images\curd-sandwich.jpg" alt="curd-sandwich">
        </div>
        <div class="span-1-of-2">
            <i class="far fa-calendar-check icon"></i>Calories : 83 cal(1 piece)<br><br>
            <i class="fas fa-clock icon"></i> Total Time : 15 mins<br><br>
            <i class="fas fa-carrot icon"></i> Ingredients : ¾ cup thick curd, ½ tsp pepper powder,¾ cup veggies(finely
            chopped), salt to taste, ½ tsp ginger (finely chopped) and 6 slices brown bread
            <br><br>
            <i class="fas fa-utensils icon"></i> Recipe :- <br>

            1. In a large mixing bowl take thick curd and
            add powdered pepper and salt according to your spice level and give it a good mix.
            Now add few finely chopped vegetables like carrot, cabbage, capsicum and ginger if you like. Give it a good mix and keep aside. <br>
            2.Now spread sandwich spread generously over one side of bread slice.
            cover and press with other bread slice over it.
            Use a tawa or a sandwich maker to make your sandwich.
             <br>
        </div>
        <div class="span-1-of-2 js--wp-6"><b>5.Vermicelli upma</b>
        <img src="images\vermicelli2.jpeg" alt="Vermicelli Upma">
        </div>
        <div class="span-1-of-2">
            <i class="far fa-calendar-check icon"></i>Calories : 183 cal (1 Bowl)
            &nbsp &nbsp &nbsp &nbsp
            <i class="fas fa-clock icon"></i> Total Time : 25 mins<br><br>
            <i class="fas fa-carrot icon"></i> Ingredients : 2 Cups thin vermicelli,2 tbsp refined oil, 1 tsp mustard seeds, 1 tsp cumin seeds, 2 Green chillies, 9-10 Curry leaves,
               1 onion(sliced), 1/2 cup beans, chopped, 1/2 cup carrots, 1/2 tsp turmeric powder,salt, curry leaves and 2 tbsp peanuts(roasted). <br><br>
            <i class="fas fa-utensils icon"></i> Recipe :- <br>
            1.Heat ghee or oil to the pan. Then add the cumin and mustard seeds. <br>
            2.Add the curry leaves, green chillies and chopped onions, Saute the onions for a couple of minutes, then add other vegetables. You can also add lightly sauteed tofu or paneer to increase the protein in this recipe. <br>
            3.Then add the vermicelli, salt and water. Cook covered for about 10 minutes until all the water is absorbed, while stirring frequently.

        </div>
        
        <div class="span-1-of-2 js--wp-7"><b>6. Black Chana Chaat </b>
            <img src="images\chana.jpeg" alt="Black Chana Chaat">
        </div>
        <div class="span-1-of-2">
            <i class="far fa-calendar-check icon"></i>Calories : 147 cal(1 bowl)
            &nbsp &nbsp &nbsp &nbsp
            <i class="fas fa-clock icon"></i> Total Time : 7 mins<br><br>
            <i class="fas fa-carrot icon"></i> Ingredients : 0.5 cup boiled black chickpeas (kala chana) or 2.5 to 3 cups cooked black chickpeas, 0.5 cup onion and tomato(sliced) 1 green chilli, 0.5 teaspoon red chili powder, 0.5 teaspoon chaat masala, 0.5 teaspoon roasted cumin powder,1 to 1.5 teaspoons lemon juice and some chopped coriander leaves. <br><br>
            <i class="fas fa-utensils icon"></i> Recipe :- <br>
            1.In a large bowl, add all the ingredients including the black chickpeas. <br>
            2.Mix well.


        </div>
        <div class="span-1-of-2 js--wp-8"><b>7. Mexican Tacos </b>
            <img src="images\taco.jpg" alt="Mexican Tacos">
        </div>
        <div class="span-1-of-2">
            <i class="far fa-calendar-check icon"></i>Calories : 280 cal(2 taco) <br> <br>
            <i class="fas fa-clock icon"></i> Total Time : 20 mins<br><br>
            <i class="fas fa-carrot icon"></i> Ingredients : 1 cup boiled corns, ½ cup cooked black beans, 2 tsp olive oil, 1 tsp cumin, 1 tsp chili powder, ½ tsp coriander,¼ tsp salt, ¼ tsp black pepper, 4 wholewheat tortillas/ small chapatis, ½ sliced tomato, ½ sliced onion, 1 lemon and Chopped coriander <br><br>
            <i class="fas fa-utensils icon"></i> Recipe :- <br>
            1.Combine corns, beans, oil, cumin, chili powder, coriander, salt and pepper in a saucepan. Cover and cook over medium-low heat until heated through, 6 to 8 minutes. <br>
            2.Divide the mixture among the tortillas. Top with lemon juice and fresh coriander.


        </div>
        <div class="span-1-of-2 js--wp-9"><b>8. Paneer Sandwich </b>
            <img src="images\paneer.jpg" alt="Paneer Sandwich">
        </div>
        <div class="span-1-of-2">
            <i class="far fa-calendar-check icon"></i>Calories : 160 cal(1 bowl) <br> <br>
            <i class="fas fa-clock icon"></i> Total Time : 15 mins<br><br>
            <i class="fas fa-carrot icon"></i> Ingredients : 1 slice paneer, 2 slices of brown bread ,1 small green chilli, chopped coriander, ½ tsp black pepper and ½ tsp pink salt.<br><br>
            <i class="fas fa-utensils icon"></i> Recipe :- <br>
            1.Now put the slice of paneer over one side of bread slice and add chopped green chilli, coriander, pink salt and black pepper. <br>
            2.cover and press with other bread slice over it and use a tawa or a sandwich maker to make your sandwich.
        </div>
        <div class="span-1-of-2 js--wp-10"><b>9. Banana Smoothie </b>
            <img src="images\banana.jpg" alt="banana smoothie">
        </div>
        <div class="span-1-of-2">
            <i class="far fa-calendar-check icon"></i>Calories : 220 cal(1 cup) <br> <br>
            <i class="fas fa-clock icon"></i> Total Time : 7 mins<br><br>
            <i class="fas fa-carrot icon"></i> Ingredients : 2 frozen bananas(broken into chunks), few soaked chia seeds, 2 cups milk, 1 tsp cinnamon powder,, 1 tbsp peanut butter, few almonds and walnuts<br><br>
            <i class="fas fa-utensils icon"></i> Recipe :- <br>
            1.Place bananas, milk, peanut butter, cinnamon powder, few almonds and walnuts in a blender; blend until smooth, for about 30 seconds. <br>
            2. Top it with soaked chia seeds and it is ready.
        </div>
        <div class="span-1-of-2 js--wp-11"><b>10. Rava Upma </b>
            <img src="images\upma.jpg" alt="Upma">
        </div>
        <div class="span-1-of-2">
            <i class="far fa-calendar-check icon"></i>Calories : 245 cal(1 bowl)  &nbsp &nbsp &nbsp &nbsp
            <i class="fas fa-clock icon"></i> Total Time : 25 mins<br><br>
            <i class="fas fa-carrot icon"></i> Ingredients : 0.25 cup Semolina(rava /sooji), 0.5 tbsp Ghee or Oil, 0.25 tsp Mustard Seeds, 0.25 tsp Chana Dal, 0.25 tsp Urad Dal , some Curry Leaves, 1 Green Chili, Salt To Taste, 1 bowl of chopped veggies-Green Peas, onion, Carrot,0.75 cups Water, Ginger (grated) and Lemon Juice as needed and Coriander Leaves.<br><br>
            <i class="fas fa-utensils icon"></i> Recipe :- <br>
            In a kadhai or pan, heat ½ tbsp oil.
Add 1 cup of semolina or rava and roast it for 2-3 minutes on medium flame taking care that it doesnt burn.
Once roasted well, transfer it on a plate and set aside.
In a same kadhai or pan, heat remaining oil. Add mustard seeds,chana dal and urad dal and let it to crackle.
fry for 30 seconds until just golden.
Add curry leaves and green chilies, fry for another 30 seconds.
Then, add onions, grated ginger, salt and mix. Fry until soft and pink.
Add peas and carrot and fry on high for a minute.
Add 3 cups of water and mix. Bring to a boil, add salt, lemon juice and mix.
Carefully and gradually add roasted rava stirring continuously to avoid any lumps. Mix well.
Let it to cook for a minute such that rava absorbs all the water.
Cover the pan and cook for 2-3 minutes on low heat. This helps to steam the upma well. 
Add coriander leaves and mix. Dish out and serve hot with coconut chutney.
        </div>

        <br><br><br>
        <div class="row">
        <h2 class="js--section-bonus">Bonus Recipe </h2>
        </div>
        <div id="bg">
        <div class="span-1-of-2 js--wp-12"><b>11.Healthy Jaggery Cake</b>
        <img src="images\cake.jpeg" alt="cake">
        </div>
        
        <div class="span-1-of-2">
            <i class="fas fa-clock icon"></i> Total Time : 50 mins<br><br>
            <i class="fas fa-carrot icon"></i> Ingredients : 1 cup jaggery/gud (grated), ¾ cup olive oil, ½ cup curd, 2 cup wheat flour / atta, ¼ tsp baking soda, 1 tsp baking powder, ¼ tsp cinnamon powder, pinch salt, ½ cup water,2 tbsp almonds, few chocalate chips, 2 tbsp raisins, 5 cashew, 5 walnuts and 6 dates  <br><br>
            <i class="fas fa-utensils icon"></i> Recipe : Love cake but don't want the unnecessary calories that come with it? Here's a healthier version of your usual cake! 
           <br> <a target="_blank" href="https://www.instagram.com/p/COLJWXqJw5X/?utm_source=ig_web_copy_link"><img src="https://img.icons8.com/plasticine/100/000000/instagram-new--v2.png"/></a>Visit this instagram link to see the full recipe explained step by step.

        </div></div>
    </section>
    <section class="form">
        <div class="row">
            <h2>We are happy to hear from you</h2>
        </div>
        <div class="row">
            <form action="contactform.php" method="post" class="contact form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name">Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="email" id="email" placeholder="Your email id" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="find">How did you find us?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <select type="text" name="find" id="find" required>
                            <option value="friends">Friends</option>
                            <option value="search">search engine</option>
                            <option value="ad">Advertisement</option>
                            <option value="oth">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Did you try out any of these recipes?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="checkbox" name="try" id="try">Yes
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="recipe">Which recipe did you try?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="recipe" id="recipe" placeholder="Name the recipe" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Suggestions</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea type="text" name="suggestion" placeholder="Your message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="submit" value="send it!">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#">Copyrights</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                </ul>
            </div>
            <div class="col span-1-of-2">

            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="imakewebthings-waypoints-34d9f6d\lib\jquery.waypoints.min.js"></script>
    <script src="script.js"></script>
</body>
</head>

</html>