<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('configs')->insert([
            'nav_items' => '[{"name":"Home","path":"/home","icon":"home","ariaLabel":"Home"},{"name":"Billing","path":"/billing","icon":"monetization_on","ariaLabel":"Billing icon"},{"name":"Statistics","path":"/statistics","icon":"insights","ariaLabel":"Statistics icon"},{"name":"Posts","path":"/posts","icon":"menu_book","ariaLabel":"Posts icon"},{"name":"Users","path":"/users","icon":"people","ariaLabel":"Users icon"},{"name":"Todos","path":"/todos","icon":"checklist","ariaLabel":"Todos icon"},{"name":"Tasks","path":"/tasks","icon":"format_list_numbered","ariaLabel":"Tasks icon"},{"name":"Drag&drop","path":"/dragdrop","icon":"open_with","ariaLabel":"Drag&drop icon"},{"name":"Coffee","path":"/coffees","icon":"coffee","ariaLabel":"Coffee icon"},{"name":"Authentication","path":"/auth","icon":"no_encryption","ariaLabel":"Auth icon"},{"name":"Recipes","path":"/recipes","icon":"book","ariaLabel":"Recipes icon"},{"name":"Coffee Machine","path":"/coffeeMachine","icon":"miscellaneous_services","ariaLabel":"Machine icon"},{"name":"Movies","path":"/movies","icon":"local_movies","ariaLabel":"Film icon"}]',
            'user_id' => 7,
            'invoices_limit' => 10,
            'dummy_url' => "https://dummyjson.com",
            'dummy_pdf_url' => "https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf",
            'base_url' => 'https://jsonplaceholder.typicode.com',
            'voluntaries' => '[{ "title": "0/month", "subtitle": "no data", "description": "it\'s a free option", "id": 1 },{ "title": "500/month", "subtitle": "base data", "description": "it\'s a middle option", "id": 2 },{ "title": "1200/month", "subtitle": "all data", "description": "it\'s a premium option", "id": 3 }]',
            'movies' => '[{"id": 1,"title": "Titanic", "description": "A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.", "year": 1997, "long": 194, "director": "James Cameron", "genres": ["Drama", "Romance"], "photos": ["https://m.media-amazon.com/images/M/MV5BYzYyN2FiZmUtYWYzMy00MzViLWJkZTMtOGY1ZjgzNWMwN2YxXkEyXkFqcGc@._V1_.jpg","https://www.usmagazine.com/wp-content/uploads/2022/08/Titanic-Cast-Where-Are-They-Now-Feature.jpg?w=1000&quality=70&strip=all"], "rating": 7.9, "stars": ["Kate Winslet", "Leonardo DiCaprio", "Billy Zane"], "writers": ["James Cameron"] },{ "id": 2,"title": "Harry Potter and the Sorcerer\'s Stone", "description": "An orphaned boy enrolls in a school of wizardry, where he learns the truth about himself, his family and the terrible evil that haunts the magical world.", "year": 2001, "long": 152, "director": "Chris Columbus", "genres": ["Adventure", "Fantasy"], "photos": ["https://www.proprofs.com/quiz-school/topic_images/p1bhr84ns65u8lebg01fis9lk3.jpg"], "rating": 7.7, "stars": ["Daniel Radcliffe", "Rupert Grint", "Emma Watson"], "writers": ["J.K. Rowling"] },{ "id": 3,"title": "The Dark Knight", "description": "When a menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman, James Gordon and Harvey Dent must work together to put an end to the madness.", "year": 2008, "long": 152, "director": "Christopher Nolan", "genres": ["Action", "Crime", "Drama", "Thriller"], "photos": ["https://res.cloudinary.com/jerrick/image/upload/d_642250b563292b35f27461a7.png,f_jpg,fl_progressive,q_auto,w_1024/642a837281640a001d74206f.jpg"], "rating": 9.0, "stars": ["Christian Bale", "Heath Ledger", "Aaron Eckhart"], "writers": ["Jonathan Nolan", "Christopher Nolan", "David S. Goyer"] },{"id": 4,"title": "Kingsman: The Secret Service", "description": "A spy organisation recruits a promising street kid into the agency training program, while a global threat emerges from a twisted tech genius.", "year": 2014, "long": 129, "director": "Matthew Vaughn", "genres": ["Action", "Adventure", "Comedy"], "photos": ["https://i.ebayimg.com/00/s/MTYwMFgxMDY2/z/T3IAAOSwqudkZ0QV/$_57.JPG?set_id=8800005007","https://www.usatoday.com/gcdn/-mm-/7c403137ff4035e7da70585e79a544a0ac13309f/c=935-30-2125-1620/local/-/media/USATODAY/USATODAY/2014/07/27/1406507485000-kingsman-the-secret-service-KSS-JB-D25-02636-rgb.jpg"], "rating": 7.7, "stars": ["Colin Firth", "Taron Egerton", "Samuel L. Jackson"], "writers": ["Matthew Vaughn","Mark Millar","Jane Goldman"] },{ "id": 5,"title": "The Rock", "description": "A mild-mannered chemist and an ex-con must lead the counterstrike when a rogue group of military men, led by a renegade general, threaten a nerve gas attack from Alcatraz against San Francisco.", "year": 1996, "long": 136, "director": "Michael Bay", "genres": ["Action", "Adventure", "Comedy"], "photos": ["https://upload.wikimedia.org/wikipedia/en/8/82/The_Rock_%28movie%29.jpg","https://www.tallengestore.com/cdn/shop/products/TheRock-SeanConnery-HollywoodActionMoviePoster3_c4e5f9c3-902e-4397-86a8-2e5dd1f08656.jpg?v=1604314653"], "rating": 7.4, "stars": ["Sean Connery","Nicolas Cage","Ed Harris"], "writers": ["David Weisberg","Douglas Cook","Mark Rosnel"] }]',
            'subscriptions' => '[{ "title": "free package", "subtitle": "", "description": "it\'s a free option", "id": 1 },{ "title": "medium package", "subtitle": "you have a medium package", "description": "it\'s a medium option", "id": 2 },{ "title": "premium package", "subtitle": "you have a premium package", "description": "it\'s a premium option", "id": 3 }]',
            'dummy_zip_url'=>'https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-zip-file.zip',
            'created_at' => null,
            'updated_at' => null,
        ]);
    }
}
