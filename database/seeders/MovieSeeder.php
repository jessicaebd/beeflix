<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Drama
        Movie::create([
            'genre_id' => 1,
            'title' => 'Start-Up',
            'photo' => 'start-up.jpg',
            'description' => 'Needing to make $90k to open her own business, Seo Dal Mi drops out of a university and takes up part-time work. She dreams of becoming someone like Steve Jobs. Nam Do San is the founder of Samsan Tech. He is excellent with mathematics. He started Samsan Tech two years ago, but the company is not doing well. Somehow, Nam Do San becomes Seo Dal Mi’s first love. They cheer each others start and growth.',
            'rating' => 5,
        ]);

        Movie::create([
            'genre_id' => 1,
            'title' => 'Do Do Sol Sol La La Sol',
            'photo' => 'do-do-sol-sol-la-la-sol.jpg',
            'description' => 'A riches-to-rags pianist who loses everything but her smile is guided by twinkling little stars to a small town where she finds hope, home and love.',
            'rating' => 5,
        ]);

        Movie::create([
            'genre_id' => 1,
            'title' => 'Our Beloved Summer',
            'photo' => 'our-beloved-summer.jpeg',
            'description' => 'Years after filming a viral documentary in high school, two bickering ex-lovers get pulled back in front of the camera — and into each other\'s lives.',
            'rating' => 4,
        ]);

        Movie::create([
            'genre_id' => 1,
            'title' => 'Hi Bye, Mama!',
            'photo' => 'hi-bye-mama.jpg',
            'description' => 'When the ghost of a woman gains a second chance at life for 49 days, she reappears in front of her remarried husband and young daughter.',
            'rating' => 4,
        ]);

        Movie::create([
            'genre_id' => 1,
            'title' => 'Nevertheless',
            'photo' => 'nevertheless.jpg',
            'description' => 'The intoxicating charm of a flirtatious art school classmate pulls a reluctant love cynic into a friends-with-benefits relationship.',
            'rating' => 4,
        ]);


        // Kids
        Movie::create([
            'genre_id' => 2,
            'title' => 'Luca',
            'photo' => 'luca.jpg',
            'description' => 'Set in a beautiful seaside town on the Italian Riviera, Disney and Pixar\'s original feature film "Luca" is a coming-of-age story about one young boy experiencing an unforgettable summer filled with gelato, pasta and endless scooter rides. Luca (voice of Jacob Tremblay) shares these adventures with his newfound best friend, Alberto (voice of Jack Dylan Grazer), but all the fun is threatened by a deeply-held secret: they are sea monsters from another world just below the water\'s surface.',
            'rating' => 5,
        ]);

        Movie::create([
            'genre_id' => 2,
            'title' => 'Coco',
            'photo' => 'coco.jpg',
            'description' => 'Despite his family\'s generations-old ban on music, young Miguel dreams of becoming an accomplished musician like his idol Ernesto de la Cruz. Desperate to prove his talent, Miguel finds himself in the stunning and colorful Land of the Dead. After meeting a charming trickster named Héctor, the two new friends embark on an extraordinary journey to unlock the real story behind Miguel\'s family history.',
            'rating' => 4,
        ]);

        Movie::create([
            'genre_id' => 2,
            'title' => 'Moana',
            'photo' => 'moana.jpg',
            'description' => 'An adventurous teenager sails out on a daring mission to save her people. During her journey, Moana meets the once-mighty demigod Maui, who guides her in her quest to become a master way-finder. Together they sail across the open ocean on an action-packed voyage, encountering enormous monsters and impossible odds. Along the way, Moana fulfills the ancient quest of her ancestors and discovers the one thing she always sought: her own identity.',
            'rating' => 5,
        ]);

        Movie::create([
            'genre_id' => 2,
            'title' => 'How to Train Your Dragon 2',
            'photo' => 'how-to-train-your-dragon-2.jpg',
            'description' => 'Five years have passed since Hiccup and Toothless united the dragons and Vikings of Berk. Now, they spend their time charting the island\'s unmapped territories. During one of their adventures, the pair discover a secret cave that houses hundreds of wild dragons -- and a mysterious dragon rider who turns out to be Hiccup\'s long-lost mother, Valka (Cate Blanchett). Hiccup and Toothless then find themselves at the center of a battle to protect Berk from a power-hungry warrior named Drago.',
            'rating' => 4,
        ]);

        Movie::create([
            'genre_id' => 2,
            'title' => 'Sing',
            'photo' => 'sing.jpg',
            'description' => 'Dapper Koala Buster Moon presides over a once-grand theater that has fallen on hard times. An eternal optimist, and a bit of a scoundrel, he loves his theater above all and will do anything to preserve it. Facing the crumbling of his life\'s ambition, he takes one final chance to restore his fading jewel to its former glory by producing the world\'s greatest singing competition. Five contestants emerge: a mouse, a timid elephant, a pig, a gorilla and a punk-rock porcupine.',
            'rating' => 5,
        ]);


        // TV Show
        Movie::create([
            'genre_id' => 3,
            'title' => 'Squid Game',
            'photo' => 'squid-game.jpeg',
            'description' => 'Hundreds of cash-strapped players accept a strange invitation to compete in children\'s games. Inside, a tempting prize awaits — with deadly high stakes.',
            'rating' => 5,
        ]);

        Movie::create([
            'genre_id' => 3,
            'title' => 'Loki',
            'photo' => 'loki.jpg',
            'description' => 'Loki, the God of Mischief, steps out of his brother\'s shadow to embark on an adventure that takes place after the events of "Avengers: Endgame."',
            'rating' => 5,
        ]);

        Movie::create([
            'genre_id' => 3,
            'title' => 'Hawkeye',
            'photo' => 'hawkeye.jpg',
            'description' => 'Former Avenger Clint Barton aka Hawkeye reluctantly teams up with Kate Bishop, a skilled archer and his biggest fan, to unravel a criminal conspiracy.',
            'rating' => 4,
        ]);

        Movie::create([
            'genre_id' => 3,
            'title' => 'Moon Knight',
            'photo' => 'moon-knight.jpg',
            'description' => 'Mild-mannered Steven Grant has dissociative identity disorder and shares a body with a mercenary.',
            'rating' => 4,
        ]);

        Movie::create([
            'genre_id' => 3,
            'title' => 'WandaVision',
            'photo' => 'wanda-vision.jpg',
            'description' => 'Blends the style of classic sitcoms with the MCU, in which Wanda Maximoff and Vision - two super-powered beings living their ideal suburban lives - begin to suspect that everything is not as it seems.',
            'rating' => 5,
        ]);
    }
}
