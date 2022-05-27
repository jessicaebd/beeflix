<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drama_1 = ['Start-Up', 'Family, Friends, Fools', 'Angel', 'Sandbox', 'Hackathon', 'Key Man', 'Burn Rate', 'Backup', 'Risk', 'Demo Day', 'Exit', 'Acqhire', 'Comfort Zone', 'Elevator Speech', 'MVP (Minimum Viable Product)', 'Scale Up'];
        $drama_2 = ['Do Do Sol Sol La La Sol', 'Pianist Patient', 'Da Capo', 'Lala Piano Land', 'Night and Dreams', 'Secrets and Lies', 'You are so special', 'Pleasure of Love', 'The Night of Thunder', 'Who Are You?', 'Reunion', 'Wedding March', 'Romance Without Words', 'A Furtive Tear', 'Farewell', 'Do Do Sol Sol La La Sol'];
        $drama_3 = ['I Know What You Did Last Summer', '1792 Days of Summer', '10 Things I Hate About You', 'The Boy, or the Girl, We Liked Then', 'A Secret That Can\'t Be Told', 'Pride and Prejudice', 'Catch Me If You Can', 'Before Sunset', 'Just Friends', 'Hello, My Soul Mate', 'Our Nights Are More Beautiful Than Your Days', 'Begin Again', 'Love Actually', 'Life Is Beautiful', 'Three Idiots', 'Our Beloved Summer'];
        $drama_4 = ['Life is Full of Unpredictable Surprises', 'Forgotten Season', 'Realizing the Beauty of Life is Only Possible After Death', 'There is Nothing that Won\'t Happen to Me', 'Every Moment When Chance Turns into Fate', 'Even in the Face of Death, Family is Still My Number One', 'Where Flowers Bloom and Fall', 'People Who Can\'t Say Goodbye', 'Goodbye and Hello To Your Light', 'Your Place Where I Cannot Reach', 'The Share Of Life Given To Me', 'The Days I Was Forgotten', 'A Story I Could Not See', 'It\'s Not Your Fault', 'My Life\'s Tomorrow', 'Petals Fall, But the Flower Endures'];
        $drama_5 = ['There’s No Such Thing as Fate. Nevertheless,', 'It’s Not Only Me. Nevertheless,', 'It Has Already Begun. Nevertheless,', 'I Know It Isn’t Love. Nevertheless,', 'I Know Nothing Will Change. Nevertheless,', 'There’s No Such Thing as Love. Nevertheless,', 'I Know There\'s No Turning Back. Nevertheless,', 'I Know It\'s a Lie. Nevertheless,', 'I Know It\'s Over. Nevertheless,', 'Nevertheless, I Still…'];
        $tvshow_1 = ['Red Light, Green Light', 'Hell', 'The Man with the Umbrella', 'Stick to the Team', 'A Fair World', 'Gganbu', 'VIPS', 'Front Man', 'One Lucky Day'];
        $tvshow_2 = ['Glorious Purpose', 'The Variant', 'Lamentis', 'The Nexus Event', 'Journey Into Mystery', 'For All Time. Always.'];
        $tvshow_3 = ['Never Meet Your Heroes', 'Hide and Seek', 'Echoes', 'Partners, Am I Right?', 'Ronin', 'So This Is Christmas?'];
        $tvshow_4 = ['The Goldfish Problem', 'Summon the Suit', 'The Friendly Type', 'The Tomb', 'Asylum', 'Gods and Monsters'];
        $tvshow_5 = ['Filmed Before a Live Studio Audience', 'Don\'t Touch That Dial', 'Now in Color', 'We Interrupt This Program', 'On a Very Special Episode...', 'All-New Halloween Spooktacular!', 'Breaking the Fourth Wall', 'Previously On', 'The Series Finale'];

        foreach ($drama_1 as $key => $value) {
            Episode::create([
                'movie_id' => 1,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        foreach ($drama_2 as $key => $value) {
            Episode::create([
                'movie_id' => 2,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        foreach ($drama_3 as $key => $value) {
            Episode::create([
                'movie_id' => 3,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        foreach ($drama_4 as $key => $value) {
            Episode::create([
                'movie_id' => 4,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        foreach ($drama_5 as $key => $value) {
            Episode::create([
                'movie_id' => 5,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        foreach ($tvshow_1 as $key => $value) {
            Episode::create([
                'movie_id' => 11,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        foreach ($tvshow_2 as $key => $value) {
            Episode::create([
                'movie_id' => 12,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        foreach ($tvshow_3 as $key => $value) {
            Episode::create([
                'movie_id' => 13,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        foreach ($tvshow_4 as $key => $value) {
            Episode::create([
                'movie_id' => 14,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        foreach ($tvshow_5 as $key => $value) {
            Episode::create([
                'movie_id' => 15,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }
    }
}
