<?php

namespace NNAK;

use Illuminate\Database\Seeder;

class StarterPack extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * PAGES
         */
        $web_launch = Page::create([
            'title' => 'NNAK Mombasa County website launch',
            'created_by' => 1,
            'content' => 'The website will launch soon. Here is about this event.',
        ]);

        $web_launch->update([
            'url' => strtolower(str_replace(" ", "-", $web_launch->title))
        ]);

        /*
         * EVENTS
         */

        $launch_event = Event::create([
            'date' => today(),
            'intro' => 'The event to mark the launch of the event. Don\'t miss out',
            'page_id' => $web_launch->id,
        ]);

        /*
         * SLIDES
         */

        $event_slide = Slide::create([
            'title' => 'Launch Event',
            'tagline' => 'Do Not missout',
            'content' => $launch_event->intro,
            'image_url' => 'img/partner-2.jpg',
            'page_id' => $web_launch->id,
        ]);

        /*
         * IMAGES
         */

        Image::create([
            'on_gallery' => true,
            'image_url' => $event_slide->image_url,
            'caption' => $event_slide->tagline,
            'description' => $launch_event->intro,
            'event_id' => $launch_event->id,
        ]);

        /*
         * WEB INFO
         */

        WebInfo::create([
            'name' => 'title',
            'content' => 'NNAK PIB-Mombasa County',
        ]);

        WebInfo::create([
            'name' => 'address',
            'content' => 'Mombasa Town <br>Bla blabla street',
        ]);

        WebInfo::create([
            'name' => 'phone_1',
            'content' => '+254 7XXXXXXXX',
        ]);

        WebInfo::create([
            'name' => 'phone_2',
            'content' => '+254 7YYYYYYYY',
        ]);

        WebInfo::create([
            'name' => 'email',
            'content' => 'nnakpbi@gmail.com',
        ]);

        WebInfo::create([
            'name' => 'quote',
            'content' => 'Your life is a blessing.',
        ]);

        WebInfo::create([
            'name' => 'facebook',
            'content' => 'https://fb.com/oumartinc',
        ]);

        WebInfo::create([
            'name' => 'twitter',
            'content' => 'https://twitter.com/o_cornel',
        ]);

        WebInfo::create([
            'name' => 'parent_site',
            'content' => 'https://www.nnak.or.ke/',
        ]);

        WebInfo::create([
            'name' => 'copyright',
            'content' => 'NNAK Mombasa. All rights reserved.',
        ]);

        WebInfo::create([
            'name' => 'vision',
            'content' => 'Vision Statment',
        ]);

        WebInfo::create([
            'name' => 'mission',
            'content' => 'NNNAK\'s mission statement goes here',
        ]);

        WebInfo::create([
            'name' => 'values',
            'content' => 'Brief statement about your value.',
        ]);

        /*
         * LINKS
         */
        Link::create([
            'name' => 'Launch Event',
            'title' => $launch_event->getPage()->title,
            'url' => $launch_event->getPage()->url."/p{$launch_event->getPage()->id}",
        ]);

        /*
         * MEMBERS
         */

        Member::create([
            'name' => 'Alice Grue',
            'image_url' => 'theme/img/dummy/img-3.png',
            'profession' => 'Psychiatrist',
            'role' =>'nurse',
        ]);

        Member::create([
            'name' => 'Jane Song',
            'profession' => 'Nurse',
            'role' =>'nurse',
        ]);

        Member::create([
            'name' => 'Tomas Murphy',
            'image_url' => 'theme/img/team/2.jpg',
            'profession' => 'Treasurer',
            'role' =>'administrative',
        ]);

        Member::create([
            'name' => 'Alison davis',
            'image_url' => 'theme/img/team/3.jpg',
            'profession' => 'Secretary',
            'role' =>'stakeholder',
        ]);

        /*
         * PARTNERS
         */

        Partner::create([
            'name' => "Quick Web Apps",
            'icon_url' => 'img/partner-2.jpg',
            'url' => 'http://quickwapps.com'
        ]);

        Partner::create([
            'name' => "NNAK Kenya",
            'url' => 'https://www.nnak.or.ke/'
        ]);

        /*
         * MESSAGES
         */

        Message::create([
            'title' => 'Message from the chairman',
            'content' => 'The message from the chair person goes here. Could be as long as you wish. <br> Will provide a resourceful text editor to allow for formatting including addition of images',
            'from' => 'chairman',
        ]);

        /*
         * TESTIMONIALS
         */

        $i = 0;
        while ($i < 10) {
            Testimonial::create([
                'title' => 'Testimonial title',
                'message' => 'Testimonial message. Tell me if you will provide static testimonials or I should design for people to give tesimonials which will then show here',
                'client_name' => 'Martin Cornel',
                'location' => 'Nairobi, Kenya',
                'rating' => 5,
            ]);
            $i ++;
        }

        /*
         * COMPONENTS
         */

        $icons = ['fa-list-alt', 'fa-hospital-o', 'fa-check', 'fa-stethoscope', 'fa-wheelchair', 'fa-plus-square', 'fa-h-square', 'fa-filter', 'fa-user-md'];
        $i = 1;
        while ($i < 5) {
            Component::create([
                'name' => "Home Card {$i}",
                'title' => "Card {$i} Title",
                'content' => 'Give a brief description concerning this card in this card. Preferably, yay long to fit in here.',
                'icon' => $icons[$i],
            ]);
            $i ++;
        }

        $j = 1;
        while ($i < sizeof($icons)) {
            Component::create([
                'name' => "Benefit Card {$j}",
                'title' => "Benefit {$j}",
                'content' => 'Describe this benefit briefly',
                'icon' => $icons[$i],
                'position' => 2
            ]);
            $i ++; $j ++;
        }
    }
}
