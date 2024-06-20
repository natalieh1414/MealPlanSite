<?php 
    $title = "About";
    include "_header.php"; ?>

        <div class="container mt-4">
            <div class="row">
                <main class="container col-sm">
                    <section>
                        <h2>Welcome to Meal Planning 101</h2>
                        <p>Meal planning can save you time and money. Let us help you get started!</p>
                        <h3>Why Meal Planning?</h3>
                        <p>Meal planning helps you stay organized, eat healthier, and reduce food waste.</p>
                    </section>
                    <section>
                        <h2>Popular Recipes</h2>
                        <ul>
                            <li>Spaghetti Bolognese</li>
                            <li>Grilled Chicken Salad</li>
                            <li>Vegetarian Tacos</li>
                        </ul>
                        <h3>Recipe Categories</h3>
                        <ol>
                            <li>Breakfast</li>
                            <li>Lunch</li>
                            <li>Dinner</li>
                            <li>Dessert</li>
                            <li>Snacks</li>
                        </ol>
                    </section>
                    <section>
                        <h2>Weekly Meal Plan</h2>
                        <table class="table table-striped table-responsive">
                            <thead class="table-dark">
                                <tr>
                                    <th>Day</th>
                                    <th>Breakfast</th>
                                    <th>Lunch</th>
                                    <th>Dinner</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Monday</td>
                                    <td>Fruit Oatmeal</td>
                                    <td>Chicken Salad</td>
                                    <td>Spaghetti</td>
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>Pancakes</td>
                                    <td>Turkey Sandwich</td>
                                    <td>Grilled Fish</td>
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td>Smoothie</td>
                                    <td>Lentil Soup</td>
                                    <td>Stir Fry</td>
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td>Fruit Oatmeal</td>
                                    <td>Turkey Sandwich</td>
                                    <td>Stir Fry</td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>Smoothie</td>
                                    <td>Lentil Soup</td>
                                    <td>Leftovers</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </main>
                <aside class="col-md-4">
                    <h2>Quick Tips</h2>
                    <p>1. Make a grocery list before shopping.</p>
                    <p>2. Cook in batches and freeze meals.</p>
                    <p>3. Start with your favorite meals.</p>
                    <img src="images/breakfast-meal-prep.jpg" class="img-fluid my-2" alt="Chia Seed Pudding with Fruits and Nuts">
                </aside>
            </div>
        </div>  
        <!-- end main -->
<?php include "_footer.php"; ?>