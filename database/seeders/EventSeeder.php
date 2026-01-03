<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'String',
                'slug' => 'string',
                'excerpt' => 'Our very first own program launched in 2024 with a total of 1 event held and many more planned and ready to be held.',
                'paragraph1' => 'String is an initiative designed to foster connectivity and collaboration among youth. This event serves as a platform for young individuals to share their ideas, learn from experienced professionals, and work together to enhance their communities.',
                'paragraph2' => 'Monthly events are hosted for 30+ participants aged 15-30, featuring a guest speaker aligned with the theme to provide insights and expertise. These events offer opportunities for interactive discussions, learning from professionals, and engaging in diverse outdoor activities, creating a dynamic and enriching experience for all attendees.',
                'coverPhoto' => 'images/events/placeholder.png',
                'Photo1' => 'images/events/placeholder.png',
                'Photo2' => 'images/events/placeholder.png',
            ],
            [
                'title' => 'Set Your Goal',
                'slug' => 'set-your-goal',
                'excerpt' => 'An event started by a collaboration between YOUN and Al-Hijrah held every year in Ramadan.',
                'paragraph1' => 'SET YOUR GOAL is a highly anticipated annual outdoor event that takes place during Ramadan, designed to foster learning, entertainment, and community connection. This welcoming gathering invites individuals and their loved ones to come together to grow, share, and celebrate the blessings of the holy month in a vibrant atmosphere.',
                'paragraph2' => 'Organized in collaboration with various NGOs, SYG offers a unique opportunity for attendees to deepen their understanding of Islamic teachings through engaging discussions with renowned scholars from the Maldives. In addition to enriching educational experiences, the event features a variety of fun activities for children, making it a delightful evening for families to enjoy outdoors.',
                'coverPhoto' => 'images/events/placeholder.png',
                'Photo1' => 'images/events/placeholder.png',
                'Photo2' => 'images/events/placeholder.png',
            ],
            [
                'title' => 'King Of The Ring',
                'slug' => 'king-of-the-ring',
                'excerpt' => 'The physical activity held monthly to promote a healthy lifestyle and bonding within our volunteer group.',
                'paragraph1' => 'YOUN King of the Ring is a dynamic weekly sports event that offers participants an engaging experience in crystal-clear water while promoting personal growth. Attendees will take part in challenging water-based activities that test their strength, endurance, and agility, all within a supportive environment.',
                'paragraph2' => 'Each event features a special guest—an expert or well-known figure—who shares motivational lessons and competes alongside participants. This unique format fosters camaraderie and emphasizes that success is rooted in teamwork, resilience, and a commitment to learning. YKOTR provides an exciting way to challenge yourself and connect with others.',
                'coverPhoto' => 'images/events/placeholder.png',
                'Photo1' => 'images/events/placeholder.png',
                'Photo2' => 'images/events/placeholder.png',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
