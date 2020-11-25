<?php


namespace App\Http\Controllers;

use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use RuntimeException;

class PageController extends Controller
{
    public function home()
    {
        return view('front.home.show', [
            'title' => 'Home',
            'description' => 'DescriptionTODO',
            'image' => asset('/img/seo/home.jpg'),
        ]);
    }

    public function deliveryArea()
    {
        return view('front.delivery-area.show', [
            'title' => 'Delivery Area',
            'description' => 'DescriptionTODO',
            'image' => asset('/img/seo/delivery-area.jpg'),
            'locations' => $this->getLocations(),
        ]);
    }

    public function sauces()
    {
        return view('front.sauces.show', [
            'title' => 'Sauces',
            'description' => 'DescriptionTODO',
            'image' => asset('/img/seo/sauces.jpg'),
        ]);
    }

    public function aboutUs()
    {
        return view('front.about-us.show', [
            'title' => 'About us',
            'description' => 'DescriptionTODO',
            'image' => asset('/img/seo/about-us.jpg'),
        ]);
    }

    public function joinTheClub()
    {
        return view('front.join-the-club.show', [
            'title' => 'Join The Club',
            'description' => 'DescriptionTODO',
            'image' => asset('/img/seo/join-the-club.jpg'),
        ]);
    }

    public function contact()
    {
        return view('front.contact.show', [
            'title' => 'Contact us',
            'description' => 'DescriptionTODO',
            'image' => asset('/img/seo/contact.jpg'),
        ]);
    }


    private function getLocations()
    {
        return [
            [
                "name" => 'Ancaster',
                "logo" => 'ancaster.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "",
                "uberEats" => "https://www.ubereats.com/ca/hamilton/food-delivery/wingshack-ancaster/2bg4x-Z4RL2CqVRLAgpc1w",
            ],
            [
                "name" => 'Aurora',
                "logo" => 'aurora.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-hollandview-trail",
                "uberEats" => "https://www.ubereats.com/ca/toronto/food-delivery/wingshack-aurora/pV3neFx4RseZ5wYtfjxmbg",
            ],
            [
                "name" => 'Ajax',
                "logo" => 'ajax.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "",
                "uberEats" => "https://www.ubereats.com/ca/toronto/food-delivery/wing-shack-ajax/q5qIHOTqSQCSfk5ndHzgXQ",
            ],
            [
                "name" => 'Barrie',
                "logo" => 'barrie.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-cundles-road-east",
                "uberEats" => "https://www.ubereats.com/ca/toronto/food-delivery/wingshack-barrie/jS83rqSlQQaRPHhpjbMnhA",
            ],
            [
                "name" => 'Bolton',
                "logo" => 'bolton.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-mcewan-dr-e",
                "uberEats" => "https://www.ubereats.com/ca/toronto/food-delivery/wing-shack-bolton/7fFjrFvySbiM_zK70uRfgg",
            ],
            [
                "name" => 'Brantford',
                "logo" => 'brantford.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-king-george-rd",
                "uberEats" => "https://www.ubereats.com/ca/kitchenerwaterloo/food-delivery/wingshack-waterloo-erbsville/PD9AUPPCRsWRxvSQ9aNBrw",
            ],
            [
                "name" => 'Georgetown',
                "logo" => 'georgetown.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack",
                "uberEats" => "https://www.ubereats.com/ca/toronto/food-delivery/wingshack-georgetown/ReW9bCXHS4qwNHWnzwEljQ",
            ],
            [
                "name" => 'Guelph',
                "logo" => 'guelph.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-stone-road-west",
                "uberEats" => "https://www.ubereats.com/ca/kitchenerwaterloo/food-delivery/wingshack-guelph/smql4qjJRjqD53H26fLawg",
            ],
            [
                "name" => 'Keswick',
                "logo" => 'keswick.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-dovedale-drive",
                "uberEats" => "",
            ],
            [
                "name" => 'Markham',
                "logo" => 'markham.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-kennedy-road",
                "uberEats" => "https://www.ubereats.com/ca/toronto/food-delivery/wing-shack-markham/HRtNafO9ReOKDYLvN9cZZg",
            ],
            [
                "name" => 'Milton',
                "logo" => 'milton.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-holly-avenue",
                "uberEats" => "https://www.ubereats.com/ca/toronto/food-delivery/wingshack-milton/4grvAml7TyiYnLyfoZSZVA",
            ],
            [
                "name" => 'Mississauga',
                "logo" => 'mississauga.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-dundas-street-west",
                "uberEats" => "https://www.ubereats.com/ca/toronto/food-delivery/wingshack-mississauga-south/QIwZ2yZVSS-OcDJluKTI0A",
            ],
            [
                "name" => 'Oakville',
                "logo" => 'oakville.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-upper-middle-road-west",
                "uberEats" => "https://www.ubereats.com/ca/toronto/food-delivery/wingshack-oakville/m64kpv_vSfWR1oXOc0QN1w",
            ],
            [
                "name" => 'Stoney Creek',
                "logo" => 'stoney-creek.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-rymal-rd-e",
                "uberEats" => "https://www.ubereats.com/ca/hamilton/food-delivery/wingshack-stoney-creek/9W5vAZQJRrS96y2AhpqLiQ",
            ],
            [
                "name" => 'Thornhill',
                "logo" => 'thornhill.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-yonge-street",
                "uberEats" => "https://www.ubereats.com/ca/toronto/food-delivery/wingshack-thornhill/PBjy-O7PQca-UN219A8yhA",
            ],
            [
                "name" => 'Waterdown',
                "logo" => 'waterdown.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "https://www.skipthedishes.com/wingshack-hamilton-street-north",
                "uberEats" => "https://www.ubereats.com/ca/hamilton/food-delivery/wingshack-waterdown/NrY9Pc7KTZq5nLq4o631yg",
            ],
            [
                "name" => 'Waterloo',
                "logo" => 'waterloo.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "",
                "uberEats" => "https://www.ubereats.com/ca/kitchenerwaterloo/food-delivery/wingshack-waterloo-erbsville/PD9AUPPCRsWRxvSQ9aNBrw",
            ],
            [
                "name" => 'Woodbridge',
                "logo" => 'woodbridge.svg',
                "working_hours" => ["from" => "11:00am", "to" => "09:30pm"],
                "coordinates" => ["lat" => 0, "lng" => 0],
                "skipDishes" => "",
                "uberEats" => "https://www.ubereats.com/ca/toronto/food-delivery/wingshack-woodbridge/TUiqJ_XtQISp7afuTbYB4w",
            ],
        ];
    }
}
