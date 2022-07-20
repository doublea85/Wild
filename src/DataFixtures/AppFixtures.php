<?php

namespace App\DataFixtures;

use App\Entity\Argonaute;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $names = ["Zephyr", "Troilus", "Troy", "Theseus", "Pegasos", "Paris",
                    "Orpheus", "Odysseus", "Okeanos", "Leander", "Kosmos", "Janus",
                    "Icarus", "Hermes", "Georgios", "Evander", "Eryx", "Endymion",
                    "Dionysius", "Damon", "Cephalus", "Castor", "Brontes", "Angelino",
                    "Adonis", "Kassandros", "Kosta", "Kyril", "Leo","Petrus", "Phaedonas",
                    "Phoenix", "Pierrick", "Pontus", "Prokhor", "Rastus", "Romanos", "Sander",
                    "Santos","Sebastian", "Selene", "Seleukos", "Simion", "Sirius", "Skender",
                    "Sophronia", "Teodors", "Heracles", "Euryale"];

        $count = count($names);

        for($i = 0; $i < $count; $i++){
            $argonaute = new Argonaute;
            $argonaute->setNom($names[$i]);
            $manager->persist($argonaute);
        }

        $manager->flush();
    }
}
